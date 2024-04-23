<?php


// Add style and script
function add_theme_scripts(){
    // اضافه کردن فایل های css
    wp_enqueue_style('all' , get_template_directory_uri() . '/css/all.css' , array() , false , 'all');
    wp_enqueue_style('owl.carousel' , get_template_directory_uri() . '/css/owl.carousel.min.css' , array() , false , 'all');
    wp_enqueue_style('owl.theme' , get_template_directory_uri() . '/css/owl.theme.default.min.css' , array() , false , 'all');
    wp_enqueue_style('style' , get_stylesheet_uri() , array() , false , 'all');
    wp_enqueue_style( 'tailwind-output.', get_template_directory_uri() . '/tailwind-output.css', array(), '4.0.0' );
    wp_enqueue_style( 'StyleCSS', get_template_directory_uri() . '/style.css', array(), '4.0.0' );
    wp_enqueue_style( 'StyleNavbar', get_template_directory_uri() . '/css/boxicons.min.css', array(), '4.0.0' );

    //اضافه کردن فایل جاوااسکریپت
    wp_enqueue_script('jq' , get_template_directory_uri() . '/js/jquery-3.5.1.min.js' , array() , false , true);
    wp_enqueue_script('owl.carousel.js' , get_template_directory_uri() . '/js/owl.carousel.min.js' , array('jquery') , false , true);
    wp_enqueue_script('main' , get_template_directory_uri() . '/js/main.js' , array('jquery') , false , true);
    wp_enqueue_script( 'JavaScript-preline', get_template_directory_uri() . '/js/preline.js', array( 'jquery' ), '3.7.1', true );
    wp_enqueue_script( 'JavaScript-nabvar', get_template_directory_uri() . '/js/navbar.js', array( 'jquery' ), '3.7.1', true );
    wp_enqueue_script( 'JavaScript-load', get_template_directory_uri() . '/js/load.js', array( 'jquery' ), '3.7.1', true );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



// Setting
function pishro_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');

    add_image_size('article',313,181,true);
}
add_action('after_setup_theme','pishro_setup_theme');
function pishro_widget() {
    register_sidebar( array(
        'name'          => __( 'ناحیه کناری بلاگ' ),
        'id'            => 'pishro_blog',

        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'pishro_widget' );



// register post type
function post_type_blog() {
    $labels = array(
        'name'               => __( 'pooya_tv' ),
        'singular_name'      => __( 'pooya_tv' ),
        'menu_name'          => __( 'pooya_tv' ),
        'name_admin_bar'     => __( 'pooya_tv' ),
        'add_new'            => __( ' افزودن جدید' ),
        'add_new_item'       => __( 'پست مخصوص' ),
        'new_item'           => __( 'پست جدید' ),
        'edit_item'          => __( 'ویرایش پست' ),
        'view_item'          => __( 'مشاهده پست' ),
        'all_items'          => __( 'همه ویدیوها' ),
        'search_items'       => __( 'جستجو در بین ویدیوها' ),
        'parent_item_colon'  => __( 'مادر' ),
        'not_found'          => __( 'مطلب یافت نشد' ),
        'not_found_in_trash' => __( 'مطلب در زباله دان یافت نشد' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,

        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies' => array('post_tag'),
        //'taxonomies' => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'tv', $args );
}
add_action( 'init', 'post_type_blog' );



// recommend plugins
add_action( 'tgmpa_register', 'mytheme_require_plugins' );
function mytheme_require_plugins() {

    $plugins = array(
        array(
            'name'  => 'تعداد بازدید',
            'slug'  => 'wp-postviews',
            'required'  =>true,
            'source'    => get_template_directory().'/inc/plugins/wp-postviews.zip',
        ),
        array(
            'name'  => 'ابزارک تب هوشمند',
            'slug'  => 'smart-tab-widget',
            'required'  =>true,
            'source'    => get_template_directory().'/inc/plugins/smart-tab-widget.zip',
        ),
    );
    $config = array(
        'id'       		=> 'pishro_tgmpa',         	// Text domain - likely want to be the same as your theme.
        'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
        'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
        'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
        'menu'         		=> 'install-required-plugins', 	// Menu slug
        'has_notices'      	=> true,                       	// Show admin notices or not
        'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
        'message' 			=> '',							// Message to output right before the plugins table
        'strings'      		=> array(
            'page_title'                       			=> 'نصب افزونه های ضروری قالب',
            'menu_title'                       			=> ' افزونه های ضروری',
            'installing'                       			=> __( 'نصب افزونه ها : %s'), // %1$s = plugin name
            'oops'                             			=> __( 'مشکلی در API افزونه رخ داده است.' ),
            'notice_can_install_required'     			=> _n_noop( 'برای استفاده از قالب پیشرو این افزونه را نصب کنید!: %1$s.', 'برای استفاده از قالب پیشرو این افزونه هارا نصب کنید : %1$s.' ), // %1$s = plugin name(s)
            'notice_can_install_recommended'			=> _n_noop( 'برای استفاده از قالب پیشرو این افزونه را توصیه میکنیم : %1$s.', 'برای استفاده از قالب پیشرو این افزونه ها را توصیه میکنیم : %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_install'  					=> _n_noop( 'متاسفم! شما مجوز لازم برای نصب این افزونه را ندارید - برای رفع مشکل با مدیر سایت تماس بگیرید.', 'متاسفم! شما مجوز لازم برای نصب این افزونه ها را ندارید' ), // %1$s = plugin name(s)
            'notice_can_activate_required'    			=> _n_noop( 'لطفا این افزونه را فعال کنید...! : %1$s.', ' لطفا افزونه های زیر را فعال کنید...! : %1$s.' ), // %1$s = plugin name(s)
            'notice_can_activate_recommended'			=> _n_noop( 'توصیه میشود این افزونه را فعال کنید: %1$s.', 'توصیه میشود این افزونه هارا فعال کنید : %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_activate' 					=> _n_noop( 'متاسفم! شما مجوز لازم برای فعال کردن این افزونه را ندارید - لطفا با مدیر سایت تماس بگیرید', 'متاسفم! شما مجوز لازم برای فعال کردن این افزونه ها را ندارید - لطفا با مدیر سایت تماس بگیرید.' ), // %1$s = plugin name(s)
            'notice_ask_to_update' 						=> _n_noop( ' برای اطمینان از صحت عملکرد افزونه لطفا آن را به آخرین نسخه ارتقاء دهید (بروزرسانی کنید): %1$s.', 'برای اطمینان از صحت عملکرد افزونه ها لطفا آن را به آخرین نسخه ارتقاء دهید (بروزرسانی کنید) : %1$s.' ), // %1$s = plugin name(s)
            'notice_cannot_update' 						=> _n_noop( 'متاسفم! شما مجوز لازم برای بروزرسانی این افزونه را ندارید - لطفا با مدیر سایت تماس بگیرید.', 'متاسفم! شما مجوز لازم برای بروزرسانی این افزونه ها را ندارید - لطفا با مدیر سایت تماس بگیرید.' ), // %1$s = plugin name(s)
            'install_link' 					  			=> _n_noop( 'شروع به نصب افزونه', 'شروع به نصب افزونه ها' ),
            'activate_link' 				  			=> _n_noop( 'فعالسازی افزونه', 'فعالسازی افزونه ها' ),
            'return'                           			=> __( 'بازگشت به نصب افزونه های مورد نیاز' ),
            'plugin_activated'                 			=> __( 'افزونه با موفقیت فعال شد.' ),
            'complete' 									=> __( 'همه افزونه ها با موفقیت نصب و فعال شدند. %s' ), // %1$s = dashboard link
            'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
        )
    );

    tgmpa( $plugins, $config );

}
