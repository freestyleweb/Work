<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prykhist
 */

global $prykhist_options;

?>

	<!--/div> --><!-- #content -->

	

	<footer class="footer" id="footer">
		
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-12">

				<?php $custom_logo = $prykhist_options['prykhist-logo']['url']; ?>
					<a class="footer__logo" style='text-decoration:none' href="<?php echo home_url("/"); ?>"><?php if($custom_logo){ ?>
						<img style="max-width: 170px;" src="<?php echo esc_url($custom_logo); ?>" alt="Prykhist_Logo">
					<?php } else {
						echo "<h1 style='text-transform:uppercase; color:#fff; font-weight:900;'>Прихист</h1>";
					} ?>
					</a>				

					<p class="footer__description">
						<?php if($prykhist_options['prykhist-description']) { ?><?php echo $prykhist_options['prykhist-description']; ?><?php } ?>
					</p>
				</div>

				<div class="col-lg-4 col-md-12">
					<div class="footer__contacts">

						<div class="footer__phones">
							<a href="tel:<?php echo esc_attr($prykhist_options['prykhist-phone-one']); ?>"><?php if($prykhist_options['prykhist-phone-one']) { ?><?php echo esc_attr($prykhist_options['prykhist-phone-one']); ?><?php } ?></a>
							<a href="tel:<?php echo esc_attr($prykhist_options['prykhist-phone-two']); ?>"><?php if($prykhist_options['prykhist-phone-two']) { ?><?php echo esc_attr($prykhist_options['prykhist-phone-two']); ?><?php } ?></a>
						</div>

						<div class="footer__location" style="max-width: 230px;">
							<p><?php if($prykhist_options['prykhist-location']) { ?><?php echo $prykhist_options['prykhist-location']; ?><?php } ?></p>
						</div>

					
						<div class="footer__email">							
							<a href="mailto:<?php echo esc_attr($prykhist_options['prykhist-email']); ?>"><?php if($prykhist_options['prykhist-email']) { ?><?php echo esc_attr($prykhist_options['prykhist-email']); ?><?php } ?></a>	
						</div>

					</div>
				</div>
				<div class="col-lg-4 d-none d-lg-block">
					<div class="footer__form">
						<form action="#">

							<div class="footer__form_phone">
								<label for="phone-number">Ваш телефон:</label>
								<input type="tel" id="phone-number" name="phone-number" placeholder="+380671111111" pattern="[+][0-9]{2}[0-9]{3}[0-9]{7}" required>
							</div>

							<div class="footer__form_mail">
								<label for="e-mail">Ваш e-mail:</label>
								<input type="mail" id="e-mail" name="e-mail" placeholder="host@mail.com" required >
							</div>

							<div class="footer__form_message">
								<label for="message">Ваше повідомлення:</label>
								<textarea type="mail" id="message" name="message" placeholder="Текст Вашого повідомлення" required></textarea>
							</div>					
							
							<div class="footer__form_btn">
								<button type="submit">Надіслати</button>
							</div>
							

						</form>
					</div>
				</div>
			</div>
			<!-- /.row -->
			
			<div class="row">

				<div class="col-lg-12">
					<ul class="footer__social d-flex">
					
						<li class="social__item d-flex"><?php //echo do_shortcode('[cn-social-icon selected_icons="1"]'); ?><a href="https://www.facebook.com/groups/prikhist" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li class="social__item d-flex"><a href="https://t.me/prikhist" target="_blank"><i class="fab fa-telegram-plane"></i></a></li>
						<li class="social__item d-flex"><a href="https://www.youtube.com/channel/UCAelUK06P_EeLwHWTWHCchQ" target="_blank"><i class="fab fa-youtube"></i></a></li>
					</ul> 
				</div>					
				<div class="col-lg-12">
					<a class="rights" href="#"><?php if($prykhist_options['prykhist-copyright']) { ?><?php echo esc_attr($prykhist_options['prykhist-copyright']); ?><?php } ?></a> 
				</div>					
			</div>
			<!-- /.row -->

		</div>
	</footer>



	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'prykhist' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'prykhist' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'prykhist' ), 'prykhist', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer>
</div> -->

<?php wp_footer(); ?>

</body>
</html>
