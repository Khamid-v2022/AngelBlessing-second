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
        const title = $(this).attr("data-title");
        $("#topic_title").val(title);
        $("#topic_category").val(topic_category);
        $("#quiz-form").submit();
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
                    $("#reveal_card").css("display", "flex");
                    
                } else {
                    $(".select-card-container").css("display", "none");
                    $("#reveal_card_no").css("display", "block");
                }
               

        })
    })
   
});