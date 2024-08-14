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
function hello_elementor_child_scripts_styles() {

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);

}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20 );

// Enqueue Bootstrap CSS and JS using CDN
function hello_elementor_enqueue_bootstrap() {
    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );

    // Bootstrap JS and Popper.js
    wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array( 'jquery', 'popper-js' ), null, true );
    wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_enqueue_bootstrap' );

function hello_elementor_register_nav_menu() {
    register_nav_menu('primary', __('Primary Menu', 'hello-elementor-child'));
}
add_action('after_setup_theme', 'hello_elementor_register_nav_menu');

require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';

