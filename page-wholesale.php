<?php //This is a normal page based on a page in wordpress ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero specialpage">
		<img src="http://beta.constellationco.com/wp-content/uploads/2014/03/studio_large1.jpg" class="bleed"/>
		<figcaption class="oneline">Wholesale</figcaption>
	</figure>
<div id="lookbook">
<div class="wrap">
	<section class="twelve columns row">
<section class="eight columns contact terms">
<h3>Wholesale Catalog / Lookbook</h3>
<p>All of our products are letterpress printed by hand on our Chandler & Price platen press or our gorgeous 20th Century Reliance iron handpress. Due to the handmade nature of this printing process, slight variations in ink coverage are to be expected and are part of why we all love letterpress!</p>

<a href="mailto:wholesale@constellationco.com?subject=I'd love a catalog&body=Store URL:%0D%0A Store Mailing Address:" class="contact button">Request a Catalog</a><a href="http://issuu.com/constellationco/docs/constellation___co._lookbook_2014_i" class="contact button">View Online</a>
</section>

<section class="four columns terms">
<img src="http://beta.constellationco.com/wp-content/uploads/2014/03/lookbook.png" />
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
