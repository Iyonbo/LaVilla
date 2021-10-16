function vw_interior_designs_menu_open_nav() {
	window.vw_interior_designs_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function vw_interior_designs_menu_close_nav() {
	window.vw_interior_designs_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(function($){
	"use strict";
	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
	});
});

jQuery(document).ready(function () {
	window.vw_interior_designs_currentfocus=null;
  	vw_interior_designs_checkfocusdElement();
	var vw_interior_designs_body = document.querySelector('body');
	vw_interior_designs_body.addEventListener('keyup', vw_interior_designs_check_tab_press);
	var vw_interior_designs_gotoHome = false;
	var vw_interior_designs_gotoClose = false;
	window.vw_interior_designs_responsiveMenu=false;
 	function vw_interior_designs_checkfocusdElement(){
	 	if(window.vw_interior_designs_currentfocus=document.activeElement.className){
		 	window.vw_interior_designs_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vw_interior_designs_check_tab_press(e) {
		"use strict";
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vw_interior_designs_responsiveMenu){
			if (!e.shiftKey) {
				if(vw_interior_designs_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vw_interior_designs_gotoHome = true;
			} else {
				vw_interior_designs_gotoHome = false;
			}

		}else{

			if(window.vw_interior_designs_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vw_interior_designs_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vw_interior_designs_responsiveMenu){
				if(vw_interior_designs_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vw_interior_designs_gotoClose = true;
				} else {
					vw_interior_designs_gotoClose = false;
				}
			
			}else{

			if(window.vw_interior_designs_responsiveMenu){
			}}}}
		}
	 	vw_interior_designs_checkfocusdElement();
	}
});

(function( $ ) {

	jQuery('document').ready(function($){
	    setTimeout(function () {
    		jQuery("#preloader").fadeOut("slow");
	    },1000);
	});

	$(window).scroll(function(){
	  	var sticky = $('.header-sticky'),
	      scroll = $(window).scrollTop();

	  	if (scroll >= 100) {
	  		sticky.addClass('header-fixed');
  			document.getElementById("video-section").style.padding ="6% 0 3%";
	  	}
	  	else sticky.removeClass('header-fixed');
	});

	$(document).ready(function () {
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup i, .scrollup').fadeIn();
		    } else {
		        $('.scrollup i, .scrollup').fadeOut();
		    }
		});
		$('.scrollup i, .scrollup').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});
	});

	
})( jQuery );

jQuery(document).ready(function () {
	function vw_interior_designs_search_loop_focus(element) {
		var vw_interior_designs_focus = element.find('select, input, textarea, button, a[href]');
		var vw_interior_designs_firstFocus = vw_interior_designs_focus[0];  
		var vw_interior_designs_lastFocus = vw_interior_designs_focus[vw_interior_designs_focus.length - 1];
		var KEYCODE_TAB = 9;

		element.on('keydown', function vw_interior_designs_search_loop_focus(e) {
	    var isTabPressed = (e.key === 'Tab' || e.keyCode === KEYCODE_TAB);

	    if (!isTabPressed) { 
	      return; 
	    }

	    if ( e.shiftKey ) /* shift + tab */ {
	      if (document.activeElement === vw_interior_designs_firstFocus) {
	        vw_interior_designs_lastFocus.focus();
	          e.preventDefault();
	        }
	      } else /* tab */ {
	      if (document.activeElement === vw_interior_designs_lastFocus) {
	        vw_interior_designs_firstFocus.focus();
	          e.preventDefault();
	        }
	      }
	  });
	}
	jQuery('.search-box span a').click(function(){
        jQuery(".serach_outer").slideDown(1000);
    	vw_interior_designs_search_loop_focus(jQuery('.serach_outer'));
    });
    jQuery('.page-template-custom-home-page .home-header1 #header .search-box span a').click(function(){
        jQuery(".page-template-custom-home-page .home-header1 #header .serach_outer").slideDown(1000);
    	vw_interior_designs_search_loop_focus(jQuery('.page-template-custom-home-page .home-header1 #header .serach_outer'));
    });

    jQuery('.closepop a').click(function(){
        jQuery(".serach_outer").slideUp(1000);
    });
});