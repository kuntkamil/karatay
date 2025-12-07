<!-- Service Buttons Section -->
<link rel="stylesheet" href="{{ asset('css/modal.css') }}">

<div class="service-buttons-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="service-buttons-container">
                    <div class="service-button active">
                        <i class="bi bi-display"></i>
                        <span>E-Belediye</span>
                    </div>
                    <div class="service-button">
                        <i class="bi bi-mouse"></i>
                        <span>Online Hizmetler</span>
                    </div>
                    <div class="service-button">
                        <i class="bi bi-puzzle"></i>
                        <span>Etkinlik & Duyurular</span>
                    </div>
                    <div class="service-button">
                        <i class="bi bi-briefcase"></i>
                        <span>Doğrudan Temin</span>
                    </div>
                    <div class="service-button">
                        <i class="bi bi-chat-dots"></i>
                        <span>İstek ve Öneriler</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Doğrudan Temin Popup Modal -->
<div id="dogrudanTeminModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Doğrudan Temin</h3>
            <button class="close-btn" onclick="closeModal()">&times;</button>
        </div>
        <div class="modal-body" style="flex-direction: column; padding: 20px;">
            <div class="procure-table-wrap">
                <table class="procure-table">
                    <thead>
                        <tr>
                            <th>Dosya No</th>
                            <th>Başlık</th>
                            <th>Açıklama</th>
                            <th>Teklif Son Tarihi</th>
                            <th>Teknik Şartname</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(($procurements ?? []) as $p)
                        <tr>
                            <td>{{ $p->file_no }}</td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->description }}</td>
                            <td>
                                <div>{{ optional($p->deadline_at)->format('Y-m-d') }}</div>
                                <div>{{ optional($p->deadline_at)->format('H:i:s') }}</div>
                            </td>
                            <td><a href="{{ $p->spec_url ?? '#' }}" target="_blank" class="btn-mini green">İndir</a></td>
                            <td><a href="{{ $p->bid_url ?? '#' }}" target="_blank" class="btn-mini primary">Teklif<br>Ver</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- E-Belediye Popup Modal -->
<div id="ebelediyeModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3>E-Belediye Hizmetleri</h3>
            <button class="close-btn" onclick="closeModal()">&times;</button>
        </div>
        <div class="modal-body">
            <div class="modal-left">
                <div class="category-button active" data-category="ebelediye">
                    <i class="bi bi-display"></i>
                    <div class="category-text">
                        <span class="category-title">E-Belediye</span>
                        <span class="category-subtitle">İncelemek için tıklayınız.</span>
                    </div>
                </div>
                <div class="category-button" data-category="borc-sorgulama">
                    <i class="bi bi-stack"></i>
                    <div class="category-text">
                        <span class="category-title">Borç Sorgulama</span>
                        <span class="category-subtitle">İncelemek için tıklayınız.</span>
                    </div>
                </div>
                <div class="category-button" data-category="borc-odeme">
                    <i class="bi bi-credit-card"></i>
                    <div class="category-text">
                        <span class="category-title">Borç Ödeme</span>
                        <span class="category-subtitle">İncelemek için tıklayınız.</span>
                    </div>
                </div>
            </div>
            <div class="modal-right">
                <div class="services-grid">
                    <div class="service-item" data-number="0">İmar Durumu</div>
                    <div class="service-item" data-number="1">İş Yeri Ruhsat Sorgulama</div>
                    <div class="service-item" data-number="2">Beyanlar</div>
                    <div class="service-item" data-number="3">Tarifeler</div>
                    <div class="service-item" data-number="4">Rayiç Sorgulama</div>
                    <div class="service-item" data-number="5">Ödeme Yöntemlerimiz</div>
                    <div class="service-item" data-number="6">İş Yeri Ruhsat Başvurusu</div>
                    <div class="service-item" data-number="7">İmzalı Belge Sorgulama</div>
                    <div class="service-item" data-number="8">Bina Birim Değeri Sorgulama</div>
                    <div class="service-item" data-number="9">Tahsilat Bilgileri</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Online Hizmetler Popup Modal -->
