<?php
$cat = get_the_category();
$cat = $cat[0];
?>
<div class="news_wrap_cards">
    <div id="post-<?php the_ID(); ?>" <?php post_class('news_wrap_card'); ?>>
        <div class="news_card_meta">
            <time class="news_date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?>
            </time>
            <div class="<?php echo $cat->slug ?>"><?php the_category(); ?></div>
        </div>
        <a href=" <?php the_permalink(); ?>" class=" news_text">
            <h3 class="news_title"><?php the_title(); ?></h3>
            <p class="news_desc"><?php the_excerpt(); ?></p>
        </a>
    </div>
</div>