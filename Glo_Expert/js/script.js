$(document).ready(function() {

		var hamb_btn = $('.hamburger-btn');
		var hamb_btn_active = $('.hamburger-btn_active');
		var mobile_menu = $('.mobile-menu');
		var nav_link = $('.mobile-menu li');
	
		hamb_btn.click(function(){
			hamb_btn.toggleClass('hamburger-btn_active');
			mobile_menu.toggleClass('mobile-menu_active');
		});
		nav_link.click(function(){
			hamb_btn.toggleClass('hamburger-btn_active');
			mobile_menu.toggleClass('mobile-menu_active');
		});

	// youtube-video in popup
	$('.popup-youtube').magnificPopup({
		disableOn: 319,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});


	//button to top
	var btn = $('#button');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
  });
	

	//sticky menu
	$('#sticker').sticky({topSpacing:0});


	//burger button
	$('.burger').on('click', function(e){
		e.preventDefault;
	});

	
	// sales countdown
	$('.sales-countdown-first').countdown({
		date: '09/17/2020 17:30:00'
		});

	$('.sales-countdown-second').countdown({
		date: '09/17/2020 17:30:00'
		});
		
	$('.sales-countdown-third').countdown({
		date: '09/17/2020 17:30:00'
		});
});