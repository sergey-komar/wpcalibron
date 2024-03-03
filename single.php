<?php get_header();?>
<main class="main">
    <div class="container">

    <section class="accreditation accreditation-search">
        <div class="container">
          <div class="accreditation__inner">
          <div class="search">
              <?php echo do_shortcode( '[wpdreams_ajaxsearchlite]' ); ?>
            </div>

            <div class="accreditation-table">
              <div class="accreditation-table__inner">
                <div class="accreditation-table__headers">
                  <div class="accreditation-table__headers-num accreditation-table__headers-item">№ п/п</div>
                  <div class="accreditation-table__headers-name accreditation-table__headers-item">
                    Наименование инструмента/прибора/услуги
                  </div>
                  <div class="accreditation-table__headers-range accreditation-table__headers-item">
                    Цена поверки, рублей.
                  </div>
                  <div class="accreditation-table__headers-class accreditation-table__headers-item">
                    Цена калибровки, рублей.
                  </div>
                </div>
                <div class="accreditation-table__subtitle">
                
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">27.010</div>
                    <div class="accreditation-table__item-name accreditation-table__item-element">
                            <?php the_title();?>
                    </div>
                    <div class="accreditation-table__item-range accreditation-table__item-element">2520</div>
                    <div class="accreditation-table__item-class accreditation-table__item-element">
                    3000
                  </div>
                </div>
               
              </div>
            </div>

            
          </div>
        </div>
      </section>
    </div>
</main>
<?php get_footer();?>