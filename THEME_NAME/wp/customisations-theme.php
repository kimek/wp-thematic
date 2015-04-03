<?php

/**
 * Make global customisations to the WP Theme
 */

class WpThemeCustomisations
{
    public function __construct()
    {
        add_filter('pre_get_posts', [$this, 'inlineStickyPosts']);
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
