<?php
/**
 * Template Name: О компании
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

    <section class="about">
      <div class="container">
        <h1 class="about__title title">О компании</h1>
        <div class="about-block">
          <?php if(have_rows('o_kompanii_element')) : while(have_rows('o_kompanii_element')) : the_row();?>
          <div class="about-block__item">
            <div class="about-block__content">
              <div class="about-block__content-title">
              <?php the_sub_field('o_kompanii_element_zagolovok');?>
              </div>
              <?php if(have_rows('o_kompanii_element_tekst')) : while(have_rows('o_kompanii_element_tekst')) : the_row();?>
              <p class="about-block__content-text">
              <?php the_sub_field('o_kompanii_element_tekst_opisanie');?>
              </p>
              <?php endwhile; endif;?>
            </div>
            <div class="about-block__item-img">
              <img src="<?php the_sub_field('o_kompanii_element_izobrazhenie');?>" alt="img" />
            </div>
          </div>
          <?php endwhile; endif;?>
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