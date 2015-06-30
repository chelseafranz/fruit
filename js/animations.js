/* ------------------------------------------------------------------------ */
/* Slide Right Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_slideright').addClass('slideRight');		
	} else {
		jQuery('.animation_slideright').removeClass('slideRight');				
	}
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_slideright').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("slideRight");
			}
		});
	});
	return false;
});	
	


/* ------------------------------------------------------------------------ */
/* Slide Left Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_slideleft').addClass('slideLeft');		
	} else {
		jQuery('.animation_slideleft').removeClass('slideLeft');				
	}
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_slideleft').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("slideLeft");
			}
		});
	});
	return false;
});	

/* ------------------------------------------------------------------------ */
/* Slide Up Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_slideup').addClass('slideUp');		
	} else {
		jQuery('.animation_slideup').removeClass('slideUp');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_slideup').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("slideUp");
			}
		});
	});
	return false;
});	

/* ------------------------------------------------------------------------ */
/* Slide Down Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_slidedown').addClass('slideDown');		
	} else {
		jQuery('.animation_slidedown').removeClass('slideDown');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_slidedown').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("slideDown");
			}
		});
	});
	return false;
});	


/* ------------------------------------------------------------------------ */
/* Slide Expand Up Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_slideexpandup').addClass('slideExpandUp');		
	} else {
		jQuery('.animation_slideexpandup').removeClass('slideExpandUp');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_slideexpandup').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("slideExpandUp");
			}
		});
	});
	return false;
});	

/* ------------------------------------------------------------------------ */
/* Fade In Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_fadein').addClass('fadeIn');		
	} else {
		jQuery('.animation_fadein').removeClass('fadeIn');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_fadein').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("fadeIn");
			}
		});
	});
	return false;
});	

/* ------------------------------------------------------------------------ */
/* FadeInUp Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_fadeInUp').addClass('fadeInUp');		
	} else {
		jQuery('.animation_fadeInUp').removeClass('fadeInUp');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_fadeInUp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("fadeInUp");
			}
		});
	});
	return false;
});	


/* ------------------------------------------------------------------------ */
/* fadeInDown Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_fadeInDown').addClass('fadeInDown');		
	} else {
		jQuery('.animation_fadeInDown').removeClass('fadeInDown');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_fadeInDown').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("fadeInDown");
			}
		});
	});
	return false;
});	


/* ------------------------------------------------------------------------ */
/* flipInX Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_flipInX').addClass('flipInX');		
	} else {
		jQuery('.animation_flipInX').removeClass('flipInX');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_flipInX').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("flipInX");
			}
		});
	});
	return false;
});	

/* ------------------------------------------------------------------------ */
/* flipInY Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_flipInY').addClass('flipInY');		
	} else {
		jQuery('.animation_flipInY').removeClass('flipInY');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_flipInY').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("flipInY");
			}
		});
	});
	return false;
});	


/* ------------------------------------------------------------------------ */
/* Slide Left Simple Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_slideLeftsimple').addClass('slideLeftsimple');		
	} else {
		jQuery('.animation_slideLeftsimple').removeClass('slideLeftsimple');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_slideLeftsimple').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("slideLeftsimple");
			}
		});
	});
	return false;
});	

	//    jQuery('#home-quote').removeClass('active');
       setTimeout(function(){
          
        jQuery('#home-quote').addClass('active');
		 jQuery('#home-image').addClass('active');
    },2500);

    

/* ------------------------------------------------------------------------ */
/* Slide Right Simple Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_slideRightsimple').addClass('slideRightsimple');		
	} else {
		jQuery('.animation_slideRightsimple').removeClass('slideRightsimple');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_slideRightsimple').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("slideRightsimple");
			}
		});
	});
	return false;
});	

/* ------------------------------------------------------------------------ */
/* Title Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.title').addClass('fadeIn');		
	} else {
		jQuery('.title').removeClass('fadeIn');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.title').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("fadeIn");
			}
		});
	});
	return false;
});	


/* ------------------------------------------------------------------------ */
/* pullUp Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_pullUp').addClass('pullUp');		
	} else {
		jQuery('.animation_pullUp').removeClass('pullUp');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_pullUp').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("pullUp");
			}
		});
	});
	return false;
});	

/* ------------------------------------------------------------------------ */
/* pullDown Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_pullDown').addClass('pullDown');		
	} else {
		jQuery('.animation_pullDown').removeClass('pullDown');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_pullDown').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("pullDown");
			}
		});
	});
	return false;
});	

/* ------------------------------------------------------------------------ */
/* stretchLeft */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_stretchLeft').addClass('stretchLeft');		
	} else {
		jQuery('.animation_stretchLeft').removeClass('stretchLeft');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_stretchLeft').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("stretchLeft");
			}
		});
	});
	return false;
});	

/* ------------------------------------------------------------------------ */
/* stretchRight Animation */
/* ------------------------------------------------------------------------ */

if (jQuery(window).scrollTop() > jQuery(window).height()){
		jQuery('.animation_stretchRight').addClass('stretchRight');		
	} else {
		jQuery('.animation_stretchRight').removeClass('stretchRight');				
	}
	
		jQuery(document).ready(function( $ ) {
    // Your jQuery code here, using $ to refer to jQuery.
$(window).scroll(function() {
		$('.animation_stretchRight').each(function(){
		var imagePos = $(this).offset().top;

		var topOfWindow = $(window).scrollTop();
        var WindowHeight = $(window).innerHeight();
			if (imagePos < topOfWindow+((0.9)*WindowHeight)) {
				$(this).addClass("stretchRight");
			}
		});
	});
	return false;
});	