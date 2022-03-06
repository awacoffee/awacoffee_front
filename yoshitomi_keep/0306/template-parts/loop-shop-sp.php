<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article class="stores_card">
            <a href="<?php echo get_permalink(); ?>">
                <figure class="stores_img">
                    <?php the_post_thumbnail(); ?>
                </figure>

                <div class="text_inner">
                    <h3 class="stores_name">
                        <?php the_title(); ?>
                    </h3>
                    <div class="stores_catch"></div>
                    <div class="stores_tags">
                        <p class="stores_tag">
                            <?php the_field('catchphrase'); ?>
                        </p>
                    </div>
                </div>
            </a>
        </article>
    <?php endwhile; ?>
<?php endif; ?>