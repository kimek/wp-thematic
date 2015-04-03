<?php

/**
 * Make global customisations to the WP admin area here.
 */

class WpAdminCustomisations
{
    public function __construct()
    {
        add_action('wp_dashboard_setup', [$this, 'remove_dashboard_widgets']);
        add_action('wp_before_admin_bar_render', [$this, 'edit_admin_bar_link'], 25);
        add_filter('wp_list_categories', [$this, 'cat_count_span']);

        //add_action('admin_menu', [$this, 'remove_admin_menu_items']);
        //add_action('current_screen', [$this, 'remove_all_media_buttons']);
        //add_action('manage_posts_columns', [$this, 'edit_posts_listing_columns']);
        //add_filter('the_author', [$this, 'change_feed_author']);
    }

    /**
     * remove unwanted dashboard widgets
     */
    public function remove_dashboard_widgets()
    {
        // Quickpress
        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
        // WP News
        remove_meta_box('dashboard_primary', 'dashboard', 'side');
        //? remove_meta_box('dashboard_secondary', 'dashboard', 'side');
    }

    /**
     * WP Admin bar edits.
     */
    public function edit_admin_bar_link()
    {
        global $wp_admin_bar, $current_user;

        if (! is_admin_bar_showing()) {
            return;
        }

        $wp_admin_bar->remove_menu('wp-logo');
        $wp_admin_bar->remove_menu('view-site'); // view site shortcut
        $wp_admin_bar->remove_menu('dashboard'); // view dashboard shortcut
        $wp_admin_bar->remove_menu('new-content');
        $wp_admin_bar->remove_menu('themes');
        $wp_admin_bar->remove_menu('customize');

        if ($current_user->ID != 1) {
            $wp_admin_bar->remove_menu('updates');
        }
    }

    /**
     * Edit wp_list_categories to put counts in a span within a href.
     */
    public function cat_count_span($links)
    {
        $links = str_replace('</a> (', ' <span>(', $links);
        $links = str_replace(')', ')</span></a>', $links);
        return $links;
    }

    ////////////////////////////////////////////////////////////////////////////

    /**
     * Remove items from main navigation.
     */
    public function remove_admin_menu_items()
    {
        global $menu, $current_user;

        unset($menu[10]); // Media
        unset($menu[70]); // Profile

        if (! current_user_can('manage_options')) {
            unset($menu[20]); // Pages
            unset($menu[75]); // Tools
        }
    }

    /**
     * Remove media buttons from post screen
     */
    public function remove_all_media_buttons()
    {
        global $current_screen;

        $post_type = $current_screen->post_type;

        if ('resources' != $post_type && 'news' != $post_type) {
            remove_all_actions('media_buttons');
        }
    }

    /**
     * remove tags from posts listing screen
     */
    public function edit_posts_listing_columns($columns)
    {
        unset($columns['author']);
        unset($columns['categories']);
        unset($columns['tags']);

        return $columns;
    }

    /**
     * change the feed author
     */
    public function change_feed_author($name)
    {
        if (is_feed()) {
            $name = 'new name';
        }

        return $name;
    }
}
