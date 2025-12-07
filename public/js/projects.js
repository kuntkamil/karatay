// Projects Section functionality
$(document).ready(function(){
    let currentSlide = 0;
	const $slider = $('#projectsSlider');
	const $thumbs = $slider.find('.project-thumbnail');
	const totalSlides = $thumbs.length;
    const slidesToShow = 4; // Number of slides visible at once
	console.log('[projects] init: totalSlides=', totalSlides, 'slidesToShow=', slidesToShow);
    
    // Read project data from DOM
    function readProjectsFromDOM() {
        const data = [];
		$thumbs.each(function(){
            data.push({
                title: $(this).data('title'),
                description: $(this).data('description'),
                image: $(this).data('image'),
                href: $(this).data('href')
            });
        });
		console.log('[projects] readProjectsFromDOM length=', data.length);
		return data;
    }
    const projects = readProjectsFromDOM();
    
	function getSlideStep() {
		const ow = $thumbs.eq(0).outerWidth(true) || 150;
		console.log('[projects] step via outerWidth=', ow);
		return ow;
	}

	function clampSlide(val) {
		return Math.max(0, Math.min(val, Math.max(0, totalSlides - slidesToShow)));
	}

    // Initialize slider
	function initSlider() {
		let initialIndex = $thumbs.index($thumbs.filter('.active').first());
		if (initialIndex < 0) {
			initialIndex = 0;
			$thumbs.removeClass('active');
			$thumbs.eq(0).addClass('active');
		}
		currentSlide = clampSlide(Math.max(0, initialIndex - Math.floor(slidesToShow / 2)));
		console.log('[projects] initSlider initialIndex=', initialIndex, 'currentSlide=', currentSlide);
		updateSliderPosition();
		updateMainProject(initialIndex);
	}

	function ensureVisible(index) {
		const visibleStart = clampSlide(currentSlide);
		const visibleEnd = visibleStart + slidesToShow - 1;
		if (index > visibleEnd) {
			currentSlide = clampSlide(index - (slidesToShow - 1));
		} else if (index < visibleStart) {
			currentSlide = clampSlide(index);
		}
		updateSliderPosition();
	}
    
    // Update slider position
    function updateSliderPosition() {
		const step = getSlideStep();
		const targetLeft = clampSlide(currentSlide) * step;
		console.log('[projects] updateSliderPosition currentSlide=', currentSlide, 'targetLeft=', targetLeft);
		$slider.stop(true).animate({ scrollLeft: targetLeft }, 300);
    }
    
    // Update main project content
    function updateMainProject(index) {
        const project = projects[index];
		console.log('[projects] updateMainProject index=', index, 'title=', project && project.title);
        $('.projects-section .project-title').text(project.title);
        $('.projects-section .project-description').text(project.description);
        $('.projects-section .main-image').attr('src', project.image);
        // update main project link
        $('.projects-section .main-project').attr('href', project.href || '#');
    }
    
    // Next button click
	$('#nextBtn').click(function() {
		const activeIndex = $thumbs.index($thumbs.filter('.active').first());
		const nextIndex = Math.min((activeIndex >= 0 ? activeIndex + 1 : 0), totalSlides - 1);
		console.log('[projects] next click activeIndex=', activeIndex, 'nextIndex=', nextIndex);
		if (nextIndex !== activeIndex) {
			$thumbs.removeClass('active');
			$thumbs.eq(nextIndex).addClass('active');
			updateMainProject(nextIndex);
			ensureVisible(nextIndex);
		}
	});
    
    // Previous button click
	$('#prevBtn').click(function() {
		const activeIndex = $thumbs.index($thumbs.filter('.active').first());
		const prevIndex = Math.max((activeIndex >= 0 ? activeIndex - 1 : 0), 0);
		console.log('[projects] prev click activeIndex=', activeIndex, 'prevIndex=', prevIndex);
		if (prevIndex !== activeIndex) {
			$thumbs.removeClass('active');
			$thumbs.eq(prevIndex).addClass('active');
			updateMainProject(prevIndex);
			ensureVisible(prevIndex);
		}
	});
    
    // Thumbnail click
	$('.project-thumbnail').click(function() {
		const index = $thumbs.index(this);
		console.log('[projects] thumb click index=', index);
        
        // Remove active class from all thumbnails
        $('.project-thumbnail').removeClass('active');
        
        // Add active class to clicked thumbnail
        $(this).addClass('active');
        
        // Update main project content
        updateMainProject(index);
        
        // Center the clicked thumbnail in the slider
        currentSlide = Math.max(0, Math.min(index - Math.floor(slidesToShow / 2), totalSlides - slidesToShow));
        updateSliderPosition();
    });
    
    // Keyboard navigation
    $(document).keydown(function(e) {
        if (e.keyCode === 37) { // Left arrow
            $('#prevBtn').click();
        } else if (e.keyCode === 39) { // Right arrow
            $('#nextBtn').click();
        }
    });
    
    // Auto-play functionality (optional)
    let autoPlayInterval;
    
    function startAutoPlay() {
        autoPlayInterval = setInterval(function() {
            if (currentSlide < totalSlides - slidesToShow) {
                $('#nextBtn').click();
            } else {
                currentSlide = 0;
                updateSliderPosition();
            }
        }, 5000); // Change slide every 5 seconds
    }
    
    function stopAutoPlay() {
        clearInterval(autoPlayInterval);
    }
    
    // Start auto-play on hover out, stop on hover
    $('.projects-slider-container').hover(
        function() {
            stopAutoPlay();
        },
        function() {
            startAutoPlay();
        }
    );
    
    // Initialize everything
    initSlider();
    startAutoPlay();
    
    // Handle window resize
    $(window).resize(function() {
        updateSliderPosition();
    });
});
