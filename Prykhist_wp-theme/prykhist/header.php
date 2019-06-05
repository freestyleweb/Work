<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prykhist
 */

 global $prykhist_options;

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body /*style="margin-top:-25px"*/ <?php body_class(); ?>>



<header class="header" id="header">
		
	<a class="hamb__wrap">
		<div class="hamburger hamburger--squeeze">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>				
	</a>

	<div class="mobile-menu__wrap">
		
		<ul class="mobile-menu">

		<?php		
			wp_nav_menu( array(
				'theme_location' => 'mobile-menu',
				'menu_id'        => '',							
				'container'      => 'ul',
			) );
		?>
			
			<div class="line"></div>

			<ul class="mobile-menu__social">
				<li class="social-item"><a href="https://www.facebook.com/groups/prikhist" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li class="social-item"><a href="https://t.me/prikhist" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
				<li class="social-item"><a href="https://www.youtube.com/channel/UCAelUK06P_EeLwHWTWHCchQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
			</ul>	
			
			<div class="location">
				<?php if($prykhist_options['prykhist-location']) { ?><?php echo $prykhist_options['prykhist-location']; ?><?php } ?>
			</div>

			<div class="phones">
				<a href="tel<?php echo esc_attr($prykhist_options['prykhist-phone-one']); ?>:" class="phone"><?php if($prykhist_options['prykhist-phone-one']) { ?><?php echo esc_attr($prykhist_options['prykhist-phone-one']); ?><?php } ?></a>
				<a href="tel<?php echo esc_attr($prykhist_options['prykhist-phone-two']); ?>:" class="phone"><?php if($prykhist_options['prykhist-phone-two']) { ?><?php echo esc_attr($prykhist_options['prykhist-phone-two']); ?><?php } ?></a>
			</div>

			<div class="mail">
				<a href="mailto:<?php echo esc_attr($prykhist_options['prykhist-email']); ?>"><?php if($prykhist_options['prykhist-email']) { ?><?php echo esc_attr($prykhist_options['prykhist-email']); ?><?php } ?></a>
			</div>
		</ul>
	</div>				

	<a class="mobile-search__wrap">
		<i class="fas fa-search"></i>
	</a>
			
	<form class="mobile-search" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">					
		<input type="search" value="" name="s" placeholder="Пошук"> 
		<button type="submit">
			<i class="fas fa-search"></i>
		</button>
	</form>

	<?php $custom_logo = $prykhist_options['prykhist-logo']['url']; ?>
	<h1 class="header__logo">
		<a style="text-decoration:none" href="<?php echo home_url("/"); ?>"><?php if($custom_logo){ ?>
			<img src="<?php echo esc_url($custom_logo); ?>" alt="Prykhist_Logo">
		<?php } else {
			echo "<h1 style='text-transform:uppercase; color:#fff; font-weight:900;'>Прихист</h1>";
		} ?>
		</a>				
	</h1>

	<nav>
		<div class="main-menu">
			<div class="container">
				<div class="row">
					<div class="offset-md-1 col-md-8">
					<?php		

						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => '',							
							'menu_class'     =>	'main-menu__items',
							'container'      => 'ul',
						) );
					?>
					</div>
					<div class="col-md-3 center-v">
						<form class="search search-form" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<input type="search" value="" name="s" placeholder="Пошук"> 
							<button type="submit">
								<i class="fas fa-search"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>												
	</nav>
		
</header>

	<div id="content" class="site-content">
