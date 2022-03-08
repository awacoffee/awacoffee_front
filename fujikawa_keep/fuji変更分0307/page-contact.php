<?php
if(is_page('contact')){
  remove_filter('the_content', 'wpautop');
}
?>

<?php get_header(); ?>

<main>
<div class="header_img_bg mainvisual_wrap"></div>
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
        <h2>お問い合わせフォーム</h2>
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

<?php get_footer(); ?>
