$(function() { 
	fetchDataFromAPI("aries", "today");

	$(".horoscope-btn").on("click", function(){
		const sel_horo = $(this).attr("data-name").toLowerCase();
		console.log(sel_horo);
		$("#selected_horoscope").html(sel_horo.toUpperCase());
		fetchDataFromAPI(sel_horo, "today");
		$(".btn-horoscope-date[data-date!='today']").removeClass("btn-success").addClass("btn-outline-secondary");
		$(".btn-horoscope-date[data-date='today']").removeClass("btn-outline-secondary").addClass("btn-success");

		$(".horoscope-btn").removeClass("active");
		$(this).addClass("active");
	})

	$(".btn-horoscope-date").on("click", function(){
		const sel_horo = $("#selected_horoscope").html().toLowerCase();
		const sel_date = $(this).attr("data-date");
		console.log(sel_horo, sel_date);
		fetchDataFromAPI(sel_horo, sel_date);
		$(".btn-horoscope-date[data-date!='" + sel_date + "']").removeClass("btn-success").addClass("btn-outline-secondary");
		$(".btn-horoscope-date[data-date='" + sel_date + "']").removeClass("btn-outline-secondary").addClass("btn-success");
	})
})

function fetchDataFromAPI(sel_horo, sel_date){
	const settings = {
		"async": true,
		"crossDomain": true,
		"url": "https://sameer-kumar-aztro-v1.p.rapidapi.com/?sign=" + sel_horo + "&day=" + sel_date,
		"method": "POST",
		"headers": {
			"X-RapidAPI-Key": "89f66c4c17msh7520e3da52718b0p17d4bajsn9b69417dfec3",
			"X-RapidAPI-Host": "sameer-kumar-aztro-v1.p.rapidapi.com"
		}
	};

	$.ajax(settings).done(function (resp) {
		console.log(resp);
		// $("#selected_horoscope").html(resp.compatibility.toUpperCase());

		$("#sel_date").html(resp.current_date);
		$("#detail_personal").html(resp.description);
		$("#compatibility").html(resp.compatibility);
		$("#favorite_color").html(resp.color);
		$("#lucky_number").html(resp.lucky_number);
		$("#lucky_time").html(resp.lucky_time);
		$("#mood").html(resp.mood);

	});
}