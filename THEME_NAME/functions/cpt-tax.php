<?php
/*
Examples: https://github.com/jjgrainger/wp-custom-post-type-class

Dash Icons: https://developer.wordpress.org/resource/dashicons/
*/

/*
// Post (default) - add taxonomy
$default = new CPT('post');
$default->register_taxonomy(array(
    'taxonomy_name' => 'genre',
    'singular' => 'Genre',
    'plural' => 'Genres',
    'slug' => 'genre'
));

// Courses - add CPT
$courses = new CPT(
    [
        'post_type_name' => 'courses',
        'singular' => 'Course',
        'plural' => 'Courses',
        'slug' => 'courses'
    ],
    [
        'supports' => ['title', 'editor', 'thumbnail'],
        'menu_position' => 15,
        'public' => true,
        'has_archive' => true,
    ]
);
$courses->menu_icon("dashicons-calendar-alt");
*/
