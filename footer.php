<footer class="footer">

        <?php
          $catalog__terms = get_terms([
            'taxonomy' => 'product_cat',
            'child_of' => 0,
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
            <img src="<?php echo get_template_directory_uri()?>/assets/images/home/header-logo.svg" alt="img" />
          </a>

          <div class="footer-block__info">
            <ul class="footer-block__menu">
              <li>
                <a href="#">Отзывы</a>
              </li>
              <li>
                <a href="#">Аккредитация</a>
              </li>
              <li>
                <a href="#">Информация</a>
              </li>
            </ul>
            <ul class="footer-block__menu">
              <li>
                <a href="#">О компании</a>
              </li>
              <li>
                <a href="#">Вакансии</a>
              </li>
              <li>
                <a href="#">Свидетельство о поверке</a>
              </li>
            </ul>
            <ul class="footer-block__menu">
              <li>
                <a href="#">Справка об обезжиривании</a>
              </li>
              <li>
                <a href="#">Пользовательское соглашение</a>
              </li>
              <li>
                <a href="#">Политика конфиденциальности</a>
              </li>
            </ul>
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
            href="tel:+74957969275"
            class="footer-bottom__info footer-bottom__info--tel"
            >+7 (495) 796-92-75</a
          >
          <a
            href="mailto:info@calibronrmc.ru"
            class="footer-bottom__info footer-bottom__info--email"
          >
            info@calibronrmc.ru
          </a>
          <p class="footer-bottom__info footer-bottom__info--time">
            Пн - Пт 8:45-17:30
          </p>
          <p class="footer-bottom__info footer-bottom__info--address">
            г. Москва, Электродная 2, с. 23
          </p>
        </div>
      </div>
    </footer>

    <?php wp_footer();?>
  </body>
</html>