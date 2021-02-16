<?php get_header(); ?>

<main>
	<div class="archive-wrapper">
		<div class="jumbotron">
			<h1 class="archive-title"><?php the_archive_title(); ?></h1>
			<p>CATEGORY ARCHIVE</p>
        </div>
        <!-- /.jumbotron -->

		<div class="archive-list">
			<?php if(have_posts()): while(have_posts()):
			the_post(); ?>

			<article <?php post_class("archive"); ?>>
				<a class="archive" href="<?php the_permalink(); ?>">
					<?php if( has_post_thumbnail() ): ?>
						<figure class="archive__img-wrapper">
							<?php the_post_thumbnail(); ?>
						</figure>
						<div class="archive__body">
							<time class="archive__date" datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
								<?php echo esc_html( get_the_date() ); ?>
							</time>
							<h4 class="archive__title"><?php the_title(); ?></h4>
							<p class="archive__text"><?php echo wp_strip_all_tags(get_the_content(), true); ?></p>
						</div>
					<?php endif; ?>
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
