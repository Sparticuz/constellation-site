<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="nine columns first clearfix" role="main">
			<h1 class="archive-title"><span><?php _e('Search Results for:', 'bonestheme'); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

				<header class="article-header">
					<p class="byline vcard">
						<time class="updated" datetime="<?php echo get_the_time('Y-m-j'); ?>" pubdate><?php echo get_the_time(get_option('date_format')); ?></time>
					</p>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				</header> <!-- end article header -->

				<section class="entry-content clearfix">
					<?php the_content("Read More"); ?>
				</section> <!-- end article section -->

					<footer class="article-footer">

					</footer> <!-- end article footer -->

				</article> <!-- end article -->

			<?php endwhile; ?>

					<?php if (function_exists('bones_page_navi')) { ?>
							<?php bones_page_navi(); ?>
					<?php } else { ?>
							<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
							</nav>
					<?php } ?>

				<?php else : ?>

						<article id="post-not-found" class="hentry clearfix">
							<header class="article-header">
								<h1><?php _e("Sorry, No Results.", "bonestheme"); ?></h1>
							</header>
							<section class="entry-content">
								<p><?php _e("Try your search again.", "bonestheme"); ?></p>
							</section>
							<footer class="article-footer">

							</footer>
						</article>

				<?php endif; ?>

			</div> <!-- end #main -->

			<?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
