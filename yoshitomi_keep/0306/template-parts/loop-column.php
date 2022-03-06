<article class="column_wrap">
    <a href="<?php the_permalink(); ?>">
        <div class="column_inner">
            <figure class="column_img_wrap">
                <?php the_post_thumbnail('medium'); ?>
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="コラム記事のサムネイル画像" /> -->
            </figure>
            <div class="column_meta">
                <div class="categories_wrap">
                    <time class="column_date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <ul class="categories">
                        <?php echo get_the_term_list($post->ID, 'column_category'); ?>
                    </ul>
                </div>
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                    <div class="column_text">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </a>
            </div>
        </div>
    </a>
</article>