jQuery(document).ready(function(){

	/* Top Menu Hover Effect */
	jQuery('.top-header nav ul li').hover(function(){
		jQuery(this).children('ul').stop().slideDown('fast');
	},function(){
		jQuery(this).children('ul').stop().slideUp('fast');
	});

	jQuery('.top-header nav ul li').children('ul').hover(function(){
		jQuery(this).prev('a').addClass('active');
	},function(){
		jQuery(this).prev('a').removeClass('active');
	});

	/* Mobile Menu Touch Effect */
	jQuery('.mobile-header nav ul li a').hover(function(){
		jQuery(this).next('ul').stop().slideDown('fast');
	},function(){
		jQuery(this).next('ul').stop().slideUp('fast');
	});
	
});