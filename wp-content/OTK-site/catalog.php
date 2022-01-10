<?php
/*
Template Name: Catalog

*/
?>

<?php get_header(); ?>

<section class="promo">
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
        </div>

        <div class="row">
          <div class="slider">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <h1>10=11</h1>
                  <p>
                    При покупке каждых 10 метров агроткани 1 метр в подарок
                  </p>
                  <button class="btn btn-buy">купить</button>
                </div>
                <div class="carousel-item">
                  <h1>10=11</h1>
                  <p>
                    При покупке каждых 10 метров агроткани 1 метр в подарок
                  </p>
                  <button>Продать</button>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <section class="main">
    <div class="container">
      <div class="row">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom breadcrumb-black">
            <li class="breadcrumb-item">Главная</li>
            <li class="breadcrumb-item active" aria-current="page">Каталог</li>
          </ol>
        </nav>

        <div class="catalog-title col">
          <h2>Хвойные растения</h2>
          <hr class="hr-min" />
        </div>

        <div class="row">
          <div class="col-3">
            <div class="filter">
              <div class="point-block">
                <ul class="point-list">
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="">
                    Все
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="">
                    Хвойные деревья и кустарники
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="">
                    Крупномеры
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="">
                    Лиственные деревья
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="">
                    Плодовые деревья
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="">
                    Садовый инвентарь и оборудование
                  </li>
                </ul>
              </div>
              <div class="size-price">
                <div class="price">
                  <div class="middle">
                    <div class="multi-range-slider">
                      <input type="range" id="input-left" min="500" max="50000" value="500">
                      <input type="range" id="input-right" min="500" max="50000" value="50000">
                      <div class="slider">
                        <div class="track"></div>
                        <div class="range"></div>
                        <div class="thumb left">500</div>
                        <div class="thumb right">50000</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="size">
                  <div class="middle">
                    <div class="multi-range-slider">
                      <input type="range" id="input-left" min="500" max="50000" value="500">
                      <input type="range" id="input-right" min="500" max="50000" value="50000">
                      <div class="slider">
                        <div class="track"></div>
                        <div class="range"></div>
                        <div class="thumb left"></div>
                        <div class="thumb right"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="search">
                <div class="search-space">
                  <form class="d-flex">
                    <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Search" />
                    <button class="btn btn-search" type="submit">
                      <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/search.svg" alt="">
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row col-9">
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
            <button class="btn-pdf col-12">
              <h2>Скачайте полный каталог</h2>
              <a href="">Full_catalog_OTK.pdf</a>
            </button>
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
          </div>
          <div class="row row-catalog">
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
            <div class="catalog-item col">
              <a href="<?php echo get_the_permalink(37); ?>">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/catalog-tree.jpg" alt="дерево Туя Смарагд">
                <p>Туя Смарагд</p>
                <strong>5000 руб.</strong>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <nav aria-label="Page navigation example col">
          <div class="pag-block">
            <ul class="pagination col-3">
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/Arrow_right.svg" alt="Вперед" /></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="row service">

        <div class="roadmap-section my-5">
          <div class="container row d-flex align-items-center">
            <div class="col-8 d-flex justify-content-between">
              <div class="roadmap-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/payment.svg" alt="Оплата" class="roadmap-icon">
                <div class="roadmap-title">Оплата</div>
              </div>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/path.svg" alt="path" class="roadmap-path">
              <div class="roadmap-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/shipment.svg" alt="Доставка" class="roadmap-icon">
                <div class="roadmap-title">Доставка</div>
              </div>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/path.svg" alt="path" class="roadmap-path">
              <div class="roadmap-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/service.svg" alt="Сервис" class="roadmap-icon">
                <div class="roadmap-title">Сервис</div>
              </div>
            </div>
            <div class="col-4 text-center">
              <button class="btn btn-roadmap">Подробнее</button>
            </div>
          </div>
        </div>
  </section>

  <?php get_footer(); ?>