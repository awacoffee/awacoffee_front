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

  <section>
    <div class="wrap">
      <div class="inner">
        <div class="text_btns">
          <?php
          $column_categories = get_terms(array('taxonomy' => 'column_category'));
          if (!empty($column_categories)) :
          ?>
            <ul class="column_tab_wrap">
              <?php foreach ($column_categories as $column_category) : ?>
                <li class="btn">
                  <h2 class="column_item_btn"><a href="<?php echo get_term_link($column_category); ?>"><?php echo $column_category->name ?></a></h2>
                </li>
              <?php endforeach; ?>
              <!-- <li class="btn">
              <h2 class="column_item_btn"><a href="">特集</a></h2>
            </li>
            <li class="btn">
              <h2 class="column_item_btn"><a href="">ブログ</a></h2>
            </li> -->
            </ul>
          <?php endif; ?>
          <div id="search_box" class="column_search">
            <form method="get" action="#" class="search_container">
              <input type="text" size="25" placeholder="キーワード検索">
              <input type="submit" value="&#xf002">
            </form>
          </div>
        </div>


        <div class="cards_wrap is_column_active">
          <div class="card_wrap">
            <?php
            $args = array(
              'post_type' => 'column',
              'posts_per_page' => -1,
              'orderby' => 'rand',
            );
            $taxquerysp = array('relation' => 'AND');

            $args['tax_query'] = $taxquerysp;

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
              <?php while ($the_query->have_posts()) : ?>
                <?php $the_query->the_post(); ?>
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
