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

				<?php bones_page_navi(); ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry clearfix">
					<header class="article-header">
						<h1>Oops, Post Not Found!</h1>
					</header>
					<section class="entry-content">
						<p>Uh Oh. Something is missing. Try double checking things.</p>
					</section>
					<footer class="article-footer">
						<p>This is the error message in the archive-showcase template.</p>
					</footer>
				</article>

			<?php endif; ?>

		</div> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
