<?php
/*
Template Name: 归档页面
*/
get_header(); ?>

	<section id="primary" class="site-content">
			<div class="main" id="thumbs">
		
			<?php while ( have_posts() ) : the_post(); ?>
				<style type="text/css" media="screen">
				@font-face{
					font-family:"yzkposttitle49";
					src:url("https://cdn.webfont.youziku.com/webfonts/custompath/D6C5916326B35B89/itsay_tech/post/49/5cffe4ac915d45cfa07853a273b8b9fb/title.gif");
					src:url("https://cdn.webfont.youziku.com/webfonts/custompath/D6C5916326B35B89/itsay_tech/post/49/5cffe4ac915d45cfa07853a273b8b9fb/title.gif?#iefix")format("embedded-opentype"), url("https://cdn.webfont.youziku.com/webfonts/custompath/D6C5916326B35B89/itsay_tech/post/49/5cffe4ac915d45cfa07853a273b8b9fb/title.bmp")format("woff"), url("https://cdn.webfont.youziku.com/webfonts/custompath/D6C5916326B35B89/itsay_tech/post/49/5cffe4ac915d45cfa07853a273b8b9fb/title.jpg")format("truetype");
				}.yzk_title_49{font-family:"yzkposttitle49" !important;}</style>

				<article class="article-content block typo">
					<header class="entry-header">
						<p class="title">
							<span class="yzk_title_49">存档</a>
						</p>
						<p class="article-meta">目前公开发表文章共：<strong><?php echo $hacklog_archives->PostCount();?></strong> 篇</p>

						<?php echo $hacklog_archives->PostList();?>
					</header>

				</article>
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>
	<?php amativeness_content_nav( 'nav-below' ); ?>
	</div><!-- main -->
	</section><!-- #primary -->
<?php get_sidebar(); ?>
</div><!-- #main .wrapper -->
</div>
<?php get_footer(); ?>