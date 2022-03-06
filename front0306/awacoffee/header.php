<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ▼設定するのであれば入れる▼ -->
    <meta name="keywords" content="" />
    <!-- ▼ディスクリプション→コンテンツ班からもらう▼ -->
    <meta name="description" content="" />

    <link rel="stylesheet" href="https://use.typekit.net/twf1hjd.css" />

    <title><?php bloginfo('name'); ?></title>
    <?php
    wp_head();
    ?>
</head>

<body>
    <!-- ▼SP下層ヘッダー▼ -->
    <header>
        <div class="header_wrap under mainvisual_wrap">
            <div class="header_inner">
                <div class="header_wrap_box">
                    <!-- ▼カップicon▼ -->
                    <a href="<?php echo home_url(); ?>" class="header_wrap_box_icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" alt="Awa Our Coffee Hourのアイコン" />
                    </a>
                    <nav>
                        <ul class="header_nav_list">
                            <li>
                                <a href="<?php echo get_permalink(243); ?>" class="header_nav_item">条件検索</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/column_category/beginner/'); ?>" class="header_nav_item">コーヒー入門知識</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/column_category/blog/'); ?>" class="header_nav_item">ブログ</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/column_category/special/'); ?>" class="header_nav_item">特集</a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(245); ?>" class="header_nav_item">マイページ</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- ▼ハンバーガーメニュー▼ -->
                    <div class="header_wrap_box_nav">
                        <span class="header_wrap_box_nav_line"></span>
                        <span class="header_wrap_box_nav_line"></span>
                        <span class="header_wrap_box_nav_line"></span>
                    </div>
                </div>
                <!-- header_wrap_box -->
            </div>
        </div>
        <!-- /.header_wrap -->

        <!-- ▼ドロワー▼ -->
        <div class="drower">
            <div class="wrap">
                <div class="inner">
                    <nav class="drower_nav">
                        <div class="drower_nav_close"></div>
                        <div class="drower_nav_logo">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_aoch.png" alt="Awa Our Coffee Hour" /></a>
                        </div>
                        <ul class="drower_nav_box">
                            <li>
                                <a href="<?php echo home_url('/purpose/drink/'); ?>" class="drower_nav_box_item">店で飲みたい</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/purpose/beans/'); ?>" class="drower_nav_box_item">豆を買いたい</a>
                            </li>
                        </ul>
                        <ul class="drower_nav_list">
                            <li>
                                <a href="<?php echo get_permalink(243); ?>" class="drower_nav_item">条件検索</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/column_category/beginner/'); ?>" class="drower_nav_item">コーヒー入門知識</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/column_category/blog/'); ?>" class="drower_nav_item">ブログ</a>
                            </li>
                            <li>
                                <a href="<?php echo home_url('/column_category/special/'); ?>" class="drower_nav_item">特集</a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(245); ?>" class="drower_nav_item">マイページ</a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(493); ?>" class="drower_nav_item">お問い合わせ</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/awa_our_coffee_hour/" target="_blank" rel="noopener noreferrer" class="drower_nav_item"><i class="fa-brands fa-instagram fa-2x"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>