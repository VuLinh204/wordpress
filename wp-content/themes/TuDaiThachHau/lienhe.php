<?php get_header();
/* Template Name: lienhe */
?>
<!-- ------------------------------ CONTENT ------------------------------ -->
<div class="header">
    <div class="header">
        <div class="inspiration_pd">
            <ul class="nav-first">
                <div class="sidebar">
                    <div class="display-flex bg-support">
                        <div class="img-support">
                            <div class="hotline-support-main">
                                <a href="#" class="hotline-support">Hotline: 1800 7200</a>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="68fb82d" title="Liên Hệ"]'); ?>
                        </div>
                        <div class="img-support">
                            <img src="<?php echo get_theme_file_uri() . '/assets/support.jpg'; ?>" alt="loadding" width="100%">
                        </div>
                    </div>
                </div>

            </ul>
        </div>
    </div>
</div>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->

<?php get_footer(); ?>