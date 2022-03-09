<?php get_header(); ?>

<main id="column_list_under">
  <div class="header_img_bg mainvisual_wrap"></div>
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

  <section>
    <div class="wrap">
      <div class="inner column_item_inner">
        <div class="text_btns">
          <?php
          $column_categories = get_terms(array('taxonomy' => 'column_category'));
          if (!empty($column_categories)) :
          ?>
            <ul class="column_tab_wrap">
              <li class="btn">
                <h2 class="column_item_btn"> 「 <?php echo get_search_query(); ?> 」の検索結果</h2>
              </li>
              <!-- <li class="btn">
              <h2 class="column_item_btn"><a href="">特集</a></h2>
            </li>
            <li class="btn">
              <h2 class="column_item_btn"><a href="">ブログ</a></h2>
            </li> -->
            </ul>
          <?php endif; ?>
          <div id="search_box" class="column_search">
          </div>
        </div>
        <div class="cards_wrap is_column_active">
          <div class="card_wrap">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/loop', 'column'); ?>
              <?php endwhile; ?>
            <?php else : ?>
              <div class="s_column_text">
                <p>検索結果はありませんでした</p>
              </div>
            <?php endif; ?>
            <!-- <article class="column_wrap">
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
      </div>
      <!-- inner -->
    </div>
    <!-- wrap -->
  </section>
</main>

<?php get_footer(); ?>
