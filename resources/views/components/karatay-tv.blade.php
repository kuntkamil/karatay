<!-- Karatay TV Section -->
<link rel="stylesheet" href="{{ asset('css/karatay-tv.css') }}">

<div class="karatay-tv-section">
    <div class="container">
        <!-- Section Header -->
        <div class="tv-header">
            <h2 class="tv-title">KARATAY TV</h2>
            <a href="#" class="all-videos-link">TÜM VİDEOLAR</a>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Video Cards Container -->
        <div class="video-cards-container">

        </div>

        <!-- YouTube API Integration -->
        <div class="youtube-integration" style="display: none;">
            <div class="api-status">
                <span class="status-text">YouTube videoları yükleniyor...</span>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/karatay-tv.js') }}"></script>
