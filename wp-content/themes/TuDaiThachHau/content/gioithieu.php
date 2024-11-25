<!-- Lấy tiêu đề -->
<h1 class="single-title"><?php the_title(); ?></h1>
<div class="size-img-gt">
    <!-- Lấy ảnh -->
    <?php the_post_thumbnail('full'); ?>
</div>
<div class="single-content">
    <?php the_content(); ?>
</div>