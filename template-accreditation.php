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

            <div class="search">
              <form class="search-form">
                <input
                  type="text"
                  class="search-form__input"
                  placeholder="Search"
                />
              </form>
              <div class="search-form__close">
                <img src="./images/home/close_small.svg" alt="img" />
              </div>
            </div>

            <div class="accreditation-table">
              <div class="accreditation-table__inner">
                <div class="accreditation-table__headers">
                  <div class="accreditation-table__headers-num accreditation-table__headers-item">№ п/п</div>
                  <div class="accreditation-table__headers-name accreditation-table__headers-item">
                    Измерения, тип (группы) средств измерений
                  </div>
                  <div class="accreditation-table__headers-range accreditation-table__headers-item">
                    Диапазон измерений
                  </div>
                  <div class="accreditation-table__headers-class accreditation-table__headers-item">
                    Погрешность и (или) неопределенность (класс разряд)
                  </div>
                </div>
                <div class="accreditation-table__subtitle">
                  Измерения геометрических величин
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">1</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Штангенциркули
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…4000) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(0,02…0,45) мм, КТ 1; КТ 2
                  </div>
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">2</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Штангенглубиномеры
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…4000) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(0,02…0,20) мм
                  </div>
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">3</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Микрометры, в том числе специального назначения. Меры
                    установочные к микрометрам
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…1000) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(1,0…22) мкм, КТ 1; КТ 2
                  </div>
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">4</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Глубиномеры микрометрические, индикаторные
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…300) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(0,003…0,05) мм, КТ 1; КТ 2
                  </div>
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">5</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Микрометры рычажные
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…2000) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(0,7…36) мкм
                  </div>
                </div>
              </div>
            </div>

            <div class="pagination">
              <ul class="pagination__list">
                <li class="pagination__list-item">
                  <a
                    href="#"
                    class="pagination__list-link pagination__list-link--active"
                    >1</a
                  >
                </li>
                <li class="pagination__list-item">
                  <a href="#" class="pagination__list-link">2</a>
                </li>
                <li class="pagination__list-item">
                  <a href="#" class="pagination__list-link">...</a>
                </li>
                <li class="pagination__list-item">
                  <a href="#" class="pagination__list-link">9</a>
                </li>
                <li class="pagination__list-item">
                  <a href="#" class="pagination__list-link">10</a>
                </li>
              </ul>
            </div>
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