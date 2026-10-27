<?php
/**
 * Fungsi utama tema Syafii Starter.
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function syafii_starter_setup() {
    load_theme_textdomain( 'syafii-starter', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 240, 'flex-height' => true, 'flex-width' => true ) );

    register_nav_menus( array(
        'primary' => __( 'Menu Utama', 'syafii-starter' ),
        'footer'  => __( 'Menu Footer', 'syafii-starter' ),
    ) );
}
add_action( 'after_setup_theme', 'syafii_starter_setup' );

function syafii_starter_assets() {
    wp_enqueue_style( 'syafii-starter-style', get_stylesheet_uri(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'syafii_starter_assets' );

function syafii_starter_excerpt_length( $length ) {
    return 24;
}
add_filter( 'excerpt_length', 'syafii_starter_excerpt_length' );

function syafii_starter_excerpt_more( $more ) {
    return '…';
}
add_filter( 'excerpt_more', 'syafii_starter_excerpt_more' );
