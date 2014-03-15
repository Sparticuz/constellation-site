<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="nine columns first clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

					<header class="article-header">
						<p class="blogdate"><?php
							printf(__('<time class="updated" datetime="%1$s" pubdate>%2$s</time>', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(get_option('date_format')));
						?></p>
						<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
					

					</header> <!-- end article header -->

					<section class="entry-content clearfix" itemprop="articleBody">
						<?php the_content(); ?>
					</section> <!-- end article section -->

					<footer class="article-footer">
						<?php the_tags('<p class="tags"><span class="tags-title">' . __('Tags:', 'bonestheme') . '</span> ', ', ', '</p>'); ?>

					</footer> <!-- end article footer -->

					<?php comments_template(); ?>

				</article> <!-- end article -->

<footer class="article-footer">

					</footer> <!-- end article footer -->

				</article> <!-- end article -->

				<?php endwhile; ?>

				<?php else : ?>

						<article id="post-not-found" class="hentry clearfix">
							<header class="article-header">
								<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
							</section>
							<footer class="article-footer">
									<p><?php _e("This is the error message in the single-custom_type.php template.", "bonestheme"); ?></p>
							</footer>
						</article>

				<?php endif; ?>

			</div> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