<div id="onlineHizmetlerModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Online Hizmetler</h3>
            <button class="close-btn" onclick="closeModal()">&times;</button>
        </div>
        <div class="modal-body">
            <div class="modal-left">
                <div class="category-button" data-category="online-doktor">
                    <i class="bi bi-plus-circle"></i>
                    <div class="category-text">
                        <span class="category-title">7/24 Online Doktor</span>
                        <span class="category-subtitle">İncelemek için tıklayınız.</span>
                    </div>
                </div>
                <div class="category-button" data-category="istihdam-merkezi">
                    <i class="bi bi-person"></i>
                    <div class="category-text">
                        <span class="category-title">İstihdam Merkezi</span>
                        <span class="category-subtitle">İncelemek için tıklayınız.</span>
                    </div>
                </div>
                <div class="category-button" data-category="kurs-basvurusu">
                    <i class="bi bi-file-text"></i>
                    <div class="category-text">
                        <span class="category-title">Kurs Başvurusu</span>
                        <span class="category-subtitle">İncelemek için tıklayınız.</span>
                    </div>
                </div>
                <div class="category-button" data-category="basvuru-rehberi">
                    <i class="bi bi-file-text"></i>
                    <div class="category-text">
                        <span class="category-title">Başvuru Rehberi</span>
                        <span class="category-subtitle">İncelemek için tıklayınız.</span>
                    </div>
                </div>
            </div>
            <div class="modal-right">
                <div class="services-grid">
                    <div class="service-item" data-number="0">Nöbetçi Eczaneler</div>
                    <div class="service-item" data-number="1">Bilgi Edinme</div>
                    <div class="service-item" data-number="2">Meclis Canlı Yayını</div>
                    <div class="service-item" data-number="3">E-Belediye</div>
                    <div class="service-item" data-number="4">İhale İlanları</div>
                    <div class="service-item" data-number="5">Kent Rehberleri</div>
                    <div class="service-item" data-number="6">Nikah Canlı Yayını</div>
                    <div class="service-item" data-number="7">İmar Plan Duyuruları</div>
                    <div class="service-item" data-number="8">Dijital Temizlik Başvurusu</div>
                    <div class="service-item" data-number="9">Nikah İşlemleri</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Etkinlik & Duyurular Popup Modal -->
<div id="etkinlikModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Etkinlik & Duyurular</h3>
            <button class="close-btn" onclick="closeModal()">&times;</button>
        </div>
        <div class="modal-body">
            <h4 style="color:#1e4635; margin: 20px 20px 0px 20px;">Etkinlikler</h4>
            <div class="events-container">
                @foreach(($events ?? []) as $event)
                <div class="event-card">
                    <div class="event-image">
                        <img src="{{ asset('images/events/' . $event->image_name) }}" alt="{{ $event->title }}">
                    </div>
                    <div class="event-content">
                        <div class="event-category">{{ $event->category }}</div>
                        <h4 class="event-title">{{ $event->title }}</h4>
                        <div class="event-details">
                            <div class="event-location">
                                <i class="bi bi-geo-alt"></i>
                                <span>{{ $event->location }}</span>
                            </div>
                            <div class="event-date">
                                <i class="bi bi-calendar"></i>
                                <span>{{ optional($event->starts_at)->translatedFormat('d F Y') }}</span>
                            </div>
                            <div class="event-time">
                                <i class="bi bi-clock"></i>
                                <span>{{ optional($event->starts_at)->format('H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                <div class="event-card view-all-card">
                    <div class="view-all-content">
                        <i class="bi bi-calendar-event"></i>
                        <h4>TÜM ETKİNLİKLERİ GÖRMEK İÇİN TIKLA</h4>
                    </div>
                </div>
            </div>
            <!-- Duyurular -->
            <div class="announcements-container">
                <h4 style="color:#1e4635; margin: 0px 20px 20px;">Duyurular</h4>
                <ul class="announcements-list" style="list-style:none;max-height: 220px;overflow: auto;">
                    @foreach(($announcements ?? []) as $a)
                    <li>
                        <a href="{{ $a->url ?? '#' }}" class="announcement-link" target="_blank">
                            <span class="announcement-date"><span class="day">{{ optional($a->date)->format('d') }}</span><span class="month">{{ Str::upper(optional($a->date)->translatedFormat('F')) }}</span></span>
                            <span>{{ $a->title }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/service-buttons.js') }}"></script>
