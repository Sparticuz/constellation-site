<?php /* This is the page that will show ALL showcase projects */ ?>
<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="twelve columns first clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

					<section class="entry-content">
						<?php the_excerpt('<span class="read-more">' . __('Read More &raquo;', 'bonestheme') . '</span>'); ?>

					</section> <!-- end article section -->

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
							<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
						</header>
						<section class="entry-content">
							<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
						</section>
						<footer class="article-footer">
								<p><?php _e("This is the error message in the taxonomy-custom_cat.php template.", "bonestheme"); ?></p>
						</footer>
					</article>

				<?php endif; ?>

			</div> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
