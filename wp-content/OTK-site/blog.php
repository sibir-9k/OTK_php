<?php
/*
Template Name: Blog

*/
?>

<?php get_header(); ?>
<section class="main">
    <div class="container">
      <div class="row">
        <nav class="main-nav">
          <ul class="nav-menu">
            <li class="nav-item">
              <a href="<?php echo get_the_permalink(35); ?>" class="nav-link">Блог</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo get_the_permalink(33); ?>" class="nav-link">Вопросы и ответы</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo get_the_permalink(39); ?>" class="nav-link">Каталог</a>
            </li>
            <li class="nav-item logo">
              <a href="<?php echo get_the_permalink(7); ?>" class="logo">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/Logo_black.svg" alt="Логотип ОТК" width="310" height="59" />
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo get_the_permalink(31); ?>" class="nav-link">Контакты</a>
            </li>
            <li class="nav-item basket">
              <a href="#" class="nav-link">Корзина</a>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/tree_number_black.svg" alt="иконка деревьев" />
            </li>
          </ul>
          <hr class="hr-header" />
        </nav>


      <div class="catalog-title col">
          <h2>Последние статьи</h2>
          <hr class="hr-min" />
        </div>

        <div class="row">
          <div class="col-3">
            <div class="filter">
              <div class="point-block">
                <ul class="point-list">
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="" />
                    Все
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="" />
                    Хвойные деревья и кустарники
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="" />
                    Крупномеры
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="" />
                    Лиственные деревья
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="" />
                    Плодовые деревья
                  </li>
                  <li class="point-item">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/icon_point_catalog.svg" alt="" />
                    Садовый инвентарь и оборудование
                  </li>
                </ul>
              </div>
              <div class="search">
                <div class="search-space">
                  <form class="d-flex">
                    <input class="form-control mr-2" type="search" placeholder="Поиск" aria-label="Search" />
                    <button class="btn btn-search" type="submit">
                      <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/search.svg" alt="" />
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="row col-9">
            <div class="catalog-item col">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img-1.jpg" alt="дерево Туя Смарагд" />
              <div class="info-card">
                <p class="date">12 мая 2021</p>
                <h2>Корневая система туи</h2>
                <p class="text">
                  Благодаря своим декоративным качествам, туи вышли на одно из первых мест в списке самых популярных
                  растений для озеленения участков и создания ландшафтных композиций. В этой статье мы рассказем, как
                  совмещать и пересаживать этот вид хвойных кустарников.
                </p>
              </div>
            </div>

            <div class="catalog-item col">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img-2.jpg" alt="дерево Туя Смарагд" />
              <div class="info-card">
                <p class="date">12 мая 2021</p>
                <h2>Как вырастить голубую ель из черенка в домашних условиях</h2>
                <p class="text">Самый простой способ разведения культуры — это черенкование голубой ели. При соблюдении
                  правил выращивания саженцы прекрасно приживаются и уже через 2–3 года формируются в полноценные
                  деревца.</p>
              </div>
            </div>

            <div class="catalog-item col">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img-3.jpg" alt="дерево Туя Смарагд" />
              <div class="info-card">
                <p class="date">12 мая 2021</p>
                <h2>Как ухаживать за крупномерами</h2>
                <p class="text">
                  Благодаря своим декоративным качествам, туи вышли на одно из первых мест в списке самых популярных
                  растений для озеленения участков и создания ландшафтных композиций. В этой статье мы рассказем, как
                  совмещать и пересаживать этот вид хвойных кустарников.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row row-catalog">
          <div class="catalog-item col-3">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img-3.jpg" alt="дерево Туя Смарагд" />
            <div class="info-card">
              <p class="date">12 мая 2021</p>
              <h2>Как ухаживать за крупномерами</h2>
              <p class="text">
                Благодаря своим декоративным качествам, туи вышли на одно из первых мест в списке самых популярных
                растений для озеленения участков и создания ландшафтных композиций. В этой статье мы рассказем, как
                совмещать и пересаживать этот вид хвойных кустарников.
              </p>
            </div>
          </div>
          <div class="catalog-item col-3">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img-1.jpg" alt="дерево Туя Смарагд" />
            <div class="info-card">
              <p class="date">12 мая 2021</p>
              <h2>Корневая система туи</h2>
              <p class="text">
                Благодаря своим декоративным качествам, туи вышли на одно из первых мест в списке самых популярных
                растений для озеленения участков и создания ландшафтных композиций. В этой статье мы рассказем, как
                совмещать и пересаживать этот вид хвойных кустарников.
              </p>
            </div>
          </div>
          <div class="catalog-item col-3">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img-2.jpg" alt="дерево Туя Смарагд" />
            <div class="info-card">
              <p class="date">12 мая 2021</p>
              <h2>Как вырастить голубую ель из черенка в домашних условиях</h2>
              <p class="text">Самый простой способ разведения культуры — это черенкование голубой ели. При соблюдении
                правил выращивания саженцы прекрасно приживаются и уже через 2–3 года формируются в полноценные деревца.
              </p>
            </div>
          </div>
          <div class="catalog-item col">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/blog-img-3.jpg" alt="дерево Туя Смарагд" />
            <div class="info-card">
              <p class="date">12 мая 2021</p>
              <h2>Как ухаживать за крупномерами</h2>
              <p class="text">
                Благодаря своим декоративным качествам, туи вышли на одно из первых мест в списке самых популярных
                растений для озеленения участков и создания ландшафтных композиций. В этой статье мы рассказем, как
                совмещать и пересаживать этот вид хвойных кустарников.
              </p>
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
                <img src="<?php bloginfo('template_url'); ?>/assets/img/payment.svg" alt="Оплата" class="roadmap-icon" />
                <div class="roadmap-title">Оплата</div>
              </div>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/path.svg" alt="path" class="roadmap-path" />
              <div class="roadmap-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/shipment.svg" alt="Доставка" class="roadmap-icon" />
                <div class="roadmap-title">Доставка</div>
              </div>
              <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/path.svg" alt="path" class="roadmap-path" />
              <div class="roadmap-item">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/service.svg" alt="Сервис" class="roadmap-icon" />
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