/* --------------------------------------------- 
* Filename:     custom.js
* Version:      1.0.0 (2018-02-20)
* Website:      http://www.zymphonies.com
* Description:  Global script
* Author:       Zymphonies Team
                info@zymphonies.com
-----------------------------------------------*/

// Main menu
function theme_menu(){

	// Main menu
	jQuery('#main-menu').smartmenus();
	
	// Mobile menu toggle
	jQuery('.navbar-toggler').click(function(){
		jQuery('.region-primary-menu').slideToggle();
	});

	// Mobile dropdown menu
	if ( jQuery(window).width() < 767) {
		jQuery(".region-primary-menu li a:not(.has-submenu)").click(function () {
			jQuery('.region-primary-menu').hide();
	    });
	}

}

// Flexslider
function theme_home(){

	jQuery('.flexslider').flexslider({
    	animation: "slide"	
    });

}

// Bootstrap utils
function bootstrapUtils(){

	jQuery('[data-toggle="tooltip"]').tooltip();

}

// Sticky navigation

var sticky_navigation_offset_top = jQuery('.header-navbar').offset().top;

function sticky_navigation(){

	var scroll_top = jQuery(window).scrollTop();
	    
    if (scroll_top > sticky_navigation_offset_top) { 
        jQuery('.main-menu').css({ 'position': 'fixed', 'top':0, 'left':0 });
    } else {
		jQuery('.main-menu').css({ 'position': 'relative' }); 
    }
}

// DOM ready
jQuery(document).ready(function($){
	theme_menu();
	theme_home();
	bootstrapUtils();
});

// Window scroll
jQuery(window).scroll(function() {
	sticky_navigation();
});
