<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style('my-arimo-font','https://fonts.googleapis.com/css?family=Arimo&display=swap');
    wp_enqueue_style('my-mavenpro-font','https://fonts.googleapis.com/css?family=Maven+Pro&display=swap');
 
    $parent_style = 'parent-style'; // This is 'neve-style' for the neve theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}