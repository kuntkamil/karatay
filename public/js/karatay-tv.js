// Karatay TV Section JavaScript
$(document).ready(function(){
    // YouTube API Configuration
    const YOUTUBE_API_KEY = 'YOUR_YOUTUBE_API_KEY'; // Replace with actual API key
    const CHANNEL_ID = 'UC_KARATAY_BELEDIYE_CHANNEL_ID'; // Replace with actual channel ID
    
    // Sample video data (replace with YouTube API data)
    const sampleVideos = [
        {
            id: 'sample1',
            title: 'İlçemizde Sıcak Asfalt Çalışmalarımız Son Hızla Devam Ediyor',
            thumbnail: '/images/videos/asfalt-calismalari.jpg',
            youtubeId: 'dQw4w9WgXcQ' // Replace with actual YouTube video ID
        },
        {
            id: 'sample2',
            title: 'Karatay Lavanta Bahçeleri',
            thumbnail: '/images/videos/lavanta-bahceleri.jpg',
            youtubeId: 'dQw4w9WgXcQ' // Replace with actual YouTube video ID
        },
        {
            id: 'sample3',
            title: 'Karatay Belediyesi Hizmetleri',
            thumbnail: '/images/videos/belediyecilik.jpg',
            youtubeId: 'dQw4w9WgXcQ' // Replace with actual YouTube video ID
        }
    ];

    // Initialize the section
    initializeKaratayTV();

    function initializeKaratayTV() {
        // Set up "Tüm Videolar" link
        setupAllVideosLink();
        
        // Load YouTube videos from backend RSS endpoint
        loadLatestVideos();
    }

    function bindCardClicks() {
        $('.video-cards-container').off('click', '.video-card');
        $('.video-cards-container').on('click', '.video-card', function() {
            const url = $(this).data('url');
            if (url) {
                window.open(url, '_blank');
            }
        });
    }

    function setupAllVideosLink() {
        $('.all-videos-link').click(function(e) {
            e.preventDefault();
            window.open('https://www.youtube.com/@KaratayBelediye/videos', '_blank');
        });
    }

    function openVideoModal(video) {
        // Create modal HTML
        const modalHtml = `
            <div class="video-modal-overlay">
                <div class="video-modal">
                    <div class="modal-header">
                        <h3 class="modal-title">${video.title}</h3>
                        <button class="close-modal">&times;</button>
                    </div>
                    <div class="modal-content">
                        <div class="video-container">
                            <iframe 
                                src="https://www.youtube.com/embed/${video.youtubeId}?autoplay=1" 
                                frameborder="0" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        `;

        // Add modal to page
        $('body').append(modalHtml);
        
        // Show modal
        $('.video-modal-overlay').fadeIn(300);
        
        // Close modal functionality
        $('.close-modal, .video-modal-overlay').click(function(e) {
            if (e.target === this) {
                closeVideoModal();
            }
        });

        // Close on escape key
        $(document).keyup(function(e) {
            if (e.keyCode === 27) { // ESC key
                closeVideoModal();
            }
        });
    }

    function closeVideoModal() {
        $('.video-modal-overlay').fadeOut(300, function() {
            $(this).remove();
        });
    }

    // Load latest videos via backend (RSS)
    function loadLatestVideos() {
        $.ajax({
            url: '/api/karatay-tv/latest',
            method: 'GET',
            success: function(res) {
                if (res && res.videos && res.videos.length) {
                    renderVideoCards(res.videos);
                    bindCardClicks();
                } else {
                    showApiError();
                }
            },
            error: function() {
                showApiError();
            }
        });
    }

    function renderVideoCards(videos) {
        const $container = $('.video-cards-container');
        $container.empty();
        videos.slice(0,5).forEach(function(video){
            const card = `
                <div class="video-card" data-video-id="${video.videoId}" data-url="${video.url}">
                    <div class="video-thumbnail">
                        <img src="${video.thumbnailUrl}" alt="${video.title}" class="thumbnail-image">
                        <div class="play-button"><i class="bi bi-play-fill"></i></div>
                    </div>
                    <div class="video-overlay">
                        <h3 class="video-title">${video.title}</h3>
                    </div>
                </div>
            `;
            $container.append(card);
        });
    }

    function showApiError() {
        $('.youtube-integration').show();
        $('.status-text').text('YouTube videoları yüklenirken hata oluştu.');
    }

    // Scroll animation for video cards
    $(window).scroll(function() {
        $('.video-card').each(function() {
            const elementTop = $(this).offset().top;
            const elementBottom = elementTop + $(this).outerHeight();
            const viewportTop = $(window).scrollTop();
            const viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('in-view');
            }
        });
    });

    // Trigger scroll event on page load
    $(window).trigger('scroll');
});

// Additional CSS for modal
const modalStyle = document.createElement('style');
modalStyle.textContent = `
    .video-modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.8);
        z-index: 9999;
        display: none;
    }
    
    .video-modal {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        max-width: 90%;
        max-height: 90%;
        width: 800px;
    }
    
    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background: #2c5530;
        color: #fff;
    }
    
    .modal-title {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
    }
    
    .close-modal {
        background: none;
        border: none;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
        padding: 0;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .modal-content {
        padding: 0;
    }
    
    .video-container {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 56.25%; /* 16:9 aspect ratio */
    }
    
    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    .video-card.in-view {
        animation: slideInUp 0.6s ease-out forwards;
    }
    
    @keyframes slideInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
`;
document.head.appendChild(modalStyle);
