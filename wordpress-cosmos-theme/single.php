<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="single-wrapper">
    <article <?php post_class('flexbox-single'); ?>>
        <main class="main-content">
            <div class="post-header">
                <?php the_category(); ?>
                <h1><?php the_title(); ?></h1>

                <time class="post-date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
                    <?php echo esc_html( get_the_date() ); ?>
                </time>
            </div>

            <div class="content-space">
                <?php the_content(); ?>
            </div>

            <?php the_post_navigation(); ?>
        </main>

        <div class="sub-content">
            <aside class="related">
                <h2 class="related-hedding">RELATED</h2>

                <div class="related-list">
                    <?php $posts = get_posts( array(
                        'posts_per_page' => '3',
                        'post__not_in' => array( get_the_id() ),
                        'category__in' => wp_get_post_categories( get_the_id() ),
                        'orderby' => 'rand'
                    )); ?>
                    <?php if($posts):
                        foreach($posts as $post):
                        setup_postdata($post); ?>

                    <?php if( has_post_thumbnail() ): ?>
                        <article>
                            <a class="" href="<?php the_permalink(); ?>">
                                <figure>
                                    <?php the_post_thumbnail(); ?>
                                </figure>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </article>
                    <?php endif; ?>

                    <?php endforeach;
                        wp_reset_postdata();
                        endif; ?>
                </div>
            </aside>
        </div>
    </article>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>



