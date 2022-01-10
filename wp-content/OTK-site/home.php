<?php
/*
Template Name: home

*/
?>

<?php get_header(); ?>

<section class="promo-header">
      <div class="container">
        <nav class="main-nav">
          <ul class="nav-menu">
            <li class="nav-item"><a href="<?php echo get_the_permalink(35); ?>" class="nav-link">Блог</a></li>
            <li class="nav-item"><a href="<?php echo get_the_permalink(33); ?>" class="nav-link" >Вопросы и ответы</a></li>
            <li class="nav-item"><a href="<?php echo get_the_permalink(39); ?>" class="nav-link">Каталог</a></li>
            <li class="nav-item logo"><a href="<?php echo get_the_permalink(7); ?>" class="logo">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/logo_white.svg" alt="Логотип ОТК" width="310" height="59" />
              </a>
            </li>
            <li class="nav-item"><a href="<?php echo get_the_permalink(31); ?>" class="nav-link">Контакты</a></li>
            <li class="nav-item basket"><a href="#" class="nav-link">Корзина</a>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/tree_number_white.svg" alt="иконка деревьев" />
            </li>
          </ul>
          <hr class="hr-header" />
        </nav>

        <div class="promo">
          <div class="promo-title">
            <h1>10 лет привозим растения для сада и города из питомников Европы</h1>
          </div>
          <div class="promo-text">
            <p>Ежегодно, мы привозим посадочный материал для своих объектов и
              под заказ. У нас вы можете выбрать растения для вашего сада или
              парка, для ландшафтного дизайна любой территории.
            </p>
          </div>
        </div>
      </div>
    </section>
  <!-- Каталог растений -->
  <section class="catalog">
    <div class="container">
      <div class="row">
        <div class="catalog-header">
          <div class="catalog-item col-3">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_catalog_1.svg" alt="">
            <p>Более 1000 наименований растений</p>
          </div>
          <div class="catalog-item col-3">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_catalog_2.svg" alt="">
            <p>Комплексный контроль всего цикла от формирования заказа до доставки клиенту</p>
          </div>
          <div class="catalog-item col-3">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_catalog_3.svg" alt="">
            <p>Поставки исключительно из питомников Европы</p>
          </div>
          <div class="catalog-item col-3">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_catalog_4.svg" alt="">
            <p>Привозим взрослые кустарники, деревья и многлетники</p>
          </div>
        </div>

        <div class="catalog-title coating-header">
          <h2>Каталог растений</h2>
          <hr class="hr-min">
        </div>
        <div class="tree">
          <ul class="list-group">
            <li class="list-item">Хвойные растения</li>
            <li class="list-item">Лиственные растения</li>
            <li class="list-item">Кустарники</li>
            <li class="list-item">Плодовые растения</li>
          </ul>
        </div>
        <div class="catalog-list">
          <div class="catalog-item col-3">
            <a href="<?php echo get_the_permalink(37); ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
              <p>Туя Смарагд</p>
              <strong>5000 руб.</strong>
            </a>
          </div>
          <div class="catalog-item col-3">
            <a href="<?php echo get_the_permalink(37); ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
              <p>Туя Смарагд</p>
              <strong>5000 руб.</strong>
            </a>
          </div>
          <div class="catalog-item col-3">
            <a href="<?php echo get_the_permalink(37); ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
              <p>Туя Смарагд</p>
              <strong>5000 руб.</strong>
            </a>
          </div>
          <div class="catalog-item col-3">
            <a href="<?php echo get_the_permalink(37); ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
              <p>Туя Смарагд</p>
              <strong>5000 руб.</strong>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Почему мы работаем -->
  <section class="home">
    <div class="container">
      <div class="row row-cols-2">
        <div class="col">
          <div class="home-header">
            <div class="home-title">
              <h2>Почему мы работем только с Европейскими питомниками?</h2>
            </div>
            <div class="home-list">
              <ul class="home-point">
                <li class="home-checked">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/check.svg" alt="Галочка">
                  <div>
                    <p> Совместимость с отечественным климатом</p>
                    <div class="border-check"></div>
                  </div>
                </li>
                <li class="home-checked">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/check.svg" alt="Галочка">
                  <div>
                    <p>Больше возможностей реализовывать на своем участке неординарные ландшафтные решения</p>
                    <div class="border-check"></div>
                  </div>
                </li>
                <li class="home-checked">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/check.svg" alt="Галочка">
                  <p>Ассортимент растений шире, чем у отечественных питомников</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="home-img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/home-2.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Каталог растений -->
  <section class="catalog">
    <div class="container">
      <div class="row">
        <div class="catalog-list">
          <div class="catalog-item col-3">
            <a href="<?php echo get_the_permalink(37); ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
              <p>Туя Смарагд</p>
              <strong>5000 руб.</strong>
            </a>
          </div>
          <div class="catalog-item col-3">
            <a href="<?php echo get_the_permalink(37); ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
              <p>Туя Смарагд</p>
              <strong>5000 руб.</strong>
            </a>
          </div>
          <div class="catalog-item col-3">
            <a href="<?php echo get_the_permalink(37); ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
              <p>Туя Смарагд</p>
              <strong>5000 руб.</strong>
            </a>
          </div>
          <div class="catalog-item col-3">
            <a href="<?php echo get_the_permalink(37); ?>">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
              <p>Туя Смарагд</p>
              <strong>5000 руб.</strong>
            </a>
          </div>
        </div>

        <div class="button">
          <button class="btn btn-all">
            <a href="<?php echo get_the_permalink(39); ?>">Все растения +</a>
          </button>
        </div>

        <div class="row">
          <div class="sale">
            <div class="sale-block col-6"><img src="<?php bloginfo('template_url'); ?>/assets/img/sale-40.jpg" alt=""></div>
            <div class="sale-block col-6"><img src="<?php bloginfo('template_url'); ?>/assets/img/sale-10=11.jpg" alt=""></div>
          </div>
        </div>

        <div class="row row-cols-3">
          <div class="coating-header col-12">
            <h2>Садовый инвентарь и оборудование</h2>
            <hr class="hr-min">
          </div>
          <div class="coating-item block col-4">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/coating.jpg" alt="">
            <p>Агроткань</p>
            <strong>1000 руб./м</strong>
          </div>
          <div class="coating-item block col-4">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/coating.jpg" alt="">
            <p>Агроткань</p>
            <strong>1000 руб./м</strong>
          </div>
          <div class="coating-item block col-4">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/coating.jpg" alt="">
            <p>Агроткань</p>
            <strong>1000 руб./м</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- На что можно расчитывать -->
  <section class="benefits">
    <div class="container">
      <div class="row">
        <div class="benefits-header col-8">
          <h1>На что вы можете расчитывать работая с нами?</h1>
          <hr class="hr-min_white">
        </div>
        <div class="row">
          <div class="benefits-points">
            <ul class="benefits-list col-6">
              <li class="benefits-list_title">
                <div class="benefits-title_img col-1">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/number_1.svg" alt="1">
                </div>
                <div class="benefits-titel_text col">
                  <h2>Ответим на все ваши вопросы</h2>
                  <p>Мы проконсультируем Вас и поможем выбрать именно те растения, для которых будет благоприятен наш
                    климат.</p>
                </div>
              </li>
              <li class="benefits-list_title">
                <div class="benefits-title_img col-1">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/number_2.svg" alt="2">
                </div>
                <div class="benefits-titel_text col">
                  <h2>Весь посадочный материал соответствует стандартам</h2>
                  <p>
                    У Вас не возникнут проблемы
                    с приживаемостью растений, так как весь посадочный материал соответствует предписаниям
                    Союза Питомников Польши, Союза Питомников Германии, Союза питомников Венгрии и соответствует всем
                    требованиям европейской и международной стандартизации и обладают сильной корневой системой.
                  </p>
                </div>
              </li>
              <li class="benefits-list_title">
                <div class="benefits-title_img col-1">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/number_3.svg" alt="3">
                </div>
                <div class="benefits-titel_text col">
                  <h2>Aккуратная перевозка</h2>
                  <p>
                    При перевозке сохраняется целостность корневого кома, т.к. растения выкапываются непосредственно
                    перед отправкой и упаковываются в сетку и мешковину (для крупномерных деревьев) или только в
                    мешковину (для кустарников).
                  </p>
                </div>
              </li>
            </ul>
            <ul class="benefits-list col-6">
              <li class="benefits-list_title">
                <div class="benefits-title_img col-1">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/number_4.svg" alt="4">
                </div>
                <div class="benefits-titel_text col">
                  <h2>Прямая доставка до вашего участка</h2>
                  <p>
                    Доставка растений осуществляется напрямую из питомника в г.
                    Псков непосредственно на ваш участок в течении 3-5 дней со дня выкопки, т.е. посадочный материал
                    не травмируется в процессе транспортировки.
                  </p>
                </div>
              </li>
              <li class="benefits-list_title">
                <div class="benefits-title_img col-1">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/number_5.svg" alt="5">
                </div>
                <div class="benefits-titel_text col">
                  <h2>Стоимость доставки
                    и «растаможки» включена
                    в стоимость растений
                  </h2>
                  <p>
                    Таможенная очистка («растаможка») товара, осуществляется непосредственно в Псковской
                    области на территории крупнейшего таможенно-логистического терминала области ООО «Транзит-Терминал»
                    расположенного в непосредственной близости от границы РФ . На СВХ ООО «Транзит-Терминал» все
                    необходимые фитосанитарные
                    условия для осуществления работ с подконтрольными Россельхознадзору грузами, требующими особых
                    условия хранения ,
                    что позволяет нам минимизировать время доставки растений, обеспечить их сохранность и предоставить
                    нашим клиентам
                    наилучшую окончательную стоимость растений европейского качества.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Осуществляем полный контроль -->
  <section class="delivery">
    <div class="container">

      <div class="row">
        <div class="delivery-header col-7">
          <h2>Мы осуществляем полный контроль за заказом от формирования груза до доставки в РФ</h2>
          <hr class="hr-min_black">
        </div>

        <div class="row">
          <div class="delivery-block1 col-6">
            <div class="delivery-text">
              <p>Вы выбираете растения по каталогам питомников у нас на сайте либо в офисе. Заказывая посадочный
                материал, очень важно правильно указывать все параметры, ведь от них зависят и внешний вид растения, и
                его цена. Мы поможем вам разобраться
                во всех нюансах, стандартах и условных обозначениях , чтобы вы получили желаемое. </p><br>
              <strong>Для этого просто свяжитесь с нами: </strong>
            </div>
            <div>
              <strong>
                <div class="delivery-tel">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_tel.svg" alt="">
                  <div class="qq-tel">
                    <a href="tel:88000000000">8 800 000 00 00</a>
                    <a href="tel:8801112233">8 800 111 22 33</a>
                  </div>
                </div>
                <div class="delivery-email">
                  <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_massage.svg" alt="">
                  <div class="info-contacts">
                    <a href="mailto:help@otk.ru">help@otk.ru</a>
                  </div>
                </div>
              </strong>
            </div>
          </div>
          <div class="delivery-block2 col-6">
            <ul>
              <li class="d-block2">
                <h2>Все официально</h2>
                <p>Заключаем договор купли-продажи с каждым клиентом.</p>
              </li>
              <li class="d-block2">
                <h2>100% предоплата</h2>
                <p>Таково условие работы с Европейскими питомниками.</p>
              </li>
              <li class="d-block2">
                <h2>Доставка в любой регион РФ</h2>
                <p>Но цены на сайте указаны на условиях поставки в г.Псков в иные города доставка оговаривается по
                  телефону.</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Диаграмма -->

  <section class="scheme">
    <div class="container">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/scheme_otk.png" alt="">
    </div>
  </section>

  <!-- Блог -->
  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="blog-header col-12">
          <h2>Блог</h2>
          <hr class="hr-min">
          <div class="blog-text d-flex justify-content-center col-8">
            <p>Здесь мы пишем о правилах ухода за растениями, их сочитаемости между собой,
              а так же любую информацию, которая поможет вам в поддержании сада.</p>
          </div>
        </div>
        <div class="blog-card col-4">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img.jpg" alt="">
          <div class="blog-card_text">
            <strong>Как правильно пересаживать хвойные кустарники</strong>
            <p>Хвойные кустарники, 22 мая 2021</p>
          </div>
        </div>
        <div class="blog-card col-4">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img.jpg" alt="">
          <div class="blog-card_text">
            <strong>Как правильно пересаживать хвойные кустарники</strong>
            <p>Хвойные кустарники, 22 мая 2021</p>
          </div>
        </div>
        <div class="blog-card col-4">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img.jpg" alt="">
          <div class="blog-card_text">
            <strong>Как правильно пересаживать хвойные кустарники</strong>
            <p>Хвойные кустарники, 22 мая 2021</p>
          </div>
        </div>
        <div class="button">
          <button class="btn btn-all">
            <a href="<?php echo get_the_permalink(35); ?>">Все статьи +</a>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Нас рекомендуют -->
  <section class="recommendation">
    <div class="container">
      <div class="row">
        <div class="recommendation-header col-12">
          <h2>Нас рекомендуют</h2>
          <hr class="hr-min">
        </div>
        <div class="row">
          <div class="photo-recomendation col-4"><img src="<?php bloginfo('template_url'); ?>/assets/img/photo-recomendation.jpg" alt=""></div>
          <div class="recommendation-text col-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat.
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
              laborum.</p>
            <strong>Елена Летучая, телеведущая</strong>
          </div>
        </div>
      </div>

      <!-- Карусель -->
      <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner row w-100 mx-auto flex-nowrap">
            
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/photo-recomendation.jpg" class="d-block w-auto photo-rec" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/photo-recomendation.jpg" class="d-block w-auto photo-rec" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/park-gorikogo-text.jpg" class="d-block w-auto park" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/park-gorikogo-text.jpg" class="d-block w-auto park" alt="...">
            </div>
            <div class="carousel-item active">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/park-gorikogo-text.jpg" class="d-block w-auto park" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/photo-recomendation.jpg" class="d-block w-auto photo-rec" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Остались вопросы? -->
  <section class="qq">
    <div class="container">
      <div class="row">
        <div class="qq-header col">
          <h2>Остались вопросы?</h2>
          <hr class="hr-min_white">
        </div>
        <div class="row">
          <div class="qq-phone col-6">
            <h2>Позвоните нам</h2>
            <div class="qq-tel">
              <a href="tel:88000000000">8 (800) 000 00 00</a>
              <a href="tel:88001112233">8 (800) 111 22 33</a>
            </div>
          </div>
          <div class="qq-mail col-6">
            <h2>Или напишите</h2>
            <div class="info-contacts">
              <a href="mailto:info@otk.ru">info@otk.ru</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="svg-picture col-6">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/tree.svg" alt="">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/bushes.svg" alt="">
          </div>
          <div class="svg-picture col-6">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/car-icon.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
