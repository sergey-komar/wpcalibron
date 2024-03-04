<?php
/**
 * Template Name: Испытания
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

    <section class="tests">
        <div class="container">
            <h1 class="tests__title title">Испытания СИ</h1>
            <div class="tests-block">
            <div class="tests-block__img">
                <img src="<?php the_field('ispytaniya_kartinka_v_perom_bloke')?>" />
            </div>
            <div class="tests-block__form">
                <div class="tests-block__form-title name">Оставить заявку</div>
                <?php echo do_shortcode('[contact-form-7 id="bc1a5e1" title="Форма в продукте"]')?>
            </div>
            </div>
        </div>
    </section>

    <section class="procedure">
        <div class="container">
            <div class="procedure__inner">
            <h3 class="procedure__title title">
                Процедура передачи в поверку и получения СИ
            </h3>
            <div class="procedure-block">
                <div class="procedure-block__left">
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">1</div>
                    <p class="procedure-block__item-text">
                    Подача заявки на проведение работ по испытаниям
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">2</div>
                    <p class="procedure-block__item-text">Заключение договора</p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">3</div>
                    <p class="procedure-block__item-text">
                    Предоставление образцов, необходимой документации
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">4</div>
                    <p class="procedure-block__item-text">
                    Согласование программы испытаний
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">5</div>
                    <p class="procedure-block__item-text">Проведение испытаний</p>
                </div>
                </div>
                <div class="procedure-block__right">
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">6</div>
                    <p class="procedure-block__item-text">
                    Оформление и согласование комплекта документов
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">7</div>
                    <p class="procedure-block__item-text">
                    Передача документов на экспертизу в Единый центр проверки
                    результатов
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">8</div>
                    <p class="procedure-block__item-text">
                    Передача документов в Росстандарт для вынесения решения об
                    утверждении типа и внесении в ФИФ по обеспечению единства
                    измерений
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">9</div>
                    <p class="procedure-block__item-text">
                    Опубликование приказа Росстандарта
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">10</div>
                    <p class="procedure-block__item-text">
                    Получение в Росстандарте сертификата об утверждении типа СИ.
                    (при необходимости)
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <div class="word">
        <div class="container">
            <div class="word-block">
                <?php if(have_rows('ispytaniya_dokumenty_element')) : while(have_rows('ispytaniya_dokumenty_element')) : the_row();?>
                <div class="word-block__item">
                    <div class="word-block__item-img">
                    <img src="<?php the_sub_field('ispytaniya_dokumenty_element_kartinka');?>" alt="img" />
                    </div>
                    <div class="word-block__content">
                    <a href="<?php the_sub_field('ispytaniya_dokumenty_element_skachat');?>" class="word-block__content-link">Скачать</a>
                    <div class="word-block__content-title"><?php the_sub_field('ispytaniya_dokumenty_element_nazvanie');?></div>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>

    <section class="region">
        <div class="container">
            <h3 class="region__title title">Область аккредитации</h3>
            <?php if(have_rows('ispytaniya_informacziya_element')) : while(have_rows('ispytaniya_informacziya_element')) : the_row();?>
            <p class="region__text">
            <?php the_sub_field('ispytaniya_informacziya_element_tekst');?>
            </p>
            <?php endwhile; endif;?>

            <div class="region-block">
                <ul class="region-block__list">
                    <?php if(have_rows('ispytaniya_informacziya_spisok_levo')) : while(have_rows('ispytaniya_informacziya_spisok_levo')) : the_row();?>
                    <li class="region-block__list-item">
                    <?php the_sub_field('ispytaniya_informacziya_spisok_levo_tekst');?>
                    </li>
                    <?php endwhile; endif;?>
                </ul>

                <ul class="region-block__list">
                    <?php if(have_rows('ispytaniya_informacziya_spisok_pravo')) : while(have_rows('ispytaniya_informacziya_spisok_pravo')) : the_row();?>
                    <li class="region-block__list-item">
                    <?php the_sub_field('ispytaniya_informacziya_spisok_pravo_tekst');?>
                    </li>
                    <?php endwhile; endif;?>
                </ul>
            </div>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <h3 class="advantages__title title">Преимущества работы с нами</h3>
            <div class="advantages-block">
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/tests/advantages-1.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                Все виды метрологических услуг
                </div>
                <div class="advantages-block__item-text">
                Надежные метрологические решения под одной крышей: от поверки до
                калибровки
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/tests/advantages-2.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                15 лет опыта калибровки
                </div>
                <div class="advantages-block__item-text">
                С начала 2008 года компания на рынке услуг по поверке и
                калибровке средств измерений
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/tests/advantages-3.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                Персональный менеджер
                </div>
                <div class="advantages-block__item-text">
                Выставление счета за 15 минут и полное ведение вашего кейса
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/tests/advantages-4.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                130+ аккредитаций СИ
                </div>
                <div class="advantages-block__item-text">
                Доверьтесь нашим аккредитациям в области средств измерений —
                гарантия вашей уверенности в качестве
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/tests/advantages-5.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                Большой парк контрольных калибров
                </div>
                <div class="advantages-block__item-text">
                Более 600 кв.м. лаборатории с обширным парком контрольных
                калибров для точных измерений
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/tests/advantages-6.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                Более 30 опытных специалистов
                </div>
                <div class="advantages-block__item-text">
                Наша команда включает более 30 опытных метрологов —
                профессионалов в своей области
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="slider">
        <div class="container">
            <div class="tests__circle">
            <div class="circle">
                <div class="text">
                <p>Метрология Р М Ц Калиброн</p>
                </div>
            </div>
            </div>
            <div class="slider-block">
            <div class="slider-block__left">
                <div class="slider-block__left-title name">
                Область аккредитации на поверку и калибровку
                </div>
                <a href="<?php the_field('ssylka_na_kategoriyu_chetyre', 'options');?>" class="slider-block__left-link">Испытания СИ</a>
                <a href="<?php the_field('ssylka_na_kategoriyu_odin', 'options');?>" class="slider-block__left-link">Поверка</a>
            </div>
            <div class="slider-block__center">
                <div class="slider-block__inner">
                    <?php if(have_rows('slajder_element','options')) : while(have_rows('slajder_element', 'options')) : the_row();?>
                    <div class="slider-block__item">
                        <div class="slider-block__item-img">
                        <img src="<?php the_sub_field('slajder_element_izobrazhenie', 'options');?>" alt="img" />
                        </div>
                    </div>
                    <?php endwhile; endif;?>
                </div>
            </div>
            <div class="slider-block__right">
                <p class="slider-block__right-text">
                <?php the_field('slajder_pravyj_blok_tekst_odin', 'options');?>
                </p>
                <p class="slider-block__right-text">
                <?php the_field('slajder_pravyj_blok_tekst_dva', 'options');?>
                </p>
                <a href="<?php the_field('slajder_pravyj_blok_ssylka', 'options');?>" class="slider-block__right-btn btn">Все документы</a>
            </div>
            </div>
            <a
            href="#"
            class="slider-block__right-btn btn slider-block__right-btn--mobile"
            >Все документы</a
            >
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="reviews__title title">Отзывы наших клиентов</div>
            <div class="reviews-slider">
            <div class="reviews-slider__inner">
                <?php if(have_rows('otzyvy_element', 'options')) : while(have_rows('otzyvy_element', 'options')) : the_row();?>
                <div class="reviews-slider__wrapper">
                    <div class="reviews-slider__item">
                        <div class="reviews-slider__item-img">
                        <img src="<?php the_sub_field('otzyvy_element_izobrazhenie', 'options');?>" alt="img" />
                        </div>
                        <div class="reviews-slider__item-text">
                        <?php the_sub_field('otzyvy_element_tekst', 'options');?>
                        </div>
                        <div class="reviews-slider__item-name">
                        <?php the_sub_field('otzyvy_element_imya', 'options');?>
                        </div>
                        <div class="reviews-slider__item-job">
                        <?php the_sub_field('otzyvy_element_dolzhnost', 'options');?>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif;?>
            </div>
            <div class="reviews-slider__arrows"></div>
            </div>
        </div>
    </section>

    <div class="yandex">
        <div class="container">
            <div class="yandex-box">
            <div class="yandex-box__item">
                <div class="yandex-box__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/tests/rate-1.png" alt="img" />
                </div>
            </div>
            <div class="yandex-box__item">
                <div class="yandex-box__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/tests/rate-2.png" alt="img" />
                </div>
            </div>
            <div class="yandex-box__item">
                <div class="yandex-box__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/tests/rate.png" alt="img" />
                </div>
            </div>
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