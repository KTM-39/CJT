<?php get_header(); ?>
<?php
/*
    Template Name: 就労支援ページ
*/
?>
<main>
    <article class="Employment-support">
        <div class="jumbotron">
            <h1 class="Employment-support-title"><?php the_title(); ?></h1>
            <p><?php echo esc_attr( strtoupper( $post->post_name ) ); ?></p>
        </div>
        <!-- /.jumbotron -->
        <section>
            <p class="Employment-support-description">タイトル</p>
            <div class="Employment-support-wrapper">
                <div class="task">
                    <figure class="task__img-wrapper">
                        <img class="task__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/sample-image.jpg">
                    </figure>
                    <div class="task__body">
                        <h2 class="task__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quod.</h2>
                        <p class="task__text">
                            多岐にわたる事業を展開するBAYCREW’S GROUPですが、その主軸とベースはファッションに置かれています。私たちの考えるファッションとは、人々の生活に密接に関わるモノやコト、つまりはライフスタイルそのものなのです。
                        </p>
                    </div>
                    <!-- /.task__body -->
                </div>
                <!-- /.task -->
                <div class="task">
                    <figure class="task__img-wrapper">
                        <img class="task__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/sample-image.jpg">
                    </figure>
                    <div class="task__body">
                        <h2 class="task__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quod.</h2>
                        <p class="task__text">
                            多岐にわたる事業を展開するBAYCREW’S GROUPですが、その主軸とベースはファッションに置かれています。私たちの考えるファッションとは、人々の生活に密接に関わるモノやコト、つまりはライフスタイルそのものなのです。
                        </p>
                    </div>
                    <!-- /.task__body -->
                </div>
                <!-- /.task -->
                <div class="task">
                    <figure class="task__img-wrapper">
                        <img class="task__img" alt="" src="<?php echo get_template_directory_uri(); ?>/img/sample-image.jpg">
                    </figure>
                    <div class="task__body">
                        <h2 class="task__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, quod.</h2>
                        <p class="task__text">
                            多岐にわたる事業を展開するBAYCREW’S GROUPですが、その主軸とベースはファッションに置かれています。私たちの考えるファッションとは、人々の生活に密接に関わるモノやコト、つまりはライフスタイルそのものなのです。
                        </p>
                    </div>
                    <!-- /.task__body -->
                </div>
                <!-- /.task -->
            </div>
            <!-- /.Employment-support-wrapper -->
        </section>
        <div id="scroll-top"></div>
        <!-- /#scroll-top -->
    </article>
</main>

<?php get_footer(); ?>
