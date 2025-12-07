<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $department->name }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/from-president.css') }}">
</head>
<body>
    @include('components.navigation')

    <div class="page-head">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="page-head-left">{{ $department->name }}</div>
            <div class="page-head-right">
                <nav class="bread-crumb">
                    <a href="/" class="breadcrumb-link">Anasayfa</a>
                    <span class="mx-1">/</span>
                    <a href="/" class="breadcrumb-link">Müdürlük</a>
                    <span class="mx-1">/</span>
                    <span class="breadcrumb-link active">{{ $department->name }}</span>
                </nav>
            </div>
        </div>
    </div>

    <main id="main" class="content-pages py-5">
        <div class="container whitebox">
			<div class="row mb-4">
				<div class="col-12">
					<div class="d-flex justify-content-between align-items-center" style="padding: 0 20px; margin: 30px 0 0 0;">
						<h3 class="section-title m-0">Birim Tanıtımı</h3>
						@php
							$pdfFileName = \Illuminate\Support\Str::slug($department->name) . '.pdf';
							$pdfRelativePath = 'dosyalar/birimyonetmelik/' . $pdfFileName;
						@endphp
						@if(file_exists(public_path($pdfRelativePath)))
							<a href="{{ asset($pdfRelativePath) }}" target="_blank" rel="noopener" class="btn btn-outline-danger btn-m">
								<i class="bi bi-file-earmark-pdf-fill"></i> Birim Yönetmeliği
							</a>
						@endif
					</div>
					<p class="section-description" style="padding: 20px; max-width: none; text-align: justify; color: #111;">
		{!! nl2br(e($department->intro_text)) !!}</p>
				</div>
			</div>
            <hr class="my-4">
            <div class="row align-items-center mb-2">
                <div class="col-md-3 text-center">
                    <img src="{{ $department->director_image ? asset('images/'.$department->director_image) : asset('images/HASAN_KILCA.png') }}" alt="{{ $department->director_name }}" class="img-fluid rounded" style="max-height:220px; object-fit:cover;">
                </div>
                <div class="col-md-9">
                    <h3 class="mb-2">Birim Müdüründen Mesaj</h3>
                    <div class="d-flex gap-4 flex-wrap mb-3">
                        @if($department->director_name)
                        <div><i class="bi bi-person-fill"></i> {{ $department->director_name }}</div>
                        @endif
                        @if($department->director_email)
                        <div><i class="bi bi-envelope-fill"></i> <a href="mailto:{{ $department->director_email }}">{{ $department->director_email }}</a></div>
                        @endif
                        @if($department->director_phone_extension)
                        <div><i class="bi bi-telephone-fill"></i> Dahili: {{ $department->director_phone_extension }}</div>
                        @endif
                    </div>
                    <p class="mb-3" style="text-align: justify; padding-right: 20px;">{!! nl2br(e($department->director_message)) !!}</p>
                    
                </div>
            </div>
            <hr class="my-4" style="margin-bottom: 0 !important;">
            @include('components.projects', [
                'projects' => $projects,
                'projectsTitle' => 'Müdürlük Projeleri',
                'projectsDescription' => $department->name.' tarafından yürütülen projeler',
            ])
        </div>
    </main>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



