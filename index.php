<?php
/**
 * Template Name: Главная
 */
?>
<?php get_header();?>

<main class="main">
    <section class="measurements">
    <div class="container">
        <div class="measurements-block">
        <div class="measurements-block__left">
            <div class="serch-mobile">
            <form class="serch-mobile__form">
                <input type="text" class="serch-mobile__form-input" placeholder="Поиск по сайту">
            </form>
            </div>
            <p class="measurements-block__left-text">Предоставляем услуги с 2008 года</p>
            <h1 class="measurements-block__left-title title">
            Поверка и калибровка средств измерений
            </h1>
            <p class="measurements-block__left-desc">
            Метрологическая лаборатория РМЦ "КАЛИБРОН" аккредитована в национальной системе аккредитации (РОСС RU.0001.310096 и RA.RU.314442).
            </p>
            <button class="measurements-block__left-btn">Получить консультацию</button>
        </div>
        <div class="measurements-block__right">
            <div class="measurements-block__content">
            <div class="measurements-block__category">
                <a href="<?php the_field('ssylka_na_kategoriyu_odin', 'options');?>" class="measurements-block__item">
                <div class="measurements-block__item-title">Поверка</div>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-1.png" alt="img" class="measurements-block__item-img">
                </a>
                <a href="<?php the_field('ssylka_na_kategoriyu_dva', 'options');?>" class="measurements-block__item">
                <div class="measurements-block__item-title">Калибровка</div>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-2.png" alt="img" class="measurements-block__item-img">
                </a>
            </div>
            <div class="measurements-block__category">
                <a href="<?php the_field('ssylka_na_kategoriyu_tri', 'options');?>" class="measurements-block__item">
                <div class="measurements-block__item-title">Модернизация</div>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-3.png" alt="img" class="measurements-block__item-img">
                </a>
                <a href="<?php the_field('ssylka_na_kategoriyu_chetyre', 'options');?>" class="measurements-block__item">
                <div class="measurements-block__item-title">Испытания СИ</div>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-4.png" alt="img" class="measurements-block__item-img">
                </a>
                <a href="<?php the_field('ssylka_na_kategoriyu_pyat', 'options');?>" class="measurements-block__item">
                <div class="measurements-block__item-title">Аттестация ИО</div>
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/home-5.png" alt="img" class="measurements-block__item-img">
                </a>
            </div>
            </div>

            <div class="measurements-block__search">
            <div class="measurements-block__search-title">Проверить статус заявки</div>
            <form class="measurements-block__form">
                <input type="text" class="measurements-block__form-input" placeholder="Введите номер заявки">
                <button class="measurements-block__form-btn btn">Проверить</button>
            </form>
            </div>
        </div>
        </div>
    </div>
    </section>

    <div class="trust">
    <div class="container">
        <h3 class="trust__title title">Нам доверяют</h3>
        <div class="trust-wrraper">
        
        </div>
        <div class="trust-block">
        <div class="trust-block__item">
            <div class="trust-block__item-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/trust-1.png" alt="img">
            </div>
        </div>
        <div class="trust-block__item">
            <div class="trust-block__item-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/trust-2.png" alt="img">
            </div>
        </div>
        <div class="trust-block__item">
            <div class="trust-block__item-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/trust-3.png" alt="img">
            </div>
        </div>
        <div class="trust-block__item">
            <div class="trust-block__item-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/trust-4.png" alt="img">
            </div>
        </div>
        <div class="trust-block__item">
            <div class="trust-block__item-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/trust-5.png" alt="img">
            </div>
        </div>
        <div class="trust-block__item">
            <div class="trust-block__item-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/trust-6.png" alt="img">
            </div>
        </div>
        <div class="trust-block__item">
            <div class="trust-block__item-img">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/trust-7.png" alt="img">
            </div>
        </div>
        </div>
    </div>
    </div>


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


    <div class="cooperation">
        <div class="container">
            <h3 class="cooperation__title subtitle">Как устроено сотрудничество</h3>
            <div class="cooperation-block">
            <div class="cooperation-block__item">
                <div class="cooperation-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/verification/cooperation-1.png" alt="img" />
                </div>
                <div class="cooperation-block__item-text">
                Общение с менеджером
                </div>
            </div>
            <div class="cooperation-block__item">
                <div class="cooperation-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/verification/cooperation-2.png" alt="img" />
                </div>
                <div class="cooperation-block__item-text">
                Получение и оплата счёта
                </div>
            </div>
            <div class="cooperation-block__item">
                <div class="cooperation-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/verification/cooperation-3.png" alt="img" />
                </div>
                <div class="cooperation-block__item-text">
                Передача инструмента в лабораторию
                </div>
            </div>
            <div class="cooperation-block__item">
                <div class="cooperation-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/verification/cooperation-4.png" alt="img" />
                </div>
                <div class="cooperation-block__item-text">Проведение работ</div>
            </div>
            <div class="cooperation-block__item">
                <div class="cooperation-block__item-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/verification/cooperation-5.png" alt="img" />
                </div>
                <div class="cooperation-block__item-text">
                Уведомление заказчика о завершении
                </div>
            </div>
            </div>
        </div>
    </div> 

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
    
</main>
  
<?php get_footer();?>
