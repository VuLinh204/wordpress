<?php get_header(); ?>
<!-- ------------------------------ CONTENT ------------------------------ -->
<div class="header">
    <div class="header">
        <div class="inspiration_pd">
            <ul class="nav-first">
                <div class="sidebar">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <?php get_template_part('content/gioithieu'); ?>

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