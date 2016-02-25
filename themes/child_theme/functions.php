<?php

add_action( 'wp_enqueue_scripts', 'purdue2014_parent_theme_enqueue_styles' );
// Load Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
add_action( 'wp_enqueue_scripts', 'enqueue_google_font_archivo' );

// FUNCTIONS

function purdue2014_parent_theme_enqueue_styles() {
    wp_enqueue_style( 'purdue2014-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child_theme-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'purdue2014-style' )
    );

}

function enqueue_font_awesome() {
  wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
}

function enqueue_google_font_archivo() {
  wp_enqueue_style( 'google-font-archivo', 'https://fonts.googleapis.com/css?family=Archivo+Black');
}