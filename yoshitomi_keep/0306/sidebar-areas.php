<aside>
    <h2 class="side_title">エリアで探す</h2>

    <?php
    $areas = get_terms(array('taxonomy' => 'area'));
    if (!empty($areas)) :
    ?>

        <ul class="side_lists">
            <?php foreach ($areas as $area) : ?>
                <li class="list">
                    <a href="<?php echo get_term_link($area); ?>"><?php echo $area->name ?></a>
                </li>
            <?php endforeach; ?>

            <!-- <li class="list">
                <a href="">徳島市</a>
            </li>
            <li class="list">
                <a href="">東部</a>
            </li>
            <li class="list">
                <a href="">西部</a>
            </li>
            <li class="list">
                <a href="">南部</a>
            </li> -->
        </ul>

    <?php endif; ?>
</aside>
