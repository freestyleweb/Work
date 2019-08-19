<footer class="footer" id="footer" style="background-image: url(<?php bloginfo( 'template_url' ); ?>/assets/img/footer-bg-new.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-2">
          <div class="footer__logo">
            <a class="footer__logo-link" href="/"><img src="<?php the_field('footer__logo') ?>" alt="ArtJetFly"></a>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 d-none d-lg-block">
          <div class="footer__nav-products">
            <ul class="footer__nav-menu">            
              <li class="footer__nav-item"><a href="#products"><?php the_field('footer__nav-item') ?></a></li>
              <li class="footer__nav-item"><a href="#products"><?php the_field('footer__nav-item-1') ?></a></li>
              <li class="footer__nav-item"><a href="#products"><?php the_field('footer__nav-item-2') ?></a></li>
              <li class="footer__nav-item"><a href="#products"><?php the_field('footer__nav-item-3') ?></a></li>
              <li class="footer__nav-item"><a href="#products"><?php the_field('footer__nav-item-4') ?></a></li>
              <li class="footer__nav-item"><a href="#products"><?php the_field('footer__nav-item-5') ?></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-3 col-md-4 d-none d-md-block">
          <div class="footer__nav-contacts">
            <ul class="footer__nav-menu">
              <li class="footer__nav-item"><a href="#footer"><?php the_field('footer__nav-contacts') ?></a></li>
              <li class="footer__nav-item"><a href="#footer"><?php the_field('footer__nav-locate') ?></a></li>
              <li class="footer__nav-item"><a href="tel:<?php the_field('footer__phone-one') ?>"><?php the_field('footer__phone-one') ?></a></li>
              <li class="footer__nav-item"><a href="tel:<?php the_field('footer__phone-two') ?>"><?php the_field('footer__phone-two') ?></a></li>
              <li class="footer__nav-item"><a href="<?php the_field('footer__social-fb') ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php the_field('footer__social-inst') ?>"><i class="fab fa-instagram"></i></a><a href="<?php the_field('footer__social-youtube') ?>"><i class="fab fa-youtube"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-5">
          <div class="footer__form">
            <form action="" class="form">
              <label class="footer__form-title" for="">Готовы обсудить Ваш проект?</label>
              <label class="footer__form-subtitle" for="">Наш технический специалист свяжется с Вами и проконсультирует <span>бесплатно!</span></label>
              <label class="footer__form-name" for="name">Ваше имя:</label>
              <input type="name" placeholder="Введите Ваше имя" required>
              <label class="footer__form-email" for="email">Ваш E-mail</label>
              <input type="email" placeholder="Введите Ваш E-mail" required>
              <label class="footer__form-message" for="message">Ваше сообщение</label>
              <textarea type="textarea" rows="2" placeholder="Введите Ваше сообщение" required></textarea>                
              <button class="footer__form-btn" type="submit">Отправить сообщение</button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8">
          <div class="copyright">
            <p class="artjetfly">ArtJetFly, 2019 © Все права защищены.</p>  <p class="freestyle">Разработка: <span class="freestyle__link"><a href="https://freestyleweb.github.io">Freestyle Web Studio</a></span></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  

  <?php wp_footer(); ?>



  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</body>

</html>