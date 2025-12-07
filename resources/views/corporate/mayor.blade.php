<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kurumsal | Başkan</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/mayor.css') }}">
</head>
<body>
    @include('components.navigation')

    <div class="page-head">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="page-head-left">
                Başkan | Hasan KILCA
            </div>
            <div class="page-head-right">
                <nav class="bread-crumb">
                    <a href="/" class="breadcrumb-link">Anasayfa</a>
                    <span class="mx-1">/</span>
                    <a href="/" class="breadcrumb-link">Kurumsal</a>
                    <span class="mx-1">/</span>
                    <span class="breadcrumb-link active">Başkan</span>
                </nav>
            </div>
        </div>
    </div>

    <main id="main" class="content-pages py-5">
        <div class="container whitebox">
            <div class="row g-4">
                <div class="col-12 col-lg-4">
                    <div class="mayor-information">
                        <div class="image">
                            <img src="https://www.karatay.bel.tr/assets/img/baskan2.png" alt="Hasan Kılca" class="img-fluid">
                        </div>
                        <div class="mayor-info">
                            <div class="fullname">Hasan Kılca</div>
                            <div class="job">Karatay Belediye Başkanı</div>
                        </div>
                        <div class="mayor-social">
                            <a href="https://www.facebook.com/kilcahasan/" target="_blank" aria-label="Facebook"><img src="{{ asset('images/icons/facebook.svg') }}" width="20" height="20" alt="Facebook"></a>
                            <a href="https://twitter.com/hkilca" target="_blank" aria-label="X"><img src="{{ asset('images/icons/x.svg') }}" width="20" height="20" alt="X"></a>
                            <a href="https://www.instagram.com/hkilca/" target="_blank" aria-label="Instagram"><img src="{{ asset('images/icons/instagram.svg') }}" width="20" height="20" alt="Instagram"></a>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-lg-8 mayor-content-area">
                    <ul class="nav nav-pills nav-justified mayor-tab" id="mayorTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active sub-nav" id="tab-one" data-bs-toggle="tab" href="#tabOne" role="tab" aria-controls="tab-one" aria-selected="true"><span>Başkanın Mesajı</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub-nav" id="tab-two" data-bs-toggle="tab" href="#tabTwo" role="tab" aria-controls="tab-two" aria-selected="false"><span>Başkanın Özgeçmişi</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sub-nav" id="tab-three" data-bs-toggle="tab" href="#tabThree" role="tab" aria-controls="tab-three" aria-selected="false"><span>Önceki Başkanlar</span></a>
                        </li>
                    </ul>

                    <div class="tab-content pt-4" id="myTabContent">
                        <div class="tab-pane fade show active" id="tabOne" role="tabpanel" aria-labelledby="tab-one">
                            <div class="mayor-text">
                                <p>Bu topraklar üzerinde tüm yapılar, tüm hizmetler “Hak için halka hizmet” düşüncesi üzerine kuruldu. Çünkü mühim olan insan, baki kalan gönüldür. Ecdadımız bir şehri imar ederken, vakıf medeniyetlerimizle, hizmetleriyle insana olduğu kadar doğaya ve doğada yaşayan tüm canlılara aynı hassasiyetle yaklaştılar. Bizler de ecdadımızın mirası olan şehrimize, Karatay’ımıza aynı hassasiyetle yaklaşıyoruz.
