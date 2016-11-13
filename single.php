<?php get_header(); ?>
	<div id="primary" class="content-area container">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<section class="post-content">
					<div class="single-post-inner grap">
					<?php the_content();?>
					</div>

				</section>

				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>