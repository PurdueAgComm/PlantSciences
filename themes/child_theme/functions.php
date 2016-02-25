<?php

add_action( 'wp_enqueue_scripts', 'purdue2014_parent_theme_enqueue_styles' );

function purdue2014_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'purdue2014-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child_theme-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'purdue2014-style' )
    );

}
