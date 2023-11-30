<?php
/*
Plugin Name: YouTube Video Grid
Description: Display YouTube videos in a grid using custom post type.
Version: 1.0
Author: Suraj Kumar Mandal
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Include necessary files.
require_once plugin_dir_path(__FILE__) . 'includes/custom-post-type.php';
require_once plugin_dir_path(__FILE__) . 'includes/shortcodes.php';

// Enqueue styles
function youtube_video_grid_styles() {
    wp_enqueue_style('youtube-video-grid-style', plugin_dir_url(__FILE__) . 'assets/style.css');
}
add_action('wp_enqueue_scripts', 'youtube_video_grid_styles');
