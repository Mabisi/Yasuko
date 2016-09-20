<?php get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<section class="post-content">
					<div class="single-post-inner">
					<?php the_content();?>
					</div>

				</section>
				<section class="author">
<figure class="author-image duoshuo-loaded">
<?php echo get_avatar(get_the_author_meta('ID'),80);?>
</figure>
<section class="author-detail">
<a href="javascript:;"><?php the_author();?></a>
<p><?php echo get_the_author_meta('description');?></p>
</section>
</section>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>