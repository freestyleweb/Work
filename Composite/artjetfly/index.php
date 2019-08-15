<?php get_header(); ?>

<!-- data-wow-offset="150" -->


<main>
	<section class="applying wow fadeInUp" data-wow-delay="0.25s" id="applying" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/img/boat-bg.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title wow fadeInUp" data-wow-delay="0.25s">
							<h3><?php the_field('applying-section__title') ?></h3>
						</div>
						<div class="section__description wow fadeInUp" data-wow-delay="0.75s">
							<?php the_field('applying-section__description') ?>
						</div>
					</div>
					<div class="col-lg-6">

						<div id="accordion" class="applaying__accordian">
							<h4 class="wow fadeInUp" data-wow-delay="0.25s"><span class="accordion__icon"><i class="fas fa-home"></i></span><?php the_field('ui-accordion-header-1') ?></h4>
							<div><?php the_field('ui-accordion-content-1') ?></div>
							
							<h4 class="wow fadeInUp" data-wow-delay="0.5s"><span class="accordion__icon"><i class="fas fa-ship"></i></span><?php the_field('ui-accordion-header-2') ?></h4>
							<div><?php the_field('ui-accordion-content-2') ?></div>
							
							<h4 class="wow fadeInUp" data-wow-delay="0.75s"><span class="accordion__icon"><i class="fas fa-industry"></i></span><?php the_field('ui-accordion-header-3') ?></h4>
							<div><?php the_field('ui-accordion-content-3') ?></div>
							
							<h4 class="wow fadeInUp" data-wow-delay="1s"><span class="accordion__icon"><i class="fas fa-car"></i></span><?php the_field('ui-accordion-header-4') ?></h4>
							<div><?php the_field('ui-accordion-content-4') ?></div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="advantages" id="advantages">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title wow fadeInUp" data-wow-delay="0.25s">
							<h3><?php the_field('advantages-section__title') ?></h3>
						</div>
						<div class="section__description wow fadeInUp" data-wow-delay="0.75s">
							<?php the_field('advantages-section__description') ?>
						</div>
					</div>
				</div>
				<div class="row">

					<div class="col-xl-3 col-lg-3 col-md-6">
						<div class="advantages__items">
								<div class="advantages__item wow fadeInUp" data-wow-delay="0.25s" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/img/icons/advantages-icon-1.svg)">
									<h5 class="advantages__item-title wow fadeInUp"><?php the_field('advantages-title-1') ?></h5>
									<div class="advantages__item-description wow fadeInUp">
										<?php the_field('advantages-description-1') ?>
									</div>
								</div>
							</div>
						</div>
					
					<div class="col-xl-3 col-lg-3 col-md-6">
						<div class="advantages__items">
							<div class="advantages__item wow fadeInUp"  data-wow-delay="0.5s" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/img/icons/advantages-icon-2.svg)">
								<h5 class="advantages__item-title wow fadeInUp"><?php the_field('advantages-title-2') ?></h5>
								<div class="advantages__item-description wow fadeInUp">
									<?php the_field('advantages-description-2') ?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6">
						<div class="advantages__items">
							<div class="advantages__item wow fadeInUp"  data-wow-delay="0.75s" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/img/icons/advantages-icon-3.svg)">
								<h5 class="advantages__item-title wow fadeInUp"><?php the_field('advantages-title-3') ?></h5>
								<div class="advantages__item-description wow fadeInUp">
									<?php the_field('advantages-description-3') ?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-3 col-md-6">
						<div class="advantages__items">
							<div class="advantages__item wow fadeInUp"  data-wow-delay="1s" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/img/icons/advantages-icon-4.svg)">
								<h5 class="advantages__item-title wow fadeInUp" data-wow-offset="150"><?php the_field('advantages-title-4') ?></h5>
								<div class="advantages__item-description wow fadeInUp">
									<?php the_field('advantages-description-4') ?>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="products" id="products">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title wow fadeInUp"  class="wow fadeInUp" data-wow-delay="0.25s">
							<h3>Наша продукция</h3>
						</div>
						<div class="section__description wow fadeInUp" class="wow fadeInUp" data-wow-delay="0.5s">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
			</div>
			<div class="container">	
				<div class="products__gallery">
				<?php the_field('products__gallery-item') ?>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-1.jpg" class="products__gallery-item wow fadeInUp" data-wow-delay="0.25s"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-1.jpg" alt="catamaran"></a>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-2.jpg" class="products__gallery-item wow fadeInUp" data-wow-delay="0.25s"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-2.jpg" alt="catamaran"></a>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-3.jpg" class="products__gallery-item wow fadeInUp" data-wow-delay="0.25s"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-3.jpg" alt="catamaran"></a>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-4.jpg" class="products__gallery-item wow fadeInUp" data-wow-delay="0.25s"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-4.jpg" alt="catamaran"></a>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-5.jpg" class="products__gallery-item wow fadeInUp" data-wow-delay="0.25s"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-5.jpg" alt="catamaran"></a>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-6.jpg" class="products__gallery-item wow fadeInUp" data-wow-delay="0.25s"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-6.jpg" alt="catamaran"></a>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-7.jpg" class="products__gallery-item wow fadeInUp" data-wow-delay="0.25s"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-7.jpg" alt="catamaran"></a>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-8.jpg" class="products__gallery-item wow fadeInUp" data-wow-delay="0.25s"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-8.jpg" alt="catamaran"></a>
					<a href="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-9.jpg" class="products__gallery-item wow fadeInUp" data-wow-delay="0.25s"><img src="<?php bloginfo( 'template_url' ); ?>/assets/img/gallery/img-9.jpg" alt="catamaran"></a>
				</div>
			</div>
		</section>

		<section class="video">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section__title wow fadeInUp" data-wow-delay="0.25s">
							<h3>Наше видео</h3>
						</div>
						<div class="section__description wow fadeInUp" data-wow-delay="0.5s">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="video__slider wow fadeInUp" data-wow-delay="0.5s">
							<div class="video">
								<iframe width="640" height="360" src="https://www.youtube.com/embed/telxQ1OBGMw" frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen></iframe>
							</div>
							<div class="video">
								<iframe width="640" height="360" src="https://www.youtube.com/embed/telxQ1OBGMw" frameborder="0"
									allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
									allowfullscreen></iframe>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>

		<section class="map wow fadeInLeft" data-wow-offset="150" id="map">
			<div class="our-map">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84568.1881795212!2d32.14562324919831!3d48.51874425671116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d0432708441b67%3A0xe828c54149a0e8d8!2z0JrRgNC-0L_QuNCy0L3QuMyB0YbQutC40LksINCa0LjRgNC-0LLQvtCz0YDQsNC00YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDI1MDAw!5e0!3m2!1sru!2sua!4v1565089257711!5m2!1sru!2sua"
					width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</section>
	</main>

	<div id="modal">
    <form class="modal__form footer__form">
      <label class="footer__form-title" for="">Готовы обсудить Ваш проект?</label>
      <label class="footer__form-subtitle" for="">Наш технический специалист свяжется с Вами и проконсультирует <span>бесплатно!</span></label>
      <label class="footer__form-name" for="name">Ваше имя:</label>
      <input type="text" name="name" placeholder="Введите Ваше имя" required>
      <label class="footer__form-email" for="email">Ваш E-mail</label>
      <input type="email" name="email" placeholder="Введите Ваш E-mail" required>
      <label class="footer__form-message" for="message">Ваше сообщение</label>
      <textarea type="textarea" rows="2" placeholder="Введите Ваше сообщение" required></textarea>                
      <button class="footer__form-btn" type="submit">Отправить сообщение</button>
    </form>
  </div>

<?php get_footer(); ?>
