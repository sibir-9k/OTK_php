<?php
/*
Template Name: Contacts

*/
?>

<?php get_header(); ?>

<section class="main">
    <div class="container">
      <div class="row">
        <nav class="main-nav">
          <ul class="nav-menu">
            <li class="nav-item"><a href="<?php echo get_the_permalink(35); ?>" class="nav-link">Блог</a></li>
            <li class="nav-item"><a href="<?php echo get_the_permalink(33); ?>" class="nav-link">Вопросы и ответы</a></li>
            <li class="nav-item"><a href="<?php echo get_the_permalink(39); ?>" class="nav-link">Каталог</a></li>
            <li class="nav-item logo"><a href="<?php echo get_the_permalink(7); ?>" class="logo">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/Logo_black.svg" alt="Логотип ОТК" width="310" height="59" />
              </a>
            </li>
            <li class="nav-item"><a href="<?php echo get_the_permalink(31); ?>" class="nav-link">Контакты</a></li>
            <li class="nav-item basket"><a href="#" class="nav-link">Корзина</a>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/tree_number_black.svg" alt="иконка деревьев" />
            </li>
          </ul>
          <hr class="hr-header" />
        </nav>

        <div class="row">
          <div class="contacts">
            <div class="contacts-title col-4">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/phone_contacts.svg" alt="">
              <div class="info-contacts">
                <p>Телефон</p>
                <a href="tel:88000000000">8 (800) 000 00 00</a>
              </div>
            </div>
            <div class="contacts-title col-4">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/location_contact.svg" alt="">
              <div class="info-contacts">
                <p>Адрес</p>
                <address>г. Псков, Баумана 25</address>
              </div>
            </div>
            <div class="contacts-title col-4">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/email_contact.svg" alt="">
              <div class="info-contacts">
                <p>E-mail</p>
                <a href="mailto:info@otk.ru">info@otk.ru</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="promo">
            <div class="connection col-7">
              <h1>Мы на связи </h1>
              <p>
                Если у вы хотите оставить отзыв о нашей работе или связаться по любому другому вопросу,
                заполните форму обратной связи и мы ответим вам в течении 24 часов.</p>
            </div>
            <div class="contact form col-5">
              <?php echo do_shortcode('[contact-form-7 id="30" title="Контактная форма"]')?>
            </div>
          </div>
        </div>

        <div class="row service">
          <div class="roadmap-section my-5">
            <div class="container row d-flex align-items-center">
              <div class="col-8 d-flex justify-content-between">
                <div class="roadmap-item">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/payment_contacts.svg" alt="Оплата" class="roadmap-icon">
                  <div class="roadmap-title">Оплата</div>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/path_white.svg" alt="path" class="roadmap-path">
                <div class="roadmap-item">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/delivery_contacts.svg" alt="Доставка" class="roadmap-icon">
                  <div class="roadmap-title">Доставка</div>
                </div>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/path_white.svg" alt="path" class="roadmap-path">
                <div class="roadmap-item">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/service_contacts.svg" alt="Сервис" class="roadmap-icon">
                  <div class="roadmap-title">Сервис</div>
                </div>
              </div>
              <div class="col-4 text-center">
                <button class="btn btn-roadmap">Подробнее</button>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>

  <?php get_footer(); ?>