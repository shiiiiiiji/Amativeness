<?php
/*
Template Name: 留言板
*/
get_header(); ?>
	<div class="main">
		
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

	</div><!-- main -->

<?php get_sidebar(); ?>
</div><!-- #main .wrapper -->
</div>
<?php get_footer(); ?>