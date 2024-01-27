<?php


// این برای موقعی هست که ما میخاییم یک رویدادی در وردپرس رخ بده و ما ازش استفاده کنیم 
// دو تا ورودی میگیره : 1 زمان اجرای اون رویداد رو میگیم و ورودی 2ام میاد اون اتفاقی که قراره در زمان1 انجام بشه خروجی میده
// add_action('اینجا اسم یک تابع رو مگییم که قراره اجرا بشه','زمانی که یک پست منتشر شده');

function add_theme_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri() , array() , false , 'all' );

    wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');

    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), 1.1, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');
