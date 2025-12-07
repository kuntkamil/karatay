<!-- Haberler Section -->
<link rel="stylesheet" href="{{ asset('css/haberler.css') }}">

<div class="haberler-section">
    <div class="container">
        <!-- Section Header -->
        <div class="haberler-header">
            <h2 class="haberler-title">HABERLER</h2>
            <a href="#" class="all-news-link">TÜM HABERLERİ GÖR ></a>
        </div>

        <!-- News Cards Container -->
        <div class="news-container">
            <!-- Main News Card -->
            <div class="main-news-card">
                <div class="news-slider" id="mainNewsSlider">
                    @foreach(($latestNews ?? []) as $news)
                    <div class="news-item">
                        <a class="news-link" href="{{ route('news.show', $news->slug) }}">
                            <img src="{{ asset('images/news/' . $news->image_name) }}"  class="news-image" alt="{{ $news->title }}">
                            <span class="news-title">{{ $news->title }}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Side News Cards -->
            <div class="side-news-cards">
                <!-- Top Side News -->
                @foreach(($sideNews ?? []) as $news)
                <a href="{{ route('news.show', $news->slug) }}" class="side-news-card">
                    <div class="side-news-image">
                        <img src="{{ asset('images/news/' . $news->image_name) }}" class="side-image" alt="{{ $news->title }}">
                    </div>
                    <div class="side-news-overlay">
                        <h4 class="side-news-title">{{ $news->title }}</h4>
                    </div>
                </a>
                @endforeach

            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/haberler.js') }}"></script>
