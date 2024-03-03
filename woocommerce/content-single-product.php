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
		
		<form class="tests-block__form">
			<div class="tests-block__form-title name">Оставить заявку</div>
			<div class="tests-block__wrapper tests-block__wrapper--user">
			<input
				type="text"
				class="tests-block__form-input"
				placeholder="Имя"
				required
			/>
			</div>
			<div class="tests-block__wrapper tests-block__wrapper--phone">
			<input
				type="text"
				class="tests-block__form-input"
				placeholder="Телефон"
				required
			/>
			</div>
			<div class="tests-block__wrapper tests-block__wrapper--email">
			<input
				type="text"
				class="tests-block__form-input"
				placeholder="Email"
				required
			/>
			</div>
			<div class="tests-block__wrapper tests-block__wrapper--inn">
			<input
				type="text"
				class="tests-block__form-input"
				placeholder="ИНН"
				required
			/>
			</div>
			<textarea
			class="tests-block__form-textarea"
			placeholder="Дополнительная мнформация о заказе"
			></textarea>

			<div class="tests-block__bottom">
			<input class="tests-block__form-file" type="file" />
			</div>
			<button class="tests-block__form-btn btn">Подтвердить</button>
		</form>
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
				<?php echo $product->description;?>	
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

	<section class="slider">
		<div class="container">
		<div class="tests__circle">
			<div class="circle">
			<div class="text">
				<p>Метрология Р М Ц Калиброн</p>
			</div>
			</div>
		</div>
		<div class="slider-block">
			<div class="slider-block__left">
			<div class="slider-block__left-title name">
				Область аккредитации на поверку и калибровку
			</div>
			<a href="#" class="slider-block__left-link">Испытания СИ</a>
			<a href="#" class="slider-block__left-link">Поверка</a>
			</div>
			<div class="slider-block__center">
			<div class="slider-block__inner">
				<div class="slider-block__item">
				<div class="slider-block__item-img">
					<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/slider-img.png" alt="img" />
				</div>
				</div>
				<div class="slider-block__item">
				<div class="slider-block__item-img">
					<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/slider-img.png" alt="img" />
				</div>
				</div>
			</div>
			</div>
			<div class="slider-block__right">
			<p class="slider-block__right-text">
				Метрологическая лаборатория РМЦ «КАЛИБРОН» аккредитована в
				национальной системе аккредитации (РОСС RU.0001.310 096 и
				RA.RU.314 442).
			</p>
			<p class="slider-block__right-text">
				С 2008 года компания предоставляет услуги по поверке и
				калибровке средств измерений, стремясь к постоянному развитию и
				высокому стандарту качества
			</p>
			<a href="#" class="slider-block__right-btn btn">Все документы</a>
			</div>
		</div>
		</div>
	</section>

	<section class="reviews">
		<div class="container">
		<div class="reviews__title title">Отзывы наших клиентов</div>
		<div class="reviews-slider">
			<div class="reviews-slider__inner">
			<div class="reviews-slider__wrapper">
				<div class="reviews-slider__item">
				<div class="reviews-slider__item-img">
					<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/reviews-1.png" alt="img" />
				</div>
				<div class="reviews-slider__item-text">
					Трудолюбивые сотрудники, честная организация. Оставленную на
					сайте заявку обрабатывают практически моментально. Бывало,
					вносим правки, при этом негатива не испытываем. Наоборот,
					менеджеры, тут же реагируют и выполняют обновленный заказ.
					Инструмент получаем в срок с соответствующей документацией.
				</div>
				<div class="reviews-slider__item-name">Михаил Иджян</div>
				<div class="reviews-slider__item-job">Директор</div>
				</div>
			</div>
			<div class="reviews-slider__wrapper">
				<div class="reviews-slider__item">
				<div class="reviews-slider__item-img">
					<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/reviews-2.png" alt="img" />
				</div>
				<div class="reviews-slider__item-text">
					Трудолюбивые сотрудники, честная организация. Оставленную на
					сайте заявку обрабатывают практически моментально. Бывало,
					вносим правки, при этом негатива не испытываем. Наоборот,
					менеджеры, тут же реагируют и выполняют обновленный заказ.
					Инструмент получаем в срок с соответствующей документацией.
				</div>
				<div class="reviews-slider__item-name">Михаил Иджян</div>
				<div class="reviews-slider__item-job">Директор</div>
				</div>
			</div>
			<div class="reviews-slider__wrapper">
				<div class="reviews-slider__item">
				<div class="reviews-slider__item-img">
					<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/reviews-3.png" alt="img" />
				</div>
				<div class="reviews-slider__item-text">
					Трудолюбивые сотрудники, честная организация. Оставленную на
					сайте заявку обрабатывают практически моментально. Бывало,
					вносим правки, при этом негатива не испытываем. Наоборот,
					менеджеры, тут же реагируют и выполняют обновленный заказ.
					Инструмент получаем в срок с соответствующей документацией.
				</div>
				<div class="reviews-slider__item-name">Михаил Иджян</div>
				<div class="reviews-slider__item-job">Директор</div>
				</div>
			</div>
			<div class="reviews-slider__wrapper">
				<div class="reviews-slider__item">
				<div class="reviews-slider__item-img">
					<img src="<?php echo get_template_directory_uri( )?>/assets/images/tests/reviews-1.png" alt="img" />
				</div>
				<div class="reviews-slider__item-text">
					Трудолюбивые сотрудники, честная организация. Оставленную на
					сайте заявку обрабатывают практически моментально. Бывало,
					вносим правки, при этом негатива не испытываем. Наоборот,
					менеджеры, тут же реагируют и выполняют обновленный заказ.
					Инструмент получаем в срок с соответствующей документацией.
				</div>
				<div class="reviews-slider__item-name">Михаил Иджян</div>
				<div class="reviews-slider__item-job">Директор</div>
				</div>
			</div>
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
			<div class="form-block__item">
				<p class="form-block__item-text">Телефон</p>
				<a href="tel:+74957969275" class="form-block__item-name">
				+7 (495) 796-92-75
				</a>
				<img
				src="<?php echo get_template_directory_uri( )?>/assets/images/home/call-form.svg"
				alt="img"
				class="form-block__item-img"
				/>
			</div>
			<div class="form-block__item">
				<p class="form-block__item-text">Почта</p>
				<a
				href="mailto:info@calibronrmc.ru"
				class="form-block__item-name"
				>
				info@calibronrmc.ru
				</a>
				<img
				src="<?php echo get_template_directory_uri( )?>/assets/images/home/mail-form.svg"
				alt="img"
				class="form-block__item-img"
				/>
			</div>
			<div class="form-block__item">
				<p class="form-block__item-text">По будням</p>
				<div class="form-block__item-name">08:45-17:30</div>
				<img
				src="<?php echo get_template_directory_uri( )?>/assets/images/home/alarm-form.svg"
				alt="img"
				class="form-block__item-img"
				/>
			</div>
			<div class="form-block__item">
				<p class="form-block__item-text">Москва</p>
				<div class="form-block__item-name">Электродная 2, с. 23</div>
				<img
				src="<?php echo get_template_directory_uri( )?>/assets/images/home/location_on-form.svg"
				alt="img"
				class="form-block__item-img"
				/>
			</div>
			</div>

			<form class="form-block__info">
			<p class="form-block__info-text">
				Наш менеджер свяжется с вами и ответит на все интересующие
				вопросы
			</p>
			<div
				class="form-block__info-wrapper form-block__info-wrapper--user"
			>
				<input
				type="text"
				class="form-block__info-input"
				placeholder="Имя"
				required
				/>
			</div>

			<div
				class="form-block__info-wrapper form-block__info-wrapper--phone"
			>
				<input
				type="text"
				class="form-block__info-input"
				placeholder="Телефон"
				required
				/>
			</div>
			<button class="form-block__info-btn btn">Ждем звонка!</button>
			</form>
		</div>
		</div>
	</section>
