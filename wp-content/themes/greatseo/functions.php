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


function add_admin_scripts(){
    wp_enqueue_style('select-img' , get_template_directory_uri() . '/css/image_select_metafield.css' , array() , false , 'all');
    wp_enqueue_script('conditional' , get_template_directory_uri() . '/js/cmb2-conditional-logic.min.js' , array('jquery') , false , true);
    wp_enqueue_script('img-select' , get_template_directory_uri() . '/js/img-select.js' , array('jquery') , false , true);
}

add_action( 'admin_enqueue_scripts', 'add_admin_scripts' );



function pishro_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');

    /*add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );*/

    add_image_size('article',313,181,true);
    add_image_size('tv_large',820,548,true);
    add_image_size('tv_small',265,165,true);
    add_image_size('product',400,190,true);

    register_nav_menus(
        array(
            'main-menu' => __( 'جایگاه فهرست اصلی ' ),
            'top-menu' => __( 'جایگاه فهرست بالای سایت' )
        )
    );
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

    register_sidebar( array(
        'name'          => __( 'ناحیه کناری آرشیو محصولات' ),
        'id'            => 'pishro_product',

        'before_widget' => '<div class="single-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'فوتر 1' ),
        'id'            => 'pishro_footer_one',

        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'فوتر 2' ),
        'id'            => 'pishro_footer_two',

        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'فوتر 3' ),
        'id'            => 'pishro_footer_three',

        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'pishro_widget' );

function custop_excerpt_length() {
    return 25;
}
add_filter('excerpt_length' , 'custop_excerpt_length',999);

// حذف محصولات مرتبط از بین محصولات
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );



// اضافه کردن تب مدرس
add_filter( 'woocommerce_product_tabs', 'woocommerce_product_teacher' );
function woocommerce_product_teacher( $tabs ) {
    $tabs['course_teacher'] = array(
        'title' 	=> __( 'مدرس', 'woocommerce' ),
        'priority' 	=> 20,
        'callback' 	=> 'woocommerce_product_teacher_content'
    );
    unset($tabs['additional_information']);
    return $tabs;
}
function woocommerce_product_teacher_content() {
    $teacher_name = get_post_meta(get_the_ID() , 'pishro_course_teacher_name' , true);
    if (!empty($teacher_name)) {
    ?>
        <div class="course-teacher">
            <?php
            $teacher_pic = get_post_meta(get_the_ID() , 'pishro_course_teacher_pic' , true);
        if (!empty($teacher_pic)) {
            ?>
            <div class="teacher-pic">
                <img src="<?php echo $teacher_pic; ?>">
            </div>
            <?php
        }
            ?>

            <div class="teacher-aboute">
                <h5><?php echo $teacher_name; ?></h5>
                <?php
                $teacher_aboute = get_post_meta(get_the_ID() , 'pishro_course_teacher_aboute' , true);
                if (!empty($teacher_aboute)) {
                    echo $teacher_aboute;
                }
                ?>
            </div>
        </div>
    <?php
    }
}

// اضافه کردن تب فهرست جلسات دوره
add_filter( 'woocommerce_product_tabs', 'woocommerce_product_course_list' );
function woocommerce_product_course_list( $tabs ) {
    $tabs['lesson_list'] = array(
        'title' 	=> __( 'فهرست جلسات', 'woocommerce' ),
        'priority' 	=> 10,
        'callback' 	=> 'woocommerce_product_lesson_list_content'
    );
    return $tabs;
}
function woocommerce_product_lesson_list_content() {
    include_once 'admin/content-tab-lesson.php';
}

/*******رایگان بجای صفر تومان********/
add_filter( 'woocommerce_get_price_html', 'novinadmin_price_zero', 100, 2 );
function novinadmin_price_zero( $price, $product ){
    if ( '0' === $product->get_price()  ) {
        $price = 'رایگان';
    }
    return $price;
}



/********حذف فیلدهای اضافه صفحه چک اوت**********/
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
    //unset($fields['billing']['billing_first_name']);
    //unset($fields['billing']['billing_last_name']);
    unset($fields['billing']['billing_company']);
    unset($fields['billing']['billing_address_1']);
    unset($fields['billing']['billing_address_2']);
    unset($fields['billing']['billing_city']);
    unset($fields['billing']['billing_postcode']);
    unset($fields['billing']['billing_country']);
    unset($fields['billing']['billing_state']);
    //unset($fields['billing']['billing_phone']);
    //unset($fields['billing']['billing_email']);

    return $fields;
}
require_once 'inc/tv-posttype.php';
require_once 'inc/video-tv.php';
require_once 'inc/video-product.php';
require_once 'inc/teacher-product.php';
require_once 'inc/lesson.php';
require_once 'theme-options/settings.php';
require_once 'theme-options/image-select.php';
require_once 'theme-options/cmb2-switch-button.php';
require_once 'elementor/pishro-elementor.php';
require_once 'admin/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'mytheme_require_plugins' );

function mytheme_require_plugins() {

    $plugins = array(
        array(
            'name'  => 'المنتور',
            'slug'  => 'elementor',
            'required'  =>true,
            //'source'    =>
        ),
        array(
            'name'  => 'ووکامرس',
            'slug'  => 'woocommerce',
            'required'  =>true,
            //'source'    =>
        ),

        array(
            'name'  => 'ووکامرس فارسی',
            'slug'  => 'persian-woocommerce',
            'required'  =>true,
            //'source'    =>
        ),
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
        array(
            'name'  => 'CMB2',
            'slug'  => 'cmb2',
            'required'  =>true,
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
