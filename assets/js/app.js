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

    $(".quiz-btn").on('click', function(){
        const topic_category = $(this).attr("data-topic");
        let title = $(this).attr("data-title");
        var _url = site_url + "LoveQuiz/tarot_card/" + topic_category + "/" + title.replace(/\s/g, '-');
        location.href = _url;
    })


    $(".select-card").on("click", function(){

        $.post( site_url + "LoveQuiz/getRandomPost", 
            {
                topic_category: $("#topic_category").val() 
            }, function(resp){

                resp = JSON.parse(resp);
                if(resp.status){
                    $("#cardHeader").html(resp.message.title);
                    $("#cardDescription").html(resp.message.content);

                    $("#reveal_card_img").attr("src", resp.message.image);
                    $("#cardLink").attr("href", resp.message.url);

                    $(".select-card-container").css("display", "none");
                    var viewport_width = document.documentElement.clientWidth;
                    if(viewport_width <= 768)
                        $("#reveal_card").css("display", "block");
                    else 
                        $("#reveal_card").css("display", "flex");
                    
                } else {
                    $(".select-card-container").css("display", "none");
                    $("#reveal_card_no").css("display", "block");
                }
               

        })
    })

    $(".crystal-item-img").on("click", function(){
        let category_name = $(this).attr("data-catetory_name");
        category_name = category_name.replaceAll(' ', '-2-');
        var _url = site_url + "CrystalBall/random_article/" + category_name;
        location.href = _url;
    })
   

    $(".symbol-card-item").on("click", function(){
        var _url = site_url + "AngelicSymbols/random_article";
        location.href = _url;
    })
});