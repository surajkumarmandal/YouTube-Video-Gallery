<div class="video-grid">
    <?php
    $videos = new WP_Query(array(
        'post_type' => 'youtube_video',
        'posts_per_page' => -1,
    ));

    if ($videos->have_posts()) :
        while ($videos->have_posts()) : $videos->the_post();
            $video_url = get_field('youtube_video_url'); // Assuming you're using Advanced Custom Fields for video URL
            $post_title = get_the_title(); // Get the post title

            // Extract YouTube video ID from the URL
            preg_match('/(?:youtube(?:-nocookie)?\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/', $video_url, $matches);
            $youtube_video_id = $matches[1];

            // Display each video as a grid item with title
            ?>
            <div class="video-item">
                <div class="video-thumbnail">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youtube_video_id; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <h2 class="video-title"><?php echo $post_title; ?></h2>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No videos found.';
    endif;
    ?>
</div>
