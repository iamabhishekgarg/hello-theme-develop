<?php
$id = isset($page_id) ? $page_id : get_the_ID();
if (have_rows('section_data', $id)) {
    while (have_rows('section_data', $id)) {
        the_row();
        $module = get_row_layout();
        $template_path = locate_template('custom-template/' . $module . '.php');
        
        if ($template_path) {
            include($template_path);
        } else {
            // Optionally, handle cases where the template is not found
            echo '<!-- Template for module ' . esc_html($module) . ' not found. -->';
        }
    }
}
?>
