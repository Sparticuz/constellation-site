<?php //This is a normal page based on a page in wordpress ?>
<?php get_header(); ?>

<div id="content">
	<figure class="hero specialpage">
		<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/03/studio_large1.jpg" class="bleed" data-pin-no-hover="true"/>
		<figcaption class="oneline">Wholesale</figcaption>
	</figure>

	<div id="lookbook">
		<div class="wrap">
			<section class="twelve columns row">
				<section class="eight columns contact terms">
					<h3>Wholesale Catalog / Lookbook</h3>
					<p>We value the small business community, and we love to work with entrepreneurs and retailers. It's an honor to see our products in each of and every one of your beautifully curated stores. Not a stockist yet? Let’s talk more about creating a meaningful partnership. E-mail <a href="mailto:wholesale@constellationco.com">wholesale@constellationco.com</a> for access to our wholesale policies and a copy of our linesheet.</p>
					<a href="mailto:wholesale@constellationco.com?subject=I'd love a catalog&body=Store URL:%0D%0A Store Mailing Address:" class="contact button">Request a Catalog</a>
					<a href="http://issuu.com/constellationco/docs/constellation___co._lookbook_2014_i_f8b0f85ac28303/1" class="contact button">View Online</a>
				</section>

				<section class="four columns terms">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/03/lookbook.png" data-pin-no-hover="true"/>
				</section>
			</section>
		</div>
	</div>

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
