<!-- Navigation Bar -->
<link rel="stylesheet" href="{{ asset('css/menu.css') }}">

@php
    $isHome = request()->is('/');
@endphp
<nav class="navbar navbar-expand-lg navbar-custom {{ $isHome ? 'navbar-home' : 'navbar-inner' }}">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <!-- Sol Menu -->
        <div class="navbar-nav d-flex flex-row navbar-menu-custom m-left">
            <a class="nav-link" href="#">ANASAYFA</a>
            <a class="nav-link" href="#">KURUMSAL</a>
            <a class="nav-link minwidth" href="#">HİZMETLER</a>
        </div>
        
        <!-- Logo -->
        <div class="navbar-brand {{ $isHome ? 'homelogo' : '' }}">
            <img src="{{ asset($isHome ? 'images/logo.svg' : 'images/logo_shape.svg') }}" class="logo" alt="Karatay Belediyesi Logo" height="{{ $isHome ? 50 : 100 }}">
        </div>
        
        <!-- Sağ Menu -->
        <div class="navbar-nav d-flex flex-row navbar-menu-custom m-right">
            <a class="nav-link minwidth" href="#">BİLGİ</a>
            <a class="nav-link" href="#">KARATAY</a>
            <a class="nav-link" href="#">İLETİŞİM</a>
            
            <!-- Sosyal Medya İkonları -->
            <div class="social-media-section">
                <a href="https://www.instagram.com/karataybelediyesi" class="social-icon" target="_blank">
                    <img src="{{ asset('images/icons/instagram.svg') }}" alt="Instagram" width="24" height="24">
                </a>
                <a href="https://www.twitter.com/KaratayBelediye" class="social-icon" target="_blank">
                    <img src="{{ asset('images/icons/x.svg') }}" alt="X (Twitter)" width="24" height="24">
                </a>
                <a href="https://www.facebook.com/karataybelediye" class="social-icon" target="_blank">
                    <img src="{{ asset('images/icons/facebook.svg') }}" alt="Facebook" width="24" height="24">
                </a>
                <a href="https://www.youtube.com/karataybelediye" class="social-icon" target="_blank">
                    <img src="{{ asset('images/icons/youtube.svg') }}" alt="YouTube" width="24" height="24">
                </a>
                <div class="zero-waste">
                    <img src="{{ asset('images/icons/sifiratik.svg') }}" alt="Sıfır Atık" width="62" height="24" class="zero-waste-icon">
                </div>
            </div>
        </div>
    </div>
</nav>

<script src="{{ asset('js/navigation.js') }}"></script>
