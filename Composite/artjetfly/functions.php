<?php

add_action( 'wp_enqueue_scripts', 'artjetfly_style' );
add_action( 'wp_enqueue_scripts', 'artjetfly_scripts' );

function artjetfly_style() {

	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'slick-theme-style', get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'hamburgers.min-style', get_template_directory_uri() . '/assets/css/hamburgers.min.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}


function artjetfly_scripts() {

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'preloader-script', get_template_directory_uri() . '/assets/js/preloader.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'sticky-script', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'fancybox-script', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), 'null', true );

}