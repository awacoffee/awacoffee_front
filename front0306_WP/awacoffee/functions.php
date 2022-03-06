<?php

/**
 * ツールバーを非表示にする。
 */
// add_filter('show_admin_bar', '__return_false');

if (!function_exists('awacoffee_setup')) {
    function awacoffee_setup()
    {
        /**
         * タイトルタグを出力する
         */
        add_theme_support("title-tag");
        /**
         * アイキャッチ画像を仕様可能にする
         */
        add_theme_support("post-thumbnails");
        /**
         * カスタムメニュー機能を使用可能にする
         */
        add_theme_support("menus");
    }
}
add_action('after_setup_theme', 'awacoffee_setup');

function my_setup()
{
    global $global_api_key; //投稿ページでの表示の際に必要なため、グローバル変数にしています
    $global_api_key = 'AIzaSyCHAjeGqygNhVIP1Jy4W45BdHirl7OWi8s';
}
add_action('after_setup_theme', 'my_setup');

function my_acf_google_map_api($api)
{
    global $global_api_key;
    $api['key'] = $global_api_key;
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


function awacoffee_scripts()
{
    // リセットCSSを読み込む
    wp_enqueue_style(
        "awacoffee-resetcss",
        get_template_directory_uri() . "/assets/css/reset.css",
    );

    // common.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-commoncss",
        get_template_directory_uri() . "/assets/css/common.css",
    );

    // card.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-cardcss",
        get_template_directory_uri() . "/assets/css/card.css",
    );

    // loding.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-lodingcss",
        get_template_directory_uri() . "/assets/css/loding.css",
    );

    // news.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-newscss",
        get_template_directory_uri() . "/assets/css/news.css",
    );

    // privacy.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-privacycss",
        get_template_directory_uri() . "/assets/css/privacy.css",
    );

    // result.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-resultcss",
        get_template_directory_uri() . "/assets/css/result.css",
    );

    // store_list.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-storelistcss",
        get_template_directory_uri() . "/assets/css/store_list.css",
    );

    // front-page用のCSS
    if (is_front_page()) {
        wp_enqueue_style('index', get_template_directory_uri() . '/assets/css/index.css');
    }

    // single-column用のCSS
    if (is_singular('column')) {
        wp_enqueue_style('column', get_template_directory_uri() . '/assets/css/column.css');
    }

    // single-shop用のCSS
    if (is_singular('shop')) {
        wp_enqueue_style('store', get_template_directory_uri() . '/assets/css/store.css');
    }

    // single用のCSS
    if (is_single()) {
        wp_enqueue_style('news_single', get_template_directory_uri() . '/assets/css/news_single.css');
    }

    // page-mypage用のCSS
    if (is_page('maypage')) {
        wp_enqueue_style('mypage', get_template_directory_uri() . '/assets/css/mypage.css');
    }

    // page-search用のCSS
    if (is_page('search')) {
        wp_enqueue_style('search', get_template_directory_uri() . '/assets/css/search.css');
    }

    // page-about用のCSS
    if (is_page('about')) {
        wp_enqueue_style('about', get_template_directory_uri() . '/assets/css/about.css');
    }

    // page-contact用のCSS
    if (is_page('contact')) {
        wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css');
    }

    // page-thanks用のCSS
    if (is_page('thanks')) {
        wp_enqueue_style('thanks', get_template_directory_uri() . '/assets/css/contact.css');
    }

    // taxonomy-column_category.php用のCSS
    if (is_tax('column_category')) {
        wp_enqueue_style('column_single', get_template_directory_uri() . '/assets/css/column_single.css');
    }

    // archive-column用のCSS
    if (is_post_type_archive('column')) {
        wp_enqueue_style('column_list', get_template_directory_uri() . '/assets/css/column_list.css');
    }


    // Awesome fontsのスタイルシートを読み込む
    wp_enqueue_style(
        "font-awesome",
        "https://use.fontawesome.com/releases/v6.0.0/css/all.css"
    );

    // WordPress 本体の jQuery を登録解除
    wp_deregister_script('jquery');

    //jQuery を CDN から読み込む
    wp_enqueue_script(
        'jquery',
        '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        array(),
        '3.3.1',
        true
    );

    // ★石川追記：main.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-front',
        get_template_directory_uri() . "/assets/js/main.js",
        array('jquery'),
        "",
        true
    );
    // // front.jsのJSファイルを読み込んで、フッターに出力
    // wp_enqueue_script(
    //     'awacoffee-front',
    //     get_template_directory_uri() . "/assets/js/front.js",
    //     array('jquery'),
    //     "",
    //     true
    // );

    // // loding.jsのJSファイルを読み込んで、フッターに出力
    // wp_enqueue_script(
    //     'awacoffee-lodingjs',
    //     get_template_directory_uri() . "/assets/js/loding.js",
    //     array('jquery'),
    //     "",
    //     true
    // );

    // // news_list.jsのJSファイルを読み込んで、フッターに出力
    // wp_enqueue_script(
    //     'awacoffee-news_listjs',
    //     get_template_directory_uri() . "/assets/js/news_list.js",
    //     array('jquery'),
    //     "",
    //     true
    // );

    // // search.jsのJSファイルを読み込んで、フッターに出力
    // wp_enqueue_script(
    //     'awacoffee-searchjs',
    //     get_template_directory_uri() . "/assets/js/search.js",
    //     array('jquery'),
    //     "",
    //     true
    // );

    // // store_list.jsのJSファイルを読み込んで、フッターに出力
    // wp_enqueue_script(
    //     'awacoffee-store_listjs',
    //     get_template_directory_uri() . "/assets/js/store_list.js",
    //     array('jquery'),
    //     "",
    //     true
    // );

    // // store.jsのJSファイルを読み込んで、フッターに出力
    // wp_enqueue_script(
    //     'awacoffee-storejs',
    //     get_template_directory_uri() . "/assets/js/store.js",
    //     array('jquery'),
    //     "",
    //     true
    // );

    // // ★石川記載：header.jsのJSファイルを読み込んで、フッターに出力 ヘッダー動作確認のため★
    // wp_enqueue_script(
    //     'awacoffee-headerjs',
    //     get_template_directory_uri() . "/assets/js/header.js",
    //     array('jquery'),
    //     "",
    //     true
    // );

    // googlemapのapiキーを取得する
    wp_enqueue_script(
        'awacoffee-api',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyCHAjeGqygNhVIP1Jy4W45BdHirl7OWi8s',
        array('jquery'),
        "",
        true
    );

    // googlemap.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-googlemap',
        get_template_directory_uri() . "/assets/js/googlemap.js",
        array('jquery'),
        "",
        true
    );
}
add_action('wp_enqueue_scripts', 'awacoffee_scripts');


