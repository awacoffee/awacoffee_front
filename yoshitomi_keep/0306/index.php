<?php get_header(); ?>

<main id="news_under">
    <!-- ▼タイトルエリア▼ -->
    <div class="wrap">
        <div class="under_title inner">
            <div class="under_wrap_title">
                <p>News</p>
                <h1>ニュース</h1>
            </div>
        </div>
    </div>

    <div class="column2_flex wrap">
        <!-- ニュース一覧本文-->
        <div class="column2_article">
            <div class="wrap">
                <div class="inner">
                    <!-- ▼お知らせカード▼ -->
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php
                            get_template_part('template-parts/loop', 'news');
                            ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="more_btn"><button>more</button></div>
                </div>
            </div>
        </div>

        <!-- サイドバー -->
        <!-- サイドバー -->
        <div class="column2_aside">
            <div class="wrap">
                <div class="inner">
                    <div class="side_scrool">
                        <!-- コラムカテゴリ -->

                        <?php get_sidebar('categories') ?>

                        <!-- ニュース -->

                        <?php get_sidebar('news') ?>
                    </div>
                </div>
                <!-- inner -->
            </div>
            <!-- wrap -->
        </div>
    </div>
</main>


<?php get_footer(); ?>