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
            href="tel:+74957969275"
            class="header-top__info header-top__info--tel"
          >
            +7 (495) 796-92-75
          </a>
          <a
            href="mailto:info@calibronrmc.ru"
            class="header-top__info header-top__info--email"
          >
            info@calibronrmc.ru
          </a>
          <p class="header-top__info header-top__info--time">
            Пн - Пт 8:45-17:30
          </p>
          <p class="header-top__info header-top__info--address">
            г. Москва, Электродная 2, с. 23
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
              <img src="<?php echo get_template_directory_uri()?>/assets/images/home/header-logo.svg" alt="img" />
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
                <a href="mailto:info@calibronrmc.ru" class="mobile-content__email">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/mobile-mail.svg" alt="img">
                </a>
                <a href="tel:+74957969275" class="mobile-content__phone">
                  <img src="<?php echo get_template_directory_uri()?>/assets/images/home/mobile-call.svg" alt="img">
                </a>
              </div>
           
          </div>
        </div>
      </div>
    </header>