<br><br>
Karatay samimiyettir. Medeniyet kokan rüzgârlarıyla, samimiyetliyle büyütür çocuklarını. Her köşe başında hayrından bir yudum miras bırakan çeşmeler, her karışında gönle dokunan erenler, türbeler, minberinde tarih kokan camiler karşılar insanını.
<br><br>
Bizler de Karatay’dan miras alacağımız samimiyeti, tevazu ve gayreti elden bırakmadan yaşıyor ve kadını, erkeği, genci, yaşlısı hep beraber Karatay’ı geleceğe gelenekleri ile birlikte taşıyoruz. Birlik olarak yollar aşıp en ücrasına varıncaya dek her karışına, her köşesine adaletle yaklaşıp, geleneklerine sımsıkı sarılan bir ekiple birlikte Karatay’ın hizmetkârı olmaktan bahtiyarlık duyuyoruz. Adil bir hizmet anlayışıyla Karatay'ın dört bir yanını kalkındırıyor, medeniyetimizden gelen değerler ile yaşatıyoruz. Geleceğimizin geleneğimizde saklı olduğunu biliyor, bu inançla geleneklerimize sımsıkı bağlanarak geleceğe yürüyoruz.
<br><br>
Tarihin ve varoluşun şiiridir Karatay. Gelenekleri ile büyüyen bir neslin anahtarı, Konya kültürü ve tarihinin merkezidir. Karatay tarihi ile Konya’nın çekirdeği ve özü durumunda bir yaşam alanı. Bizi yansıtan bir ayna gibidir Karatay. Kimi zaman dinginlik ve huzur, kimi zaman cesaret ve güç verir. Tıpkı tarihimiz gibi.
<br><br>
Konya’mızın her ilçesi, her yeri başka güzel. Ama bizim gönlümüzde önce Karatay var. Bizim için Karatay bir başka güzel. Tarihi değerleri, gönül erenleri ile bir başka. Karatay’a baktıkça kendimizi, geçmişimizi görürüz. Keşfedilmeyi bekleyen höyüklerinden, Karatay Medresesi’ne, Şem-i Tebrizi Cami’nden, “Gönül Sultanı” Mevlana Türbesi’ne Karatay her dönem geçmişin mirası, bizim ortak tarihimizdir.
<br><br>
Bu bağlamda Karatay’ın doğasının, tarihi dokusunun ve kültürünün korunmasının, yapılacak bütün çalışmaların merkezini teşkil etmesi gerekliliğine inanıyoruz. Yeni projeler ve yapılaşma kültürü içerisinde Karatay’ın dokusunu koruyup, doğal güzelliklerini, tarihini, kültürünü eserlerinin tanıtım çalışmalarıyla geniş kitlelere aktarılması için çalışıyoruz.
<br><br>
Tüm bunların yanında yöresel ve ticari değeri olan ürünlerin varlığı da bizi bu alanda cesaretlendiriyor. Karatay’ın marka değerini oluşturmak için tarımı, sanayisi, ticareti, kültürü, tarihi ile birçok alanda markalaşan bir Karatay oluşturma hedefiyle çalışıyoruz.
<br><br>
Karatay’a değer katmak istiyorsak bunu birlikte yapmalıyız. Çünkü başarının kilit noktası birlikte hareket etmekten, birlikte hareket etmenin temeliyse istişareden geçer. Karatay’ da yaşayan herkes bu şehrin geleceğinde söz sahibidir. Bu inancı kalbimizde taşıyor ve bunun gerekliliğiyle yürüyoruz.</p>
                                
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tabTwo" role="tabpanel" aria-labelledby="tab-two">
                            <ul class="resume-timeline nav flex-column">
                                <li><b>1970</b> yılında Konya’da doğan Hasan Kılca, Harmancık İlkokulu’ndan mezun olduktan sonra hafızlık eğitimini tamamladı. 1991 yılında Konya İmam Hatip Lisesi’nden mezun oldu.</li>
                                <li><b>1995</b> yılında Ankara Üniversitesi Hukuk Fakültesi’ni tamamlayarak bir süre serbest avukat olarak çalıştı. 1997 yılında Konya Büyükşehir Belediyesi’nde avukat olarak göreve başladı.</li>
                                <li><b>2000 – 2002</b> arasında 2 yıl boyunca 28 Şubat mağdurlarının o dönemde savunuculuğunu yapan <b>HUDER</b>’in Konya Şubesi Başkanlığını yaptı.</li>
                                <li><b>2002</b> yılında 1. Hukuk Müşavirliği, 2016 yılında ise Genel Sekreterlik görevlerine getirildi.</li>
                                <li class="no-dot">
                                    <dl>
                                        <dt>1.Hukuk Müşavirliği ve Genel Sekreterlik görevlerini yürütürken eş zamanlı olarak;</n+dt>
                                        <dd>● <b>2005 – 2010</b> arasında <b>Konya Büyükşehir Belediyesi Ağaç A.Ş.</b> Yönetim Kurulu Başkanlığı</dd>
                                        <dd>● <b>2010 – 2018</b> arasında <b>Konya Büyükşehir Belediyesi Spor A.Ş.</b> Yönetim Kurulu Başkanlığı</dd>
                                        <dd>● <b>2012 – 2018</b> arasında <b>Konya Bilim Merkezi A.Ş.</b> Yönetim Kurulu Üyeliği ve Başkan Yardımcılığı</dd>
                                        <dd>● <b>2013 – 2018</b> arasında <b>Konya Organize Sanayi Bölgesi Müteşebbis Heyet Üyeliği</b> görevlerini üstlendi.</dd>
                                        <dd>● <b>2014</b> yılında açılışı yapılan ve <b>Konya Büyükşehir Belediyesi</b> tarafından <b>TÜBİTAK</b> desteğiyle kurulan <b>Türkiye’nin ilk Bilim Merkezi</b>’nin tüm araştırma / inceleme ve projelendirme çalışmalarına <b>bizzat katıldı</b> ve <b>öncülük</b> etti.</dd>
                                    </dl>
                                </li>
                                <li><b>2012</b> yılında yasalaşan 6360 sayılı Yeni Büyükşehir Kanunu çalışmalarına Konya Büyükşehir Belediyesi adına TBMM’de fiilen katılarak kanunun hazırlanmasına katkı sağladı.</li>
                                <li>Sonrasında yasa gereği Büyükşehir Belediyesi hizmet sınırlarına alınan Konya’nın 31 ilçesine hizmet götürülmesinde koordinatörlük yaparak aktif rol aldı.</li>
                                <li><b>16 yıl</b> kesintisiz olarak Büyükşehir Belediyesi Encümen Üyeliğini yürüttü.</li>
                                <li><b>Türkiye Belediyeler Birliği (TBB)</b> Belediye Akademisi’nde, Yerel Yönetimler’le ilgili konularda, Belediyelerin, Bağlı İdarelerin / İştiraklerin yöneticilerine ve personeline uzun yıllar eğitimler verdi.</li>
                                <li>Aynı zamanda, <b>Kamu İhale Uzmanı</b> olarak mahkemelerde <b>Bilirkişilik</b> yaptı.</li>
                                <li>Yeşilay, Kızılay dahil toplum yararına faaliyet gösteren sivil toplum kuruluşlarında üyelikleri ve görevleri devam etmektedir.</li>
                                <li><b>2018</b> yılının Kasım ayında <b>Konya Büyükşehir Belediyesi Genel Sekreterliği</b> görevinden istifa ederek <b>AK Parti</b>’den <b>Karatay Belediye Başkanlığı</b>’na aday olan Kılca, <b>2019 Mart</b> seçimlerinde ilk kez, <b>2024 Mart</b> seçimlerinde ikinci kez <b>Karatay Belediye Başkanı</b> seçilmiştir.</li>
                                <li>İngilizce ve Arapça bilen Hasan Kılca,  evli ve üç çocuk babasıdır.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="tabThree" role="tabpanel" aria-labelledby="tab-three">
                            <ul class="nav old-mayors flex-column">
                                <li class="nav-item old-mayor">
                                    <div class="old-mayor-image"><img src="https://www.karatay.bel.tr/assets/img/mayor-1.png" alt="Mehmet HANÇERLİ"></div>
                                    <div class="old-mayor-information">
                                        <div class="old-mayor-name">Mehmet HANÇERLİ</div>
                                        <div class="old-mayor-job-title">Önceki Belediye Başkanı</div>
                                        <div class="old-mayor-period"><div class="text">Başkanlık Yaptığı Dönem</div><div class="date">2004 - 2019</div></div>
                                    </div>
                                </li>
                                <li class="nav-item old-mayor">
                                    <div class="old-mayor-image"><img src="https://www.karatay.bel.tr/assets/img/mayor-2.png" alt="Mehmet ŞEN"></div>
                                    <div class="old-mayor-information">
                                        <div class="old-mayor-name">Mehmet ŞEN</div>
                                        <div class="old-mayor-job-title">Önceki Belediye Başkanı</div>
                                        <div class="old-mayor-period"><div class="text">Başkanlık Yaptığı Dönem</div><div class="date">1999 - 2004</div></div>
                                    </div>
                                </li>
                                <li class="nav-item old-mayor">
                                    <div class="old-mayor-image"><img src="https://www.karatay.bel.tr/assets/img/mayor-3.png" alt="Mustafa ÖZKAFA"></div>
                                    <div class="old-mayor-information">
                                        <div class="old-mayor-name">Mustafa ÖZKAFA</div>
                                        <div class="old-mayor-job-title">Önceki Belediye Başkanı</div>
                                        <div class="old-mayor-period"><div class="text">Başkanlık Yaptığı Dönem</div><div class="date">1989 - 1994 | 1994 - 1999</div></div>
                                    </div>
                                </li>
                            </ul>
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


