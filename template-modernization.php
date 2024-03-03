<?php
/**
 * Template Name: Модернизация
 */
?>
<?php get_header();?>
<main class="main">
      <div class="breadcrumbs">
        <div class="container">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
        </div>
      </div>

        <?php
            $catalog__terms = get_terms([
                'taxonomy' => 'product_cat',
                'child_of' => 18,
                ]);
        ?>
      <section class="category">
        <div class="container">
          <div class="category-block">
            <?php foreach($catalog__terms as $term) :
                $woo_cat_id = $term->term_id; //category ID
                $category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
                $thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
                ?>
              
            <a href="<?php echo get_term_link($term);?>" class="category-block__item">
              <div class="category-block__item-img">
                <img src="<?php echo  $thumbnail_image_url;?>" alt="img" />
              </div>
              <div class="category-block__item-title"><?php echo $term->name;?></div>
            </a>
            <?php endforeach;?>
          </div>
        </div>
      </section>

      <section class="device verification">
        <div class="container">
          <h1 class="device__title title">Поверка средств измерений</h1>

          <div class="modernization-box">
            <div class="modernization-box__inner">
              <div class="modernization-box__item">
                <div class="modernization-box__item-img">
                  <img src="./images/verification/info.svg" alt="img" />
                </div>
                <div class="modernization-box__item-text">
                  Поверка - совокупность операций, выполняемых в целях
                  подтверждения соответствия средств измерений метрологическим
                  требованиям.
                </div>
              </div>
              <div class="modernization-box__item">
                <div class="modernization-box__item-img">
                  <img
                    src="./images/verification/editor_choice.svg"
                    alt="img"
                  />
                </div>
                <div class="modernization-box__item-text">
                  Метрологическая лаборатория РМЦ «КАЛИБРОН» аккредитована в
                  национальной системе аккредитации (РОСС RU.0001.310096 и
                  RA.RU.314442).
                </div>
              </div>
              <div class="modernization-box__item">
                <div class="modernization-box__item-img">
                  <img src="./images/modernization/avg_pace.svg" alt="img" />
                </div>
                <div class="modernization-box__item-text">
                  Срок поверки: от 10 рабочих дней
                </div>
              </div>
              <div class="modernization-box__item">
                <div class="modernization-box__item-img">
                  <img src="./images/verification/sell.svg" alt="img" />
                </div>
                <div class="modernization-box__item-text">
                  Цены указаны по УСН и не облагаются налогом
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="category-box">
        <div class="container">
          <div class="category-box__name">Услуги по поверке и калибровке</div>
          <p class="category-box__text">
            Совокупность операций, выполняемых в целях подтверждения
            соответствия средств измерений метрологическим требованиям.
          </p>
          <p class="category-box__text">
            Метрологическая лаборатория РМЦ «КАЛИБРОН» аккредитована в
            национальной системе аккредитации (РОСС RU.0001.310096 и
            RA.RU.314442).
          </p>
        </div>
      </div>

      <section class="form">
        <div class="container">
          <h3 class="form__title subtitle">Получить консультацию</h3>
          <div class="form-block">
            <div class="form-block__content">
              <div class="form-block__item">
                <p class="form-block__item-text">Телефон</p>
                <a href="tel:+74957969275" class="form-block__item-name">
                  +7 (495) 796-92-75
                </a>
                <img
                  src="./images/home/call-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
              <div class="form-block__item">
                <p class="form-block__item-text">Почта</p>
                <a
                  href="mailto:info@calibronrmc.ru"
                  class="form-block__item-name"
                >
                  info@calibronrmc.ru
                </a>
                <img
                  src="./images/home/mail-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
              <div class="form-block__item">
                <p class="form-block__item-text">По будням</p>
                <div class="form-block__item-name">08:45-17:30</div>
                <img
                  src="./images/home/alarm-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
              <div class="form-block__item">
                <p class="form-block__item-text">Москва</p>
                <div class="form-block__item-name">Электродная 2, с. 23</div>
                <img
                  src="./images/home/location_on-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
            </div>

            <form class="form-block__info">
              <p class="form-block__info-text">
                Наш менеджер свяжется с вами и ответит на все интересующие
                вопросы
              </p>
              <div
                class="form-block__info-wrapper form-block__info-wrapper--user"
              >
                <input
                  type="text"
                  class="form-block__info-input"
                  placeholder="Имя"
                  required
                />
              </div>

              <div
                class="form-block__info-wrapper form-block__info-wrapper--phone"
              >
                <input
                  type="text"
                  class="form-block__info-input"
                  placeholder="Телефон"
                  required
                />
              </div>
              <button class="form-block__info-btn btn">Ждем звонка!</button>
            </form>
          </div>
        </div>
      </section>
    </main>
<?php get_footer();?>