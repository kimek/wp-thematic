<?php

if (! function_exists('THEME_NAME_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function THEME_NAME_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on THEME_NAME, use a find and replace
         * to change 'THEME_NAME' to the name of your theme in all the template files
         */
        load_theme_textdomain('THEME_NAME', get_template_directory() . '/functions/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        //add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
/*
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'THEME_NAME'),
    ));
*/

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ]);

        /*
         * Enable support for Post Formats.
         * See http://codex.wordpress.org/Post_Formats
         */
/*
        add_theme_support('post-formats', array(
            'aside', 'image', 'video', 'quote', 'link',
    ));
*/

        // Setup the WordPress core custom background feature.
/*
        add_theme_support(
            'custom-background',
            apply_filters('THEME_NAME_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
            )
        )
    );
*/
    }
endif;
add_action('after_setup_theme', 'THEME_NAME_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 */
function THEME_NAME_content_width()
{
    $GLOBALS['content_width'] = apply_filters('mytheme_content_width', 640);
}
add_action('after_setup_theme', 'THEME_NAME_content_width', 0);

/**
 * Register widget area.
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
/*
function THEME_NAME_widgets_init()
{
    register_sidebar(
        array(
            'name'          => __('Sidebar', 'THEME_NAME'),
            'id'            => 'sidebar-1',
            'description'   => '',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h1 class="widget-title">',
            'after_title'   => '</h1>',
    )
);
}
add_action('widgets_init', 'THEME_NAME_widgets_init');*/

/**
 * Enqueue scripts and styles.
 */
function THEME_NAME_scripts()
{
    // style
    wp_enqueue_style('THEME_NAME-style', get_stylesheet_directory_uri() . '/inc/css/style.css');

    // js
    wp_enqueue_script('jquery');
    wp_enqueue_script('THEME_NAME-script', get_stylesheet_directory_uri() . '/inc/js/script.min.js', ['jquery'], '', true);
/*
    if (is_front_page()) {
        wp_enqueue_script('jtv-script-home', get_stylesheet_directory_uri() . '/inc/js/script-home.min.js', ['jquery'], '', true);
    }
*/
/*
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
*/
}
add_action('wp_enqueue_scripts', 'THEME_NAME_scripts');

/**
 * Customisations for this theme.
 */
require get_template_directory() . '/functions/index.php';
