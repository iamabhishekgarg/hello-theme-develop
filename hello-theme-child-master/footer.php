<?php
/**
 * The template for displaying the footer.
 *
 * Contains the body & html closing tags.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit Sif accessed directly.
}

if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
	
	if ( hello_elementor_display_header_footer() ) {
		if ( did_action( 'elementor/loaded' ) && hello_header_footer_experiment_active() ) {
			
			get_template_part( 'inc/dynamic-footer' );
		} else {
			get_template_part( 'inc/footer' );
		}
	}
}
?>

<?php wp_footer(); ?>

</body>
</html>
