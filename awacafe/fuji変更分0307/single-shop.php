<?php
if (isset($_POST['favoritepageid'])) {
    // お気に入りボタンが押されてPOSTが送信されていれば、$favoritepageidに投稿IDを代入
    $favoritepageid = "";
    if (isset($_POST['favoritepageid']) && !empty($_POST['favoritepageid'])) {
        $favoritepageid = $_POST['favoritepageid'];
    };

    // 「favoritepagelist」のcookieがすでにセットされていれば、そのまま「favoritepagelist」のcookieを$favoritepagelistに代入する。
    $favoritepagelist = "";
    if (isset($_COOKIE['favoritepagelist'])) {
        $favoritepagelist = $_COOKIE['favoritepagelist'];
    };

    // $favoritepagelistに値が入っていれば、それを文字列⇒配列に変換する
    $favoritepagelist = explode(',', $favoritepagelist);

    // print_r($favoritepagelist);

    // $favoritepagelistの中に$favoritepageidと同じ値の要素があるかチェックする
    // 同じ要素が無ければ末尾に新しく追加する。同じ要素があればそれを削除し、空いたindexを詰める
    if ($favoritepageid != "") {
        $favosearch = in_array($favoritepageid, $favoritepagelist, true);
        // print_r($favosearch);
    }
    if ($favoritepageid != "" && $favosearch == false) {
        array_push($favoritepagelist, $favoritepageid);
    } elseif ($favoritepageid != "" && $favosearch == true) {
        $favoritepagelist = array_diff($favoritepagelist, array($favoritepageid));
        array_values($favoritepagelist);
    };

    // print_r($favoritepagelist);
    // print_r($favoritepageid);

    // $favoritepagelistを配列⇒文字列に変換してcookieに保存する
    $favoritepagelist = implode(',', $favoritepagelist);
    // print_r($favoritepagelist);
    setcookie("favoritepagelist", $favoritepagelist, time() + 60 * 60 * 24 * 60, '/');

    $_SESSION['succses_message'] = "お気に入り登録が完了しました";
    header('Location: ./');
}
?>

<?php get_header(); ?>

