<?php

function gg_enqueue_styles () {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_register_style('fontawesome', get_template_directory_uri() . '/css/all.min.css');
    $dependencies = array('bootstrap');
    wp_enqueue_style('gg-style', get_stylesheet_uri(), $dependencies);
}

function gg_enqueue_scripts () {
    $dependencies = array('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', $dependencies, '4.3.1', TRUE);
    wp_enqueue_script('fontawesome', get_template_directory_uri() . '/js/all.min.js', $dependencies, '5.15.3', TRUE);
}

add_action('wp_enqueue_scripts', 'gg_enqueue_styles');
add_action('wp_enqueue_scripts', 'gg_enqueue_scripts');

function gg_wp_setup () {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'gg_wp_setup');

/* Theme setup */
add_action('after_setup_theme', 'wpt_setup');
if (!function_exists('wpt_setup')):
    function wpt_setup () {
        register_nav_menu('primary', __('Primary navigation', 'wp_gg'));
    }
endif;

add_theme_support('post-thumbnails');

require_once('wp_bootstrap_navwalker.php');
?>