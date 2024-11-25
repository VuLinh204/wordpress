<?php get_header(); ?>
<!-- ------------------------------ CONTENT ------------------------------ -->
<main class="main">
    <!-- ------------------------------ SLIDER ------------------------------ -->
    <div class="slider">

        <!-- Gán slider -->
        <?php get_template_part('content/slider'); ?>

    </div>
    <div class="show-product">
        <div class="flex-1 img-main">
            <img src="<?php echo get_theme_file_uri() . '/assets/sofa.jpg'; ?>" alt="loadding..." width="100%" height="459.5">
            <h2 class="title-img-product">SOFA</h2>
        </div>
        <div class="show-product flex-1">
            <div class="img-product">
                <div class="img-main">
                    <img src="<?php echo get_theme_file_uri() . '/assets/banan.jpg'; ?>" alt="loadding..." width="100%" height="227">
                    <h2 class="title-img-product">BÀN ĂN</h2>
                </div>
                <div class="img-main">
                    <img src="<?php echo get_theme_file_uri() . '/assets/armchair.jpg'; ?>" alt="loadding..." width="100%" height="228">
                    <h2 class="title-img-product">ARMCHAIR</h2>
                </div>
            </div>
            <div class="img-product">
                <div class="img-main">
                    <img src="<?php echo get_theme_file_uri() . '/assets/giuong.jpg'; ?>" alt="loadding..." width="100%" height="227">
                    <h2 class="title-img-product">GIƯỜNG</h2>
                </div>
                <div class="img-main">
                    <img src="<?php echo get_theme_file_uri() . '/assets/ghean.jpg'; ?>" alt="loadding..." width="100%" height="228">
                    <h2 class="title-img-product">GHẾ ĂN</h2>
                </div>
            </div>
        </div>
    </div>
    <div>
        <form action="#" class="img-main">
            <input type="text" class="input-main" placeholder="Tìm sản phẩm">
            <img src="<?php echo get_theme_file_uri() . '/assets/search.png'; ?>" alt="loadding..." width="40" height="35" class="img-main-search">
        </form>
    </div>
    <div class="decorate-main img-livingroom">
        <div class="display-flex">
            <div class="room-main">
                <div class="livingroom-main">
                    <img src="<?php echo get_theme_file_uri() . '/assets/livingroom.jpg'; ?>" alt="loadding..." width="95%">
                </div>
                <div class="display-flex alg-center">
                    <div class="badroom-main">
                        <img src="<?php echo get_theme_file_uri() . '/assets/badroom.jpg'; ?>" alt="loadding" width="100%">
                    </div>
                    <div class="content-badroom">
                        <h2 class="content_1-badroom">Không gian phòng ngủ</h2>
                        <p class="content_2-badroom">Những mẫu phòng ngủ của Nhà Xinh mang đến cảm giác ấm cúng, gần
                            gũi và thoải mái</p>
                        <a href="" class="first-color">MẪU PHÒNG NGỦ >></a>
                    </div>
                </div>
            </div>
            <div>
                <div>
                    <div class="display-flex livingroom-main">
                        <div>
                            <div class="content-livingroom-main">
                                <h2 class="content_1-livingroom-main">Không gian phòng khách</h2>
                                <p class="content_2-livingroom-main">Phòng khách là không gian chính của ngôi nhà,
                                    là nơi sum họp gia đình</p>
                                <a href="" class="first-color">MẪU PHÒNG KHÁCH >></a>
                            </div>
                            <div class="content-decorate-main">
                                <h2 class="content_1-livingroom-main">Đồ trang trí</h2>
                                <p class="content_2-livingroom-main">Mang lại những nguồn cảm hứng và nét sinh động
                                    cho không gian</p>
                                <a href="" class="first-color">KHÁM PHÁ >></a>
                            </div>
                        </div>
                        <div>
                            <img src="<?php echo get_theme_file_uri() . '/assets/decorate.jpg'; ?>" alt="loadding" width="100%" height="100%">
                        </div>
                    </div>
                </div>
                <div class="kitchen-main">
                    <div>
                        <img src="<?php echo get_theme_file_uri() . '/assets/kitchen.jpg'; ?>" alt="loadding" width="100%">
                    </div>
                    <div>
                        <h2 class="content_1-livingroom-main">Không gian phòng ăn</h2>
                        <p class="content_2-livingroom-main">Một bữa ăn ngon luôn là mong ước của mỗi gia đình.
                            Không gian phòng ăn đóng vai trò rất quan trọng trong văn hóa Việt</p>
                        <a href="" class="first-color">MẪU PHÒNG ĂN >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="display-flex alg-center">
        <div class="out-content">
            <div class="content-interior-main">
                <h2 class="content_1-interior-main">NỘI THẤT TINH TẾ</h2>
                <p class="content_2-interior-main">Với kinh nghiệm hơn 24 năm trong hoàn thiện nội thất, Nhà Xinh
                    mang
                    đến giải pháp toàn diện trong bao gồm thiết kế, trang trí và cung cấp nội thất trọn gói. Sở hữu
                    đội
                    ngũ chuyên nghiệp và hệ thống 10 cửa hàng, Nhà Xinh là lựa chọn cho không gian tinh tế và hiện
                    đại.
                </p>
                <a href="#" class="content_3-interior-main">Xem thêm</a>
            </div>
        </div>
        <div>
            <img src="<?php echo get_theme_file_uri() . '/assets/interior.jpg'; ?>" alt="loadding" width="100%">
        </div>
    </div>
    <div class="header">
        <div class="new-product">
            <h2>Sản phẩm nổi bật</h2>
            <div class="dash"></div>
        </div>
        <div class="display-flex all-product">

            <!-- Lấy sản phẩm nổi bật và sale -->
            <?php get_template_part('content/sale'); ?>

        </div>
        <!-- Lấy sản phẩm theo danh mục -->
        <?php get_template_part('content/getProductByCategory'); ?>
        <div class="display-flex alg-center bg-nest">
            <div class="out-content">
                <div class="content-nest">
                    <h2 class="content_1-interior-main">Tổ ấm của người tinh tế</h2>
                    <p class="content_2-interior-main">Trong suốt hơn 24 năm qua, cảm hứng từ gu thẩm mỹ tinh tế và
                        tinh
                        thần “Việt” đã giúp Nhà Xinh tạo ra những thiết kế độc đáo, hợp thời và chất lượng. Nhà Xinh
                        hiện đã mở 10 cửa hàng tại Việt Nam.
                    </p>
                    <a href="#" class="content_3-interior-main">Về nhà xinh</a>
                </div>
            </div>
            <div>
                <img src="<?php echo get_theme_file_uri() . '/assets/sofalon.jpg'; ?>" alt="loadding" width="100%">
            </div>
        </div>
        <div class="header">
            <div class="inspiration_pd">
                <h1 class="inspiration-title">Tin tức Nhà Xinh</h1>
                <ul class="display-flex inspiration">

                    <!-- Lấy tin tức -->
                    <?php get_template_part('content/tintuc'); ?>

                </ul>
        </div>
    </div>
</main>
<!-- ------------------------------ FOOTER ------------------------------ -->

<?php get_footer(); ?>