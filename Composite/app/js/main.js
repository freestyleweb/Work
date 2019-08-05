$(document).ready(function(){
    $("#sticker").sticky({topSpacing:0});

    $('.slider').slick({
      autoplay: true,
      dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      arrows : false,
      cssEase: 'linear'
    });
    
  });


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


  // $(document).ready(function(){
  //   $('.slider').slick({
      
  //   });
  // });