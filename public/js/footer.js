// Footer Section functionality
$(document).ready(function(){
    // Smooth scroll for anchor links
    $('.footer-menu a[href^="#"]').click(function(e) {
        e.preventDefault();
        var target = $(this.getAttribute('href'));
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top - 100
            }, 800);
        }
    });
    
    // Footer link click tracking
    $('.footer-menu a').click(function() {
        var linkText = $(this).text().trim();
        var columnTitle = $(this).closest('.footer-column').find('.column-title').text();
        console.log('Footer link clicked:', columnTitle + ' - ' + linkText);
        
        // Here you can add analytics tracking
        // For example: gtag('event', 'footer_link_click', {
        //     'link_category': columnTitle,
        //     'link_text': linkText
        // });
    });
    
    // Social media click tracking
    $('.footer-section .social-icon').click(function(e) {
        e.preventDefault();
        var platform = $(this).find('img').attr('alt');
        console.log('Footer social media clicked: ' + platform);
        
        // Here you can add analytics tracking
        // For example: gtag('event', 'social_media_click', {
        //     'platform': platform,
        //     'location': 'footer'
        // });
    });
    
    // Zero waste logo click tracking
    $('.zero-waste').click(function() {
        console.log('Zero waste logo clicked');
        
        // Here you can add analytics tracking or redirect to zero waste page
        // For example: gtag('event', 'zero_waste_click');
    });
    
    // Add hover effects for footer links
    $('.footer-menu a').hover(
        function() {
            $(this).css('transform', 'translateX(5px)');
        },
        function() {
            $(this).css('transform', 'translateX(0)');
        }
    );
    
    // Add animation on scroll
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        var footerOffset = $('.footer-section').offset().top;
        var windowHeight = $(window).height();
        
        if (scrollTop > footerOffset - windowHeight + 200) {
            $('.footer-section').addClass('animate-in');
        }
    });
    
    // Initialize animations
    setTimeout(function() {
        $('.footer-section').addClass('loaded');
    }, 100);
});
