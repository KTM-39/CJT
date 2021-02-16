<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <?php wp_head(); ?>

        <meta name="description" content="<?php bloginfo("description"); ?>" />
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <header class="header <?php if( !is_front_page() ): ?>
            header-bg
            <?php endif; ?>">
            <div class="header__inner">
                <h1 class="header__logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="" class="logo"></a>
                </h1>
                <div class="header__nav">
                    <nav class="main-nav">
                        <ul class="main-nav__inner">
                            <li class="main-nav__item">
                                <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about">コスモスについて</a>
                                <ul class="hover-menu">
                                    <li class="hover-menu__item">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about__cosmos">コスモスとは</a>
                                    </li>
                                    <li class="hover-menu__item">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about__works">就労支援</a>
                                    </li>
                                    <li class="hover-menu__item">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about__daily-schedule">1日の流れ</a>
                                    </li>
                                    <li class="hover-menu__item">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about__wage">工賃規定</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="main-nav__item"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#employment">就労継続支援B型について</a>
                                <ul class="hover-menu">
                                    <li class="hover-menu__item">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#employment__type-b">就労継続支援B型とは</a>
                                    </li>
                                    <li class="hover-menu__item">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#employment__flow-of-use">利用までの流れ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="main-nav__item"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#news">ニュース</a></li>
                            <li class="main-nav__item"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#cosmos-blog">ブログ</a></li>
                            <li class="main-nav__item"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#recruitment">利用者募集</a></li>
                            <li class="main-nav__item"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#faq">Q&amp;A</a></li>
                            <li class="main-nav__item"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#access">アクセス</a></li>
                            <li class="main-nav__item"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#contact" class="contact-btn">お問い合わせ</a></li>
                        </ul>
                    </nav>
                    <button class="burger-btn">
                        <span class="burger-btn__bars">
                            <span class="bar bar--top"></span>
                            <span class="bar bar--mid1"></span>
                            <span class="bar bar--mid2"></span>
                            <span class="bar bar--bot"></span>
                        </span>
                    </button>
                    <div class="burger-menu">
                        <ul class="burger-menu__inner">
                            <li class="burger-menu__item layout-item1"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about">コスモスについて</a>
                                <ul>
                                    <li class="burger-menu__item layout-item2">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about__cosmos">コスモスとは</a>
                                    </li>
                                    <li class="burger-menu__item layout-item2">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about__works">就労支援</a>
                                    </li>
                                    <li class="burger-menu__item layout-item2">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about__daily-schedule">1日の流れ</a>
                                    </li>
                                    <li class="burger-menu__item layout-item2">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#about__wage">工賃規定</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="burger-menu__item layout-item1"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#employment">就労継続支援B型について</a>
                                <ul>
                                    <li class="burger-menu__item layout-item2">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#employment__type-b">就労継続支援B型とは</a>
                                    </li>
                                    <li class="burger-menu__item layout-item2">
                                        <a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#employment__flow-of-use">利用までの流れ</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="burger-menu__item layout-item1"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#news">ニュース</a></li>
                            <li class="burger-menu__item layout-item1"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#cosmos-blog">ブログ</a></li>
                            <li class="burger-menu__item layout-item1"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#recruitment">利用者募集</a></li>
                            <li class="burger-menu__item layout-item1"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#faq">Q&amp;A</a></li>
                            <li class="burger-menu__item layout-item1"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#access">アクセス</a></li>
                            <li class="burger-menu__item layout-item1"><a href="<?php if( !is_front_page() ): ?>
                                            <?php echo esc_url(home_url('/')); ?>
                                        <?php endif; ?>#contact">お問い合わせ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php if( !is_front_page() ): ?>
                <div class="header__breadcrumbs">
                    <div class="breadcrumbs">
                        <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                    </div>
                </div>
            <?php endif; ?>
        </header>
