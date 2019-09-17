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