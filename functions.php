<?php

// Load styles
function load_styles() {
    // Bootstrap
    wp_enqueue_style('bootstrap-styles', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.1.3');
    // TwentyTwenty - before/after
    wp_enqueue_style('twenty-twenty-styles', get_template_directory_uri() . '/assets/css/twentytwenty.css', array(), '1.0.0');
    // AOS animation
    wp_enqueue_style('aos-styles', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.0.0');
    // Custom CSS - with timestamp version
    wp_enqueue_style('theme-styles', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/main.css'));
}
add_action('wp_enqueue_scripts', 'load_styles');

// Load scripts
function load_scripts() {
    // AOS
    wp_enqueue_script('aos_scripts', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), '4.0.2', true);
    // Zenscroll
    wp_enqueue_script('zenscroll_scripts', get_template_directory_uri() . '/assets/js/zenscroll-min.js', array('jquery'), '4.0.2', true);
    // TwentyTwenty Image Comparison Slider
    wp_enqueue_script('jquery-event-move_scripts', get_template_directory_uri() . '/assets/js/jquery.event.move.js', array('jquery'), '2.0', true);
    wp_enqueue_script('twentytwenty_scripts', get_template_directory_uri() . '/assets/js/jquery.twentytwenty.js', array('jquery'), '1.0', true);
    // Bootstrap
    wp_enqueue_script('bootstrap_scripts', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);
    // Custom Scripts
    wp_enqueue_script('custom_scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Custom Post Types
require_once(get_template_directory() . '/includes/custom-post-types.php');

// Remove WordPress Upload Image Scaling
add_filter('big_image_size_threshold', '__return_false');

// Display template name on bottom of page for dev purposes
// Uncomment the following lines to enable this feature
/*
function which_template_is_loaded() {
    if (is_super_admin()) {
        global $template;
        print_r($template);
    }
}
add_action('wp_footer', 'which_template_is_loaded');
*/