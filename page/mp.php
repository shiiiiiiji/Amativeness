<?php
/*
Template Name: 公众号
*/
get_header(); ?>

	<section id="primary" class="site-content">
			<div class="main" id="thumbs">

			<?php while ( have_posts() ) : the_post(); ?>
				<article class="article-content block typo">
					<header class="entry-header">
						<p class="title">
							<span class="yzk_title_49">公众号存档</a>
						</p>
						<p class="article-meta">个人公众号：<strong>张大侠（zdx-it）</strong></p>
						<p>以下内容为iFrame嵌入，原始链接为：<a href="https://zelda.github.io/blog/sub/2017/01/19/the-collection-of-ZDX-posts.html" target="_blank">http://t.cn/Riaz7XS</a></p>
						<iframe src="https://zelda.github.io/blog/sub/2017/01/19/the-collection-of-ZDX-posts.html" frameBorder="1" width="100%" height="600"></iframe>
						<div style="width: 270px" class="wp-caption aligncenter">
							<a href="http://om739linv.bkt.clouddn.com/ZDXWX.jpeg" target="_blank">
								<img src="http://om739linv.bkt.clouddn.com/ZDXWX.jpeg" alt="个人公众号：张大侠（zdx-it）">
							</a>
						</div>
					</header>
				</article>
				<?php comments_template( '', true ); ?>

			<?php endwhile; ?>
	<?php amativeness_content_nav( 'nav-below' ); ?>
	</div><!-- main -->
	</section><!-- #primary -->
<?php get_sidebar(); ?>
</div><!-- #main .wrapper -->
</div>
<?php get_footer(); ?>