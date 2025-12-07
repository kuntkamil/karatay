<!-- From President Section -->
<link rel="stylesheet" href="{{ asset('css/from-president.css') }}">

<div class="from-president-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="president-card">
                    <div class="president-image">
                        <img src="{{ asset('images/HASAN_KILCA.png') }}" alt="Hasan Kılca" class="president-photo">
                    </div>
                    <div class="president-info">
                        <h3 class="president-name">HASAN KILCA</h3>
                        <p class="president-title">Karatay Belediye Başkanı</p>
                    </div>
                    <div class="social-media">
                        <a href="https://www.instagram.com/hkilca/" class="social-icon" target="_blank">
                            <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram" width="20" height="20">
                        </a>
                        <a href="https://twitter.com/hkilca" class="social-icon" target="_blank">
                            <img src="{{ asset('images/icons/x.svg') }}" alt="X (Twitter)" width="20" height="20">
                        </a>
                        <a href="https://www.facebook.com/kilcahasan/" class="social-icon" target="_blank">
                            <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" width="20" height="20">
                        </a>
                        <a href="https://www.youtube.com/@Hasan_Kilca" class="social-icon" target="_blank">
                            <img src="{{ asset('images/icons/youtube.svg') }}" alt="YouTube" width="20" height="20">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 row instagram-grid" data-profile-url="https://www.instagram.com/hkilca/">
                <!-- Will be filled by JS with latest Instagram posts -->
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/from-president.js') }}"></script>
