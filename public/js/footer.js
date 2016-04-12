$(document).ready(function(){


	$("footer").hide();
	

	 $(window).scroll(function() {
    	if ($(document).height() <= ($(window).height() + $(window).scrollTop()) && $(window).width() > 700) {
        //Bottom Reached
        $("footer").show(20);
    	} else {
    	$("footer").hide(20);
    	}
	});


});