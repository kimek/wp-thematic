<?php
/**
 * Make global customisations to the WP Theme
 */

class WpThemeCustomisations
{
    public function __construct()
    {
        add_filter('wp_title', [$this, 'wp_title'], 10, 2);
        add_filter('pre_get_posts', [$this, 'inlineStickyPosts']);
    }
    
        /**
     * Filters wp_title to print a neat <title> tag based on what is being viewed.
     *
     * @param string $title Default title text for current view.
     * @param string $sep Optional separator.
     * @return string The filtered title.
     */
    public function wp_title($title, $sep)
    {
        if (is_feed()) {
            return $title;
        }

        global $page, $paged;

        // Add the blog name.
        $title .= get_bloginfo('name', 'display');

        // Add the blog description for the home/front page.
        $site_description = get_bloginfo('description', 'display');

        if ($site_description && (is_home() || is_front_page())) {
            $title .= " $sep $site_description";
        }

        // Add a page number if necessary.
        if (($paged >= 2 || $page >= 2) && ! is_404()) {
            $title .= " $sep " . sprintf(esc_html__('Page %s', '_s'), max($paged, $page));
        }

        return $title;
    }

    /**
    * Stop sticky posts being bunched to the top of wp_query
    */
    public function inlineStickyPosts($query)
    {
        $query->set('ignore_sticky_posts', true);
        //$query->set('post_type', ['post']);

        return $query;
    }
}
