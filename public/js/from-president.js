// From President Section functionality
$(document).ready(function(){
    // Load Instagram posts into the .instagram-grid (max 9)
    function loadInstagram() {
        $.ajax({
            url: '/api/instagram/latest',
            method: 'GET',
            success: function(res){
                var $grid = $('.instagram-grid');
                $grid.empty();
                var posts = (res && res.posts) ? res.posts : [];
                if (!posts.length) {
                    // Fallback: clickable placeholders linking to profile
                    var profileUrl = $grid.data('profile-url') || 'https://www.instagram.com/hkilca/';
                    for (var i=0;i<3;i++) {
                        $grid.append('<a href="'+profileUrl+'" target="_blank" class="col-4" style="display:block;background:#fff;border-radius:15px;height:220px;margin-right:15px;margin-bottom:15px;"></a>');
                    }
                    return;
                }
                posts.slice(0,9).forEach(function(p){
                    var caption = (p.caption || '').replace(/"/g,'&quot;');
                    var card = '<a href="'+p.permalink+'" target="_blank" class="col-4" style="display:block;position:relative;border-radius:15px;overflow:hidden;margin-right:15px;margin-bottom:15px;">'
                        + '<img src="'+p.image+'" alt="'+caption+'" style="width:100%;height:220px;object-fit:cover;object-position:center;display:block;">'
                        + '</a>';
                    $grid.append(card);
                });
            },
            error: function(){
                console.log('Instagram fetch failed');
            }
        });
    }

    loadInstagram();
});
