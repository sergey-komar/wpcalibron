<?php
// КАРТОЧКА ОДНОГО  НА СТРАНИЦЕ ОТДЕЛЬНОГО ТОВАРА

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<section class="device">
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'device-block', $product ); ?>>

		<div class="device-block__img">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>
		<div class="device__price title">от <?php echo $product->price;?> ₽</div>
		</div>
		
		<div class="tests-block__form">
			<div class="tests-block__form-title name">Оставить заявку</div>
				<?php echo do_shortcode('[contact-form-7 id="bc1a5e1" title="Форма в продукте"]')?>
		</div>
	</div>
	<div class="product-box">
		<div class="product-box__item">
			<div class="product-box__item-text">Производитель</div>
			<div class="product-box__item-name"><?php the_field('dannye_proizvoditel');?></div>
		</div>
		<div class="product-box__item">
			<div class="product-box__item-text">Прибор</div>
			<div class="product-box__item-name"><?php the_field('dannye_pribor');?></div>
		</div>
		<div class="product-box__item">
			<div class="product-box__item-text">Категория</div>
			<div class="product-box__item-name"><?php the_field('dannye_kategoriya');?></div>
		</div>
		<div class="product-box__item">
			<div class="product-box__item-text">Номер в госреестре -</div>
			<div class="product-box__item-name"><?php the_field('dannye_nomer');?></div>
		</div>
		<div class="product-box__item">
			<div class="product-box__item-text">Срок поставки</div>
			<div class="product-box__item-name"><?php the_field('dannye_srok_postavki');?></div>
		</div>
		<div class="product-box__item">
			<div class="product-box__item-text">Страна производитель</div>
			<div class="product-box__item-name"><?php the_field('dannye_strana');?></div>
		</div>
	</div>
</section>
	
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>

	<div class="tabs">
        <div class="container">
          <div class="tabs__wrapper">
            <div class="tabs__item">
			<?php if(have_rows('zagolovok_taba')) : $i=0; while(have_rows('zagolovok_taba')) : the_row();?>
              <div class="tabs__item-btn <?php if(! $i) echo 'tabs-active'?>">
			  <?php the_sub_field('zagolovok_taba_nazvanie');?>
			  </div>
			<?php $i++; endwhile; endif;?>
            </div>
          </div>

         
          <div class="tabs__content">
            <div class="accreditation__inner">
              <div class="accreditation-table">
                <div class="accreditation-table__inner">
                  <div class="accreditation-table__headers">
				  	<?php if(have_rows('zagolovok')) : while(have_rows('zagolovok')) : the_row();?>
                    <div class="accreditation-table__headers-num accreditation-table__headers-item">
					<?php the_sub_field('imya_zagolovka');?>
					</div>
					<?php endwhile; endif;?>
                  </div>
                
				  <?php if(have_rows('harakteristiki')) : while(have_rows('harakteristiki')) : the_row();?>
                  <div class="accreditation-table__item">
				  	<?php if(have_rows('harakteristiki_element')) : while(have_rows('harakteristiki_element')) : the_row();?>
                    <div class="accreditation-table__item-num accreditation-table__item-element">
					<?php the_sub_field('harakteristiki_element_tekst');?>
					</div>
					<?php endwhile; endif;?>
                  </div>
				  <?php endwhile; endif;?>
                </div>
              </div>
            </div>
          </div>
         
		  <div class="tabs__content">
				<!-- <?php echo $product->description;?>	 -->
				<?php the_content();?>
          </div>

        </div>
    </div>
	<section class="advantages">
		<div class="container">
			<h3 class="advantages__title title">Преимущества работы с нами</h3>
			<div class="advantages-block">
			<div class="advantages-block__item">
				<div class="advantages-block__item-img">
				<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/advantages-1.svg" alt="img" />
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
				<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/advantages-2.svg" alt="img" />
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
				<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/advantages-3.svg" alt="img" />
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
				<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/advantages-4.svg" alt="img" />
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
				<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/advantages-5.svg" alt="img" />
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
				<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/advantages-6.svg" alt="img" />
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
	