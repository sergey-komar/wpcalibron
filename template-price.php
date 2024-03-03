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

      <section class="accreditation">
        <div class="container">
          <div class="accreditation__inner">
            <div class="search">
              <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
            </div>
          
            <div class="accreditation-table">
              <div class="accreditation-table__inner">
                <div class="accreditation-table__headers">
                  <div class="accreditation-table__headers-num accreditation-table__headers-item">№ п/п</div>
                  <div class="accreditation-table__headers-name accreditation-table__headers-item">
                    Наименование инструмента/прибора/услуги
                  </div>
                  <div class="accreditation-table__headers-range accreditation-table__headers-item">
                    Цена поверки, рублей.
                  </div>
                  <div class="accreditation-table__headers-class accreditation-table__headers-item">
                    Цена калибровки, рублей.
                  </div>
                </div>
               
                <?php
                    global $post;
                    $price = new WP_Query([
                        'post_type' => 'news',
                        'posts_per_page' => 4,
                        'paged' => $paged,
                        
                    ])
                ?>
                 <?php if( $price->have_posts()) : while($price->have_posts()) : $price->the_post();?>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">
                    <?php the_field('nomer');?>
                  </div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    <?php the_title();?>
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">
                  <?php the_field('czena_poverki');?>
                  </div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                  <?php the_field('czena_kalibrovki');?>
                  </div>
                </div>
                <?php endwhile; endif;?>
                <?php wp_reset_postdata();?>
              </div>
            </div>
           
            <div class="pagination">
              <?php
                  $big = 999999999; // need an unlikely integer

                  echo paginate_links( array(
                      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                      'format' => '?paged=%#%',
                      'current' => max( 1, get_query_var('paged') ),
                      'total' => $price->max_num_pages,
                      'prev_text'    => __('« Назад'),
                      'next_text'    => __('Вперёд »'),
                  ) );
                ?>
            </div>
          </div>
        </div>
      </section>

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
                  src="<?php echo get_template_directory_uri()?>/assets/images/home/call-form.svg"
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
                  src="<?php echo get_template_directory_uri()?>/assets/images/home/mail-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
              <div class="form-block__item">
                <p class="form-block__item-text">По будням</p>
                <div class="form-block__item-name">08:45-17:30</div>
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/images/home/alarm-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
              <div class="form-block__item">
                <p class="form-block__item-text">Москва</p>
                <div class="form-block__item-name">Электродная 2, с. 23</div>
                <img
                  src="<?php echo get_template_directory_uri()?>/assets/images/home/location_on-form.svg"
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