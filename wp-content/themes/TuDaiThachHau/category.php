<?php get_header(); ?>
<!-- ------------------------------ CONTENT ------------------------------ -->
<div class="header">
    <div class="header">
        <div class="inspiration_pd">
            <h1 class="inspiration-title">Tin tức Nhà Xinh</h1>
            <ul class="nav-first">

                <?php get_sidebar(); ?>

                <div class="sidebar">
                    <div>
                        <h1 class="title-tintuc"><?php single_cat_title(); ?></h1>
                        <div>
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
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
                                <?php endwhile; else: ?>
                                <h3>Chưa có bài viết nào!!!</h3>
                            <?php endif; ?>
                        </div>
                        <?php if (paginate_links() != '') { ?>
                            <div class="quatrang">
                                <?php
                                global $wp_query;
                                $big = 999999999;
                                echo paginate_links(array(
                                    'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                                    'format'    => '?paged=%#%',
                                    'prev_text' => __('Previous'),
                                    'next_text' => __('Next'),
                                    'current'   => max(1, get_query_var('paged')),
                                    'total'     => $wp_query->max_num_pages
                                ));
                                ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </ul>
        </div>
    </div>
</div>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->

<?php get_footer(); ?>