<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header" role="banner">
        <div class="site-header__branding">
            <h1 class="site-header__title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <h2 class="site-header__description"><?php bloginfo('description'); ?></h2>
        </div>

        <nav class="main-navigation" role="navigation">
            <button class="js-nav-toggle"><?php _e('Menu', 'THEME_NAME'); ?></button>
            <?php wp_nav_menu(array('container' => '', 'menu_class' => 'header-nav', 'theme_location' => 'primary')); ?>
        </nav>
    </header>

    <div class="site-content">
