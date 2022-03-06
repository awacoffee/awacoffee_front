<?php get_header(); ?>

<main id="store_list_under">
    <?php
    // 開いているページの情報を取得
    $purpose_slug = get_query_var('purpose');
    $purpose = get_term_by('slug', $purpose_slug, 'purpose');
    ?>
    <!-- ▼タイトルエリア▼ -->
    <div class="wrap">
        <div class="under_title inner">
            <div class="under_wrap_title">
                <!-- <p>Drink</p>
                <h1>お店で飲みたい</h1> -->
                <p><?php echo ucfirst($purpose->slug); ?></p>
                <h1><?php echo $purpose->name; ?></h1>
            </div>
        </div>
    </div>
    <!-- /.wrap -->
    <?php
    $areas = get_terms(array('taxonomy' => 'area'));
    if (!empty($areas)) :
    ?>
        <?php foreach ($areas as $area) : ?>
            <div class="wrap">
                <div class="inner">
                    <div class="store_area city_area">
                        <h2 class="area_cate"><?php echo $area->name; ?></h2>
                        <div class="box">
                            <!--PC版での記事一覧の表示-->
                            <div class="pc_stores_cards store_lists">
                                <?php
                                // メニューの投稿タイプ
                                $args = array(
                                    'post_type' => 'shop',
                                    'posts_per_page' => -1,
                                );
                                // エリアで絞り込む
                                $taxquerysp = array('relation' => 'AND');
                                $taxquerysp[] = array(
                                    'taxonomy' => 'area',
                                    'terms' => $area->slug,
                                    'field' => 'slug',
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
                            <div class="more_btn">
                                <button>more</button>
                            </div>
                        </div>
                        <div class="box">
                            <!--SP版の記事表示-->
                            <div class="sp_stores_cards store_lists">
                                <?php
                                // メニューの投稿タイプ
                                $args = array(
                                    'post_type' => 'shop',
                                    'posts_per_page' => -1,
                                );
                                // エリアで絞り込む
                                $taxquerysp = array('relation' => 'AND');
                                $taxquerysp[] = array(
                                    'taxonomy' => 'area',
                                    'terms' => $area->slug,
                                    'field' => 'slug',
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
                            <div class="sp_more_btn">
                                <button>more</button>
                            </div>
                        </div>
                        <!-- store_area -->
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
</main>

<?php get_footer(); ?>