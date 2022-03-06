<footer>
    <div id="footer_wrap" class="wrap">
        <div class="inner">
            <!-- ▼フッター▼ -->
            <div class="footer_flex">
                <div class="footer_logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_aoch.png" alt="Awa Our Coffee Hourのロゴ" />
                </div>
                <nav class="footer_nav">
                    <ul class="footer_nav_list">
                        <li class="footer_nav_item">
                            <a href="<?php echo home_url('/purpose/drink/'); ?>">店で飲みたい</a>
                        </li>
                        <li class="footer_nav_item">
                            <a href="<?php echo home_url('/purpose/beans/'); ?>">豆を買いたい</a>
                        </li>
                        <li class="footer_nav_item">
                            <a href="<?php echo get_permalink(243); ?>">条件検索</a>
                        </li>
                        <li class="footer_nav_item">
                            <a href="<?php echo home_url('/column_category/beginner/'); ?>">コーヒー入門知識</a>
                        </li>
                        <li class="footer_nav_item">
                            <a href="<?php echo home_url('/column_category/blog/'); ?>">ブログ</a>
                        </li>
                        <li class="footer_nav_item">
                            <a href="<?php echo home_url('/column_category/special/'); ?>">特集</a>
                        </li>
                    </ul>
                    <ul class="footer_nav_list">
                        <li class="footer_nav_item">
                            <a href="<?php echo get_permalink(245); ?>">マイページ</a>
                        </li>
                        <li class="footer_nav_item">
                            <a href="<?php echo get_permalink(493); ?>">お問い合わせ</a>
                        </li>
                        <li class="footer_nav_item">
                            <a href="">このサイトについて</a>
                        </li>
                        <li class="footer_nav_item">
                            <a href="">プライバシーポリシー</a>
                        </li>
                        <li class="footer_nav_item">
                            <a href="https://www.instagram.com/awa_our_coffee_hour/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram fa-2x"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- footer_flex -->

            <p class="footer_wrap_copyright">
                <small>&copy; 2022 動</small>
            </p>
        </div>
        <!-- viewport -->
    </div>
    <!-- footer_wrap -->
</footer>

<?php wp_footer(); ?>
</body>

</html>