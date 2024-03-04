<?php
/**
 * Template Name: Контакты
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

      <section class="form-contact">
        <div class="container">
          <h1 class="contact__title title">Контакты</h1>
          <div class="form__inner">
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

            <div class="map">
              <iframe
                class="contact__map"
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A9e7f9b2261293f90bd9bfc3ba040d7449edd6279e3d13d8275c16cd6d10e9eea&amp;source=constructor"
                width="100%"
                frameborder="0"
              ></iframe>
            </div>
          </div>
        </div>
      </section>

      <section class="employees">
        <div class="container">
          <h3 class="employees-title title">Наши сотрудники</h3>
          <div class="employees-block">
            <?php if(have_rows('kontakty_sotrudniki_kartochka')) : while(have_rows('kontakty_sotrudniki_kartochka')) : the_row();?>
            <div class="employees-block__item">
              <div class="employees-block__item-img">
                <img src="<?php the_sub_field('kontakty_sotrudniki_kartochka_izobrazhenie');?>" alt="img" />
              </div>
              <div class="employees-block__item-title">
              <?php the_sub_field('kontakty_sotrudniki_kartochka_imya');?>
              </div>
              <div class="employees-block__item-job">
              <?php the_sub_field('kontakty_sotrudniki_kartochka_dolzhnost');?>
              </div>
              <a
                href="mailto:<?php the_sub_field('kontakty_sotrudniki_kartochka_pochta');?>"
                class="employees-block__item-info employees-block__item-info--email"
                ><?php the_sub_field('kontakty_sotrudniki_kartochka_pochta');?></a
              >
              <a
                href="tel:<?php the_sub_field('kontakty_sotrudniki_kartochka_telefon');?>"
                class="employees-block__item-info employees-block__item-info--tel"
                ><?php the_sub_field('kontakty_sotrudniki_kartochka_telefon');?></a
              >
              <span class="employees-block__item-info">
              <?php the_sub_field('kontakty_sotrudniki_kartochka_dobavochnyj_tel');?>
              </span>
            </div>
            <?php endwhile; endif;?>
          </div>
        </div>
      </section>

      <div class="information">
        <div class="container">
          <div class="information-wrraper">
            <div class="information-block">
              <?php if(have_rows('kontakty_dannye_element')) : while(have_rows('kontakty_dannye_element')) : the_row();?>
              <div class="information-block__item">
                <div class="information-block__item-name">
                <?php the_sub_field('kontakty_dannye_element_zagolovok');?>
                </div>
                <div class="information-block__item-text">
                <?php the_sub_field('kontakty_dannye_element_tekst');?>
                </div>
              </div>
              <?php endwhile; endif;?>
            </div>
          </div>
        </div>
      </div>
    </main>	
   
			
                       
<?php get_footer();?>