<?php
function calibron_script() {
    
    wp_enqueue_style('calibron-style', get_template_directory_uri() . '/assets/css/style.min.css', [], '2024', 'all');
    wp_enqueue_style('calibron-custom', get_template_directory_uri() . '/assets/css/custom.css', [], '2024', 'all');

    wp_enqueue_script('calibron-js', get_template_directory_uri() . '/assets/js/main.min.js', [], '2024', true);
}

add_action('wp_enqueue_scripts', 'calibron_script');


function calibron() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    // add_theme_support( 'wc-product-gallery-zoom' );
    // add_theme_support( 'wc-product-gallery-lightbox');
    // add_theme_support( 'wc-product-gallery-slider' );


    register_nav_menus([
        'menu-header' => 'меню в шапке',
        'menu-footer' => 'меню в подвале'
    ]);
}
add_action('after_setup_theme', 'calibron');


require_once get_template_directory() . '/inc/woocommerce-hooks.php';


function debug($data) {
    echo '<pre>' . print_r($data, true) .'</pre>';
}