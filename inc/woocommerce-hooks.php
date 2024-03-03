<?php
// ОТКЛЮЧАЕМ ВСЕ СТИЛИ woocommerce
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

// НАЗВАНИЕ ТОВАРА В КАРТОЧКЕ ТОВАРА на странице магазина
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', function() {
    // https://woocommerce.github.io/code-reference/classes/WC-Product.html
    global $product;
    echo '<div class="catalog-block__item-title">' . $product->get_title() . '</div>';
}, 5);


//СТРАНИЦА МАГАЗИНА
//хлебные крошки
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_filter( 'woocommerce_breadcrumb_defaults', function() {
	return array(
		'delimiter'   => '&nbsp;-&nbsp;',
		'wrap_before' => '<nav class="breadcrumb bg-light mb-30">',
		'wrap_after'  => '</nav>',
		'before'      => '',
		'after'       => '',
		'home'        => __( 'Главная', 'woostudy' ),
	);
} );

//Убираем похожие товара в карточке товара
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
