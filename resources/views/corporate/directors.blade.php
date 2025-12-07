<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurumsal | Müdürler</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/vice-mayors.css') }}">
</head>
<body>
    @include('components.navigation')

    <div class="page-head">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="page-head-left">Müdürler</div>
            <div class="page-head-right">
                <nav class="bread-crumb">
                    <a href="/" class="breadcrumb-link">Anasayfa</a>
                    <span class="mx-1">/</span>
                    <a href="/" class="breadcrumb-link">Kurumsal</a>
                    <span class="mx-1">/</span>
                    <span class="breadcrumb-link active">Müdürler</span>
                </nav>
            </div>
        </div>
    </div>

    <main id="main" class="content-pages py-5">
        <div class="container whitebox">
            <div class="person-list" style="padding: 15px 0;">

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/bahadir_tosun.jpg" alt="İBRAHİM BAHADIR TOSUN - Afet İşleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">İBRAHİM BAHADIR TOSUN</div>
                            <div class="person-job">Afet İşleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> </div>
                            <div class="mail"><a href="mailto:bahadir.tosun@karatay.bel.tr">bahadir.tosun@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/afet-isleri-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/m_kemalettin_nokta.jpg" alt="MUHAMMET KEMALETTİN NOKTA - Basın ve Yayın Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MUHAMMET KEMALETTİN NOKTA</div>
                            <div class="person-job">Basın ve Yayın Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1170</div>
                            <div class="mail"><a href="mailto:mkn@karatay.bel.tr">mkn@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/basin-ve-yayin-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/muhammed_emin_er.jpg" alt="MUHAMMED EMİN ER - Bilgi İşlem Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MUHAMMED EMİN ER</div>
                            <div class="person-job">Bilgi İşlem Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1340</div>
                            <div class="mail"><a href="mailto:muhammed@karatay.bel.tr">muhammed@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/bilgi-islem-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mustafa_ozsolak.jpg" alt="MUSTAFA ÖZSOLAK - Çevre Koruma ve Kontrol Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MUSTAFA ÖZSOLAK</div>
                            <div class="person-job">Çevre Koruma ve Kontrol Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 2180</div>
                            <div class="mail"><a href="mailto:mozsolak@karatay.bel.tr">mozsolak@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/cevre-koruma-ve-kontrol-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/fuat_ozcan.jpg" alt="FUAT ÖZCAN - Dış İlişkiler Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">FUAT ÖZCAN</div>
                            <div class="person-job">Dış İlişkiler Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1550</div>
                            <div class="mail"><a href="mailto:fuat.ozcan@karatay.bel.tr">fuat.ozcan@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/dis-iliskiler-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/tayfur_cengiz.jpg" alt="TAYFUR CENGİZ - Emlak ve İstimlak Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">TAYFUR CENGİZ</div>
                            <div class="person-job">Emlak ve İstimlak Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1400</div>
                            <div class="mail"><a href="mailto:tcengiz@karatay.bel.tr">tcengiz@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/emlak-ve-istimlak-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <!-- Liste örnekleri uzundur; benzer formatla aşağıdakiler eklendi -->

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/bahattin_totan.jpg" alt="BAHATTİN TOTAN - Fen İşleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">BAHATTİN TOTAN</div>
                            <div class="person-job">Fen İşleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 2150</div>
                            <div class="mail"><a href="mailto:bahattin.totan@karatay.bel.tr">bahattin.totan@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/fen-isleri-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mehmet_karaca.jpg" alt="MEHMET KARACA - Gençlik ve Spor Hizmetleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MEHMET KARACA</div>
                            <div class="person-job">Gençlik ve Spor Hizmetleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1110</div>
                            <div class="mail"><a href="mailto:mehmetkaraca@karatay.bel.tr">mehmetkaraca@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/genclik-spor-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mehmet_macit.jpg" alt="MEHMET MACİT - Halkla İlişkiler Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MEHMET MACİT</div>
                            <div class="person-job">Halkla İlişkiler Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1070</div>
                            <div class="mail"><a href="mailto:mehmet.macit@karatay.bel.tr">mehmet.macit@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/halkla-iliskiler-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mustafa_dogan.jpg" alt="MUSTAFA DOĞAN - Hukuk İşleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MUSTAFA DOĞAN</div>
                            <div class="person-job">Hukuk İşleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1500</div>
                            <div class="mail"><a href="mailto:mdogan@karatay.bel.tr">mdogan@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/hukuk-isleri-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mustafa_ozsolak.jpg" alt="MUSTAFA ÖZSOLAK - İklim Değişikliği ve Sıfır Atık Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MUSTAFA ÖZSOLAK</div>
                            <div class="person-job">İklim Değişikliği ve Sıfır Atık Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 2180</div>
                            <div class="mail"><a href="mailto:mozsolak@karatay.bel.tr">mozsolak@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/iklim-degisikligi-ve-sifir-atik-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/esra_gamze_gogus.jpg" alt="ESRA GAMZE GÖĞÜŞ - İmar ve Şehircilik Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">ESRA GAMZE GÖĞÜŞ</div>
                            <div class="person-job">İmar ve Şehircilik Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1300</div>
                            <div class="mail"><a href="mailto:esra.gamze.gogus@karatay.bel.tr">esra.gamze.gogus@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/imar-ve-sehircilik-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/aydin_yildirim.jpg" alt="AYDIN YILDIRIM - İnsan Kaynakları ve Eğitim Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">AYDIN YILDIRIM</div>
                            <div class="person-job">İnsan Kaynakları ve Eğitim Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1510</div>
                            <div class="mail"><a href="mailto:aydin.yildirim@karatay.bel.tr">aydin.yildirim@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/insan-kaynaklari-ve-egitim-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/nuri_keles.jpg" alt="NURİ KELEŞ - Kültür İşleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">NURİ KELEŞ</div>
                            <div class="person-job">Kültür İşleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 2510</div>
                            <div class="mail"><a href="mailto:nuri.keles@karatay.bel.tr">nuri.keles@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/kultur-isleri-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/suleyman_sen.jpg" alt="SÜLEYMAN ŞEN - Makina İkmal Bakım ve Onarım Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">SÜLEYMAN ŞEN</div>
                            <div class="person-job">Makina İkmal Bakım ve Onarım Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 2130</div>
                            <div class="mail"><a href="mailto:suleyman.sen@karatay.bel.tr">suleyman.sen@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/makine-ikmal-bakim-ve-onarim-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/esma_kara.jpg" alt="ESMA KARA - Mali Hizmetler Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">ESMA KARA</div>
                            <div class="person-job">Mali Hizmetler Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1200</div>
                            <div class="mail"><a href="mailto:esmakara@karatay.bel.tr">esmakara@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/mali-hizmetler-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mehmet_karaca.jpg" alt="MEHMET KARACA - Muhtarlık İşleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MEHMET KARACA</div>
                            <div class="person-job">Muhtarlık İşleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1110</div>
                            <div class="mail"><a href="mailto:mehmetkaraca@karatay.bel.tr">mehmetkaraca@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/muhtarlik-isleri-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/sahan_hasan_atilgan.jpeg" alt="ŞAHAN HASAN ATILGAN - Özel Kalem Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">ŞAHAN HASAN ATILGAN</div>
                            <div class="person-job">Özel Kalem Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1166</div>
                            <div class="mail"><a href="mailto:sahan.atilgan@karatay.bel.tr">sahan.atilgan@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/ozel-kalem-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/abdulkadir_serdar_onal.png" alt="ABDULKADİR SERDAR ÖNAL - Park ve Bahçeler Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">ABDULKADİR SERDAR ÖNAL</div>
                            <div class="person-job">Park ve Bahçeler Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 2310</div>
                            <div class="mail"><a href="mailto:serdar@karatay.bel.tr">serdar@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/park-ve-bahceler-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mehmet-vahdettin-erol.jpg" alt="MEHMET VAHDETTİN EROL - Sosyal Destek Hizmetleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MEHMET VAHDETTİN EROL</div>
                            <div class="person-job">Sosyal Destek Hizmetleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1230</div>
                            <div class="mail"><a href="mailto:mvahdettin.erol@karatay.bel.tr">mvahdettin.erol@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/sosyal-destek-hizmetleri-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/muhammed_han.jpg" alt="MUHAMMED HAN - Sosyal Yardım İşleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MUHAMMED HAN</div>
                            <div class="person-job">Sosyal Yardım İşleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1050</div>
                            <div class="mail"><a href="mailto:muhammed.han@karatay.bel.tr">muhammed.han@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/abdulkadir_serdar_onal.png" alt="ABDULKADİR SERDAR ÖNAL - Tarımsal Hizmetler Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">ABDULKADİR SERDAR ÖNAL</div>
                            <div class="person-job">Tarımsal Hizmetler Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 2310</div>
                            <div class="mail"><a href="mailto:serdar@karatay.bel.tr">serdar@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/tarimsal-hizmetler-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/mustafa_dogan.jpg" alt="MUSTAFA DOĞAN - Teftiş Kurulu Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">MUSTAFA DOĞAN</div>
                            <div class="person-job">Teftiş Kurulu Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1500</div>
                            <div class="mail"><a href="mailto:mdogan@karatay.bel.tr">mdogan@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/teftis-kurulu-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/abdulmuttalip_demirel.png" alt="ABDÜL MUTTALİP DEMİREL - Tesisler Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">ABDÜL MUTTALİP DEMİREL</div>
                            <div class="person-job">Tesisler Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 2110</div>
                            <div class="mail"><a href="mailto:abdulmuttalip.demirel@karatay.bel.tr">abdulmuttalip.demirel@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/tesisler-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/ufuk_erturk.jpg" alt="UFUK ERTÜRK - Veteriner İşleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">UFUK ERTÜRK</div>
                            <div class="person-job">Veteriner İşleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 2410</div>
                            <div class="mail"><a href="mailto:ufuk.erturk@karatay.bel.tr">ufuk.erturk@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/veteriner-isleri-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/ismail_baran.jpg" alt="İSMAİL BARAN - Yapı Kontrol Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">İSMAİL BARAN</div>
                            <div class="person-job">Yapı Kontrol Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1560</div>
                            <div class="mail"><a href="mailto:ibaran@karatay.bel.tr">ibaran@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/yapi-kontrol-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/aydin_yildirim.jpg" alt="AYDIN YILDIRIM - Yazı İşleri Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">AYDIN YILDIRIM</div>
                            <div class="person-job">Yazı İşleri Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1510</div>
                            <div class="mail"><a href="mailto:aydin.yildirim@karatay.bel.tr">aydin.yildirim@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/yazi-isleri-mudurlugu.pdf')">Birim Yönetmeliği</div>
                        </div>
                    </div>
                </div>

                <div class="person">
                    <div class="person-image">
                        <img src="https://www.karatay.bel.tr/img/mudurleryeni/zeki_gokmenoglu.jpg" alt="ZEKİ GÖKMENOĞLU - Zabıta Müdürlüğü">
                    </div>
                    <div class="person-information">
                        <div class="information-header">
                            <div class="person-name">ZEKİ GÖKMENOĞLU</div>
                            <div class="person-job">Zabıta Müdürlüğü</div>
                        </div>
                        <div class="information-content">
                            <div class="phone"><span>Dahili Tel:</span> 1100</div>
                            <div class="mail"><a href="mailto:zeki.gokmenoglu@karatay.bel.tr">zeki.gokmenoglu@karatay.bel.tr</a></div>
                        </div>
                        <div class="information-footer">
                            <div class="box" onclick="window.open('https://www.karatay.bel.tr/dosyalar/birimyonetmelik/zabita-mudurlugu.pdf')">Birim Yönetmeliği</div>
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


