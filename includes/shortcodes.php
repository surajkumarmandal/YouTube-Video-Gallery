<?php
// Shortcode function to display video grid
function video_grid_shortcode() {
    ob_start();
    include plugin_dir_path(__FILE__) . '../templates/video-grid.php';
    return ob_get_clean();
}
add_shortcode('video_grid', 'video_grid_shortcode');
