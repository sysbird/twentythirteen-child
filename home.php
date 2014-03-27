<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" class="masonry-wrapper" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php the_post_thumbnail(); ?>
							<h1 class="entry-title">
								<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
							</h1>
					</header>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>