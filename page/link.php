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
                        <h3>博客信息：</h3>
                        <p>网站名称：<a href="http://itsay.tech">张大侠</a></p>
                        <p>网站链接：<a href="http://itsay.tech">http://itsay.tech</a></p>
                        <p>头像链接：<a href="http://itsay.tech/wp-content/uploads/2017/03/cropped-h.jpg">http://itsay.tech/wp-content/uploads/2017/03/cropped-h.jpg</a></p>
                        <p>网站描述：<a href="#">有关前端，有关互联网（及医疗），有关点点产品运营，有关有关。</a></p>
                        <p><i class="fa fa-info" aria-hidden="true"></i>如果需要友情链接，请做好本站链接并在<a href="http://itsay.tech/link/#comments">下方留言</a>(坐潜水艇下去)即可。或者加我QQ → <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=878432898&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:878432898:51" alt="点击这里给我发消息" title="点击这里给我发消息"/> </a></p>
                    </li>
                <!-- 	<li>
                		<h3>微信公众号：</h3>
                		<a href="http://om739linv.bkt.clouddn.com/ZDXWX.jpeg">zdx-it</a>
                	</li>
                	<li>
                		<h3>Github：</h3>
                		<a href="https://github.com/zelda">@zelda</a>
                	</li>
                	<br/> -->
                	
                </ul>
                <br/>
                <div class="ui ribbon label red">英雄好汉</div>
                <br/><br/><br/>
                <?php
                    $bookmarks = get_bookmarks(array(
                        'orderby'        => 'id',
                        'order'          => 'ASC',
                        'category_name'  => '友情链接'
                    ));
                ?>
                <p><i class="fa fa-info" aria-hidden="true"></i>共<?php echo count($bookmarks) ?>位好汉，并随机排列</p>
                <ul class="readers-list">
                <?php
	               
                    // print_r(shuffle($bookmarks));
                    // $bookmarks = shuffle($bookmarks);  

                    shuffle($bookmarks);     //数组随机排序
	                foreach ( $bookmarks as $bookmark ) {
	                	$link_name = $bookmark->link_name;
	                	$link_url = $bookmark->link_url;
                        if($bookmark->link_image){
                            $link_image = $bookmark->link_image;
                        }else{
                            $link_image = get_template_directory_uri()."/images/ali6.jpg";
                        }
                        $friendLinkHtml = '<li><a target="_blank" href="'.$link_url.'"><img src="'.$link_image.'" /><em>'.$link_name.'</em><br>'.$link_url.'</a></li>';
	                	// $friendLinkHtml = '<li><h3>'.$link_name.'：</h3><a href="'.$link_url.'" target="_blank" rel="follow">'.$link_url.'</a></li>';
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