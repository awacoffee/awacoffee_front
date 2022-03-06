<?php get_header(); ?>

<main id="column_list_under">
<div class="header_img_bg"></div>
  <!-- ▼タイトルエリア▼ -->
  <div class="wrap">
    <div class="under_title inner">
      <div class="under_wrap_title">
        <p>Column</p>
        <h1>コラム</h1>
      </div>
    </div>
  </div>
  <!-- /.wrap -->
  <!-- 全体で囲む or flex -->
  <?php
  // 開いているページの情報を取得
  $column_category_slug = get_query_var('column_category');
  $column_category = get_term_by('slug', $column_category_slug, 'column_category');
  ?>

  <div class="column2_flex wrap">
    <section class="column2_article">
      <div class="wrap">
        <div class="inner">
          <h2 class="column_cate"><?php echo $column_category->name; ?></h2>
          <div class="cards_wrap">
            <div class="card_wrap">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                  <?php the_post(); ?>
                  <?php get_template_part('template-parts/loop', 'column'); ?>
                <?php endwhile; ?>
              <?php endif; ?>

              <!-- <article class="column_wrap">
                <a href="">
                  <div class="column_inner">
                    <figure class="column_img_wrap">
                      <img src="./assets/img/4-3img.jpg" alt="コラム記事のサムネイル画像" />
                    </figure>
                    <div class="column_meta">
                      <div class="categories_wrap">
                        <div><time class="column_date" datetime="the_time">2022.03.14</time></div>
                        <ul class="categories">
                          <li>コーヒー入門知識</li>
                        </ul>
                      </div>
                      <h3>シングルオリジンとブレンドの違い</h3>
                      <div class="column_text">
                        <p>自家焙煎にこだわった至福の一杯</p>
                      </div>
                    </div>
                  </div>
                </a>
              </article>
              <article class="column_wrap">
                <a href="">
                  <div class="column_inner">
                    <figure class="column_img_wrap">
                      <img src="./assets/img/4-3img.jpg" alt="コラム記事のサムネイル画像" />
                    </figure>
                    <div class="column_meta">
                      <div class="categories_wrap">
                        <time class="column_date" datetime="the_time">2022.03.14</time>
                        <ul class="categories">
                          <li>コーヒー入門知識</li>
                        </ul>
                      </div>
                      <h3>シングルオリジンとブレンドの違い</h3>
                      <div class="column_text">
                        <p>自家焙煎にこだわった至福の一杯</p>
                      </div>
                    </div>
                  </div>
                </a>
              </article>
              <article class="column_wrap">
                <a href="">
                  <div class="column_inner">
                    <figure class="column_img_wrap">
                      <img src="./assets/img/4-3img.jpg" alt="コラム記事のサムネイル画像" />
                    </figure>
                    <div class="column_meta">
                      <div class="categories_wrap">
                        <time class="column_date" datetime="the_time">2022.03.14</time>
                        <ul class="categories">
                          <li>コーヒー入門知識</li>
                        </ul>
                      </div>
                      <h3>シングルオリジンとブレンドの違い</h3>
                      <div class="column_text">
                        <p>自家焙煎にこだわった至福の一杯</p>
                      </div>
                    </div>
                  </div>
                </a>
              </article>
              <article class="column_wrap">
                <a href="">
                  <div class="column_inner">
                    <figure class="column_img_wrap">
                      <img src="./assets/img/4-3img.jpg" alt="コラム記事のサムネイル画像" />
                    </figure>
                    <div class="column_meta">
                      <div class="categories_wrap">
                        <time class="column_date" datetime="the_time">2022.03.14</time>
                        <ul class="categories">
                          <li>コーヒー入門知識</li>
                        </ul>
                      </div>
                      <h3>シングルオリジンとブレンドの違い</h3>
                      <div class="column_text">
                        <p>自家焙煎にこだわった至福の一杯</p>
                      </div>
                    </div>
                  </div>
                </a>
              </article>
              <article class="column_wrap">
                <a href="">
                  <div class="column_inner">
                    <figure class="column_img_wrap">
                      <img src="./assets/img/4-3img.jpg" alt="コラム記事のサムネイル画像" />
                    </figure>
                    <div class="column_meta">
                      <div class="categories_wrap">
                        <time class="column_date" datetime="the_time">2022.03.14</time>
                        <ul class="categories">
                          <li>コーヒー入門知識</li>
                        </ul>
                      </div>
                      <h3>シングルオリジンとブレンドの違い</h3>
                      <div class="column_text">
                        <p>自家焙煎にこだわった至福の一杯</p>
                      </div>
                    </div>
                  </div>
                </a>
              </article> -->
            </div>
          </div>
          <div class="pagination_wrap">
            <!-- <ul class="pagination">
              <li>前へ</li>
              <li class="pagination_1">1</li>
              <li>2</li>
              <li>3</li>
              <li>次へ</li>
            </ul> -->
            <?php if (function_exists('wp_pagenavi')) {wp_pagenavi();} ?>
          </div>

        </div>
        <!-- inner -->
      </div>
      <!-- wrap -->
    </section>
    <div class="column2_aside">
      <div class="wrap">
        <div class="inner">
          <aside class="side_scrool">
            <!-- 検索BOX -->
            <aside id="search_box" class="column_search">
              <form method="get" action="#" class="search_container">
                <input type="text" size="25" placeholder="キーワード検索">
                <input type="submit" value="&#xf002">
              </form>
            </aside>
            <!-- コラムカテゴリ -->
            <!-- <aside>
              <h2 class="side_title">コラムカテゴリ一覧</h2>
              <ul class="side_lists">
                <li class="list">
                  <a href="">入門知識</a>
                </li>
                <li class="list">
                  <a href="">ブログ</a>
                </li>
                <li class="list">
                  <a href="">特集</a>
                </li>
              </ul>
            </aside> -->
            <?php get_sidebar('categories'); ?>
            <!-- ニュース -->
            <!-- <aside>
              <h2 class="side_title">ニュース</h2>
              <ul class="side_lists">
                <li class="list">
                  <a href="">おしらせ</a>
                </li>
                <li class="list">
                  <a href="">更新情報</a>
                </li>
              </ul>
            </aside>
          </aside> -->
            <?php get_sidebar('news'); ?>

        </div>
        <!-- inner -->
      </div>
      <!-- wrap -->
    </div>
  </div>
</main>

        
<?php get_footer(); ?>
