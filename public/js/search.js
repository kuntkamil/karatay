// Search functionality
$(document).ready(function(){
    // Search functionality
    $('.search-button').click(function() {
        var searchTerm = $('.search-input').val();
        if(searchTerm.trim() !== '') {
            // Here you can add your search logic
            console.log('Searching for: ' + searchTerm);
            // For now, just show an alert
            alert('Arama: ' + searchTerm);
        }
    });
    
    // Allow search on Enter key
    $('.search-input').keypress(function(e) {
        if(e.which == 13) {
            $('.search-button').click();
        }
    });
});
