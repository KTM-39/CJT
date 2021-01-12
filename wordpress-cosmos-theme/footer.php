        <footer class="footer">
            <div class="flexbox-footer">
                <div class="footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo">
                </div>
                <!-- /.footer__logo -->
                <ul class="sub-nav">
                    <li class="sub-nav__item"><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a></li>
                    <li class="sub-nav__item"><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">プライバシーポリシー</a></li>
                </ul>
                <!-- ./sub-nav -->
                <ul class="sns-nav">
                    <li class="twitter"><a href=""></a></li>
                    <li class="facebook"><a href=""></a></li>
                    <li class="instagram"><a href=""></a></li>
                </ul>
                <!-- ./sns-nav -->
            </div>
            <small class="copy-right">&copy;copyright Cosmos</small>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
