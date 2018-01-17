jQuery(document).ready(function($){

	//Main menu
	$('#main-menu').smartmenus();
	
	//Mobile menu toggle
	$('.navbar-toggle-2').click(function(){
		$('.sidebar').toggle( "slide" );
	});

    $( document ).ready(function() {
  var hamburger = $('#hamburger-icon');
  hamburger.click(function() {
     hamburger.toggleClass('active');
     return false;
  });
});
    
	//Mobile dropdown menu
	if ( $(window).width() < 1259) {
		$(".region-primary-menu li a:not(.has-submenu)").click(function () {
			$('.region-primary-menu').hide();
	    });
	}
});



