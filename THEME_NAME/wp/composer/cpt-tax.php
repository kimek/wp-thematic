<?php
/*
https://github.com/jjgrainger/wp-custom-post-type-class
Examples:
https://github.com/jjgrainger/wp-custom-post-type-class/blob/master/examples/books-post-type.php
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

// Products - add CPT
$products = new CPT(
    'product',
    array(
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_position' => 5,
    )
);
*/
