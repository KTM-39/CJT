<?php get_header(); ?>

<main>
    <div class="blog-wrapper">
        <div class="jumbotron">
            <h1 class="blog-title">コスモスブログ</h1>
        </div>
        <!-- /.jumbotron -->
        <section>
            <h2 class="blog-copy">Lorem, ipsum dolor.</h2>
            <div class="media-wrapper">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article <?php post_class(); ?>>
                    <a class="media" href="<?php the_permalink(); ?>">
                        <?php if(has_post_thumbnail()): ?>
                            <figure class="media__img-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </figure>
                            <div class="media__body">
                                <h3 class="media__title"><?php the_title(); ?></h3>
                                <p class="media__text"><?php echo wp_strip_all_tags(get_the_content(), true); ?></p>
                            </div>
                        <?php endif; ?>
                    </a>
                </article>
                <?php endwhile; endif; ?>
            </div>
        </section>
        <?php the_posts_pagination(array(
            'prev_text' => '<span class="dashicons dashicons-arrow-left-alt2"></span><span class="screen-reader-text">前へ</span>',
            'next_text' => '<span class="dashicons dashicons-arrow-right-alt2"></span><span class="screen-reader-text">次へ</span>'
        )); ?>
    </div>
</main>

<?php get_footer(); ?>
