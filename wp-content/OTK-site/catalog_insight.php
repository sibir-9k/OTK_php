<?php
/*
Template Name: Catalog_insight

*/
?>

<?php get_header(); ?>
<main class="py-3 flex-shrink-0">

    <section class="navigation-section">
      <div class="container">
        <ul class="nav nav-custom justify-content-around align-items-end">
          <li class="nav-item"><a href="<?php echo get_the_permalink(35); ?>" class="nav-link">Блог</a></li>
          <li class="nav-item"><a href="<?php echo get_the_permalink(33); ?>" class="nav-link">Вопросы и ответы</a></li>
          <li class="nav-item"><a href="<?php echo get_the_permalink(39); ?>" class="nav-link">Каталог</a></li>
          <li class="nav-item logo"><a href="<?php echo get_the_permalink(7); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/Logo_black.svg"
                alt="Logo" /></a></li>
          <li class="nav-item"><a href="<?php echo get_the_permalink(31); ?>" class="nav-link">Контакты</a></li>
          <li class="nav-item basket">
            <a href="#" class="nav-link"><strong>Корзина</strong></a>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/tree_number_black.svg" alt="Tree" class="mb-n3" />
          </li>
        </ul>
        <hr class="nav-hr mt-3">
      </div>
    </section>

    <section>
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom breadcrumb-green">
            <li class="breadcrumb-item">Главная</li>
            <li class="breadcrumb-item">Каталог</li>
            <li class="breadcrumb-item active" aria-current="page">Туя Смарагд</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="product-section">
      <div class="container">
        <div class="row">
          <div class="col-4 product-in_stock">
            <img class="product-img" src="<?php bloginfo('template_url'); ?>/assets/img/tuya_smaragd.jpg" alt="">
          </div>
          <div class="col-5 offset-1">
            <span class="product-info">Cорт: Смарагд (Smaragd)</span>
            <span class="product-info">Латинское название: Thuja occidentalis</span>
            <br>
            <h1 class="product-title">Туя Западная Смарагд</h1>
            <br>
            <br>
            <div class="d-flex align-items-center ">
              <span class="product-cost">350 р.</span>
              <div class="btn-group btn-group-sm product-count ms-3" role="group">
                <button type="button" class="btn p-1">+</button>
                <span class="py-1">1</span>
                <button type="button" class="btn p-1">-</button>
              </div>
            </div>
            <br>
            <button type="button" class="btn btn-add_to_cart">В КОРЗИНУ +</button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-4">

            <ul class="nav nav-tabs product-description-nav d-flex justify-content-between mb-5" id="myTab"
              role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active p-0" id="description-tab" data-bs-toggle="tab"
                  data-bs-target="#description" type="button" role="tab" aria-controls="description"
                  aria-selected="true">
                  Описание
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link p-0" id="recommendations-tab" data-bs-toggle="tab"
                  data-bs-target="#recommendations" type="button" role="tab" aria-controls="recommendations"
                  aria-selected="false">
                  Рекомендации по уходу
                </button>
              </li>
            </ul>

            <div class="tab-content product-description" id="myTabContent">
              <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                Стройная вечнозеленая туя часто играет центральную роль в живописных пейзажах городских и
                дачных насаждений. Среди многих сортов этих изящных растений выделяется образцовыми
                пропорциями и ярким окрасом туя Смарагд. Дерево хорошо вписывается как в картину летнего
                зеленого сада, так и белой русской зимы на все 200 лет ее жизни). Имеет относительно
                компактные размеры. В высоту это дерево вырастает до 3 м (иногда более – до 4-6 м).
                Максимальный диаметр кроны взрослого дерева составляет 100-150 см.
              </div>
              <div class="tab-pane fade" id="recommendations" role="tabpanel" aria-labelledby="recommendations-tab">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aliquid autem, beatae
                consectetur dolorem illo libero, molestias nam natus neque nihil nostrum obcaecati qui quia,
                quod reiciendis tempora ullam veniam veritatis vero. Asperiores at consectetur deserunt
                expedita fugit illum ipsum itaque possimus rem! Deserunt magni molestiae officia, quos
                reiciendis saepe.
              </div>
            </div>

            <div class="mt-5 row">
              <div class="col-10">
                <div class="product-guide my-2">
                  <img class="product-guide-img" src="<?php bloginfo('template_url'); ?>/assets/img/product-guide-img.jpg" alt="" />
                  <div class="product-guide-text">Как и чем подкармливать тую?</div>
                </div>

                <div class="product-guide my-2">
                  <img class="product-guide-img" src="<?php bloginfo('template_url'); ?>/assets/img/product-guide-img.jpg" alt="" />
                  <div class="product-guide-text text-green">Самостоятельная пересадка хвойных кустарников</div>
                </div>
              </div>

            </div>

          </div>
          <div class="col-5 offset-1 product-separator p-0">
            <table class="table product-size-table">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Размер</th>
                  <th scope="col">Цена</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-end radio-column">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="v1" value="v1">
                  </td>
                  <td class="size-column">
                    <label class="form-check-label" for="v1">
                      0,4-0,6 м
                    </label>
                  </td>
                  <td class="cost-column">
                    <label class="form-check-label" for="v1">
                      350 р.
                    </label>
                  </td>
                </tr>
                <tr>
                  <td class="text-end radio-column">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="v2" value="v2">
                  </td>
                  <td class="size-column">
                    <label class="form-check-label" for="v2">
                      0,4-0,6 м
                    </label>
                  </td>
                  <td class="cost-column">
                    <label class="form-check-label" for="v2">
                      350 р.
                    </label>
                  </td>
                </tr>
                <tr>
                  <td class="text-end radio-column">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="v3" value="v3">
                  </td>
                  <td class="size-column">
                    <label class="form-check-label" for="v3">
                      0,4-0,6 м
                    </label>
                  </td>
                  <td class="cost-column">
                    <label class="form-check-label" for="v3">
                      350 р.
                    </label>
                  </td>
                </tr>
                <tr>
                  <td class="text-end radio-column">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="v4" value="v4" checked>
                  </td>
                  <td class="size-column">
                    <label class="form-check-label" for="v4">
                      0,4-0,6 м
                    </label>
                  </td>
                  <td class="cost-column">
                    <label class="form-check-label" for="v4">
                      350 р.
                    </label>
                  </td>
                </tr>
                <tr>
                  <td class="text-end radio-column">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="v5" value="v5">
                  </td>
                  <td class="size-column">
                    <label class="form-check-label" for="v5">
                      0,4-0,6 м
                    </label>
                  </td>
                  <td class="cost-column">
                    <label class="form-check-label" for="v5">
                      350 р.
                    </label>
                  </td>
                </tr>


                <tr>
                  <td class="text-end radio-column">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="v6" value="v6">
                  </td>
                  <td class="size-column">
                    <label class="form-check-label" for="v6">
                      0,4-0,6 м
                    </label>
                  </td>
                  <td class="cost-column">
                    <label class="form-check-label" for="v6">
                      350 р.
                    </label>
                  </td>
                </tr>
                <tr>
                  <td class="text-end radio-column">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="v7" value="v7">
                  </td>
                  <td class="size-column">
                    <label class="form-check-label" for="v7">
                      0,4-0,6 м
                    </label>
                  </td>
                  <td class="cost-column">
                    <label class="form-check-label" for="v7">
                      350 р.
                    </label>
                  </td>
                </tr>
                <tr>
                  <td class="text-end radio-column">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="v8" value="v8" checked>
                  </td>
                  <td class="size-column">
                    <label class="form-check-label" for="v8">
                      0,4-0,6 м
                    </label>
                  </td>
                  <td class="cost-column">
                    <label class="form-check-label" for="v8">
                      350 р.
                    </label>
                  </td>
                </tr>
                <tr>
                  <td class="text-end radio-column">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="v9" value="v9">
                  </td>
                  <td class="size-column">
                    <label class="form-check-label" for="v9">
                      0,4-0,6 м
                    </label>
                  </td>
                  <td class="cost-column">
                    <label class="form-check-label" for="v9">
                      350 р.
                    </label>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </section>

    <section class="similar_product-section my-5">
      <div class="container">
        <div class="row justify-content-center my-5">
          <div class="similar_product-section-title">Похожие товары</div>
        </div>

        <div class="row row-cols-4">
          <div class="col similar_product-block">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/tuya_smaragd.jpg" alt="img" class="similar_product-img">
            <h3 class="similar_product-title">Туя Смарагд</h3>
            <h2 class="similar_product-cost">5000 руб.</h2>
          </div>
          <div class="col similar_product-block">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/tuya_smaragd.jpg" alt="img" class="similar_product-img">
            <h3 class="similar_product-title">Туя Смарагд</h3>
            <h2 class="similar_product-cost">5000 руб.</h2>
          </div>
          <div class="col similar_product-block">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/tuya_smaragd.jpg" alt="img" class="similar_product-img">
            <h3 class="similar_product-title">Туя Смарагд</h3>
            <h2 class="similar_product-cost">5000 руб.</h2>
          </div>
          <div class="col similar_product-block">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/tuya_smaragd.jpg" alt="img" class="similar_product-img">
            <h3 class="similar_product-title">Туя Смарагд</h3>
            <h2 class="similar_product-cost">5000 руб.</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="roadmap-section my-5">
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
    </section>

  </main>
 
  <?php get_footer(); ?>