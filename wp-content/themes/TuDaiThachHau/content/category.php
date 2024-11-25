<?php
$args = array(
    'type' => 'product',
    'child_of' => 0,
    'parent' => 0,
    'taxonomy' => 'product_cat'
);
$categories = get_categories($args);
foreach ($categories as $category) {
?>
    <li>
        <a class="danhmuc" href="<?php echo get_term_link($category->slug, 'product_cat'); ?>">
            <?php echo $category->name; ?>
        </a>
    </li>
<?php
}
?>