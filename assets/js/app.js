$(function() { 
    $(".color-btn").on('click', function(){
        const color = $(this).attr("img-color")
        var _url = site_url + "welcome/random_article/" + color;
        location.href = _url;
    })

});