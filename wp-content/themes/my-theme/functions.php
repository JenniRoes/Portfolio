<?php

if(!defined('ABSPATH')) exit;

function my_theme_styles() {
    wp_enqueue_style('my styles', get_stylesheet_directory_uri().'/styles/css/styles.css');
}
add_action('wp_enqueue_scripts', 'my_theme_styles');


