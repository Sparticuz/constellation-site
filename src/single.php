<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="nine columns first clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

				<header class="article-header">
					<p class="blogdate">
						<time class="updated" datetime="<?php echo get_the_time('Y-m-j'); ?>" pubdate><?php echo get_the_time(get_option('date_format')); ?></time>
					</p>
					<h2><?php the_title(); ?></h2>
				</header> <!-- end article header -->

				<section class="entry-content blog-content row clearfix">
					<?php the_content(); ?>
				</section> <!-- end article section -->

				<footer class="nine columns comments-container" style="float:right">
					<?php comments_template(); ?>
				</footer>

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
						<p>This is the error message in the index template.</p>
					</footer>
				</article>

			<?php endif; ?>

		</div> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
