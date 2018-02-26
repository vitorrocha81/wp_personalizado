<?php
  function wpdefault_files() {
    wp_enqueue_script('main-wpdefault-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL,  microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awsome' ,'//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('wpdefault_main_styles' , get_stylesheet_uri(), NULL, microtime());

 }

add_action('wp_enqueue_scripts', 'wpdefault_files');

function wpdefault_features() {
        add_theme_support( 'title-tag' );
}

add_action('after_setup_theme', 'wpdefault_features');