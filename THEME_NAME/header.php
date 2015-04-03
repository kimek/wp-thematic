<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header" role="banner">
        <div class="site-header--branding">
            <h1 class="site-header--title">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <h2 class="site-header--description"><?php bloginfo('description'); ?></h2>
        </div>

        <nav class="main-navigation" role="navigation">
            <button class="menu-toggle"><?php _e('Primary Menu', 'THEME_NAME'); ?></button>
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </nav>
    </header>

    <div class="site-content">
