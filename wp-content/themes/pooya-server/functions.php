<?php


// this is for heads , styles and scripts 
add_action( 'wp_enqueue_scripts', 'add_style_assets' );
function add_style_assets() {
    wp_enqueue_style( 'tailwind-output.', get_template_directory_uri() . '/tailwind-output.css', array(), '4.0.0' );
    wp_enqueue_style( 'StyleCSS', get_template_directory_uri() . '/style.css', array(), '4.0.0' );
    wp_enqueue_style( 'StyleNavbar', get_template_directory_uri() . '/css/boxicons.min.css', array(), '4.0.0' );

    // Scripts
    wp_enqueue_script( 'JavaScript', get_template_directory_uri() . '/js/jquery-3.7.1.min.js', array( 'jquery' ), '3.7.1', true );
    wp_enqueue_script( 'JavaScript-preline', get_template_directory_uri() . '/js/preline.js', array( 'jquery' ), '3.7.1', true );
    wp_enqueue_script( 'JavaScript-nabvar', get_template_directory_uri() . '/js/navbar.js', array( 'jquery' ), '3.7.1', true );
    wp_enqueue_script( 'JavaScript-load', get_template_directory_uri() . '/js/load.js', array( 'jquery' ), '3.7.1', true );
}


