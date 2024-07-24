<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
  <head>
    <meta charset="<?php bloginfo('charset')?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <?php wp_head();?>
  </head>

  
  <body <?php body_class()?>>
    <?php wp_body_open();?>
    <header class="header">
      <div class="container">
        <div class="header-top">
          <a
            href="tel:<?php the_field('telefon_v_shapke_ssylka', 'options');?>"
            class="header-top__info header-top__info--tel"
          >
            <?php the_field('telefon_v_shapke', 'options');?>
          </a>
          <a
            href="mailto:<?php the_field('pochta_v_shapke', 'options');?>"
            class="header-top__info header-top__info--email"
          >
          <?php the_field('pochta_v_shapke', 'options');?>
          </a>
          <p class="header-top__info header-top__info--time">
          <?php the_field('vremya_raboty_v_shapke', 'options');?>
          </p>
          <p class="header-top__info header-top__info--address">
          <?php the_field('adres_v_shapke', 'options');?>
          </p>
        </div>
      </div>

      <div class="header-bottom">
        <div class="container">
          <div class="header-bottom__inner">
            <div class="header-bottom__search">
              <div class="header-bottom__search-wrraper">
              <?php aws_get_search_form( true ); ?>
              </div>
             
              <div class="header-bottom__form-close">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/close_small.svg" alt="img" />
              </div>
            </div>
            <a href="/" class="logo">
              <img src="<?php the_field('logotip', 'options');?>" alt="img" />
            </a>
            
              <div class="menu__wrraper">
              <?php wp_nav_menu([
                  'theme_location' => 'menu-header',
                  'container' => '',
                  'menu_class' => 'menu__list'
                ])?>
              </div>

            <div class="header-bottom__box">
              <div class="header-bottom__box-img">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/home/search.svg" alt="img" />
              </div>

              <button class="btn header-bottom__btn">
                Получить консультацию
              </button>
            </div>
              <div class="mobile-content">
                <a href="mailto:<?php the_field('pochta_v_shapke', 'options');?>" class="mobile-content__email">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/mobile-mail.svg" alt="img">
                </a>
                <a href="tel:<?php the_field('telefon_v_shapke_ssylka', 'options');?>" class="mobile-content__phone">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/mobile-call.svg" alt="img">
                </a>
              </div>
           
          </div>
        </div>
      </div>
    </header>