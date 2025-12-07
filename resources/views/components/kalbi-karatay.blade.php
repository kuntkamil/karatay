<!-- Kalbi Karatay Section -->
<link rel="stylesheet" href="{{ asset('css/kalbi-karatay.css') }}">

<div class="kalbi-karatay-section">
    <div class="container">
        <div class="kalbi-cards-container">
            <!-- Eğitim Card -->
            <div class="kalbi-card" data-category="education">
                <div class="card-image">
                    <img src="{{ asset('images/sliderImages/egitim.jpg') }}" alt="Eğitim">
                </div>
                <div class="card-overlay">
                    <h3 class="card-title">EĞİTİMİN KALBİ KARATAY</h3>
                </div>
            </div>

            <!-- Spor Card -->
            <div class="kalbi-card" data-category="sports">
                <div class="card-image">
                    <img src="{{ asset('images/sliderImages/spor.jpg') }}" alt="Spor">
                </div>
                <div class="card-overlay">
                    <h3 class="card-title">SPORUN KALBİ KARATAY</h3>
                </div>
            </div>

            <!-- Gençlik Card -->
            <div class="kalbi-card default-expanded" data-category="youth">
                <div class="card-image">
                    <img src="{{ asset('images/sliderImages/genclik.jpg') }}" alt="Gençlik">
                </div>
                <div class="card-overlay">
                    <h3 class="card-title">GENÇLİĞİN KALBİ KARATAY</h3>
                </div>
            </div>

            <!-- Sanat Card -->
            <div class="kalbi-card" data-category="art">
                <div class="card-image">
                    <img src="{{ asset('images/sliderImages/sanat.jpg') }}" alt="Sanat">
                </div>
                <div class="card-overlay">
                    <h3 class="card-title">SANATIN KALBİ KARATAY</h3>
                </div>
            </div>

            <!-- Kültür Card -->
            <div class="kalbi-card" data-category="culture">
                <div class="card-image">
                    <img src="{{ asset('images/sliderImages/kultur.jpg') }}" alt="Kültür">
                </div>
                <div class="card-overlay">
                    <h3 class="card-title">KÜLTÜRÜN KALBİ KARATAY</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/kalbi-karatay.js') }}"></script>
