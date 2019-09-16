$(document).ready(function() {

	// youtube-video in popup
	$('.popup-youtube').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});

	  //sticky menu
		$("#sticker").sticky({topSpacing:0});

		
		// sales countdown
		$('.first-countdown').countdown({
			date: '09/17/2019 17:30:00'
			});

		$('.second-countdown').countdown({
			date: '09/17/2019 17:30:00'
			});
			
		$('.third-countdown').countdown({
			date: '09/17/2019 17:30:00'
			});
});