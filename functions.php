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

if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
        'page_title' 	=> 'Основные настройки',
        'menu_title'	=> 'Настройки шапки и подвала',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    )); 
}


// Регистрируем новый тип записей 
add_action('init', 'my_custom_init',0);
function my_custom_init(){
	register_post_type('news', array(
		'labels'             => array(
			'name'               => __('Прайс-лист'), // Основное название типа записи
			'singular_name'      => __('Прайс-лист'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Прайс-лист'),
			'add_new_item'       => __('Добавить новые Прайс-лист'),
			'edit_item'          => __('Редактировать Прайс-лист'),
			'new_item'           => __('Новые Прайс-лист'),
			'view_item'          => __('Посмотреть Прайс-лист'),
			'search_items'       => __('Найти Прайс-лист'),
			'not_found'          => __('Прайс-лист не найдено'),
			'not_found_in_trash' => __('Прайс-лист не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Прайс-лист')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','thumbnail','excerpt')
	) );
}





require_once get_template_directory() . '/inc/woocommerce-hooks.php';


function debug($data) {
    echo '<pre>' . print_r($data, true) .'</pre>';
}