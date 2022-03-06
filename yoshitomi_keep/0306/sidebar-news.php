<aside>
    <h2 class="side_title">ニュース</h2>
    <ul class="side_lists">
        <?php
        // カテゴリーnewsのslug情報を取得
        $news = get_term_by('slug', 'category_news', 'category');
        // カテゴリーnewsのリンクを取得
        $news_link = get_term_link($news, 'category');
        ?>
        <li class="list">
            <a href="<?php echo $news_link; ?>">おしらせ</a>
        </li>
        <?php
        // カテゴリーnewsのslug情報を取得
        $updates = get_term_by('slug', 'category_update', 'category');
        // カテゴリーnewsのリンクを取得
        $updates_link = get_term_link($updates, 'category');
        ?>
        <li class="list">
            <a href="<?php echo $updates_link ?>">更新情報</a>
        </li>
    </ul>
</aside>
