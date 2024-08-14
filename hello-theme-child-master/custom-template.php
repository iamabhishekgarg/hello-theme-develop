<?php
  /*
   * Template Name: Custom Template
   */
?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

  <?php include(locate_template('custom-function.php')); ?>

<?php endwhile; ?>

<?php get_footer(); ?>