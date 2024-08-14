<?php
/**
 * Template Name: Custom Template
 * Template Post Type: page
 */

get_header();

// Custom functions go here
function hello_elementor_custom_function() {
    // Your custom function code
    echo 'Hello, this is a custom function!';
}

// Call the custom function
hello_elementor_custom_function();

?>

<div class="custom-content">
    <!-- Your page content here -->
    <p>This is content from the custom template.</p>
</div>

<?php
get_footer();
?>
