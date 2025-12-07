<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurumsal | Logomuz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('components.navigation')

    <div class="page-head">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="page-head-left">Logomuz</div>
            <div class="page-head-right">
                <nav class="bread-crumb">
                    <a href="/" class="breadcrumb-link">Anasayfa</a>
                    <span class="mx-1">/</span>
                    <a href="/" class="breadcrumb-link">Kurumsal</a>
                    <span class="mx-1">/</span>
                    <span class="breadcrumb-link active">Logomuz</span>
                </nav>
            </div>
        </div>
    </div>

    <main id="main" class="content-pages py-5">
        <div class="container whitebox">
            <div class="article">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="heading1">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    SEKİZ KÖŞELİ SELÇUKLU YILDIZI
                                </button>
                            </h2>
                        </div>
                        <div id="collapse1" class="collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                Her milletin kültüründe belirli dönemlerinin simgesi olan semboller vardır. Selçuklu yıldızı da 11. ve 13. yüzyıllar arasında Anadolu’da hüküm süren Anadolu Selçuklularının bize bıraktığı en önemli miraslardan biridir. Anadolu Selçuklularından günümüze kadar coğrafyamızın vazgeçilmez bezeme unsuru olan Octagram (Sekiz kenarlı yıldız), İslam inancındaki cennetin 8 derecesini simgelemektedir. 8 köşeli yıldızın da sembolik bir anlatı ile 8 cennet kapısını simgelediği bilinmektedir. Bu 8 kapı Selçuklu Yıldızı anlatımında gönül belediyeciliğinin de asıl temel unsurları olan merhamet, şefkat, sabır, doğruluk, sır tutmak, sadakat, cömertlik ve şükrü temsil etmektedir. Selçuklu başkenti olan  Konya’nın merkezinde konumlanan bir yerel yönetim olarak medeniyetimizin özünden gelen değerlerle insanlara hizmet edeceğimizi anlatmaktadır.
                                <br><img src="/img/karatay/selcuklu_yildizi.jpg" style="width: 50%; height: 50%">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading2">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    KARATAY MEDRESESİ VE KONYA (TÜRK) KEMERİ
                                </button>
                            </h2>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                Karatay Medresesi, Selçukluların bilime verdiği değer ile 1251 yılında inşa edilmiş, yetiştirdiği ilim insanları ile tüm dünya medeniyetlerinin gelişmesinde önemli katkı sağlamıştır. Konya (Türk) kemeri ise şehrimizdeki onlarca tarihi yapıda örnekleri bulunan Türk-İslam mimarisinin simgesi olarak logomuzda yer almaktadır. Bilim, eğitim ve toplumsal gelişmeye önem veren, sosyal belediyecilik kavramımızı güçlendiren, hayata dokunan, toplumun gelişmişlik düzeyini artıran bir yönetim hedefimizi ifade etmemize sembol olarak katkıda bulunmaktadır.
                                <br><img src="/img/karatay/turk_kemeri.jpg" style="width: 50%; height: 50%">
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" id="heading3">
                            <h2 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Hz. MEVLÂNÂ TÜRBESİ
                                </button>
                            </h2>
                        </div>
                        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                            <div class="card-body">
                                Eski logomuzda tek öge halinde yer alan Hz. Mevlânâ Türbesi; bilinçaltındaki algıyı değiştirmeden aynı şekilde modernize edilerek siluet hâlinde kullanılmıştır. Logomuzda yer alan “türbe” sembolü Gönüller Sultanı’nın öğretilerini hoşgörü ve huzur ekseninde şehrimize ve misafirlerimize sunmayı amaçlamaktadır. Ayrıca “türbe” sembolü tevazu ve gayretle tüm çalışmalarının merkezine insanı alan yönetim anlayışımızı da ifade etmektedir.
                                <br><img src="/img/karatay/mevlana_silueti.jpg" style="width: 50%; height: 50%">
                            </div>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="post--content">
                    <div class="post-title">LOGOMUZ</div>
                    <form class="contact-page-form">
                        <div class="form-group button-area">
                            <button type="button" class="btn" onclick="window.open('/dosyalar/karatay_belediyesi_logo.ai', '_blank')">AI. İndir</button>
                            <button type="button" class="btn" onclick="window.open('/dosyalar/karatay_belediyesi_logo.pdf', '_blank')">PDF. İndir</button>
                            <button type="button" class="btn" onclick="window.open('/dosyalar/karatay_belediyesi_logo.jpg', '_blank')">JPEG. İndir</button>
                            <button type="button" class="btn" onclick="window.open('/dosyalar/karatay_belediyesi_logo.png', '_blank')">PNG. İndir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    @include('components.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


