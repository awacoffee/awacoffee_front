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

        <!-- ▼フォント:Rollerscript Rough▼ -->
        <link rel="stylesheet" href="https://use.typekit.net/twf1hjd.css" />

        <!-- ▼フォント:Shippori Mincho B1(Regular,Medium,Bold) -->
        <!-- ▼フォント:Noto Sans Japanese(Regular,Medium,Bold) -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Shippori+Mincho+B1:wght@400;500;700&display=swap"
            rel="stylesheet"
        />

        <!-- ▼FontAwesome▼ -->
        <link
            href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
        />

        <!-- ▼リセットCSS▼ -->
        <link href="assets/css/reset.css" rel="stylesheet" media="all" />
        <!-- ▼共通スタイル▼ -->
        <link href="assets/css/common.css" rel="stylesheet" media="all" />
        <!-- ▼条件検索ページのCSS▼ -->
        <link rel="stylesheet" href="assets/css/search.css" />
        <title>条件検索ページ</title>
    </head>
    <body>
        <!-- ▼下層ヘッダー▼ -->
        <header>
            <div class="header_wrap under">
                <div class="header_inner">
                    <div class="header_wrap_box">
                        <!-- ▼カップicon▼ -->
                        <a href="" class="header_wrap_box_icon">
                            <img
                                src="./assets/img/icon.svg"
                                alt="Awa Our Coffee Hourのアイコン"
                            />
                        </a>
                        <nav>
                            <ul class="header_nav_list">
                                <li>
                                    <a href="" class="header_nav_item"
                                        >条件検索</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="header_nav_item"
                                        >コラム</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="header_nav_item"
                                        >コーヒー入門知識</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="header_nav_item"
                                        >マイページ</a
                                    >
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
                                <a href=""
                                    ><img
                                        src="./assets/img/logo_aoch.png"
                                        alt="Awa Our Coffee Hour"
                                /></a>
                            </div>
                            <ul class="drower_nav_box">
                                <li>
                                    <a href="" class="drower_nav_box_item"
                                        >店で飲みたい</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_box_item"
                                        >豆を買いたい</a
                                    >
                                </li>
                            </ul>
                            <ul class="drower_nav_list">
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >条件検索</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >コラム</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >コーヒー入門知識</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >マイページ</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >お問い合わせ</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        ><i
                                            class="fa-brands fa-instagram fa-2x"
                                        ></i
                                    ></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <!-- ▼ページのタイトル▼ -->
            <div class="wrap mainvisual_wrap">
                <div class="under_title inner">
                    <div class="under_wrap_title">
                        <p>Search</p>
                        <h1>条件検索</h1>
                    </div>
                </div>
            </div>

            <div class="wrap">
                <form class="inner">
                    <!-- ここから本文 -->
                    <div class="search_content">
                        <!-- エリア別 -->
                        <section class="area_map_wrap">
                            <h3 class="search_title">エリア</h3>

                            <div class="map_wrap">
                                <figure class="map_svg">
                                    <img
                                        src="assets/img/map_1.svg"
                                        id="main_map"
                                        alt=""
                                    />

                                    <!-- エリア検索ラジオボタン -->
                                    <div id="click_map" class="radio_box">
                                        <input
                                            type="radio"
                                            name="area"
                                            value="tokusima"
                                            id="map_1"
                                            checked
                                        />
                                        <label
                                            for="map_1"
                                            class="s_search_radios area_1"
                                            >徳島市</label
                                        >
                                        <input
                                            type="radio"
                                            name="area"
                                            value="higasi"
                                            id="map_2"
                                        />
                                        <label
                                            for="map_2"
                                            class="s_search_radios area_2"
                                            >東部</label
                                        >

                                        <input
                                            type="radio"
                                            name="area"
                                            value="nisi"
                                            id="map_3"
                                        />
                                        <label
                                            for="map_3"
                                            class="s_search_radios area_3"
                                        >
                                            西部</label
                                        >
                                        <input
                                            type="radio"
                                            name="area"
                                            value="minami"
                                            id="map_4"
                                        />

                                        <label
                                            for="map_4"
                                            class="s_search_radios area_4"
                                            >南部</label
                                        >
                                    </div>
                                </figure>
                            </div>
                        </section>
                        <!-- 目的別 -->
                        <section class="purpose_wrap">
                            <h3 class="search_title">目的で探す</h3>
                            <div>
                                <input
                                    type="radio"
                                    name="purpose"
                                    value="drink"
                                    id="drink"
                                    checked
                                />
                                <label for="drink" class="s_search_btn"
                                    >飲みたい人</label
                                >
                                <input
                                    type="radio"
                                    name="purpose"
                                    value="food"
                                    id="food"
                                />
                                <label for="food" class="s_search_btn"
                                    >豆を買いたい人</label
                                >
                            </div>
                        </section>
                        <!-- シチュエーション別 -->
                        <section class="situation_wrap">
                            <h3 class="search_title">シチュエーションで探す</h3>
                            <div class="checkbox_wrap">
                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="1"
                                    id="1"
                                />
                                <label for="1" class="s_search_btn"
                                    >一人で</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="2"
                                    id="2"
                                />
                                <label for="2" class="s_search_btn"
                                    >家族で</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="3"
                                    id="3"
                                />
                                <label for="3" class="s_search_btn"
                                    >友人と</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="4"
                                    id="4"
                                />
                                <label for="4" class="s_search_btn"
                                    >カップルで</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="5"
                                    id="5"
                                />
                                <label for="5" class="s_search_btn"
                                    >旅行者向け</label
                                >
                            </div>
                        </section>
                        <!-- サービス別 -->
                        <section class="situation_wrap">
                            <h3 class="search_title">サービス・設備</h3>
                            <div class="checkbox_wrap">
                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="2-1"
                                    id="2-1"
                                />
                                <label for="2-1" class="s_search_btn"
                                    >自家焙煎</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="2-2"
                                    id="2-2"
                                />
                                <label for="2-2" class="s_search_btn"
                                    >コーヒーメニュー豊富</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="2-3"
                                    id="2-3"
                                />
                                <label for="2-3" class="s_search_btn"
                                    >モーニングあり</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="2-4"
                                    id="2-4"
                                />
                                <label for="2-4" class="s_search_btn"
                                    >テイクアウトOK</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="2-5"
                                    id="2-5"
                                />
                                <label for="2-5" class="s_search_btn"
                                    >予約OK</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="2-6"
                                    id="2-6"
                                />
                                <label for="2-6" class="s_search_btn"
                                    >喫煙スペースあり</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="2-7"
                                    id="2-7"
                                />
                                <label for="2-7" class="s_search_btn"
                                    >WI-FI</label
                                >

                                <input
                                    type="checkbox"
                                    name="situation"
                                    value="2-8"
                                    id="2-8"
                                />
                                <label for="2-8" class="s_search_btn"
                                    >駐車場</label
                                >
                            </div>
                        </section>
                    </div>
                    <!-- 検索ボタン -->
                    <div class="search_btn_wrap">
                        <div class="search_btn_inner">
                            <input
                                type="submit"
                                name="search_btn"
                                value="検索"
                                id="search_btn"
                            />
                            <label for="search_btn" class="search_btn"
                                >検索する
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="28.533"
                                    height="28.54"
                                    viewBox="0 0 28.533 28.54"
                                >
                                    <path
                                        class="musimegane"
                                        id="Icon_ionic-ios-search"
                                        data-name="Icon ionic-ios-search"
                                        d="M32.7,30.967l-7.936-8.01A11.309,11.309,0,1,0,23.046,24.7l7.884,7.958a1.221,1.221,0,0,0,1.724.045A1.229,1.229,0,0,0,32.7,30.967ZM15.876,24.792a8.93,8.93,0,1,1,6.316-2.615A8.875,8.875,0,0,1,15.876,24.792Z"
                                        transform="translate(-4.5 -4.493)"
                                    />
                                </svg>
                            </label>
                        </div>
                         <!-- リセットボタン -->
            <div class="reset_btn_wrap">
              <input type="reset" value="リセット" id="reset_btn" />
            </div>
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <div id="footer_wrap" class="wrap">
                <div class="inner">
                    <!-- ▼フッター▼ -->
                    <div class="footer_flex">
                        <div class="footer_logo">
                            <img
                                src="./assets/img/logo_aoch.png"
                                alt="Awa Our Coffee Hourのロゴ"
                            />
                        </div>
                        <nav class="footer_nav">
                            <ul class="footer_nav_list">
                                <li class="footer_nav_item">
                                    <a href="">お店で飲みたい</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">豆を買いたい</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">条件検索</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">コラム</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">マイページ</a>
                                </li>
                            </ul>
                            <ul class="footer_nav_list">
                                <li class="footer_nav_item">
                                    <a href="">お問い合わせ</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">このサイトについて</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">プライバシーポリシー</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href=""
                                        ><i
                                            class="fa-brands fa-instagram fa-2x"
                                        ></i
                                    ></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- footer_flex -->

                    <p class="footer_wrap_copyright">
                        <small
                            >Copyright &copy; 2022 動 All Rights
                            Reserved.</small
                        >
                    </p>
                </div>
                <!-- viewport -->
            </div>
            <!-- footer_wrap -->
        </footer>

        <!-- ▼Javascript▼ -->
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"
        ></script>
        <script src="./assets/js/front.js"></script>
        <script src="./assets/js/search.js"></script>
    </body>
</html>
