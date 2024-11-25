<?php
$args = array(
    'post_per_page' => 2,
    'post_type'     => 'slider'
);
$the_query = new WP_Query($args);
$i = 1;
?>
<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="img-main navigation">
            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-slider')); ?>
            <div class="title-img-main">
                <h1 class="color-title-img-main">BST MỚI ORIENTALE</h1>
                <p class="color-title-img-main">Tinh hoa từ gỗ Walnut và da tự nhiên</p>
                <a href="#" class="btn-main">SỞ HỮU NGAY</a>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>