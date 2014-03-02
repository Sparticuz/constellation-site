<?php //This is the Home Page! ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero homepage">
		<img src="http://beta.constellationco.com/wp-content/uploads/2014/03/homepage_bg.jpg" class="bleed"/>
		<figcaption class="why">Using the Historic<br>Craft of Letterpress<span class="together">to bring people together</span><img src="http://beta.constellationco.com/wp-content/uploads/2014/03/card.png" class="littleguy"></figcaption>
		
	</figure>

<div id="inner-content" class="wrap clearfix">

		<div id="main" class="twelve columns first clearfix" role="main">

		<section class="eight column manifesto">
		<p>Everything we do is inspired by conviction, craftsmanship, and community.</p>
		<p>We love to make beautiful things, but our inmost desire is to facilitate meaningful connections, to use the time-honored tradition of letterpress to bring people together.</p>
		<p>We celebrate tailor-made over generic, heritage over novelty, and process over expediency. Each of our products are printed on antique hand-fed and treadle-operated printing presses in our Seattle studio.</p>
		<a href="" class="button">Learn More</a>
		</section>
		<section class="three column sidebarbody">
		<span class="">
		<h3>Shop Our Line</h3>
		<p>Vestibulum a nibh quis dolor rutrum congue. Maecenas fermentum eget massa in iaculis.</p>
		<a href="">View Our Products</a>
		</span>
		<span class="">
		<h3>Work With Us</h3>
		<p>Vestibulum a nibh quis dolor rutrum congue. Maecenas fermentum eget massa in iaculis.</p>
		<a href="">Request an Estimate</a>
		</span>
		<span class="">
		<h3>Wholesale Inquiries</h3>
		<p>Vestibulum a nibh quis dolor rutrum congue. Maecenas fermentum eget massa in iaculis.</p>
		<a href="">Contact Us</a>
		</span>
		</section>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
