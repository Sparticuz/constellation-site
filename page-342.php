<?php //This is the Home Page! ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero" style="height:100%;">
		<img src="http://beta.constellationco.com/wp-content/uploads/2013/10/wholesale_test.jpg" class="bleed"/>
		<figcaption>our new<br />wholesale line<br /> is coming soon</figcaption>
	</figure>

	<div id="inner-content" class="clearfix">

		<div id="main" class="twelve columns first clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				<section class="entry-content clearfix wrap" itemprop="articleBody">
					We are currently using Etsy Wholesale Beta. Please contact us if you are interested.
				</section> <!-- end article section -->

				<footer class="article-footer wrap">
					<p class="byline vcard"><?php
						printf(__('Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'bonestheme'), get_the_time('Y-m-j'), get_the_time(__('F jS, Y', 'bonestheme')), bones_get_the_author_posts_link());
					?></p>
					<?php the_tags('<span class="tags">' . __('Tags:', 'bonestheme') . '</span> ', ', ', ''); ?>
				</footer> <!-- end article footer -->

			</article> <!-- end article -->

			<?php endwhile; ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry clearfix wrap">
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
