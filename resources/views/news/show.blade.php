<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    @include('components.navigation')

    <div class="page-head">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="page-head-left">HABER</div>
            <div class="page-head-right">
                <nav class="bread-crumb">
                    <a href="/" class="breadcrumb-link">Anasayfa</a>
                    <span class="mx-1">/</span>
                    <a href="/" class="breadcrumb-link">Haberler</a>
                    <span class="mx-1">/</span>
                    <span class="breadcrumb-link active">Haber Detay</span>
                </nav>
            </div>
        </div>
    </div>
    
    <div class="container py-5 whitebox" style=" margin-bottom: calc(3rem + 20px);">
        <h1 class="mb-3">{{ $news->title }}</h1>
        <p class="text-muted">{{ optional($news->published_at)->format('d.m.Y') }}</p>
        <img src="{{ asset('images/news/' . $news->image_name) }}" class="img-fluid mb-4" alt="{{ $news->title }}">
        <div class="content">
            {!! nl2br(e($news->content ?? '')) !!}
        </div>
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


