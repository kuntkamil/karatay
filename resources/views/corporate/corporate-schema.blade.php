<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurumsal | Kurumsal Şema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('components.navigation')

    <div class="page-head">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="page-head-left">Kurumsal Şema</div>
            <div class="page-head-right">
                <nav class="bread-crumb">
                    <a href="/" class="breadcrumb-link">Anasayfa</a>
                    <span class="mx-1">/</span>
                    <a href="/" class="breadcrumb-link">Kurumsal</a>
                    <span class="mx-1">/</span>
                    <span class="breadcrumb-link active">Kurumsal Şema</span>
                </nav>
            </div>
        </div>
    </div>

    <main id="main" class="content-pages py-5">
        <div class="container whitebox">
            <div class="row">
                <div class="col-12 col-lg-12 mayor-content-area">
                    <div id="work-dialog" class="zoom-anim-dialog mfp-hide">
                        <p>
                            <img src="https://www.karatay.bel.tr/img/karatay/t/kurumsal-sema-14.png?v=3" style="width: 100%;" alt="Karatay Belediyesi Kurumsal Şema">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


