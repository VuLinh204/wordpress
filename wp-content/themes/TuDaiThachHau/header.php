<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri() . '/assets/nhaxinh.png' ?>" type="image/x-icon">

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <?php wp_head(); ?>
    <title>Nội thất nhà xinh</title>
</head>

<body <?php body_class(); ?>>
    <header class="show-up-down">
        <nav class="header">
            <div class="navigation">
                <div class="nav">
                    <div class="nav-first">
                        <div class="img-vn">
                            <img src="<?php echo get_theme_file_uri() . '/assets/VN.png' ?>" alt="loadding..." width="20">
                            <a href="" class="first-color">VN</a>
                            <a href="" class="telephone">EN</a>
                        </div>
                        <ul class="ul-nav">
                            <li><a href="#" class="telephone">0906 904 114</a></li>
                            <li><a href="#" class="first-color">Khuyến mãi</a></li>
                            <li><a href="#" class="hover first-color">Giảm giá đặc biệt</a></li>
                        </ul>
                    </div>
                    <div>

                        <!-- Gán menu -->
                        <?php get_template_part('content/menu'); ?>

                    </div>
                </div>
            </div>
            <div>
                <div class="nav">
                    <div class="nav-first">
                        <div class="menu-bar">
                            <div>
                                <a href="#">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/menu-bar.png' ?>" alt="loadding...">
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo site_url(''); ?>">
                                    <img src="<?php echo get_theme_file_uri() . '/assets/logo-nha-xinh-moi-200422.png' ?>" alt="<?php bloginfo('name'); ?>">
                                </a>
                            </div>
                        </div>
                        <ul class="ul-nav">
                            <li>
                                <a href="<?php echo site_url(''); ?>" class="last-color">TRANG CHỦ</a>
                            </li>
                            <li>
                                <ul class="menu">
                                    <li>
                                        <a href="<?php echo site_url(''); ?>" class="last-color">DANH MỤC</a>
                                        <ul class="submenu">

                                            <!-- Gán category -->
                                            <?php get_template_part('content/category'); ?>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo site_url('cua-hang'); ?>" class="last-color">SẢN PHẨM</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('gioi-thieu'); ?>" class="last-color">GIỚI THIỆU</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('tin-tuc'); ?>" class="last-color">TIN TỨC</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('lien-he'); ?>" class="last-color">LIÊN HỆ</a>
                            </li>
                        </ul>
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px">
                        
                        <?php get_template_part('search'); ?>

                        <div>
                            <a href="<?php echo site_url('gio-hang'); ?>">
                                <img src="<?php echo get_theme_file_uri() . '/assets/giohang.png' ?>" alt="loadding..." width="20">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <?php get_template_part('content/breadcrumbs'); ?>