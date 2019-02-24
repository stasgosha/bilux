$(document).ready(function(){

	// Mobile nav
	$('.menu-opener').bigSlide({
		side: 'left',
		easyClose: true,
		menuWidth: '260px'
	});

	$('.panel-close').click(function(){
		$('.menu-opener').click();
	});

	$('.wrapper[style*="left: 260px"]').click(function(){
		$('.menu-opener').click();
	});

	// Product Images
	$('[data-big-image]').click(function(){
		$('.big-image img').attr('src', $(this).data('big-image'));
		$(this).addClass('selected').siblings().removeClass('selected');
	});

	$('[data-big-image]:first-child').click();

	// Sliders
	$('.advantages-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true
	});

	$('.addresses-slider').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: true
	});

	// Select Field
	jcf.setOptions('Select', {
		wrapNative: false,
		wrapNativeOnMobile: true,
		fakeDropInBody: false
	});

	jcf.replace( $('.select-field select') );

	// Tabs
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings().hide(0);
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab]:first-child").trigger('click');

	// Sticky Header
	var isSticky = false;

	$(window).scroll(function(){
		if( !isSticky && $(window).scrollTop() > 250 ){
			$('.header').addClass('sticky');
			// $('.header-top').slideUp(300);
			isSticky = true;
		} else if(isSticky && $(window).scrollTop() <= 250){
			$('.header').removeClass('sticky');
			// $('.header-top').slideDown(300);
			isSticky = false;
		}
	});

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		var location = window.location.href;
		var cur_url = location.split('/').pop();

		$('.top-nav li, .panel-nav li, .footer-nav li').each(function () {
			var link = $(this).find('a').attr('href');

			// console.log(link);

			if (cur_url == '') {
				cur_url = 'index.php';
			}

			if (cur_url == link)
			{
				$(this).addClass('current-menu-item');
				$(this).parents('li').addClass('current-menu-parent');
			}
		});
	});
});