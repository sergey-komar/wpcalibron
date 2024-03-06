<?php
/**
 * Template Name: Прайс Лист
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


      

      <section class="price">
        <div class="container">
          <h1 class="price__title title">Прайс-лист</h1>
          <div class="price-block">
            <div class="price-block__item">
              <div class="price-block__item-title name">Общая информация</div>
              <div class="price-block__item-text">
                С 01 июля 2022 г., цены НДС не облагаются (упрощенная система
                налогообложения).
              </div>
              <div class="price-block__item-text">
                Все цены, указанные на сайте, приведены только как справочная
                информация, не являются публичной офертой, определяемой
                положениями статьи 437 Гражданского кодекса Российской Федерации
                и могут быть изменены в любое время без предупреждения. Для
                получения информации о стоимости, сроках и условиях выполнения
                работ направляйте запрос электронной почтой
                <a href="mailto:info@calibronrmc.ru">info@calibronrmc.ru</a>
              </div>
            </div>

            <div class="price-block__item">
              <div class="price-block__item-title name">
                Стандартные сроки выполнения работ:
              </div>
              <div class="price-block__item-text">
                <span>от 10</span>
                рабочих дней, срок может варьироваться в зависимости от вида,
                области применения СИ и загруженности лаборатории
              </div>
              <div class="price-block__item-title name">
                Срочное выполнение:
              </div>
              <div class="price-block__info">
                <div class="price-block__info-item">
                  <div class="price-block__info-item-num">5</div>
                  <div class="price-block__info-item-name">рабочих дней</div>
                  <div class="price-block__info-item-text">
                    +50% к стоимости
                  </div>
                </div>
                <div class="price-block__info-item">
                  <div class="price-block__info-item-num">3</div>
                  <div class="price-block__info-item-name">рабочих дня</div>
                  <div class="price-block__info-item-text">
                    +100% к стоимости
                  </div>
                </div>
                <div class="price-block__info-item">
                  <div class="price-block__info-item-num">1</div>
                  <div class="price-block__info-item-name">рабочий день</div>
                  <div class="price-block__info-item-text">
                    +70% к стоимости
                  </div>
                </div>
              </div>
            </div>

            <div class="price-block__item">
              <div class="price-block__item-title name">Выездная поверка</div>
              <div class="price-block__item-text">
                Принимаем заявки на проведение поверки на территории Заказчика.
                Если в прайсе не нашли интересующей позиции, всегда можно
                обратиться за консультацией к специалистам РМЦ «Калиброн» по
                телефону
                <a href="tel:+74957969277">+7 (495) 796-92-77</a>
              </div>
            </div>

            <div class="price-block__item">
              <div class="price-block__item-title name">Доки</div>
              <div class="price-block__content">
                <img
                  class="price-block__content-img"
                  src="<?php echo get_template_directory_uri()?>/assets/images/price-word.png"
                  alt="img"
                />
                <div class="price-block__desc">
                  <div class="price-block__desc-title">
                    Бланк выездной поверки
                  </div>
                  <a href="<?php the_field('dokumenty_skachivanie_odin');?>" class="price-block__desc-link">Скачать</a>
                </div>
              </div>
              <div class="price-block__content">
                <img
                  class="price-block__content-img"
                  src="<?php echo get_template_directory_uri()?>/assets/images/price-exel.png"
                  alt="img"
                />
                <div class="price-block__desc">
                  <div class="price-block__desc-title">Прайс лист</div>
                  <a href="<?php the_field('dokumenty_skachivanie_dva');?>" class="price-block__desc-link">Скачать</a>
                </div>
              </div>
              <div class="price-block__content">
                <img
                  class="price-block__content-img"
                  src="<?php echo get_template_directory_uri()?>/assets/images/price-word.png"
                  alt="img"
                />
                <div class="price-block__desc">
                  <div class="price-block__desc-title">Бланк заявки</div>
                  <a href="<?php the_field('dokumenty_skachivanie_tri');?>" class="price-block__desc-link">Скачать</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="accreditation">
        <div class="container">
          <div class="accreditation__inner">
          <?php if(get_field('tablicza_prajsa'))
          echo do_shortcode(''.get_field('tablicza_prajsa').'');?>
          </div> 
        </div>
      </div>
     

      <section class="form">
        <div class="container">
          <h3 class="form__title subtitle">Получить консультацию</h3>
          <div class="form-block">
            <div class="form-block__content">
              <?php if(have_rows('poluchit_konsultacziyu_element', 'options')) : while(have_rows('poluchit_konsultacziyu_element', 'options')) : the_row();?>
              <div class="form-block__item">
                <p class="form-block__item-text">
                <?php the_sub_field('poluchit_konsultacziyu_element_tekst', 'options');?>
                </p>
                <div  class="form-block__item-name">
                <?php the_sub_field('poluchit_konsultacziyu_element_zagolovok', 'options');?>
                </div>
                <img
                  src=" <?php the_sub_field('poluchit_konsultacziyu_element_izobrazhenie', 'options');?>"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
              <?php endwhile; endif;?>
            </div>

            <div class="form-block__info">
              <p class="form-block__info-text">
                Наш менеджер свяжется с вами и ответит на все интересующие
                вопросы
              </p>
              <?php echo do_shortcode('[contact-form-7 id="d96f30b" title="Форма консультация"]')?>
            </div>
          </div>
        </div>
      </section>
     
     
    </main>
<?php get_footer();?>