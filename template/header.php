<!DOCTYPE html>
<html <?php language_attributes(); ?> />
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'">
    <meta name="theme-color" content="#000000">
    <link rel="icon" sizes="192x192" href="/wp-content/themes/template/favicon.ico">
    <link rel="profile" href="http://gmgp.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <?php
    global $tp_options;
    // echo '<pre>';
    // echo print_r($tp_options);die;
    ?>
    <script type="text/javascript">
        var dataLayer = [];
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-N4DDDL7');</script>
    <!-- End Google Tag Manager -->
</head>
<body <?php body_class(); ?> >
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4DDDL7"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="wrapper">
        <div class="header">
            <div class="container d-flex justify-content-between">
                <div class="logo-header">
                    <?php
                        if($tp_options['logo-on'] == 1) {
                    ?>
                        <a href="<?php echo esc_url(home_url('/'));?>
                        ">
                            <img src="<?php echo $tp_options['logo-image']['url']; ?>">
                        </a>
                    <?php } ?>
                </div>
                <div class="right-header">
                    <?php wp_menu('primary-menu'); ?>
                    <div class="ml-auto">
                        <?php pll_the_languages( array(
                            'show_flags' => 1,
                            'show_names' => 0,
                            'dropdown'   => 1
                        )); ?>
                    </div>
                    <div class="search-sp">
                        <button class="navbar-toggler search-toggle" type="button">
                            <span class="fa fa-search"></span>
                        </button>
                    </div>
                    <button class="navbar-toggler bars-toggle-nav" type="button">
                        <span></span>
                    </button>
                </div>
                <div class="search-toggle-box">
                    <?php get_template_part('templates/form-search', get_post_format()); ?>
                </div>
            </div>
        </div>
        <div class="content">