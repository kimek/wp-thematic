<?php
add_filter('acf/settings/save_json', function() {
    return get_stylesheet_directory() . '/functions/acf-json';
});

// Hide menu if production
if (ENV == 'production') {
    add_filter('acf/settings/show_admin', '__return_false');
}
