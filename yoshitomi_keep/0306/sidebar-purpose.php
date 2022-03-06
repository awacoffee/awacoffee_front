<aside>
    <h2 class="side_title">目的から探す</h2>

    <?php
    $purposes = get_terms(array('taxonomy' => 'purpose'));
    if (!empty($purposes)) :
    ?>

        <ul class="side_lists">
            <?php foreach ($purposes as $purpose) : ?>
                <li class="list">
                    <a href="<?php echo get_term_link($purpose); ?>"><?php echo $purpose->name ?></a>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>
</aside>
