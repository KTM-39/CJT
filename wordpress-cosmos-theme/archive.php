<?php get_header(); ?>

<main>
	<div class="archive-wrapper">
		<div class="jumbotron">
			<h1 class="archive-title"><?php the_archive_title(); ?></h1>
			<?php if( is_category() ): ?>
				<p>CATEGORY ARCHIVE</p>
			<?php endif; ?>
        </div>
        <!-- /.jumbotron -->

		<div class="archive-list">
			<?php if(have_posts()): while(have_posts()):
			the_post(); ?>

			<article <?php post_class("archive"); ?>>
				<a href="<?php the_permalink(); ?>">
					<?php if( has_post_thumbnail() ): ?>
					<figure>
						<?php the_post_thumbnail(); ?>
					</figure>
					<?php endif; ?>

					<h2><?php the_title(); ?></h2>
				</a>
			</article>

			<?php endwhile; endif; ?>
		</div>

		<?php the_posts_pagination( array(
			'prev_text' => '<span class="dashicons dashicons-arrow-left-alt2"></span><span class="screen-reader-text">前へ</span>',
			'next_text' => '<span class="screen-reader-text">次へ</span><span class="dashicons dashicons-arrow-right-alt2"></span>'
		) ); ?>

	</div>
</main>

<?php get_footer(); ?>