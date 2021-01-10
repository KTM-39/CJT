        <footer class="footer">
            <div class="footer__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo">
            </div>
            <!-- /.footer__logo -->
            <ul class="sub-nav">
                <li class="sub-nav__item"><a href="<?php echo esc_url(home_url('/company')); ?>">会社概要</a></li>
                <li class="sub-nav__item"><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">プライバシーポリシー</a></li>
            </ul>
            <small>&copy;copyright Cosmos</small>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
