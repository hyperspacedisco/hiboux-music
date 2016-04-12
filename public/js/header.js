$(document).ready(function(){

    $('.bandcamp').hide();

	  $(window).on('scroll', function () {
        if ($(window).scrollTop() >= 70 && $(window).width() > 700 ){
            
            $('nav').addClass('sticky');
            $('.bandcamp').show();

          }
           
        else {
            $('nav').removeClass('sticky');
            $('.bandcamp').hide();
          }

      });


    

      
    


});
