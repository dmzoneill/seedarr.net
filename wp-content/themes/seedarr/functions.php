<?php
/**
 * Seedarr Theme Functions
 *
 * @package Seedarr
 */

if (!defined('ABSPATH')) {
    exit;
}

function seedarr_setup() {
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('responsive-embeds');

    register_nav_menus(array(
        'primary' => __('Primary Navigation', 'seedarr'),
    ));
}
add_action('after_setup_theme', 'seedarr_setup');

function seedarr_scripts() {
    $theme_version = wp_get_theme()->get('Version');

    // Vendor CSS
    wp_enqueue_style('seedarr-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '3.4.1');
    wp_enqueue_style('seedarr-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.0.0');
    wp_enqueue_style('seedarr-highlight', get_template_directory_uri() . '/assets/css/highlight-github-dark.min.css', array(), '11.0.0');
    
    // Theme main stylesheet
    wp_enqueue_style('seedarr-style', get_stylesheet_uri(), array('seedarr-bootstrap'), $theme_version);

    // Scripts
    wp_enqueue_script('seedarr-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '3.4.1', true);
    wp_enqueue_script('seedarr-highlight-js', get_template_directory_uri() . '/assets/js/highlight.min.js', array(), '11.0.0', true);
    wp_enqueue_script('seedarr-app', get_template_directory_uri() . '/assets/js/app.js', array('jquery', 'seedarr-bootstrap-js'), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'seedarr_scripts');
