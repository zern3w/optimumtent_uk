(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();

  }); // end of document ready
})(jQuery); // end of jQuery name space


 $(document).ready(function(){
      $('.carousel').carousel();
    });
    
    
$(document).ready(function(){
	// to set the width right even when position is fixed
	var divWidth = $('.card-title').width(); 
	$('.menu-bottom').css('width', divWidth+'px');

//
	var fixmeTop2 = $('.menu-bottom').offset().top;
	$(window).scroll(function() {
   	 	var currentScroll2 = $(window).scrollTop();
    	if (currentScroll2 >= fixmeTop2) {
        	$('.menu-bottom').css({
          	  	position: 'fixed',
           	 	top: '25px'      
        	});
    	} else {
        	$('.menu-bottom').css({
            	position: 'relative'
        });
    }
});
});
    