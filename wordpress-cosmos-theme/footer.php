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
                <?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
                    <?php dynamic_sidebar( 'sidebar-2' ); ?>
                <?php endif; ?>
                <!-- ./ -->
            </div>
            <small class="copy-right">&copy;copyright Cosmos</small>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
