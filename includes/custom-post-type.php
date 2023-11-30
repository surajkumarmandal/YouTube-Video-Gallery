<?php
// Register Custom Post Type
function create_video_post_type() {
    register_post_type('youtube_video',
        array(
            'labels' => array(
                'name' => __('YouTube Videos'),
                'singular_name' => __('YouTube Video')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor')
        )
    );
}
add_action('init', 'create_video_post_type');
