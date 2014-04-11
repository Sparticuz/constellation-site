<?php //This is the Home Page! ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero homepage ceiling">
		<video autoplay loop poster="<?php echo get_site_url(); ?>/wp-content/uploads/2014/03/homepage_bg.jpg" id="bgvid">
			<source src="http://beta.constellationco.com/wp-content/themes/constellation-site/library/Constellation+&+Co.-HD.mp4" type="video/mp4">
		</video>
		<figcaption class="why">Using the Historic<br/>Craft of Letterpress<span class="together">to bring people together</span><img class="inheritWidth" src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/03/card.png" class="littleguy"></figcaption>
	</figure>

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="twelve columns first clearfix" role="main">

			<section class="nine column manifesto">
				<p>Everything we do is inspired by conviction, craftsmanship, and community.</p>
				<p>We love to make beautiful things, but our inmost desire is to facilitate meaningful connections, to use the time-honored tradition of letterpress to bring people together.</p>
				<p>We celebrate tailor-made over generic, heritage over novelty, and process over expediency. Each of our products are printed on antique hand-fed and treadle-operated printing presses in our Seattle studio.</p>
				<a href="<?php echo get_site_url(); ?>/about/" class="button learnmore">Learn More</a>
			</section>

			<section class="three column sidebarbody">
				<h3>Shop Our Line</h3>
				<p>We like to think of our products as no matter what, no matter when products. These sentiments transcend occasions and are anytime messages. They won’t go out of season or out of style.</p>
				<a href="<?php echo get_site_url(); ?>/product/category/featured/">View Our Products</a>
				<h3>Work With Us</h3>
				<p>We’d prefer to meet you for a coffee in downtown Seattle, but that’s not always possible. Fill out our estimate request form so we can start a conversation about your project.</p>
				<a href="<?php echo get_site_url(); ?>/contact/#estimaterequest">Request an Estimate</a>
				<h3>Wholesale Inquiries</h3>
				<p>We value the small business community, and we love to work with entrepreneurs and retailers. Let’s talk more about creating a meaningful partnership.</p>
				<a href="mailto:wholesale@constellationco.com?body=Store URL:">Contact Us</a>
			</section>

		</div> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
