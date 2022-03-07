<aside>
    <h2 class="side_title">
        コラムカテゴリ一覧
    </h2>

    <?php
    $column_categories = get_terms(array('taxonomy' => 'column_category'));
    if (!empty($column_categories)) :
    ?>

        <ul class="side_lists">
            <?php foreach ($column_categories as $column_category) : ?>
                <li class="list">
                    <a href="<?php echo get_term_link($column_category); ?>"><?php echo $column_category->name ?></a>
                </li>
            <?php endforeach; ?>

            <!-- <li class="list">
                <a href="">入門知識</a>
            </li>
            <li class="list">
                <a href="">ブログ</a>
            </li>
            <li class="list">
                <a href="">特集</a>
            </li> -->
        </ul>

    <?php endif; ?>
</aside>
