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

/**
 * Synchronize the social preview image from theme assets into WordPress uploads.
 */
function seedarr_sync_og_image() {
    $src = get_template_directory() . '/assets/img/og-image.png';
    if (!file_exists($src)) {
        return;
    }

    $upload_dir = wp_upload_dir();
    $target_dir = $upload_dir['basedir'] . '/2026/09';
    $target_file = $target_dir . '/og-image.png';

    if (!file_exists($target_dir)) {
        wp_mkdir_p($target_dir);
    }

    if (!file_exists($target_file) || md5_file($src) !== @md5_file($target_file)) {
        @copy($src, $target_file);
    }
}
add_action('init', 'seedarr_sync_og_image');

/**
 * Filter Yoast SEO Open Graph and Twitter image URLs to use theme assets directly.
 */
add_filter('wpseo_opengraph_image', function ($image_url) {
    return get_template_directory_uri() . '/assets/img/og-image.png';
});

add_filter('wpseo_twitter_image', function ($image_url) {
    return get_template_directory_uri() . '/assets/img/og-image.png';
});
