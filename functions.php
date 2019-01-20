<?php
add_action( 'wp_enqueue_scripts', 'startit_scripts' );
function startit_scripts(){
    wp_enqueue_script( 'jquery-3', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', [], false, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', [], false, true );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_script( 'jquery.mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', [], false, true );
    wp_enqueue_script( 'jquery.fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', [], false, true );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/js/owl.carousel.js', [], false, true );
    wp_enqueue_script( 'typed1', get_template_directory_uri() . '/js/typed.min.js', [], false, true );
    wp_enqueue_script( 'menu1', get_template_directory_uri() . '/js/menu.js', [], false, true );
    wp_enqueue_script( 'custom1', get_template_directory_uri() . '/js/custom.js', [], false, true );


}

add_theme_support('post-thumbnails');
add_image_size('about-1', 262, 267, false);
add_image_size('about-2', 480, 285, false);
add_image_size('portfolio', 262, 262, false);
add_image_size('portfolio', 360, 272, false);
add_image_size('article', 360, 272, false);

add_theme_support('menus');


add_action( 'init', 'services_post_type' ); // Использовать функцию только внутри хука init

function services_post_type() {
    $labels = array('name' => 'Сервисы' );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
    );
    register_post_type('services', $args);
}

add_action( 'init', 'portfolio_post_type' );

function portfolio_post_type() {
    $labels = array('name' => 'Портфолио' );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_position' => 20, // порядок в меню
        'supports' => array( 'title', 'editor', 'comments', 'author', 'thumbnail')
    );
    register_post_type('portfolio', $args);

    register_taxonomy('portfolio_category', array('portfolio'), array(
        'label'                 => '', // определяется параметром $labels->name
        'labels'                => array(
            'name'              => 'Категория портфолио',

        ),
        'public'                => true,
        'hierarchical'          => false,
        'rewrite'               => true,
        '_builtin'              => false,
        'show_in_quick_edit'    => null, // по умолчанию значение show_ui
    ) );

}



?>