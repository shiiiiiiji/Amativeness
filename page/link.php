<?php
/*
Template Name: Links
*/
get_header(); ?>
<div class="main">
    <?php while ( have_posts() ) : the_post(); ?>

    	<article class="article-content block typo">
			<header class="entry-header">
				<p class="title">
					<span class="yzk_title_49">友情链接</span>
				</p>
				<p class="article-meta"><i class="fa fa-eye"></i><?php if (function_exists('the_views')) { the_views(); } ?> • <i class="fa fa-comment-o"></i><?php comments_number('快来坐沙发！', '1 条评论', '% 条评论'); ?>
                </p>
                <div class="ui ribbon label red">&nbsp;&nbsp;张大侠&nbsp;&nbsp;</div>
                <br/>
                <ul>
                	<li>
                		<h3>微信公众号：</h3>
                		<a href="http://om739linv.bkt.clouddn.com/ZDXWX.jpeg">zdx-it</a>
                	</li>
                	<br/>
                	<li>
                		<h3>Github：</h3>
                		<a href="https://github.com/zelda">@zelda</a>
                	</li>
                	<br/>
                	
                </ul>
                <br/>
                <div class="ui ribbon label red">英雄好汉</div>
                <br/>
                <ul>
                <?php
	                $bookmarks = get_bookmarks(array(
	                    'orderby'        => 'id',
	                    'order'          => 'ASC',
	                    'category_name'  => '友情链接'
	                ));

	                foreach ( $bookmarks as $bookmark ) {
	                	$link_name = $bookmark->link_name;
	                	$link_url = $bookmark->link_url;
	                	$friendLinkHtml = '<li><h3>'.$link_name.'：</h3><a href="'.$link_url.'" target="_blank" rel="follow">'.$link_url.'</a></li><br/>';
	                    echo $friendLinkHtml;
	                }
	                ?>
	            </ul>
			</header>
		</article>
		<?php comments_template( '', true ); ?>
    <?php endwhile; // end of the loop. ?>
</div><!-- main -->
<?php get_sidebar(); ?>
</div><!-- #main .wrapper -->
</div>
<?php get_footer(); ?>