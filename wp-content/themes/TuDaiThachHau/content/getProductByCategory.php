<div>
    <div class="new-product">
        <?php $get = get_term_by('id', 15, 'product_cat'); ?>
        <h2><a href="<?php echo get_term_link($get->slug, 'product_cat'); ?>"><?php echo $get->name; ?></a></h2>
        <div class="dash"></div>
    </div>
    <div class="display-flex all-product">
        <?php
        $args = array(
            'post_type'             => 'product',
            'posts_per_page'        => 4,
            'ignore_sticky_posts'   => 1,
            'product_cat'           => $get->slug
        );
        ?>
        <?php $getposts = new WP_Query($args); ?>
        <?php
        global $wp_query;
        $wp_query->in_the_loop = true;
        ?>
        <?php
        while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php global $product; ?>
            <a href="<?php the_permalink(); ?>" class="color-product">
                <div class="new-product_1">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'chinhsua')); ?>
                    <?php if ($product->is_on_sale()) { ?>
                        <p>Giảm <?php echo precentSale($product->get_regular_price(), $product->get_sale_price()); ?>%</p>
                    <?php } ?>
                    <p><?php the_title(); ?></p>
                    <div class="content-new-product_1">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_theme_file_uri() . '/assets/traitim.png'; ?>" alt="loading" width="35">
                        </a>
                        <p><?php echo $product->get_price_html(); ?></p>
                    </div>
                    <div class="add-to-card-and-read">
                        <a href="<?php the_permalink(); ?>" class="read">Chi tiết</a>
                    </div>
                </div>
            </a>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>
<div style="padding-bottom: 50px;">
    <div class="new-product">
        <?php $get = get_term_by('id', 16, 'product_cat'); ?>
        <h2><a href="<?php echo get_term_link($get->slug, 'product_cat'); ?>"><?php echo $get->name; ?></a></h2>
        <div class="dash"></div>
    </div>
    <div class="display-flex all-product">

        <?php
        $args = array(
            'post_type'             => 'product',
            'posts_per_page'        => 4,
            'ignore_sticky_posts'   => 1,
            'product_cat'           => $get->slug
        );
        ?>
        <?php $getposts = new WP_Query($args); ?>
        <?php
        global $wp_query;
        $wp_query->in_the_loop = true;
        ?>
        <?php
        while ($getposts->have_posts()) : $getposts->the_post(); ?>
            <?php global $product; ?>
            <a href="<?php the_permalink(); ?>" class="color-product">
                <div class="new-product_1">
                    <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'chinhsua')); ?>
                    <?php if ($product->is_on_sale()) { ?>
                        <p>Giảm <?php echo precentSale($product->get_regular_price(), $product->get_sale_price()); ?>%</p>
                    <?php } ?>
                    <p><?php the_title(); ?></p>
                    <div class="content-new-product_1">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_theme_file_uri() . '/assets/traitim.png'; ?>" alt="loading" width="35">
                        </a>
                        <p><?php echo $product->get_price_html(); ?></p>
                    </div>
                    <div class="add-to-card-and-read">
                        <a href="<?php the_permalink(); ?>" class="read">Chi tiết</a>
                    </div>
                </div>
            </a>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </div>
</div>