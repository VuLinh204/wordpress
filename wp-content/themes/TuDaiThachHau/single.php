<?php get_header(); ?>
<!-- ------------------------------ CONTENT ------------------------------ -->
<div class="header">
    <div class="header">
        <div class="inspiration_pd">
            <h1 class="inspiration-title">Chi tiết bài viết</h1>
            <ul class="nav-first">

                <?php get_sidebar(); ?>

                <div class="sidebar">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <!-- Lấy lượt view -->
                            <?php setPostView(get_the_ID()); ?>
                            <!-- Lấy tiêu đề -->
                            <h1 class="single-title"><?php the_title(); ?></h1>
                            <div class="size-img">
                                <!-- Lấy ảnh -->
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="meta-single">
                                <!-- Lấy tác giả -->
                                <span>Tác giả: <?php the_author(); ?></span>
                                <!-- Lấy danh mục -->
                                <span>Chuyên mục: <?php the_category(', '); ?></span>
                                <!-- Lấy lượt view -->
                                <span>Lượt xem: <?php echo getPostViews(get_the_ID()); ?></span>
                            </div>
                            <div class="single-content">
                                <?php the_content(); ?>
                            </div>
                            <div class="related-post">
                                <?php
                                $categories = get_the_category(get_the_ID());
                                if ($categories) {
                                    $category_ids = array();
                                    foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;
                                    $args = array(
                                        'category__in' => $category_ids,
                                        'post__not_in' => array(get_the_ID()),
                                        'showposts'    => 4
                                    );
                                    $my_query = new WP_Query($args);
                                    if ($my_query->have_posts()) {
                                        echo "<h3>Bài viết có liên quan</h3>";
                                        while ($my_query->have_posts()) {
                                            $my_query->the_post();
                                ?>
                                            <div class="content nav-first">
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="img-sidebar-right">
                                                        <?php the_post_thumbnail('full'); ?>
                                                    </div>
                                                </a>
                                                <div>
                                                    <h4 style="padding-bottom: 10px;">
                                                        <a style="font-size: 20px;" href="<?php the_permalink(); ?>">
                                                            <?php the_title(); ?>
                                                        </a>
                                                    </h4>
                                                    <?php the_excerpt(); ?>
                                                    <div style="padding-top: 50px;">
                                                        <a class="btn-main" href="<?php the_permalink(); ?>">Xem chi tiet</a>
                                                    </div>
                                                </div>
                                            </div>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            </ul>
        </div>
    </div>
</div>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->

<?php get_footer(); ?>