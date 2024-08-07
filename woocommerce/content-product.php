<?php
//КАРТОЧКА ТОВАРА НА СТРАНИЦЕ МАГАЗИНА

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<a href="<?php the_permalink()?>" <?php wc_product_class( 'catalog-block__item', $product ); ?>>
	<div class="catalog-block__item-img">
	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' )
	?>
	</div>

	
	<?php
	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );
	?>


	<div class="catalog-block__item-price">
	<?php
	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );
	echo '<div class="catalog-block__item-hidden">' . the_field('czena_po_zaprosu') . '</div>';
	echo '<div class="catalog-block__item-hidden">' . the_field('czena_ot') . '</div>';
	echo $product->get_price_html();  
	?>
	</div>
	
</a>
