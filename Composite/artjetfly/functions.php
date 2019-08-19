<?php

add_action( 'wp_enqueue_scripts', 'artjetfly_style' );
add_action( 'wp_enqueue_scripts', 'artjetfly_scripts' );

function artjetfly_style() {

	// wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/css/slick.css' );
	// wp_enqueue_style( 'slick-theme-style', get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'fancybox-style', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css' );
	wp_enqueue_style( 'hamburgers.min-style', get_template_directory_uri() . '/assets/css/hamburgers.min.css' );
	wp_enqueue_style( 'mmenu-style', get_template_directory_uri() . '/assets/libs/mmenu-light-master/dist/mmenu-light.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

}


function artjetfly_scripts() {

	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'preloader-script', get_template_directory_uri() . '/assets/js/preloader.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'magnific-script', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'sticky-script', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), 'null', true );
	// wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'fancybox-script', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), 'null', true );
	wp_enqueue_script( 'mmenu-script', get_template_directory_uri() . '/assets/libs/mmenu-light-master/dist/mmenu-light.js', array('jquery'), 'null', true );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js' );

}


function root_acf_format_value( $value, $post_id, $field ) {
	
	$value = do_shortcode($value);
	
	return $value;
}

add_filter('acf/format_value/type=textarea', 'root_acf_format_value', 10, 3);


register_nav_menus(array(
	'top'    => 'Меню в шапке',    //Название месторасположения меню в шаблоне
));


// wp_nav_menu( [
// 	'theme_location'  => 'MEGA',
// 	'menu'            => 'header__menu', 
// 	'container'       => 'ul', 
// 	'container_class' => 'menuitems', 
// 	'menu_class'      => '', 
// 	'echo'            => true,
	//'fallback_cb'     => 'wp_page_menu',
	// 'before'          => '',
	// 'after'           => '',
	// 'link_before'     => '',
	// 'link_after'      => '',
// 	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
// 	'depth'           => 0,
// 	'walker'          => '',
// ] );