<main>
    <div class="header_img_bg mainvisual_wrap"></div>
    <!-- ▼タイトルエリア▼ -->
    <div class="wrap">
        <div class="under_title inner">
            <div class="under_wrap_title">
                <p>Store</p>
                <h1>お店で飲みたい</h1>
            </div>
        </div>
    </div>
    <!-- /.wrap -->

    <div class="column2_flex wrap">
        <article class="column2_article">
            <div class="wrap">
                <div class="inner">
                    <div class="store_card">
                        <!-- ※h1にするのか問題 -->
                        <h1 class="store_name"><?php the_title(); ?></h1>
                        <p class="store_catch">
                            <?php the_field('catchphrase'); ?>
                        </p>
                        <!-- ▼タグ・BM・いいね▼ -->
                        <?php
                        //エリアのターム名表示
                        $area_slug = 'area';
                        $area_terms = wp_get_object_terms($post->ID, $area_slug);
                        //シチュエーションのターム名表示
                        $situation_slug = 'situation';
                        $situation_terms = wp_get_object_terms($post->ID, $situation_slug);
                        echo '<ul class="store_tags">';
                        foreach ($area_terms as $area_term) {
                            echo '<li class="store_tag">' . $area_term->name . '</li>';
                        }
                        foreach ($situation_terms as $situation_term) {
                            echo '<li class="store_tag">' . $situation_term->name . '</li>';
                        }
                        echo '</ul>';
                        ?>
                        <div class="store_fun_jump">
                            <a href="#store_info" class="store_info_btn"><i class="fa-solid fa-circle-chevron-down"></i>お店の基本情報へ</a>
                            <div class="store_fun">
                                <form action="<?php the_permalink(); ?>" method="post" class="form__favorite__btn">
                                    <button class="favorite__btn" type="submit" name="favoritepageid" value="<?php the_ID(); ?>">
                                        <?php
                                        $favosearchjs = "";
                                        if (isset($_COOKIE['favoritepagelist'])) {
                                            $favoritelistjs = $_COOKIE['favoritepagelist'];
                                            $favoritelistjs = explode(',', $favoritelistjs);
                                            // print_r($favoritelistjs);
                                            $favoriteidjs = get_the_ID();
                                            // print_r($favoriteidjs);
                                            $favosearchjs = in_array($favoriteidjs, $favoritelistjs);
                                            // print_r($favosearchjs);
                                        }
                                        if ($favosearchjs == true) {
                                        ?>
                                            <i class="fa-solid fa-bookmark"></i>
                                        <?php } elseif ($favosearchjs == false) { ?>
                                            <i class="fa-regular fa-bookmark"></i>
                                        <?php }
                                        // print_r($color);
                                        ?>

                                    </button>

                                    <style>
                                        .form__favorite__btn {
                                            align-self: center;
                                            padding: 0;
                                            margin-right: 20px;
                                            background-color: transparent;
                                        }

                                        .favorite__btn .fa-bookmark {
                                            /* padding-left: 30px;
                                            padding-right: 10px; */
                                            font-size: 30px;
                                        }
                                    </style>
                                </form>
                                <!-- <div class="store_mark"></div> -->

                                <div class="store_like">
                                    <!-- <div class="wpulike wpulike-heart">
                                        <div class="wp_ulike_general_class wp_ulike_is_liked">
                                            <button type="button" aria-label="いいねボタン" data-ulike-id="111" data-ulike-nonce="f54cf426ee" data-ulike-type="post" data-ulike-template="wpulike-heart" data-ulike-display-likers="" data-ulike-likers-style="popover" class="wp_ulike_btn wp_ulike_put_image image-unlike wp_ulike_btn_is_active wp_post_btn_111"></button>
                                            <span class="count-box wp_ulike_counter_up" data-ulike-counter-value="+1">+1</span>
                                        </div>
                                    </div> -->
                                    <?php echo do_shortcode('[wp_ulike]'); ?>
                                </div>

                            </div>
                        </div>

                        <!-- ▼画像切り替え▼ -->
                        <?php
                        $pic1 = get_field('pic1');
                        $pic2 = get_field('pic2');
                        $pic3 = get_field('pic3');
                        // 大サイズ画像のURL
                        $pic_url1 = $pic1['sizes']['large'];
                        $pic_url2 = $pic2['sizes']['large'];
                        $pic_url3 = $pic3['sizes']['large'];
                        ?>
                        <div class="store_img_area">
                            <div id="mainImg" class="store_imgL">
                                <img src="<?php echo $pic_url1; ?>" alt="" />
                            </div>
                            <ul id="thumbImg" class="store_imgs">
                                <li class="current store_img">
                                    <img src="<?php echo $pic_url1; ?>" alt="" />
                                </li>
                                <li class="store_img">
                                    <img src="<?php echo $pic_url2; ?>" alt="" />
                                </li>
                                <li class="store_img">
                                    <img src="<?php echo $pic_url3; ?>" alt="" />
                                </li>
                            </ul>
                        </div>

                        <!-- ▼リード文▼ -->
                        <p class="store_desc">
                            <?php the_field('shop_about'); ?>
                        </p>

                        <div class="store_text_inner">
                            <h2>お店のこだわり</h2>
                            <div class="store_illust_01"></div>
                        </div>
                        <div class="store_commit">
                            <p class="store_commit_text">
                                <?php the_field('commitment'); ?>
                            </p>
                        </div>

                        <div class="store_text_inner">
                            <h2>おすすめメニュー</h2>
                            <div class="store_illust_02"></div>
                        </div>
                        <div class="store_menu_area">
                            <?php the_field('recommendation'); ?>
                        </div>
                        <!-- store_menu_area -->

                        <h2 id="store_info">基本情報</h2>
                        <dl class="details">
                            <dt class="deta_detail">店舗名</dt>
                            <dd><?php the_title(); ?></dd>

                            <dt class="deta_detail">住所</dt>
                            <dd><?php the_field('address'); ?></dd>

                            <dt class="deta_detail">電話番号</dt>
                            <dd><?php the_field('phonenumber'); ?></dd>

                            <dt class="deta_detail">
                                営業時間・定休日
                            </dt>
                            <dd>
                                <?php the_field('open'); ?>
                            </dd>

                            <dt class="deta_detail">駐車場</dt>
                            <dd><?php the_field('parking'); ?></dd>

                            <dt class="deta_detail">喫煙スペース</dt>
                            <dd>
                                <?php if (get_field('smoking_area')) : ?>
                                    <span>あり</span>
                                <?php else : ?>
                                    <span>なし</span>
                                <?php endif; ?>
                            </dd>

                            <?php if (get_field('menu')) : ?>
                                <dt class="deta_detail">メニュー</dt>
                                <dd>
                                    <?php
                                    $menus = get_field('menu');
                                    foreach ($menus as $key => $menu) {
                                        echo $menu;
                                        if ($menu !== end($menus)) {
                                            echo ' ';
                                        }
                                    }
                                    ?>
                                </dd>
                            <?php endif; ?>

                            <?php if (get_field('credit_card')) : ?>
                                <dt class="deta_detail">
                                    クレジットカード
                                </dt>
                                <dd>利用可：
                                    <?php
                                    $credit_cards = get_field('credit_card');
                                    foreach ($credit_cards as $key => $credit_card) {
                                        echo $credit_card;
                                        if ($credit_card !== end($credit_cards)) {
                                            echo '、';
                                        }
                                    }
                                    ?>
                                </dd>
                            <?php endif; ?>

                            <?php if (get_field('pay')) : ?>
                                <dt class="deta_detail">電子マネー</dt>
                                <dd>利用可：

                                    <?php
                                    $pays = get_field('pay');
                                    foreach ($pays as $key => $pay) {
                                        echo $pay;
                                        if ($pay !== end($pays)) {
                                            echo '、';
                                        }
                                    }
                                    ?>
                                </dd>
                            <?php endif; ?>

                            <?php if (get_field('shopurl')) : ?>
                                <dt class="deta_detail">URL</dt>
                                <dd><a href="<?php the_field('shopurl'); ?>"><?php the_field('shopurl'); ?></a></dd>
                            <?php endif; ?>

                            <?php if (get_field('instagram_url')) : ?>
                                <dt class="deta_detail">INSTAGRAM</dt>
                                <dd><a href="<?php the_field('instagram_url'); ?>"><?php the_field('instagram_url'); ?></a></dd>
                            <?php endif; ?>
                        </dl>

                        <h2>アクセス</h2>
                        <div class="store_map" style="padding:0px;">
                            <?php
                            $googlemap = get_field('location'); //get_field()内の値は、2-2.で追加したフィールドの「field_name」
                            // print_r($googlemap);
                            ?>
                            <div class="acf-map" data-zoom="16">
                                <div class="marker" data-lat="<?php echo esc_attr($googlemap['lat']); ?>" data-lng="<?php echo esc_attr($googlemap['lng']); ?>"></div>
                            </div>

                            <style>
                                .acf-map {
                                    width: 100%;
                                    height: 450px;
                                    /* position: initial !important; */
                                    border: #ccc solid 1px;
                                    margin: 20px 0;
                                }

                                .acf-map img {
                                    display: block;
                                    height: 100%;
                                }
                            </style>
                        </div>
                    </div>
                    <!-- store_card -->
                </div>
                <!-- inner -->
            </div>
            <!-- wrap -->
        </article>

        <!-- ▼レコメンド▼ -->
        <section class="recommend">
            <div class="wrap">
                <div class="inner">
                    <h2 class="recommend_title">あなたへのおすすめ</h2>
                    <ul class="recommend_store_list">
                        <div class="stores_wrap_card2">
                            <div class="box">
                                <div class="sp_stores_cards store_lists">
                                    <?php
                                    // メニューの投稿タイプ
                                    $args = array(
                                        'post_type' => 'shop',
                                        'posts_per_page' => 3,
                                        'orderby' => 'rand',
                                        'post__not_in' => array($post->ID),
                                    );
                                    // エリアで絞り込む
                                    $areas = array_shift(get_the_terms($post->ID, 'area'));
                                    $purposies = array_shift(get_the_terms($post->ID, 'purpose'));
                                    $situations = array_shift(get_the_terms($post->ID, 'situation'));
                                    $serviceies = array_shift(get_the_terms($post->ID, 'services'));
                                    $taxquerysp = array(
                                        'relation' => 'OR',
                                        array(
                                            'taxonomy' => 'area',
                                            'terms' => $areas->slug,
                                            'field' => 'slug',
                                        ),
                                        array(
                                            'taxonomy' => 'purpose',
                                            'terms' => $purposies->slug,
                                            'field' => 'slug',
                                        ),
                                        array(
                                            'taxonomy' => 'situation',
                                            'terms' => $situations->slug,
                                            'field' => 'slug',
                                        ),
                                        array(
                                            'taxonomy' => 'services',
                                            'terms' => $serviceies->slug,
                                            'field' => 'slug',
                                        )
                                    );
                                    $args['tax_query'] = $taxquerysp;

                                    $the_query =  new WP_Query($args);
                                    if ($the_query->have_posts()) :
                                    ?>
                                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                            <?php get_template_part('template-parts/loop', 'area-sp'); ?>
                                        <?php endwhile; ?>
                                    <?php endif;
                                    wp_reset_postdata(); ?>
                                </div>
                                <div class="pc_stores_cards store_lists">
                                    <?php
                                    // メニューの投稿タイプ
                                    $args = array(
                                        'post_type' => 'shop',
                                        'posts_per_page' => 3,
                                        'orderby' => 'rand',
                                        'post__not_in' => array($post->ID),
                                    );
                                    // エリアで絞り込む
                                    $areas = array_shift(get_the_terms($post->ID, 'area'));
                                    $purposies = array_shift(get_the_terms($post->ID, 'purpose'));
                                    $situations = array_shift(get_the_terms($post->ID, 'situation'));
                                    $serviceies = array_shift(get_the_terms($post->ID, 'services'));
                                    $taxquerysp = array(
                                        'relation' => 'OR',
                                        array(
                                            'taxonomy' => 'area',
                                            'terms' => $areas->slug,
                                            'field' => 'slug',
                                        ),
                                        array(
                                            'taxonomy' => 'purpose',
                                            'terms' => $purposies->slug,
                                            'field' => 'slug',
                                        ),
                                        array(
                                            'taxonomy' => 'situation',
                                            'terms' => $situations->slug,
                                            'field' => 'slug',
                                        ),
                                        array(
                                            'taxonomy' => 'services',
                                            'terms' => $serviceies->slug,
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
                                    <?php endif;
                                    wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </ul>
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

                        <?php if (get_field('special')) : ?>
                            <?php $specialid = array(get_field('special')); ?>

                            <!-- ▼インタビュー記事がある場合に表示▼ -->
                            <?php
                            $args = array(
                                'post_type' => 'column',
                                'posts_per_page' => 1,
                                'post__in' => $specialid,
                            );

                            $taxquerysp = array('relation' => 'AND');

                            $args['tax_query'] = $taxquerysp;

                            $the_query = new WP_Query($args);
                            if ($the_query->have_posts()) :
                            ?>
                                <?php while ($the_query->have_posts()) : ?>
                                    <?php $the_query->the_post(); ?>

                                    <h2 class="side_title side_column_title">
                                        このお店のインタビュー
                                    </h2>
                                    <?php get_template_part('template-parts/loop', 'column'); ?>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        <?php endif; ?>

                        <?php get_sidebar('areas'); ?>

                        <?php get_sidebar('purpose'); ?>

                        <!-- 詳しい条件から探す -->
                        <aside>
                            <div class="store_page_btn_wrap">
                                <a class="store_page_btn_link" href="<?php echo get_permalink(243); ?>"><span><i class="fa-solid fa-magnifying-glass"></i>詳しい条件から探す</span></a>
                            </div>
                        </aside>
                    </div>
                </div>
                <!-- inner -->
            </div>
            <!-- wrap -->
        </div>
    </div>
    <!-- column2_flex -->
</main>


<?php get_footer(); ?>