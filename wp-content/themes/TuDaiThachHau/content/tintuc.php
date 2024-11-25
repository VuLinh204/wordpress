<?php
$args = array(
    'post_status'       => 'publish',
    'post_type'         => 'post',
    'posts_per_page'    => 4,
    'cat'               => 1
);
?>
<?php $getposts = new WP_Query($args); ?>
<?php
global $wp_query;
$wp_query->in_the_loop = true;
?>
<?php
while ($getposts->have_posts()) : $getposts->the_post(); ?>
    <div class="inspiration-img">
        <a href="<?php the_permalink(); ?>">
            <div class="size-img">
                <?php the_post_thumbnail('full'); ?>
            </div>
        </a>
        <h3 class="content-inspiration"><?php the_title(); ?></h3>
    </div>
<?php endwhile;
wp_reset_postdata();
?>