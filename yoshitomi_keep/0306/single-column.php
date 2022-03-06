<?php get_header(); ?>


<main class="column_page" id="column_under">

    <!-- ▼タイトルエリア▼ -->
    <div class="wrap">
        <div class="under_title inner">
            <div class="under_wrap_title">
                <p>Column</p>
                <h1>コラム</h1>
                <div class="search_jump_box">
                    <a href="#search_box" class="search_jump_btn"><i class="fa-solid fa-magnifying-glass"></i>記事を探す</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 全体で囲む or flex -->
    <section class="column2_flex wrap">
        <!-- コラム記事本文-->
        <section class="column2_article">
            <div class="wrap">
                <div class="inner">

                    <!-- コラム記事詳細タイトル -->

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="s_column_title_wrap">
                                <h1 class="column_title">
                                    <?php the_title(); ?>
                                </h1>
                                <?php
                                //コラムタグのターム名表示
                                $tag_slug = 'column_tag';
                                $tag_terms = wp_get_object_terms($post->ID, $tag_slug);
                                echo '<ul class="tags">';
                                foreach ($tag_terms as $tag_term) {
                                    echo '<li class="tag">' . $tag_term->name . '</li>';
                                }
                                echo '</ul>';
                                ?>
                            </div>
                            <?php the_content(); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- ▼レコメンド▼ -->
        <section class="recommend">
            <div class="wrap">
                <div class="inner">
                    <h2 class="recommend_title">あなたへのおすすめ</h2>
                    <div class="card_wrap">
                        <?php
                        // メニューの投稿タイプ
                        $category = array(
                            'post_type' => 'column',
                            'posts_per_page' => 3,
                            'orderby' => 'rand',
                            'post__not_in' => array($post->ID),
                        );
                        // エリアで絞り込む
                        $categories = array_shift(get_the_terms($post->ID, 'column_category'));
                        $taxquerysp = array('relation' => 'AND');
                        $taxquerysp[] = array(
                            'taxonomy' => 'column_category',
                            'terms' => $categories->slug,
                            'field' => 'slug',
                        );
                        $args['tax_query'] = $taxquerysp;

                        $the_query =  new WP_Query($args);
                        if ($the_query->have_posts()) :
                        ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php get_template_part('template-parts/loop', 'column'); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <!-- recommend_store_list -->
                </div>
                <!-- viewport -->
            </div>
            <!-- recommend_store_wrap -->
        </section>
        <!-- recommend -->

        <!-- ▼サイドバー▼ -->

        <div class="column2_aside">

            <div class="wrap">
                <div class="inner">
                    <div class="side_scrool">
                        <!-- 検索BOX -->
                        <aside id="search_box" class="column_search">
                            <form method="get" action="#" class="search_container">
                                <input type="text" size="25" placeholder="キーワード検索">
                                <input type="submit" value="&#xf002">
                            </form>
                        </aside>
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
    </section>
</main>

<?php get_footer(); ?>