<?php get_header(); ?>

<main id="news_single_under">
<div class="header_img_bg mainvisual_wrap"></div>
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
          <!-- ▼本文▼ -->
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <?php
              $cat = get_the_category();
              $cat = $cat[0];
              ?>
              <article class="news_page_container">
                <h1 class="news_page_level1_heading">
                  <?php wp_title(''); ?>
                </h1>
                <ul class="news_page_post_meta">
                  <li class="news_page_post_date">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                  </li>
                  <li class="news_page_post_category_wrap">
                    <div class="<?php echo $cat->slug ?>"><?php the_category(); ?></div>
                  </li>
                </ul>
                <div class="news_page_text_wrap">
                  <p class="news_page_text">
                    <?php the_content(); ?>
                  </p>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>

          <nav class="news_page_navigation">
            <div class="news_page_prev">
              <?php previous_post_link('%link', '《 前の記事'); ?>
            </div>
            <div class="news_page_next">
              <?php next_post_link('%link', '次の記事 》') ; ?>
            </div>
          </nav>
        </div>
      </div>
    </div>

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