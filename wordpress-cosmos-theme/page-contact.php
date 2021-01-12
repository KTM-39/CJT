<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<article <?php post_class(); ?>>

    <div class="page-content">
        <div class="jumbotron">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>

        <div class="content-layout">
            <?php the_content(); ?>
        </div>
    </div>

</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>



