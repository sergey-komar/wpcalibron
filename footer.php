<footer class="footer">

        <?php
          $catalog__terms = get_terms([
            'taxonomy' => 'product_cat',
           'number' => 25
            // 'child_of' => 0,
            // 'orderby'     => 'id', // здесь по какому полю сортировать
            // 'hide_empty'  => false, // скрывать категории без товаров или нет
            // 'parent'      => 0, // id родительской категории
                        ]);
        ?>
       <div class="footer__category">
       <?php foreach($catalog__terms as $catalog_term) :?>
        <a href="<?php echo get_term_link($catalog_term);?>" class="footer__category-item">
        <?php echo $catalog_term->name;?>
        </a>
        <?php endforeach;?>
      </div> 
      <div class="container">
        <div class="footer-block">
          <a href="/" class="logo logo--footer">
            <img src="<?php the_field('logotip', 'options');?>" alt="img" />
          </a>

          <div class="footer-block__info">
           
            <?php wp_nav_menu([
              'theme_location' => 'menu-footer',
              'container' => '',
              'menu_class' => 'footer-block__menu'
            ])?>
             <?php wp_nav_menu([
              'theme_location' => 'menu-footer-one',
              'container' => '',
              'menu_class' => 'footer-block__menu'
            ])?>
             <?php wp_nav_menu([
              'theme_location' => 'menu-footer-two',
              'container' => '',
              'menu_class' => 'footer-block__menu'
            ])?>
          </div>
        </div>

        <div class="footer__text">
          © 2023 ООО Региональный метрологический центр «Калиброн». ИНН:
          7719685973/ КПП: 772001001. Вы принимаете условия политики
          конфиденциальности и пользовательского соглашения каждый раз, когда
          оставляете свои данные в любой форме обратной связи на сайте
          calibron.ru. Вся информация, представленная на веб-сайте calibron.ru,
          включая информацию о ценах, наличию товаров и их характеристиках,
          носит ознакомительный характер и не является публичной офертой.
        </div>

        <div class="footer-bottom">
          <a
            href="tel:<?php the_field('telefon_v_shapke_ssylka', 'options');?>"
            class="footer-bottom__info footer-bottom__info--tel"
            ><?php the_field('telefon_v_shapke', 'options');?></a
          >
          <a
            href="mailto:<?php the_field('pochta_v_shapke', 'options');?>"
            class="footer-bottom__info footer-bottom__info--email"
          >
          <?php the_field('pochta_v_shapke', 'options');?>
          </a>
          <p class="footer-bottom__info footer-bottom__info--time">
          <?php the_field('vremya_raboty_v_shapke', 'options');?>
          </p>
          <p class="footer-bottom__info footer-bottom__info--address">
          <?php the_field('adres_v_shapke', 'options');?>
          </p>
        </div>
      </div>
    </footer>

    <?php wp_footer();?>
  </body>
</html>