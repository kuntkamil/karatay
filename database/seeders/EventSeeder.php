<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $events = [
            ['title' => 'HOŞ KUBBE MASAL ETKİNLİĞİ', 'category' => 'Gençlik', 'location' => 'Hoş Kubbe', 'starts_at' => '2025-08-09 15:00:00', 'image_name' => 'masal-etkinligi.png'],
            ['title' => 'AÇIK HAVA SİNEMA ETKİNLİĞİ', 'category' => 'Kültür', 'location' => 'Hoş Kubbe', 'starts_at' => '2025-08-10 21:00:00', 'image_name' => 'sinema-etkinligi.png'],
            ['title' => 'FUTBOL TURNUVASI', 'category' => 'Spor', 'location' => 'Spor Merkezi', 'starts_at' => '2025-08-11 12:00:00', 'image_name' => 'futbol-turnuvasi.png'],
        ];
        foreach ($events as $e) {
            Event::updateOrCreate(
                ['title' => $e['title'], 'starts_at' => $e['starts_at']],
                $e + ['is_active' => true]
            );
        }
    }
}


