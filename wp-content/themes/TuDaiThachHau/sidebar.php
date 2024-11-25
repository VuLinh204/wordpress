<div class="container">
    <div class="main-content">
        <?php
        // Vòng lặp bài viết
        $args = array(
            'post_status'       => 'publish',
            'post_type'         => 'post',
            'posts_per_page'    => 5,
            'cat'               => 1
        );
        $getposts = new WP_Query($args);
        global $wp_query;
        $wp_query->in_the_loop = true;

        while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <div class="inspiration-img display-flex inspiration-img-sidebar">
                <a class="sidebar-img" href="<?php the_permalink(); ?>">
                    <div class="sidebar-thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>  
                </a>
                <h3 class="content-inspiration sidebar-title"><?php the_title(); ?></h3>
            </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>