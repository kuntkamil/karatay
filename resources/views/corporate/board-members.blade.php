<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurumsal | Encümen Üyeleri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vice-mayors.css') }}">
</head>
<body>
    @include('components.navigation')

    <div class="page-head">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="page-head-left">Encümen Üyeleri</div>
            <div class="page-head-right">
                <nav class="bread-crumb">
                    <a href="/" class="breadcrumb-link">Anasayfa</a>
                    <span class="mx-1">/</span>
                    <a href="/" class="breadcrumb-link">Kurumsal</a>
                    <span class="mx-1">/</span>
                    <span class="breadcrumb-link active">Encümen Üyeleri</span>
                </nav>
            </div>
        </div>
    </div>

    <main id="main" class="content-pages py-5">
        <div class="container whitebox">
            <div class="person-list" style="padding: 15px 0;">
                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/encumenuyeleri/mevlut_kanat_2024.png" alt="Mevlüt Kanat">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">Mevlüt Kanat</div>
                            <div class="person-job">Ticaret</div>
                            <div class="person-job">AK Parti</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/meclisuyeleri/omer_buyukgoker_2024.png" alt="Ömer Büyükgöker">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">Ömer Büyükgöker</div>
                            <div class="person-job">İş Adamı</div>
                            <div class="person-job">AK Parti</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/meclisuyeleri/ali_karakaya_2024.png" alt="Ali Karakaya">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">Ali Karakaya</div>
                            <div class="person-job">İş Adamı</div>
                            <div class="person-job">AK Parti</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


