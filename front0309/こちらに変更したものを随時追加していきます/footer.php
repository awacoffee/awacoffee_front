<footer>
    <div class="scroll_anime">
        <!-- ↓ -->
        <div id="top_to_button" class="js-pagetop scroll-top">
            <div class="arrow"></div>
            <p>Page Top</p>
        </div>
        <!-- ↑ -->
        <div class="js-scroll scroll-top scroll-view visible">
            <div class="arrow"></div>
            <p>Scroll</p>
        </div>
    </div>
    <div id="footer_wrap" class="wrap">
        <div class="inner">
            <!-- ▼フッター▼ -->
            <div class="footer_flex">
                <div class="footer_logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_aoch.png" alt="Awa Our Coffee Hourのロゴ" />
                    </a>
                </div>
                <nav class="footer_nav">
                    <div class="footer_nav_flex">
                        <?php
                        $args = array(
                            'menu' => 'footer-gnav-left',
                            'menu_class' => 'footer_nav_list',
                            'container' => 'div',
                            'container_class' => 'footer_nav_list_left',
                        );
                        wp_nav_menu($args);
                        ?>
                        <?php
                        $args = array(
                            'menu' => 'footer-gnav-right',
                            'menu_class' => 'footer_nav_list',
                            'container' => 'div',
                            'container_class' => 'footer_nav_list_right',
                        );
                        wp_nav_menu($args);
                        ?>
                    </div>
                    <div class="drower_nav_insta">
                        <a href="https://www.instagram.com/awa_our_coffee_hour" target="_blank" rel="noopener noreferrer" class="drower_nav_item"><i class="fa-brands fa-instagram fa-2x"></i></a>
                    </div>
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

<script>
    var path = "<?php echo get_template_directory_uri(); ?>";
</script>
<?php wp_footer(); ?>
</body>

</html>
