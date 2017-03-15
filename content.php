<article id="post-<?php the_ID(); ?>" class="block post">
	<span class="round-date red">
				<span class="month"><?php the_time(n月) ?></span>
				<span class="day"><?php the_time(d) ?></span>
	</span>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'amativeness' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			    <p class="title"><?php the_title(); ?></p>
                <p class="article-meta"><i class="fa fa-heart-o"></i>发表于 <time itemprop="datePublished" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_time('Y年n月j日') ?></time> • <i class="fa fa-eye"></i><?php if (function_exists('the_views')) { the_views(); } ?> • <i class="fa fa-comment-o"></i><?php comments_number('快来坐沙发！', '1 条评论', '% 条评论'); ?>
                </p>
			<?php else : ?>
			<p class="title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</p>
			<p class="article-meta">本文由 <?php the_author(); ?> 发表于 <?php the_time('Y年n月j日') ?> </p>
			<?php endif; // is_single() ?>
			<?php if ( comments_open() ) : ?>
			<div class="ui ribbon label red"><?php the_category(', ') ?></div>
			<?php endif; // comments_open() ?>
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="article-content typo red">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'amativeness' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'amativeness' ), 'after' => '</div>' ) ); ?>
		</div><!-- .article-content -->
		<br/><br/><br/>
		<div class="article-end typo">
			<p class="fgx">--- EOF ---</p>
			<p class="tag"></p>
			<div class="article-info">
				<p>本文标题：<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
				<p>作者：<a href="http://itsay.tech">张大侠</a>（公众号：<em>zdx-it</em>） / 转载烦请注明出处</p>
			</div>
			<div class="c-qrcode"></div>
		</div>

		<?php endif; ?>



	</article><!-- #post -->
