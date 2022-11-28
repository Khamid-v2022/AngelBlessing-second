$(function() { 
    $(".color-btn").on('click', function(){
        const color = $(this).attr("img-color")
        var _url = site_url + "welcome/random_article/" + color;
        location.href = _url;
    })

    $(".angel-number-btn").on('click', function(){
        var _url = site_url + "AngelNumber/random_article";
        // location.href = _url;
    })
    
    $(".archangel-post-btn").on('click', function(){
        var _url = site_url + "AngelMessage/random_article_angel_message";
        location.href = _url;
    })
});