// function my_acf_google_map_api($api)
// {
//     $api['key'] = 'AIzaSyCHAjeGqygNhVIP1Jy4W45BdHirl7OWi8s';
//     return $api;
// }
// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// 抜粋の文字数制限を変更する
function twpp_change_excerpt_length($length)
{
    $length = 30;
    return $length;
}
add_filter('excerpt_length', 'twpp_change_excerpt_length', 999);

/**
 * メインクエリの投稿数をトップページかそれ以外かで変更する
 */
function my_pre_get_posts($query)
{
    // 管理画面、メインクエリ以外には設定しない
    if (is_admin() || !$query->is_main_query()) {
        return; // 関数から抜ける
    }

    // トップページの場合
    if ($query->is_home()) {
        // $query->set('category_name', 'news');
        $query->set('posts_per_page', 3);
        // $query->set('orderby', 'rand');
        return;
    }
}
add_action('pre_get_posts', 'my_pre_get_posts');

/**
 *
 * google font を読み込む
 *
 */
function add_google_fonts()
{
    wp_register_style(
        'googleFonts',
        'https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap'
    );
    wp_enqueue_style('googleFonts');
}
add_action('wp_enqueue_scripts', 'add_google_fonts');

/*絞り込み検索のショートコード*/
function mysearch_original()
{
    ob_start();
    get_template_part('template-parts/mysearch');
    return ob_get_clean();
}
add_shortcode('search', 'mysearch_original');

/*-------------------------------------------
以下のワーニング回避：URLパラメータが配列だと怒られるので、文字列に変換
Warning: urlencode() expects parameter 1 to be string, array given
---------------------------------------------*/
function my_query_string($q)
{
    foreach (get_taxonomies(array(), 'objects') as $taxonomy => $t) {
        if ($t->query_var && !empty($q[$t->query_var])) {
            if (is_array($q[$t->query_var])) {
                $q[$t->query_var] = implode(',', $q[$t->query_var]);
            }
        }
    }
    return $q;
}
add_filter('request', 'my_query_string', 1);
