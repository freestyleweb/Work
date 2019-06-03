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

<body <?php body_class(); ?>>


<?php $custom_logo = $prykhist_options['prykhist_logo']['url']; ?>
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
			<li class="mobile-menu__item"><a href="index.html">Головна</a></li>
			<li class="mobile-menu__item"><a href="news-page.html">Новини</a></li>
			<li class="mobile-menu__item"><a href="rezonans-page.html">Резонанс</a></li>
			<li class="mobile-menu__item"><a href="inter-page.html">Інтерв’ю</a></li>
			<li class="mobile-menu__item"><a href="afisha-page.html">Афіша</a></li>
			<li class="mobile-menu__item"><a href="journal-page.html">Газета</a></li>
			
			<div class="line"></div>

			<ul class="mobile-menu__social">
				<li class="social-item"><a href="https://www.facebook.com/groups/prikhist" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
				<li class="social-item"><a href="https://t.me/prikhist" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
				<li class="social-item"><a href="https://www.youtube.com/channel/UCAelUK06P_EeLwHWTWHCchQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
			</ul>	
			
			<div class="location">
				м. Нікополь, вул. І.Богуна 6-б, офіс 208
				(р-н ТРЦ «Billa»), 53213
			</div>
			<div class="phones">
				<a href="tel:+380990850406" class="phone">+38 (099) 085 04 06</a>
				<a href="tel:+380660579514" class="phone">+38 (066) 057 95 14</a>
			</div>
			<div class="mail">
				<a href="mailto:prikhist@gmail.com">prikhist@gmail.com</a>
			</div>
		</ul>
	</div>				

	<a class="mobile-search__wrap">
		<i class="fas fa-search"></i>
	</a>
			
	<form class="mobile-search">					
		<input type="search" name="q" placeholder="Пошук"> 
		<button type="submit">
			<i class="fas fa-search"></i>
		</button>
	</form>

	<h1 class="header__logo">
		<a href="index.html"><?php if($custom_logo){ ?>
			<img src="<?php echo $custom_logo ?>" alt="Prykhist_Logo">
		<?php } else {
			echo 'No_Logo';
		} ?>
		</a>				
	</h1>

	<nav>
		<div class="main-menu">
			<div class="container">
				<div class="row">
					<div class="offset-md-1 col-md-8">
						<ul class="main-menu__items">
							<li class="main-menu__item"><a href="index.html">Головна</a></li>
							<li class="main-menu__item"><a href="news-page.html">Новини</a></li>
							<li class="main-menu__item"><a href="rezonans-page.html">Резонанс</a></li>
							<li class="main-menu__item"><a href="inter-page.html">Інтерв’ю</a></li>
							<li class="main-menu__item"><a href="afisha-page.html">Афіша</a></li>
							<li class="main-menu__item"><a href="journal-page.html">Газета</a></li>
						</ul>
					</div>
					<div class="col-md-3 center-v">
						<form class="search">
							<input type="search" name="q" placeholder="Пошук"> 
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




<!-- 
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'prykhist' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$prykhist_description = get_bloginfo( 'description', 'display' );
			if ( $prykhist_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $prykhist_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'prykhist' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header>
 -->
	<div id="content" class="site-content">
