<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>

    <?php
    $general = pishro_get_option('pishro_general_options');
    $topmenu = pishro_get_option('pishro_topmenu_options');
    $header = pishro_get_option('pishro_header_options');
    $typography = pishro_get_option('pishro_typography_options');
    $footer = pishro_get_option('pishro_footer_options');
    ?>

    <link rel="icon" type="image/png" href="<?php echo $general[0]['pishro_favicon_option']; ?>">

    <style>
        <?php
        // شروع تنظیمات تایپوگرافی
        $font_body = $typography[0]['pishro_font_body_option'];
        $font_size = $typography[0]['pishro_font_size_body_option'];
        $text_align = $typography[0]['pishro_text_align_option'];
        $text_color = $typography[0]['pishro_color_font_body_option'];

        ?>body{font-family: "<?php echo $font_body ?>"; }<?php

        ?>body{text-align: <?php echo $text_align." !important" ?>; }<?php

        ?>body{color: <?php echo $text_color." !important" ?>; }<?php

        if (isset($font_size)) {
                ?>
        body {
            font-size: <?php echo $font_size."px !important"; ?>;
        }
        <?php
            }
        // پایان تنظیمات تایپوگرافی



        // شروع تنظیمات فوتر
        $footer_bg = $footer[0]['pishro_footer_background_option'];
        ?>
        footer{background: <?php echo $footer_bg." !important"; ?>}
        <?php

        $footer_color = $footer[0]['pishro_footer_text_color_option'];
        ?>
        footer{color: <?php echo $footer_color." !important"; ?>}
        <?php

        $copyright_bg = $footer[0]['pishro_footer_copyright_background_option'];
        ?>
        .copy-right{background: <?php echo $copyright_bg." !important"; ?>}
        <?php

        $copyright_color = $footer[0]['pishro_footer_copyright_color_option'];
        ?>
        .copy-right{color: <?php echo $copyright_color." !important"; ?>}
        <?php


        // شروع تنظیمات عمومی
         $container = $general[0]['pishro_width_container_option'];
         $maincolor = $general[0]['pishro_color_main_option'];
            if (isset($container)) {
                ?>
                .container {
                    width: <?php echo $container."px"; ?>;
                }

        <?php
            }
            if (isset($maincolor)) {
                ?>
                    .main-menu ul li ul li a:hover,.sign a,.tv .tv-head .tv-link a:hover
                    ,.more-tv a,.article .article-head .article-link a:hover,
                    .box-article:hover .btn-more a,.owl-theme .owl-dots .owl-dot.active span ,
                    .course .course-head .course-link a:hover,.box-course:hover .btn-more a,
                    .single-widget input[type="submit"],
                    .pagination span.current,.pagination a:hover,.comment-respond input[type="submit"],
                    .price-button,.woocommerce a.button.alt,.woocommerce button
                    ,.price_slider_amount .button,.ui-slider .ui-slider-handle, .owl-theme .owl-dots .owl-dot.active span
                    {
                        background: <?php echo $maincolor." !important"; ?>;
                    }
                    .tv .tv-head .tv-link a,.article .article-head .article-link a,
                    .course .course-head .course-link a,.f-menu ul li a:hover,
                    .single-widget ul li a:hover,.product-title header h1,
                    .woocommerce-message::before
                    {
                        color: <?php echo $maincolor." !important"; ?>;
                    }
                    .tv .tv-head .tv-link a,.article .article-head .article-link a,
                    .course .course-head .course-link a,.aboute h3 , .f-menu h3,
                    .single-widget h4,.wmt-smart-tabs ul.wmt-col-4 li.selected,
                    .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
                    .woocommerce div.product .woocommerce-tabs ul.tabs::before,
                    .related-product h4,.woocommerce-message
                    {
                        border-color: <?php echo $maincolor." !important"; ?>;
                    }

        <?php
    }

 ?>
    </style>

    <script>
        var $ = jQuery;
    </script>
</head>
<body>

<?php

