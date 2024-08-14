<?php

/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$site_name = get_bloginfo('name');
$tagline   = get_bloginfo('description', 'display');
$header_nav_menu =  wp_nav_menu(array(
    'theme_location'  => 'primary',
    'depth'           => 2,
    'container'       => false,
    'menu_class'      => 'navbar-nav ml-auto',
    'fallback_cb'     => false, // Disable fallback to see if walker
    'walker'          => new WP_Bootstrap_Navwalker(),
    'echo'            => false,
));
?>
<nav class="navbar navbar-expand-md navbar-light container">

    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } elseif ($site_name) {
    ?>

        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr__('Home', 'hello-elementor'); ?>" rel="home">
            <?php echo esc_html($site_name); ?>
        </a>

        <?php if ($tagline) : ?>
            <p class="site-description">
                <?php echo esc_html($tagline); ?>
            </p>
        <?php endif; ?>
    <?php } ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-textdomain'); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="primary-menu">
        <?php
        // Check if the menu is empty
        if (empty($header_nav_menu)) {
            echo 'No menu found or there\'s an error.';
        } else {
            echo '<div id="primary-menu" class="collapse navbar-collapse">';
            echo $header_nav_menu;
            echo '</div>';
        }
        ?>
    </div>
</nav>