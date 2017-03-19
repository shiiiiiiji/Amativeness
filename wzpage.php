	<article id="post-<?php the_ID(); ?>" class="block post">
        <span class="round-date red">
            <span class="month"><?php the_time(n月) ?></span>
            <span class="day"><?php the_time(d) ?></span>
        </span>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
            <div class="featured-post">
                <?php _e( '置顶', 'amativeness' ); ?>
            </div>
		<?php endif; ?>
		<header class="entry-header">
			<?php if ( is_single() ) : ?>
			<p class="title"><?php the_title(); ?></p>
			<?php else : ?>
			<p class="title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</p>
                <p class="article-meta"><i class="fa fa-heart-o"></i>发表于 <time itemprop="datePublished" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_time('Y年n月j日') ?></time> • <i class="fa fa-eye"></i><?php if (function_exists('the_views')) { the_views(); } ?> • <i class="fa fa-comment-o"></i><?php comments_number('快来坐沙发！', '1 条评论', '% 条评论'); ?>
                </p>
			<?php endif; // is_single() ?>
			<?php if ( comments_open() ) : ?>
			<div class="ui ribbon label red"><?php the_category(', ') ?></div>

			<?php endif; // comments_open() ?>
			<div class="article-content typo red">
                <?php if ( has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                        <?php the_post_thumbnail('full', array('class' => 'aligncenter')); ?>
                    </a>
                <?php endif; ?>
			</div>
			</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="article-content red">
            <?php the_excerpt(); ?>
		</div><!-- .article-content -->
		<?php endif; ?>
			<div class="article-content red read-full">
				<p class="more"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" target="_blank">阅读全文 &gt;&gt;</a></p>
			</div>
	</article><!-- #post -->
