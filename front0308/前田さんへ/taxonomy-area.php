<?php get_header(); ?>

<main>
    <?php echo do_shortcode('[flexy_breadcrumb]'); ?>
    <?php
    // 開いているページの情報を取得
    $area_slug = get_query_var('area');
    $area = get_term_by('slug', $area_slug, 'area');
    ?>
    <!-- ▼タイトルエリア▼ -->
    <div class="header_img_bg mainvisual_wrap"></div>
    <div class="wrap">
        <div class="under_title inner">
            <div class="under_wrap_title">
                <!-- <p>Drink</p>
                <h1>お店で飲みたい</h1> -->
                <p><?php echo ucfirst($area->slug); ?></p>
                <h1><?php echo $area->name; ?></h1>
            </div>
        </div>
    </div>
    <!-- /.wrap -->
    <?php
    $url = $_SERVER['REQUEST_URI'];
    $purposes = get_terms(array('taxonomy' => 'purpose'));
    if (strstr($url, 'tokushima')) :
    ?>
        <!--徳島市-->
        <?php foreach ($purposes as $purpose) : ?>
            <div class="wrap">
                <div class="inner">
                    <div class="store_area">
                        <h2 class="area_cate"><?php echo $purpose->name; ?></h2>
                        <!--PC版での記事一覧の表示-->
                        <div class="pc_stores_cards store_lists">
                            <?php
                            $url = $_SERVER['REQUEST_URI'];
                            // メニューの投稿タイプ
                            $args = array(
                                'post_type' => 'shop',
                                'posts_per_page' => -1,
                            );
                            // エリアで絞り込む
                            $taxquerysp = array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'purpose',
                                    'terms' => $purpose->slug,
                                    'field' => 'slug',
                                ),
                                array(
                                    'taxonomy' => 'area',
                                    'terms' => 'tokushima',
                                    'field' => 'slug',
                                )
                            );
                            $args['tax_query'] = $taxquerysp;

                            $the_query =  new WP_Query($args);
                            if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php get_template_part('template-parts/loop', 'area'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="pc_more_btn"><button>more</button></div>
                        <!--SP版の記事表示-->
                        <div class="sp_stores_cards store_lists">
                            <?php
                            // メニューの投稿タイプ
                            $args = array(
                                'post_type' => 'shop',
                                'posts_per_page' => -1,
                            );
                            // エリアで絞り込む
                            $taxquerysp = array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'purpose',
                                    'terms' => $purpose->slug,
                                    'field' => 'slug',
                                ),
                                array(
                                    'taxonomy' => 'area',
                                    'terms' => 'tokushima',
                                    'field' => 'slug',
                                ),
                            );
                            $args['tax_query'] = $taxquerysp;

                            $the_query =  new WP_Query($args);
                            if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php get_template_part('template-parts/loop', 'area-sp'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="sp_more_btn"><button>more</button></div>
                    </div>
                    <!-- store_area -->
                </div>
            </div>
        <?php endforeach; ?>
    <?php elseif (strstr($url, 'east')) : ?>
        <!--東部-->
        <?php foreach ($purposes as $purpose) : ?>
            <div class="wrap">
                <div class="inner">
                    <div class="store_area">
                        <h2 class="area_cate"><?php echo $purpose->name; ?></h2>
                        <!--PC版での記事一覧の表示-->
                        <div class="pc_stores_cards store_lists">
                            <?php
                            $url = $_SERVER['REQUEST_URI'];
                            // メニューの投稿タイプ
                            $args = array(
                                'post_type' => 'shop',
                                'posts_per_page' => -1,
                            );
                            // エリアで絞り込む
                            $taxquerysp = array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'purpose',
                                    'terms' => $purpose->slug,
                                    'field' => 'slug',
                                ),
                                array(
                                    'taxonomy' => 'area',
                                    'terms' => 'east',
                                    'field' => 'slug',
                                )
                            );
                            $args['tax_query'] = $taxquerysp;

                            $the_query =  new WP_Query($args);
                            if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php get_template_part('template-parts/loop', 'area'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="pc_more_btn"><button>more</button></div>
                        <!--SP版の記事表示-->
                        <div class="sp_stores_cards store_lists">
                            <?php
                            // メニューの投稿タイプ
                            $args = array(
                                'post_type' => 'shop',
                                'posts_per_page' => -1,
                            );
                            // エリアで絞り込む
                            $taxquerysp = array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'purpose',
                                    'terms' => $purpose->slug,
                                    'field' => 'slug',
                                ),
                                array(
                                    'taxonomy' => 'area',
                                    'terms' => 'east',
                                    'field' => 'slug',
                                ),
                            );
                            $args['tax_query'] = $taxquerysp;

                            $the_query =  new WP_Query($args);
                            if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php get_template_part('template-parts/loop', 'area-sp'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="sp_more_btn"><button>more</button></div>
                    </div>
                    <!-- store_area -->
                </div>
            </div>
        <?php endforeach; ?>
    <?php elseif (strstr($url, 'west')) : ?>
        <!--西部-->
        <?php foreach ($purposes as $purpose) : ?>
            <div class="wrap">
                <div class="inner">
                    <div class="store_area">
                        <h2 class="area_cate"><?php echo $purpose->name; ?></h2>
                        <!--PC版での記事一覧の表示-->
                        <div class="pc_stores_cards store_lists">
                            <?php
                            $url = $_SERVER['REQUEST_URI'];
                            // メニューの投稿タイプ
                            $args = array(
                                'post_type' => 'shop',
                                'posts_per_page' => -1,
                            );
                            // エリアで絞り込む
                            $taxquerysp = array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'purpose',
                                    'terms' => $purpose->slug,
                                    'field' => 'slug',
                                ),
                                array(
                                    'taxonomy' => 'area',
                                    'terms' => 'west',
                                    'field' => 'slug',
                                )
                            );
                            $args['tax_query'] = $taxquerysp;

                            $the_query =  new WP_Query($args);
                            if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php get_template_part('template-parts/loop', 'area'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="pc_more_btn"><button>more</button></div>
                        <!--SP版の記事表示-->
                        <div class="sp_stores_cards store_lists">
                            <?php
                            // メニューの投稿タイプ
                            $args = array(
                                'post_type' => 'shop',
                                'posts_per_page' => -1,
                            );
                            // エリアで絞り込む
                            $taxquerysp = array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'purpose',
                                    'terms' => $purpose->slug,
                                    'field' => 'slug',
                                ),
                                array(
                                    'taxonomy' => 'area',
                                    'terms' => 'west',
                                    'field' => 'slug',
                                ),
                            );
                            $args['tax_query'] = $taxquerysp;

                            $the_query =  new WP_Query($args);
                            if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php get_template_part('template-parts/loop', 'area-sp'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="sp_more_btn"><button>more</button></div>
                    </div>
                    <!-- store_area -->
                </div>
            </div>
        <?php endforeach; ?>
    <?php elseif (strstr($url, 'south')) : ?>
        <!--南部-->
        <?php foreach ($purposes as $purpose) : ?>
            <div class="wrap">
                <div class="inner">
                    <div class="store_area">
                        <h2 class="area_cate"><?php echo $purpose->name; ?></h2>
                        <!--PC版での記事一覧の表示-->
                        <div class="pc_stores_cards store_lists">
                            <?php
                            $url = $_SERVER['REQUEST_URI'];
                            // メニューの投稿タイプ
                            $args = array(
                                'post_type' => 'shop',
                                'posts_per_page' => -1,
                            );
                            // エリアで絞り込む
                            $taxquerysp = array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'purpose',
                                    'terms' => $purpose->slug,
                                    'field' => 'slug',
                                ),
                                array(
                                    'taxonomy' => 'area',
                                    'terms' => 'south',
                                    'field' => 'slug',
                                )
                            );
                            $args['tax_query'] = $taxquerysp;

                            $the_query =  new WP_Query($args);
                            if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php get_template_part('template-parts/loop', 'area'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="pc_more_btn"><button>more</button></div>
                        <!--SP版の記事表示-->
                        <div class="sp_stores_cards store_lists">
                            <?php
                            // メニューの投稿タイプ
                            $args = array(
                                'post_type' => 'shop',
                                'posts_per_page' => -1,
                            );
                            // エリアで絞り込む
                            $taxquerysp = array(
                                'relation' => 'AND',
                                array(
                                    'taxonomy' => 'purpose',
                                    'terms' => $purpose->slug,
                                    'field' => 'slug',
                                ),
                                array(
                                    'taxonomy' => 'area',
                                    'terms' => 'south',
                                    'field' => 'slug',
                                ),
                            );
                            $args['tax_query'] = $taxquerysp;

                            $the_query =  new WP_Query($args);
                            if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <?php get_template_part('template-parts/loop', 'area-sp'); ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="sp_more_btn"><button>more</button></div>
                    </div>
                    <!-- store_area -->
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
