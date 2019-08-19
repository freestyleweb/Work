<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>ArtJetFly</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body>


<div id="page-preloader" class="preloader">
  <div class="loader"></div>
</div>

  

  <header class="header" id="header">
      
      
    <a id="button"></a> <!-- button to top -->
      
    <div class="header__top header__top-contacts">
      <div class="container">
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-8 col-sm-8 d-none d-sm-block">
            <div class="header__phone">
              <div class="phone">
                <a href="tel:<?php the_field('phone-one') ?>"><span><i class="fas fa-phone"></i></span><?php the_field('phone-one') ?></a>
              </div>
              <div class="phone">
                <a href="tel:<?php the_field('phone-two') ?>"><span><i class="fas fa-phone"></i></span><?php the_field('phone-two') ?></a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 d-none d-lg-block">
            <div class="header__location">
              <a href="#map"><span><i class="fas fa-map-marker-alt"></i></span><?php the_field('header__location') ?></a>
            </div>
          </div>
          <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 d-none d-sm-block">
            <div class="header__social">
              <a href="<?php the_field('header__social-fb') ?>" target="_blank"><span><i class="fab fa-facebook-f"></i></span></a>
              <a href="<?php the_field('header__social-inst') ?>" target="_blank"><span></span><i class="fab fa-instagram"></i></span></a>
              <a href="<?php the_field('header__social-youtube') ?>" target="_blank"><span></span><i class="fab fa-youtube"></i></span></a>
            </div>
          </div>
          <div class="col-xl-1 col-lg-1 col-md-2 col-sm-2 col-12">
            <div class="header__language">
              <a href="#"><span><i class="fas fa-globe-asia"></i></span>Ru</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
     
    <nav class="header__nav" id="sticker">
      <div class="container" style="position: relative">
        <div class="row">
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-4 d-flex align-items-center">
            <a class="header__logo" href="/"><img src="<?php the_field('header__logo') ?>" alt="ArtJetFly"></a>
          </div>
          <!-- <button class="header__nav-btn">
            <i class="fas fa-bars"></i>
          </button> -->
          <div class="col-xl-7 col-lg-7 col-md-6 d-sm-none d-none d-md-block align-items-center align-items-center">
            <div class="header__menu">

            <?php 
              wp_nav_menu( array(
                'menu_class'=>'header__menu-items',
                'theme_location'=>'top'
              ) );
            ?>
              
              <!-- <ul class="header__menu-items">
                <li class="header__menu-item"><a href="#applying">Применение</a></li>
                <li class="header__menu-item"><a href="#advantages">Преимущества</a></li>
                <li class="header__menu-item"><a href="#products">Продукция</a></li>
                <li class="header__menu-item"><a href="#footer">Контакты</a></li>
              </ul> -->
            </div>
            <!-- <div class="menu__mobile">
              <ul class="menu__mobile-items">
                <li class="menu__mobile-item"><a href="#applying">Применение</a></li>
                <li class="menu__mobile-item"><a href="#advantages">Преимущества</a></li>
                <li class="menu__mobile-item"><a href="#products">Продукция</a></li>
                <li class="menu__mobile-item"><a href="#footer">Контакты</a></li>
              </ul>
            </div> -->
          </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-7 col-6 d-flex align-items-center">
            <div class="header__callback">
              <button data-fancybox data-src="#modal" href="javascript:;" class="header__callback-btn">Напишите нам</button>
            </div>
          </div>
          <!-- <div class="col-2">
            <div class="hamburger hamburger--squeeze js-hamburger">
              <div class="hamburger-box">
                <div class="hamburger-inner"></div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </nav>
      
    <div class="header__slider">
      <div class="offer-wrapper">
        <div class="container">
          <div class="row">
            <div class="offset-xl-4 col-xl-8">
              <div class="offer">
                <h1 class="offer__title">
                  <div><?php the_field('offer__title-1') ?></div>
                  <div><?php the_field('offer__title-2') ?></div>                  
                </h1>
                <div class="offer__description">
                  <div><?php the_field('offer__description-1') ?></div>
                  <div><?php the_field('offer__description-2') ?></div> 
                </div>
                <div class="offer__submit">
                  <button data-fancybox data-src="#modal" href="javascript:;" class="offer__submit-btn">Оставить заявку</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="slider">
        <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
        <!-- <?php echo do_shortcode('[metaslider title="New Slideshow"]'); ?> -->
      </div>
    </div>
  </header>