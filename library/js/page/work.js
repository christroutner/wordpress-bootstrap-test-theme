function loadWork() {
	var $ = jQuery;
	
	$(document).ready(function() {
		//debugger;
		
    //Hide the large logo for just the homepage.
    //$('a.navbar-brand').find('img').hide();
    
    //Create the background image.
    $('body').css('background', "#000000 url('/wp-content/themes/wickson2/library/img/work-list-background.jpg') no-repeat center");
    $('body').css('min-height', '2899px');
    
    //Hide the default header
    jQuery('#main').find('header').hide();
    
    //Initialize CSS to reflect the scroll settings.
    $(".navbar-fixed-top").removeClass("top-nav-collapse");
    $('.navbar-brand').find('img').attr('src', '/wp-content/themes/wickson2/library/img/wickson-logo200px.png')
    $('.navbar').css('min-height', '225px');
    
    /* =======================================
        collapse the navbar on scroll
    =======================================*/
    // jQuery to collapse the navbar on scroll
    $(window).on('scroll', function() {
      //debugger;
      
      if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $('.navbar-brand').find('img').attr('src', '/wp-content/themes/wickson2/library/img/wickson-logo50px.png')
        $('.navbar-brand').find('img').css('margin-top', '-10px');
        $('.navbar').css('min-height', '55px');
      } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $('.navbar-brand').find('img').attr('src', '/wp-content/themes/wickson2/library/img/wickson-logo200px.png')
        $('.navbar').css('min-height', '225px');
      }
    });
    
	});
	
	$(window).resize(function() {
		//debugger;
		
    
	});
  
}
