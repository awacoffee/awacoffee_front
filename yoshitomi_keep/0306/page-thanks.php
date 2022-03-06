<?php get_header(); ?>

<main>
  <!-- ▼タイトルエリア▼ -->
  <div class="wrap">
    <div class="under_title inner">
      <div class="under_wrap_title">
        <p>Contact</p>
        <h1>お問い合わせ</h1>
      </div>
    </div>
  </div>
  <!-- /.wrap -->

  <section class="contact">
    <div class="wrap">
      <div class="inner">
        <h2>お問い合わせ内容の送信が完了しました。</h2>
        <div class="contact_container">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
              <?php the_post(); ?>

              <?php the_content(); ?>

            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<div class="scroll_anime">
            <div id="top_to_button" class="js-pagetop scroll-top none">
                <div class="arrow"></div>
                <p>Page Top</p>
            </div>
        </div>
        <!-- ページ上部へ戻る -->
<?php get_footer(); ?>
