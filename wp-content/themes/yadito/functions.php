<?php


function add_theme_scripts(){
    // اضافه کردن فایل های css
    wp_enqueue_style('all' , get_template_directory_uri() . '/css/all.css' , array() , false , 'all');
    wp_enqueue_style('owl.carousel' , get_template_directory_uri() . '/css/owl.carousel.min.css' , array() , false , 'all');
    wp_enqueue_style('owl.theme' , get_template_directory_uri() . '/css/owl.theme.default.min.css' , array() , false , 'all');
    wp_enqueue_style('style' , get_stylesheet_uri() , array() , false , 'all');

    //اضافه کردن فایل جاوااسکریپت
    wp_enqueue_script('jq' , get_template_directory_uri() . '/js/jquery-3.5.1.min.js' , array() , false , true);
    wp_enqueue_script('owl.carousel.js' , get_template_directory_uri() . '/js/owl.carousel.min.js' , array('jquery') , false , true);
    wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js' , array('jquery') , false , true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



function pishro_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_image_size('article',313,181,true);

    register_nav_menus(
        array(
            'main-menu' => __( 'جایگاه فهرست اصلی ' ),
            'top-menu' => __( 'جایگاه فهرست بالای سایت' )
        )
    );
}
add_action('after_setup_theme','pishro_setup_theme');


function custop_excerpt_length() {
    return 25;
}
add_filter('excerpt_length' , 'custop_excerpt_length',999);
