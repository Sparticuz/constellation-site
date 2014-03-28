<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="twelve columns first clearfix" role="main">

			<?php if (is_category()) { ?>
				<h1 class="archive-title h2">
					<span>Posts Categorized:</span> <?php single_cat_title(); ?>
				</h1>

			<?php } elseif (is_tag()) { ?>
				<h1 class="archive-title h2">
					<span>Posts Tagged:</span> <?php single_tag_title(); ?>
				</h1>

			<?php } elseif (is_author()) {
				global $post;
				$author_id = $post->post_author; ?>
				<h1 class="archive-title h2">
					<span>Posts By:</span> <?php the_author_meta('display_name', $author_id); ?>
				</h1>
			<?php } elseif (is_day()) { ?>
				<h1 class="archive-title h2">
					<span>Daily Archives:</span> <?php the_time('l, F j, Y'); ?>
				</h1>
			<?php } elseif (is_month()) { ?>
				<h1 class="archive-title h2">
					<span>Monthly Archives:</span> <?php the_time('F Y'); ?>
				</h1>
			<?php } elseif (is_year()) { ?>
				<h1 class="archive-title h2">
					<span>Yearly Archives:</span> <?php the_time('Y'); ?>
				</h1>
			<?php } ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

				<header class="article-header">
					<h3 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<p class="byline vcard"><?php
							printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link(), get_the_category_list(', '));
						?></p>
				</header> <!-- end article header -->

				<section class="entry-content clearfix">
					<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
					<?php the_excerpt(); ?>
				</section> <!-- end article section -->

			</article> <!-- end article -->

			<?php endwhile; ?>

			<?php else : ?>

			<article id="post-not-found" class="hentry clearfix">
				<header class="article-header">
					<h1>Oops, Post Not Found!</h1>
				</header>
				<section class="entry-content">
					<p>Uh Oh. Something is missing. Try double checking things.</p>
				</section>
				<footer class="article-footer">
					<p>This is the error message in the archive template.</p>
				</footer>
			</article>

			<?php endif; ?>

		</div>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
