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
            <dl>
                <?php
                    $temp = $wp_query;
                    $wp_query = null;
                    $wp_query = new WP_Query();
                    $wp_query->query(
                        'post_type=post',
                        'posts_per_page=5',
                        'tag=Recommended',
                        'paged=1',
                        $paged
                    );
                ?>
                <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <!-- ループさせたい内容 -->
                    <dt class="date"><?php the_time('Y.m.d'); ?></dt>
                    <dd>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </dd>
                <!-- ループさせたい内容 end -->
                <?php endwhile; ?>
                <?php $wp_query = null; $wp_query = $temp; ?>
            </dl>
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
            <?php if ( is_active_sidebar( 'sidebar-1' ) ): ?>
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            <?php endif; ?>
        </div>
    </article>
</div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>



