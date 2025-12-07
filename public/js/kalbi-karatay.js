// Kalbi Karatay Section JavaScript
$(document).ready(function(){
    let activeCard = null;
    
    // Set default expanded card on page load
    setTimeout(() => {
        const defaultCard = $('.kalbi-card.default-expanded');
        if (defaultCard.length > 0) {
            activeCard = defaultCard[0];
        }
    }, 100);
    
    // Hover: current to 50%, others revert to default widths
    $('.kalbi-card').on('mouseenter', function() {
        $('.kalbi-card').removeClass('expanded default-expanded');
        $(this).addClass('expanded');
        activeCard = this;
    });
    // Do not collapse on mouseleave to persist state

    // Card click functionality
    $('.kalbi-card').click(function() {
        var category = $(this).data('category');
        var title = $(this).find('.card-title').text();
        
        console.log('Card clicked:', category, title);
        
        // On click, keep current expanded as is; clicking other cards will shift active
        
        // Add click animation
        $(this).addClass('clicked');
        setTimeout(() => {
            $(this).removeClass('clicked');
        }, 300);
        
        // Here you can add navigation logic
        // For example: window.location.href = '/category/' + category;
        
        // For now, show an alert
        alert('Kategoriye yönlendiriliyor: ' + title);
    });

    // Remove outside click collapsing to avoid layout jumps

    // Add smooth scroll effect when cards come into view
    $(window).scroll(function() {
        $('.kalbi-card').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('in-view');
            }
        });
    });

    // Trigger scroll event on page load
    $(window).trigger('scroll');
});

// Additional CSS classes (dimmed removed)
const style = document.createElement('style');
style.textContent = `
    .kalbi-card.clicked { box-shadow: 0 20px 50px rgba(0,0,0,0.3); }
    .kalbi-card.in-view { animation: slideInUp 0.6s ease-out forwards; }
    @keyframes slideInUp { from { opacity:0; transform: translateY(30px);} to {opacity:1; transform: translateY(0);} }
`;
document.head.appendChild(style);
