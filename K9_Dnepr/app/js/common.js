$(function() {

	$('#my-menu').mmenu({
        extensions: [ 'widescreen', 'theme-white', 'effect-menu-slide', 'pagedim-black'],
        navbar: {
            title: '<img src="../img/Logo.svg" alt="К9 Днепр">'
        },
        offCanvas: {
            position: 'right'
        }
    })
    
	var api = $('#my-menu').data('mmenu');
	api.bind('opened', function () {
        $('.hamburger').addClass('is-active');
    }).bind('closed', function () {
        $('.hamburger').removeClass('is-active');
    });

	$('.carousel-main').owlCarousel({
        loop: true,
        nav: false,
        items: 1,
        smartSpeed: 700,
        navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
        responsiveClass: true,


    });

});
