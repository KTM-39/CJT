<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class('flexbox-single layout-wrapper'); ?>>

    <div class="main-content">
        <div class="posthead">
            <?php the_category(); ?>
            <h1><?php the_title(); ?></h1>

            <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
                <?php echo esc_html( get_the_date() ); ?>
            </time>
        </div>

        <?php the_content(); ?>

        <?php the_post_navigation(); ?>
    </div>

    <div class="sub-content">
        <aside class="myrelated">
            <h2>RELATED</h2>

            <div class="mypostlist">
                <?php $posts = get_posts( array(
                    'posts_per_page' => '4',
                    'post__not_in' => array( get_the_id() ),
                    'category__in' => wp_get_post_categories( get_the_id() ),
                    'orderby' => 'rand'
                )); ?>
                <?php if($posts):
                    foreach($posts as $post):
                    setup_postdata($post); ?>

                        <article>
                            <a href="<?php the_permalink(); ?>">
                                <?php if( has_post_thumbnail() ): ?>
                                    <figure>
                                        <?php the_post_thumbnail(); ?>
                                    </figure>
                                <?php endif; ?>
                                <h3><?php the_title(); ?></h3>
                            </a>
                        </article>

                <?php endforeach;
                    wp_reset_postdata();
                    endif; ?>
            </div>
        </aside>
    </div>

</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>



