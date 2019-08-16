//Header__slider
// $('.slider').slick({
//   autoplay: true,
//   dots: false,
//   infinite: true,
//   speed: 500,
//   fade: true,
//   arrows : false,
//   cssEase: 'linear'
// });


$(document).ready(function(){

  //wow efects
  new WOW().init();
   
  //button to top
  var btn = $('#button');
  $(window).scroll(function() {
    if ($(window).scrollTop() > 600) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });
  
  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '600');
  });


  //sticky menu
  $("#sticker").sticky({topSpacing:0});

 
  //video slider
  $('.video__slider').slick({
    autoplay: false,
    dots: false,
    infinite: true,
    speed: 500,
    fade: true,
    arrows: true,
    cssEase: 'linear',
    adaptiveHeight: true,
    swipe: true, 
    responsive: [
      {
        breakpoint: 576,
        settings: {
          arrows : false
       }
      }]       
  });


  

  //gallery
  
  // $('.products__gallery').magnificPopup({
  //   delegate: 'a',
  //   type: 'image',
  //   tLoading: 'Loading image #%curr%...',
  //   mainClass: 'mfp-img-mobile',
  //   gallery: {
  //     enabled: true,
  //     navigateByImgClick: true,
  //     preload: [0,1] // Will preload 0 - before current, and 1 after the current image
  //   },
  //   image: {
  //     tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
  //     // titleSrc: function(item) {
  //     //   return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
  //     // }
  //   }
  // });
    
  });


  //jQuery UI Accordeon
  $( function() {
    var icons = {
      header: "ui-icon-home",
      activeHeader: "ui-icon-home"
    };
    $( "#accordion" ).accordion({
      icons: null
    });
    $( "#toggle" ).button().on( "click", function() {
      if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
        $( "#accordion" ).accordion( "option", "icons", null );
      } else {
        $( "#accordion" ).accordion( "option", "icons", icons );
      }
    });
  } );
