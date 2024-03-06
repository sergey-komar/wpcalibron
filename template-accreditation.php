<?php
/**
 * Template Name: Аккредитация
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

      <section class="documentation">
        <div class="container">
          <h1 class="documentation__title title">
            Карточка аккредитованного лица
          </h1>
          <p class="documentation__text">
            Метрологическая лаборатория РМЦ «Калиброн» внесена в реестр
            аккредитованных лиц за номером РОСС RU.0001.310096. Карточка
            аккредитованного лица размещена на сайте
            <span>Федеральной службы по аккредитации</span>
          </p>
          <h3 class="documentation__subtitle subtitle">
            Документы для ознакомления
          </h3>
          <div class="documentation-block">
            <div class="documentation-block__left">
              <?php if(have_rows('akkreditaczii_dokumenty_element')) : while(have_rows('akkreditaczii_dokumenty_element')) : the_row();?>
              <div class="documentation-block__item">
                <div class="documentation-block__item-img">
                  <img src="<?php the_sub_field('akkreditaczii_dokumenty_element_izobrazhenie');?>" alt="img"/>
                </div>
                <div class="documentation-block__item-title">
                  <?php the_sub_field('akkreditaczii_dokumenty_element_zagolovok');?>
                </div>
              </div>
             <?php endwhile; endif;?>
            </div>

            <div class="documentation-block__right">
              <?php if(have_rows('akkreditacziya_fajl_element')) : while(have_rows('akkreditacziya_fajl_element')) : the_row();?>
              <div class="documentation-block__download">
                <div class="documentation-block__download-img">
                  <img src="<?php the_sub_field('akkreditacziya_fajl_element_ikonka');?>" alt="img"/>
                </div>
                <div class="documentation-block__info">
                  <div class="documentation-block__info-title">
                  <?php the_sub_field('akkreditacziya_fajl_element_tekst');?>
                  </div>
                  <a href="<?php the_sub_field('akkreditacziya_fajl_element_skachat');?>" class="documentation-block__info-link">
                    Скачать
                  </a>
                </div>
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>
        </div>
      </section>

      <section class="accreditation">
        <div class="container">
          <div class="accreditation__inner">
            <h3 class="accreditation__title name">Область аккредитации</h3>

            <?php if(get_field('akkreditacziya_vstavit_tabliczu'))
            echo do_shortcode(''.get_field('akkreditacziya_vstavit_tabliczu').'');?>
          </div>
        </div>
      </section>

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