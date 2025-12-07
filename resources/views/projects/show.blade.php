<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }}</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    @include('components.navigation')

    <div class="page-head">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="page-head-left">Proje</div>
            <div class="page-head-right">
                <nav class="bread-crumb">
                    <a href="/" class="breadcrumb-link">Anasayfa</a>
                    <span class="mx-1">/</span>
                    <a href="/" class="breadcrumb-link">Projeler</a>
                    <span class="mx-1">/</span>
                    <span class="breadcrumb-link active">Proje Detay</span>
                </nav>
            </div>
        </div>
    </div>

    <div class="container py-4 whitebox" style=" margin-bottom: calc(3rem + 20px);">
        <div class="row">
            <div class="col-md-9">
                <h2 class="mb-3">{{ $project->title }}</h2>
                <img src="{{ asset('images/projects/' . $project->image_name) }}" style="border-radius: 20px;" class="img-fluid mb-4 project-image" alt="{{ $project->title }}">
                <p>{{ $project->description }}</p>
            </div>
            <div class="col-md-3">

            </div>
        </div>
        
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


