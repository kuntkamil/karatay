<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\SliderItem;
use App\Models\Project;
use Illuminate\Support\Facades\Http;
use App\Models\Event;
use App\Models\Announcement;
use App\Models\Procurement;

class HomeController extends Controller
{
    public function index()
    {
        $latest = News::query()
            ->where('is_active', true)
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->take(4)
            ->get();

        $side = News::query()
            ->where('is_active', true)
            ->orderByDesc('published_at')
            ->orderByDesc('id')
            ->skip(4)
            ->take(2)
            ->get();

        $sliderItems = SliderItem::query()
            ->where('is_active', true)
            ->orderByDesc('id')
            ->get();

        $projects = Project::query()
            ->where('is_active', true)
            ->orderByDesc('is_featured')
            ->orderByDesc('id')
            ->take(8)
            ->get();

        return view('home', [
            'sliderItems' => $sliderItems,
            'newsLatest' => $latest,
            'newsSide' => $side,
            'projects' => $projects,
            'events' => Event::where('is_active', true)->orderBy('starts_at')->take(3)->get(),
            'announcements' => Announcement::where('is_active', true)->orderByDesc('date')->take(5)->get(),
            'procurements' => Procurement::where('is_active', true)->orderByDesc('deadline_at')->take(10)->get(),
        ]);
    }

    public function project(string $slug)
    {
        $project = Project::where('slug', $slug)->where('is_active', true)->firstOrFail();
        return view('projects.show', ['project' => $project]);
    }

    public function karatayTvLatest()
    {
        $handle = '@KaratayBelediye';
        $channelId = config('services.youtube.karatay_channel_id');

        if (!$channelId) {
            try {
                $res = Http::withHeaders([
                    'User-Agent' => 'Mozilla/5.0'
                ])->get('https://www.youtube.com/'.$handle.'/videos');
                if ($res->successful()) {
                    $html = $res->body();
                    if (preg_match('/\"channelId\":\"(UC[^\"]+)\"/i', $html, $m)) {
                        $channelId = $m[1];
                    }
                }
            } catch (\Throwable $e) {}
        }

        if (!$channelId) {
            return response()->json(['videos' => []]);
        }

        try {
            $rssUrl = 'https://www.youtube.com/feeds/videos.xml?channel_id='.$channelId;
            $rssRes = Http::get($rssUrl);
            if (!$rssRes->successful()) {
                return response()->json(['videos' => []]);
            }
            $xml = @simplexml_load_string($rssRes->body());
            if (!$xml) {
                return response()->json(['videos' => []]);
            }
            $xml->registerXPathNamespace('yt', 'http://www.youtube.com/xml/schemas/2015');
            $entries = $xml->entry ?? [];
            $videos = [];
            $count = 0;
            foreach ($entries as $entry) {
                $vid = (string)($entry->children('yt', true)->videoId ?? '');
                if (!$vid) continue;
                $title = (string)$entry->title;
                // Determine link href (alternate)
                $linkHref = '';
                if (isset($entry->link)) {
                    // link can be a list; prefer first
                    $linkEl = is_array($entry->link) ? $entry->link[0] : $entry->link;
                    $linkHref = (string)($linkEl['href'] ?? '');
                }
                $videos[] = [
                    'videoId' => $vid,
                    'title' => $title,
                    'thumbnailUrl' => 'https://i.ytimg.com/vi/'.$vid.'/hqdefault.jpg',
                    'url' => $linkHref ?: 'https://www.youtube.com/watch?v='.$vid,
                ];
                $count++;
                if ($count >= 5) break;
            }
            // Fallback: parse channel page for more normal videos (videoRenderer)
            if ($count < 5) {
                try {
                    $pageRes = Http::withHeaders([
                        'User-Agent' => 'Mozilla/5.0'
                    ])->get('https://www.youtube.com/channel/'.$channelId.'/videos');
                    if ($pageRes->successful()) {
                        $html = $pageRes->body();
                        if (preg_match('/ytInitialData\s*=\s*(\{.*?\});/s', $html, $mJson)) {
                            $json = $mJson[1];
                        } elseif (preg_match('/var ytInitialData\s*=\s*(\{.*?\});/s', $html, $mJson2)) {
                            $json = $mJson2[1];
                        } else {
                            $json = null;
                        }
                        if ($json) {
                            $data = json_decode($json, true);
                            $tabs = $data['contents']['twoColumnBrowseResultsRenderer']['tabs'] ?? [];
                            foreach ($tabs as $tab) {
                                $tr = $tab['tabRenderer'] ?? null;
                                if (!$tr) continue;
                                if (!($tr['selected'] ?? false)) continue;
                                $contents = $tr['content']['richGridRenderer']['contents'] ?? [];
                                foreach ($contents as $c) {
                                    $content = $c['richItemRenderer']['content'] ?? null;
                                    if (!$content) continue;

                                    $vid = null;
                                    $titleText = '';
                                    $url = '';

                                    // Prefer normal videos
                                    if (!empty($content['videoRenderer'])) {
                                        $vr = $content['videoRenderer'];
                                        $vid = $vr['videoId'] ?? null;
                                        $titleText = $vr['title']['runs'][0]['text'] ?? '';
                                        $url = 'https://www.youtube.com/watch?v=' . $vid;
                                    }
                                    // Fallback to shorts if present
                                    elseif (!empty($content['reelItemRenderer'])) {
                                        $rr = $content['reelItemRenderer'];
                                        $vid = $rr['videoId'] ?? null;
                                        $titleText = $rr['headline']['simpleText'] ?? ($rr['accessibility']['accessibilityData']['label'] ?? '');
                                        $url = 'https://www.youtube.com/shorts/' . $vid;
                                    }

                                    if (!$vid) continue;
                                    // de-dup
                                    $exists = false;
                                    foreach ($videos as $v) { if ($v['videoId'] === $vid) { $exists = true; break; } }
                                    if ($exists) continue;

                                    $videos[] = [
                                        'videoId' => $vid,
                                        'title' => $titleText,
                                        'thumbnailUrl' => 'https://i.ytimg.com/vi/'.$vid.'/hqdefault.jpg',
                                        'url' => $url ?: 'https://www.youtube.com/watch?v='.$vid,
                                    ];
                                    $count++;
                                    if ($count >= 5) break 2;
                                }
                            }
                        }
                    }
                } catch (\Throwable $e) {
                    // ignore
                }
            }

            return response()->json(['videos' => $videos]);
        } catch (\Throwable $e) {
            return response()->json(['videos' => []]);
        }
    }

