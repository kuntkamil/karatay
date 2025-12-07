<!-- Projects Section -->
<link rel="stylesheet" href="{{ asset('css/projects.css') }}">

<div class="projects-section">
    <div class="container">
        <!-- Section Header -->
        <div class="projects-header">
            <h2 class="section-title">{{ $projectsTitle ?? 'DEĞER KATAN PROJELERİMİZ' }}</h2>
            <p class="section-description">{{ $projectsDescription ?? 'Şehrimizin yaşam kalitesini yükselten, kültürel ve ekonomik katkı sağlayan projelerimizi sizlerle buluşturuyoruz.' }}</p>
        </div>

        <!-- Main Project Showcase -->
        @php
            $firstProject = ($projects ?? collect())->first();
        @endphp
        <a class="main-project" href="{{ $firstProject ? route('projects.show', $firstProject->slug) : '#' }}">
            <div class="project-image">
                <img src="{{ $firstProject ? asset('images/projects/' . $firstProject->image_name) : asset('images/projects/deger2.jpg') }}" alt="{{ $firstProject->title ?? 'Proje' }}" class="main-image">
            </div>
            <div class="project-overlay">
                <div class="project-logo">
                    <img src="{{ asset('images/logo-white.svg') }}" alt="Karatay Belediyesi" class="belediye-logo">
                </div>
                <h3 class="project-title">{{ $firstProject->title ?? 'Lavanta Bahçesi' }}</h3>
                <p class="project-description">{{ $firstProject->description ?? "Karaaslan Hobi Bahçeleri'mizin yanıbaşında ilk etapta 90 bin m2'lik alanda 100 bin lavanta fidesini toprakla buluşturduk." }}</p>
            </div>
        </a>

        <!-- Projects Slider -->
        <div class="projects-slider-container">
            <button class="slider-btn prev-btn" id="prevBtn">
                <i class="bi bi-chevron-left"></i>
            </button>
            
            <div class="projects-slider" id="projectsSlider">
                @foreach(($projects ?? []) as $index => $project)
                <div class="project-thumbnail {{ $index === 0 ? 'active' : '' }}" data-title="{{ $project->title }}" data-description="{{ $project->description }}" data-image="{{ asset('images/projects/' . $project->image_name) }}" data-href="{{ route('projects.show', $project->slug) }}">
                    <img src="{{ asset('images/projects/' . $project->image_name) }}" alt="{{ $project->title }}">
                </div>
                @endforeach
            </div>
            
            <button class="slider-btn next-btn" id="nextBtn">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </div>
</div>

<script src="{{ asset('js/projects.js') }}"></script>
