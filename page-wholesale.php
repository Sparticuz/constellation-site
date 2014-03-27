<?php //This is a normal page based on a page in wordpress ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero specialpage">
		<img src="http://beta.constellationco.com/wp-content/uploads/2014/03/studio_large1.jpg" class="bleed"/>
		<figcaption>Wholesale</figcaption>
	</figure>

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="twelve columns first clearfix" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					<?php the_content(); ?>
				</article> <!-- end article -->
				
			<?php endwhile; ?>

			<?php endif; ?>

		</div> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
