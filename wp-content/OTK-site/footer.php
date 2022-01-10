<footer>
    <div class="container">
      <div class="row">
        <div class="nav-footer col bg-footer-pattern">
          <div class="footer-logo col-4">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/logo_white.svg" alt="" />
          </div>
          <nav class="footer-menu col-5">
            <ul>
              <li class="nav-item">
                <a href="<?php echo get_the_permalink(31); ?>" class="nav-link-footer">Контакты</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo get_the_permalink(35); ?>" class="nav-link-footer">Блог</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo get_the_permalink(33); ?>" class="nav-link-footer">Вопросы и ответы</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo get_the_permalink(7); ?>" class="nav-link-footer">Каталог</a>
              </li>
            </ul>
          </nav>
          <div class="copyright col-3">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/copyright_icon.svg" alt="" />
            <p>Сайт разработан, 2021 (с) All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
  <?php wp_footer_green_light(); ?>
  <?php wp_footer_catalog(); ?>
</body>
</html>