    public function show(string $slug)
    {
        $news = News::where('slug', $slug)->where('is_active', true)->firstOrFail();

        return view('news.show', [
            'news' => $news,
        ]);
    }

    public function instagramLatest()
    {
        $accessToken = config('services.instagram.access_token');
        $userId = config('services.instagram.user_id');
        $username = 'hkilca';

        // Prefer Instagram Basic Display API if credentials exist
        if ($accessToken && $userId) {
            try {
                $url = 'https://graph.instagram.com/'.$userId.'/media?fields=id,caption,media_url,permalink,thumbnail_url,media_type,timestamp&access_token='.$accessToken.'&limit=9';
                $res = Http::get($url);
                if ($res->successful()) {
                    $data = $res->json();
                    $items = $data['data'] ?? [];
                    $posts = [];
                    foreach ($items as $item) {
                        if (($item['media_type'] ?? '') === 'VIDEO' && !empty($item['thumbnail_url'])) {
                            $thumb = $item['thumbnail_url'];
                        } else {
                            $thumb = $item['media_url'] ?? '';
                        }
                        if (!$thumb) continue;
                        $posts[] = [
                            'image' => $thumb,
                            'caption' => $item['caption'] ?? '',
                            'permalink' => $item['permalink'] ?? '',
                        ];
                        if (count($posts) >= 9) break;
                    }
                    return response()->json(['posts' => $posts]);
                }
            } catch (\Throwable $e) {
                // fall through to fallback
            }
        }

        // Fallback: no API credentials; return empty to let frontend link to profile
        return response()->json(['posts' => [], 'profile' => 'https://www.instagram.com/'.$username.'/']);
    }
}


