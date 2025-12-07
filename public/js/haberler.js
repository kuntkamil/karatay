// Haberler Section JavaScript
$(document).ready(function(){
    var $slides = $('#mainNewsSlider .news-item');

    // Initialize bxSlider on the main news slider
    var mainSlider = $('#mainNewsSlider').bxSlider({
        mode: 'fade',
        auto: true,
        pause: 5000,
        autoHover: true,
        pager: true,
        controls: true,
        adaptiveHeight: true,
        preloadImages: 'all',
        onSliderLoad: function(currentIndex){
            $slides.removeClass('active');
            $slides.eq(currentIndex).addClass('active');
        },
        onSlideAfter: function($slideElement, oldIndex, newIndex){
            $slides.removeClass('active');
            $slides.eq(newIndex).addClass('active');
        }
    });


    // "Tüm Haberler" link
    $('.all-news-link').click(function(e) {
        e.preventDefault();
        console.log('All news link clicked');
        alert('Tüm haberler sayfasına yönlendiriliyor...');
        // window.location.href = '/haberler';
    });
});

