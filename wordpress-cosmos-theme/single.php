<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="single-wrapper">
    <article <?php post_class('flexbox-single'); ?>>
        <main class="main-content">
            <div class="post-header">
                <?php the_category(); ?>
                <h1><?php the_title(); ?></h1>

                <div class="flexbox-snstime">
                    <?php if ( is_active_sidebar( 'sidebar-2' ) ): ?>
                        <?php dynamic_sidebar( 'sidebar-2' ); ?>
                    <?php endif; ?>
                    <time class="post-date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
                        <?php echo esc_html( get_the_date() ); ?>
                    </time>
                </div>
            </div>

            <div class="content-layout">
                <?php the_content(); ?>
            </div>

            <?php the_post_navigation(); ?>


            <h3 class="pickup-title">PICK UP</h3>
            <?php $pickup= get_posts( array(
                'posts_per_page' => '3',
                'post__not_in' => array( get_the_id() ),
                'tag' => 'pickup',
                'orderby' => 'rand'
            )); ?>
            <?php if( $pickup):
                foreach( $pickup as $post ):
                setup_postdata( $post );?>
                <div class="pickup-wrapper">
                    <article>
                        <a class="pickup" href="<?php the_permalink(); ?>">
                            <?php if(has_post_thumbnail()): ?>
                                <figure class="pickup__img-wrapper">
                                    <?php the_post_thumbnail(); ?>
                                </figure>
                                <div class="pickup__body">
                                    <time class="pickup__date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
                                        <?php echo esc_html( get_the_date() ); ?>
                                    </time>
                                    <h4 class="pickup__title"><?php the_title(); ?></h4>
                                    <p class="pickup__text"><?php echo wp_strip_all_tags(get_the_content(), true); ?></p>
                                </div>
                            <?php endif; ?>
                        </a>
                    </article>
                </div>
            <?php endforeach;
                wp_reset_postdata();
                endif; ?>
        </main>

        <aside class="sub-content">
            <h2 class="related-title">RELATED</h2>

            <div class="related-list">
                <?php $related = get_posts( array(
                    'posts_per_page' => '3',
                    'post__not_in' => array( get_the_id() ),
                    'category__in' => wp_get_post_categories( get_the_id() ),
                    'orderby' => 'rand'
                )); ?>
                <?php if($related):
                    foreach($related as $post):
                    setup_postdata($post); ?>

                <?php if( has_post_thumbnail() ): ?>
                    <article class="related">
                        <a class="" href="<?php the_permalink(); ?>">
                            <figure>
                                <?php the_post_thumbnail(); ?>
                            </figure>
                            <h5><?php the_title(); ?></h5>
                        </a>
                    </article>
                <?php endif; ?>

                <?php endforeach;
                    wp_reset_postdata();
                    endif; ?>
            </div>
            <?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?>
        </aside>
        <div id="scroll-top"></div>
        <!-- /#scroll-top -->
    </article>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>



