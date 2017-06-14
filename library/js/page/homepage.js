function loadHomepage() {
	var $ = jQuery;
	
	$(document).ready(function() {
		//debugger;
		
    //Hide the large logo for just the homepage.
    jQuery('.navbar-brand').find('img').hide()
    
    //Create the background image.
    //$('body').css('background', 'none');
    $('body').css('background', "#000000 url('/wp-content/themes/wickson2/library/img/homepage-background.jpg') no-repeat center");
    $('body').css('min-height', '2899px');
    
    //Hide the default header
    //$('header').hide();
    
    responsiveVideo()
    
	});
	
	$(window).resize(function() {
		//debugger;
		responsiveVideo()
    
	});
  
  function responsiveVideo() {
    
    //Adjust the iframe video to make it responsive
		var windowWidth = $('#videoDiv').width();
		var targetWidth = windowWidth;
		var targetHeight = targetWidth*480/854;
		
		$('iframe').attr('width', targetWidth);
		$('iframe').attr('height', targetHeight);
    
  }
}