$topmenu_active = $topmenu[0]['pishro_topmenu_active_option'];
$topmenu_background = $topmenu[0]['pishro_color_topmenu_option'];
$topmenu_tell = $topmenu[0]['pishro_tell_topmenu_option'];
$topmenu_email = $topmenu[0]['pishro_email_topmenu_option'];
$topmenu_search = $topmenu[0]['pishro_search_topmenu_option'];
$topmenu_cart = $topmenu[0]['pishro_cart_topmenu_option'];

if ($topmenu_active=='enable') : ?>
<div style="background: <?php echo $topmenu_background; ?>" class="top-menu">
    <div class="container">
        <div class="topbar-right">
            <ul>
                <li><i class="fas fa-phone"></i> <?php echo $topmenu_tell; ?> </li>
                <li><i class="fa fa-envelope"></i>  <?php echo $topmenu_email; ?> </li>
            </ul>
        </div>

        <div class="topbar-left">
            <ul>
                <?php if ($topmenu_cart=='enable') : ?>
                <li><a href="<?php echo home_url()."/cart"; ?>"><i class="fas fa-shopping-bag"></i></a>  </li>
                <?php endif; ?>

                <?php if ($topmenu_search=='enable') : ?>
                <li class="search-icon"> <i class="fas fa-search"></i> </li>
                <?php endif; ?>
            </ul>
            <?php wp_nav_menu( array( 'theme_location' => 'top-menu' , 'container'  => '' ) ); ?>

        </div>

    </div>
</div>
<?php endif; ?>


<?php

$select_header = $header[0]['pishro_header_select_option'];
$header_button = $header[0]['pishro_header_button_option'];
$button_text = $header[0]['pishro_text_button_header_option'];
$button_link = $header[0]['pishro_link_button_header_option'];
?>

<?php if ($select_header=='header_one') { ?>
<header class="header">
    <div class="container relative">
        <div class="logo">
            <?php
            $logo = $general[0]['pishro_logo_option'];
            if (isset($logo)) {
                ?><a href="<?php echo home_url(); ?>"> <img src="<?php echo $logo; ?>"></a><?php
            }
            else {
                ?><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/img/logo.png' ?>"></a><?php
            }
            ?>

        </div>

        <div id="hamberger">
            <i class="fas fa-bars"></i>
        </div>
        <nav class="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' , 'container'  => '' ) ); ?>
            <div class="sign">
                <a href="<?php echo $button_link; ?>">   <i class="fas fa-user-lock"></i> <?php echo $button_text; ?> </a>
            </div>
        </nav>
        <nav class="main-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' , 'container'  => '' ) ); ?>
        </nav>

        <?php if($header_button=="enable") : ?>
        <div class="sign">
            <a href="<?php echo $button_link; ?>">   <i class="fas fa-user-lock"></i> <?php echo $button_text; ?> </a>
        </div>
        <?php endif; ?>

        <div class="searchbox">
            <form method="get" action="<?php home_url('/'); ?>">
                <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="جستجو کنید...">
                <button class="fas fa-search"></button>
            </form>
        </div>

    </div>
</header>
<?php }

else { ?>
<header class="header">
    <div class="container relative">
        <div class="logo">
            <?php
            $logo = $general[0]['pishro_logo_option'];
            if (isset($logo)) {
                ?><a href="<?php echo home_url(); ?>"> <img src="<?php echo $logo; ?>"></a><?php
            }
            else {
                ?><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/img/logo.png' ?>"></a><?php
            }
            ?>
        </div>





        <div class="searchbox">
            <form method="get" action="<?php home_url('/'); ?>">
                <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="جستجو کنید...">
                <button class="fas fa-search"></button>
            </form>
        </div>

        <div class="searchbox2">
            <form method="get" action="<?php home_url('/'); ?>">
                <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="جستجو کنید...">
                <button class="fas fa-search"></button>
            </form>
        </div>

    </div>
</header>
<div class="menu-wrapper">
    <nav class="container main-menu2">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' , 'container'  => '' ) ); ?>
        <?php if($header_button=="enable") : ?>
        <div class="sign nopadding">
            <a href="<?php echo $button_link; ?>">   <i class="fas fa-user-lock"></i> <?php echo $button_text; ?> </a>
        </div>
        <?php endif ?>
    </nav>
</div>
<?php } ?>

<div class="element-section">

