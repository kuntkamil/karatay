// Service buttons and modal functionality
$(document).ready(function(){
    // Service buttons functionality
    $('.service-button').click(function() {
        $('.service-button').removeClass('active');
        $(this).addClass('active');
        
        // Check which button is clicked
        var buttonText = $(this).find('span').text().trim();
        if (buttonText === 'E-Belediye') {
            openEbelediyeModal();
        } else if (buttonText === 'Online Hizmetler') {
            openOnlineHizmetlerModal();
        } else if (buttonText === 'Etkinlik & Duyurular') {
            openEtkinlikModal();
        } else if (buttonText === 'Doğrudan Temin') {
            openDogrudanTeminModal();
        }
    });
    
    // Modal functionality
    $('.category-button').click(function() {
        $('.category-button').removeClass('active');
        $(this).addClass('active');
    });
    
    // Close modal when clicking outside
    $('.modal-overlay').click(function(e) {
        if (e.target === this) {
            closeModal();
        }
    });
});

// Modal functions
function openEbelediyeModal() {
    $('#ebelediyeModal').addClass('show');
}

function openOnlineHizmetlerModal() {
    $('#onlineHizmetlerModal').addClass('show');
}

function openEtkinlikModal() {
    $('#etkinlikModal').addClass('show');
}

function openDogrudanTeminModal() {
    $('#dogrudanTeminModal').addClass('show');
}

function closeModal() {
    $('.modal-overlay').removeClass('show');
}
