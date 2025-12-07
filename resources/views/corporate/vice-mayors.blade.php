<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurumsal | Başkan Yardımcıları</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vice-mayors.css') }}">
</head>
<body>
    @include('components.navigation')

    <div class="page-head">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="page-head-left">
                Başkan Yardımcıları
            </div>
            <div class="page-head-right">
                <nav class="bread-crumb">
                    <a href="/" class="breadcrumb-link">Anasayfa</a>
                    <span class="mx-1">/</span>
                    <a href="/" class="breadcrumb-link">Kurumsal</a>
                    <span class="mx-1">/</span>
                    <span class="breadcrumb-link active">Başkan Yardımcıları</span>
                </nav>
            </div>
        </div>
    </div>

    <main id="main" class="content-pages py-5">
        <div class="container whitebox">
            <div class="person-list" style="padding: 15px 0;">
                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/osman_ciger.jpg" alt="Osman Ciğer">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">Osman Ciğer</div>
                            <div class="person-job">Belediye Başkan Yardımcısı</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1360</div>
                            <div class="mail"><a href="mailto:osman.ciger@karatay.bel.tr">osman.ciger@karatay.bel.tr</a></div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/ramazan_sevik.jpg" alt="Ramazan Şevik">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">Ramazan ŞEVİK</div>
                            <div class="person-job">Belediye Başkan Yardımcısı</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1460</div>
                            <div class="mail"><a href="mailto:ramazan.sevik@karatay.bel.tr">ramazan.sevik@karatay.bel.tr</a></div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mehmet_toknal.jpg" alt="Mehmet Toknal">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">Mehmet Toknal</div>
                            <div class="person-job">Belediye Başkan Yardımcısı</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1470</div>
                            <div class="mail"><a href="mailto:toknal@karatay.bel.tr">toknal@karatay.bel.tr</a></div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mustafa_yaylaci.jpeg" alt="Mustafa Yaylacı">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">Mustafa YAYLACI</div>
                            <div class="person-job">Belediye Başkan Yardımcısı</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1370</div>
                            <div class="mail"><a href="mailto:mustafa.yaylaci@karatay.bel.tr">mustafa.yaylaci@karatay.bel.tr</a></div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/haci_selim_buyukkarakurt.jpg" alt="Hacı Selim BÜYÜKKARAKURT">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">Hacı Selim BÜYÜKKARAKURT</div>
                            <div class="person-job">Belediye Başkan Yardımcısı</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1260</div>
                            <div class="mail"><a href="mailto:haci.selim.buyukkarakurt@karatay.bel.tr">haci.selim.buyukkarakurt@karatay.bel.tr</a></div>
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


