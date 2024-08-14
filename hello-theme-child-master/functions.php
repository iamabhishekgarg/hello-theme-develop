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

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

define('HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0');

/**
 * Load child theme scripts & styles.
 *
 * @return void
 */
function hello_elementor_child_scripts_styles()
{

	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		HELLO_ELEMENTOR_CHILD_VERSION
	);
}
add_action('wp_enqueue_scripts', 'hello_elementor_child_scripts_styles', 20);

// Enqueue Bootstrap CSS and JS using CDN
function hello_elementor_enqueue_bootstrap()
{
	// Bootstrap CSS
	wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

	// Bootstrap JS and Popper.js
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery', 'popper-js'), null, true);
	wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'hello_elementor_enqueue_bootstrap');

function hello_elementor_register_nav_menu()
{
	register_nav_menu('primary', __('Primary Menu', 'hello-elementor-child'));
}
add_action('after_setup_theme', 'hello_elementor_register_nav_menu');

require_once get_stylesheet_directory() . '/inc/class-wp-bootstrap-navwalker.php';

if (function_exists('register_sidebar')) {
    $sidebars = array(
        array(
            'name'          => __('Sidebar 1', 'text_domain'),
            'id'            => 'sidebar-1',
            'description'   => __('A short description of Sidebar 1.', 'text_domain'),
        ),
        array(
            'name'          => __('Sidebar 2', 'text_domain'),
            'id'            => 'sidebar-2',
            'description'   => __('A short description of Sidebar 2.', 'text_domain'),
        ),
        array(
            'name'          => __('Sidebar 3', 'text_domain'),
            'id'            => 'sidebar-3',
            'description'   => __('A short description of Sidebar 3.', 'text_domain'),
        ),
        array(
            'name'          => __('Sidebar 4', 'text_domain'),
            'id'            => 'sidebar-4',
            'description'   => __('A short description of Sidebar 4.', 'text_domain'),
        ),
        array(
            'name'          => __('Sidebar 5', 'text_domain'),
            'id'            => 'sidebar-5',
            'description'   => __('A short description of Sidebar 5.', 'text_domain'),
        ),
    );

    foreach ($sidebars as $sidebar) {
        register_sidebar(array(
            'name'          => $sidebar['name'],
            'id'            => $sidebar['id'],
            'description'   => $sidebar['description'],
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ));
    }
}

