<?php
/**
 * Teal Giraffes Theme Functions
 *
 * @package Teal_Giraffes
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'TEAL_GIRAFFES_VERSION', '1.0.0' );
define( 'TEAL_GIRAFFES_DIR', get_template_directory() );
define( 'TEAL_GIRAFFES_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function teal_giraffes_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'teal-giraffes' ),
        'footer'  => __( 'Footer Menu', 'teal-giraffes' ),
    ) );

    // Add image sizes
    add_image_size( 'hero', 1920, 800, true );
    add_image_size( 'card', 600, 400, true );
    add_image_size( 'team', 400, 400, true );
}
add_action( 'after_setup_theme', 'teal_giraffes_setup' );

/**
 * Enqueue Scripts and Styles
 */
function teal_giraffes_scripts() {
    // Google Fonts - Montserrat for headings, Inter for body, Dancing Script for cursive labels
    wp_enqueue_style(
        'teal-giraffes-fonts',
        'https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap',
        array(),
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'teal-giraffes-main',
        TEAL_GIRAFFES_URI . '/assets/css/main.css',
        array(),
        TEAL_GIRAFFES_VERSION
    );

    // Main script
    wp_enqueue_script(
        'teal-giraffes-main',
        TEAL_GIRAFFES_URI . '/assets/js/main.js',
        array(),
        TEAL_GIRAFFES_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'teal_giraffes_scripts' );

/**
 * Register Widget Areas
 */
function teal_giraffes_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'teal-giraffes' ),
        'id'            => 'footer-1',
        'description'   => __( 'Footer widget area 1', 'teal-giraffes' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'teal-giraffes' ),
        'id'            => 'footer-2',
        'description'   => __( 'Footer widget area 2', 'teal-giraffes' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'teal-giraffes' ),
        'id'            => 'footer-3',
        'description'   => __( 'Footer widget area 3', 'teal-giraffes' ),
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'teal_giraffes_widgets_init' );

/**
 * Add button classes to menu items
 */
function teal_giraffes_menu_classes( $classes, $item, $args ) {
    if ( $args->theme_location === 'primary' ) {
        $title = strtolower( $item->title );
        if ( strpos( $title, 'donate' ) !== false ) {
            $classes[] = 'menu-btn-donate';
        }
        if ( strpos( $title, 'contact' ) !== false ) {
            $classes[] = 'menu-btn-contact';
        }
    }
    return $classes;
}
add_filter( 'nav_menu_css_class', 'teal_giraffes_menu_classes', 10, 3 );

/**
 * Custom excerpt length
 */
function teal_giraffes_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'teal_giraffes_excerpt_length' );

/**
 * Custom excerpt more
 */
function teal_giraffes_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'teal_giraffes_excerpt_more' );
