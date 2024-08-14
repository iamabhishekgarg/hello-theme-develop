<?php
/**
 * Theme functions and definitions.
 *
 * For additional information on potential customization options,
 * read the developers' documentation:
 *
 * https://developers.elementor.com/docs/hello-elementor-theme/
 *
 * @package HelloElementorChild
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

define( 'HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0' );

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_enqueue_styles() {
    wp_enqueue_style(
        'hello-elementor-child-style',
        get_stylesheet_uri(),
        ['hello-elementor-theme-style'],
        HELLO_ELEMENTOR_CHILD_VERSION
    );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_styles', 20 );

/**
 * Register custom navigation menus.
 */
function register_header_menu() {
    // Register the primary menu location.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'hello-elementor'), // Use the parent theme's text domain
    ));
}
add_action('after_setup_theme', 'register_header_menu');

// Include the WP_Bootstrap_Navwalker class
require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';

function include_custom_footer() {
    if ( is_page() ) { // Adjust this as needed
        get_template_part( 'footer', 'custom' );
    }
}
add_action( 'wp_footer', 'include_custom_footer', 20 );
