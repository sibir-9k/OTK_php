<?php
/*
Template Name: Q-A

*/
?>

<?php get_header(); ?>
<main class="py-3 flex-shrink-0 bg-paper_texture">
    <section class="navigation-section">
      <div class="container">
        <ul class="nav nav-custom justify-content-around align-items-end">
          <li class="nav-item"><a href="<?php echo get_the_permalink(35); ?>" class="nav-link">Блог</a></li>
          <li class="nav-item"><a href="<?php echo get_the_permalink(33); ?>" class="nav-link">Вопросы и ответы</a></li>
          <li class="nav-item"><a href="<?php echo get_the_permalink(39); ?>" class="nav-link">Каталог</a></li>
          <li class="nav-item logo">
            <a href="<?php echo get_the_permalink(7); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/Logo_black.svg" alt="Logo" /></a>
          </li>
          <li class="nav-item"><a href="<?php echo get_the_permalink(31); ?>" class="nav-link">Контакты</a></li>
          <li class="nav-item basket">
            <a href="#" class="nav-link"><strong>Корзина</strong></a>
            <img src="<?php bloginfo('template_url'); ?>/assets/img/svg-img/tree_number_black.svg" alt="Tree" class="mb-n3" />
          </li>
        </ul>

        <hr class="nav-hr mt-3" />
      </div>
    </section>

    <section>
      <div class="container">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-custom breadcrumb-black">
            <li class="breadcrumb-item">Главная</li>
            <li class="breadcrumb-item active" aria-current="page">Вопросы и ответы</li>
          </ol>
        </nav>
      </div>
    </section>

    <section class="qa-section">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="display-5">Вопросы и ответы</h1>
            <hr class="hr-h1" />

            <div class="row">
              <div class="col-9">
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a1">Есть ли возможность
                    доставки?</div>
                  <div class="qa-answer collapse" id="a1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Iste, quod!</div>
                </div>
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a2">Когда вы начинаете
                    принимать заказы?</div>
                  <div class="qa-answer collapse" id="a2">Amet aperiam atque iure omnis optio quidem, quod saepe totam!
                  </div>
                </div>
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a3">Как я пойму, что
                    заказал (а) у вас растение?</div>
                  <div class="qa-answer collapse" id="a3">Cumque error fuga, nesciunt perferendis quo similique soluta
                    totam voluptas?</div>
                </div>
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a4">Какие требования к
                    условиям произрастания предъявляют те или иные породы растений?</div>
                  <div class="qa-answer collapse" id="a4">Aspernatur at cumque delectus illum iste molestias nulla
                    perspiciatis quis!</div>
                </div>
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a5">Нужно ли при посадке
                    деревьев комом земли снимать с кома мешковину и металлическую сетку, в которую они упакованы?</div>
                  <div class="qa-answer collapse" id="a5">Assumenda doloremque enim ex, id inventore pariatur sapiente
                    sequi vero!</div>
                </div>
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a6">В чем преимущества
                    контейнерных растений?</div>
                  <div class="qa-answer collapse" id="a6">Aperiam id illo quae quia quo soluta vitae voluptas
                    voluptatum.</div>
                </div>
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a7">Почему весной в
                    самый пик продаж деревья так сильно обрезаны и выглядят не привлекательно?</div>
                  <div class="qa-answer collapse" id="a7">Consequatur, in, sunt. Eos, harum laborum mollitia quasi qui
                    sit!</div>
                </div>
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a8">Как осуществляется
                    погрузка?</div>
                  <div class="qa-answer collapse" id="a8">Aliquid aspernatur dolor modi necessitatibus reiciendis.
                    Blanditiis ea explicabo nulla?</div>
                </div>
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a9">Что обозначают буквы
                    и цифры в параметрах растений?</div>
                  <div class="qa-answer collapse" id="a9">Consectetur dolor doloremque earum est et excepturi ipsum
                    natus officia.</div>
                </div>
                <div class="qa-block py-2">
                  <div class="qa-question collapsed" data-bs-toggle="collapse" data-bs-target="#a10">Какой фактический
                    размер растений, которые вы продаете?</div>
                  <div class="qa-answer collapse" id="a10">Culpa enim ipsa, labore officia pariatur perspiciatis
                    praesentium repellendus velit!</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <form class="contact-form">
              <h2>
                Остались вопросы?
                <br />
                Задайте их прямо сейчас
              </h2>
              <br />
              <div class="h5">Позвоните нам по телефону или напишите нам на электронную почту, либо оставьте свои данные
                (имя и телефон) – наш менеджер перезвонит Вам и проконсультирует.</div>
              <br />
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nameInput" placeholder="Меня зовут" />
                <label for="nameInput">Меня зовут</label>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control" id="questionInput" placeholder="Мой вопрос"></textarea>
                <label for="questionInput">Мой вопрос</label>
              </div>

              <button type="submit" class="btn btn-success">Отправить</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  
<?php get_footer(); ?>