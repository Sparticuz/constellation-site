<?php /* This is the page that will show ALL products IN a category */ ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero specialpage">
		<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2014/01/peruse_test.jpg" class="bleed" data-pin-no-hover="true"/>
		<figcaption>Peruse the<br />Merchandise</figcaption>
				<a href="mailto:wholesale@constellationco.com" id="reptag">Reps Wanted</a>
	</figure>

	<div id="inner-content" class="wrap clearfix container">
		<div class="row stickem-container">
			<div class="two columns first stickem sidebar">
				<nav id="categories">
					<ul>
						<?php $args = array(
							'orderby'            => 'ID',
							'hide_empty'         => 0, //this
							'use_desc_for_title' => 0, //this
							'title_li'           => 'Select A Category &#8595;', //this
							'taxonomy'           => 'product_category' //this
						); 		
						wp_list_categories($args); ?>
					</ul>
				</nav>
				<div class="sidebar-links">
					<a href="https://www.etsy.com/shop/constellationco" class="etsy button">Etsy Shop</a>
					<a href="mailto:wholesale@constellationco.com?body=Store URL:" class="sidebarlink wholesale-link">Wholesale Inquiries</a>
					<a href="<?php echo get_site_url(); ?>/stores/" class="map-icon sidebarlink">Find a store</a>
				</div>
			</div>
		
			<section id="main" class="ten columns last content" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix row product'); ?> role="article">

						<section class="eight columns">
							<?php $images = get_field('images');
							if( $images ): ?>
								<div class="flexslider">
									<ul class="slider_<?php the_ID(); ?> slides">
										<?php foreach($images as $image): ?>
											<li data-thumb="<?php echo $image['sizes']['thumbnail']; ?>">
												<img
													src="<?php echo $image['url']; ?>"
													alt="<?php echo $image['alt']; ?>"
													data-pin-description="<?php the_title_attribute() ?>"
													data-pin-url="<?php the_permalink(); ?>"
												/>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php endif ?>
						</section>

						<section class="four columns">
							<header class="product-header">
								<h2 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							</header>

							<section class="product-content">
								<?php the_field('description'); ?>
							</section>

							<footer class="product-footer">
								<?php $specs = get_field_object('specifications'); 
									if($specs): ?>
									<ul class="specs">
										<?php foreach( $specs['value'] as $spec ): ?>
											<li class="<?php echo $spec; ?>"><?php echo $specs['choices'][$spec]; ?></li>
										<?php endforeach; ?>
									</ul>
								<?php endif; ?>	
							</footer>
						</section>

					</article> <!-- end article -->
				<?php endwhile; ?>

				<?php bones_page_navi(); ?>
				
				<?php else : ?>

					<article id="post-not-found" class="hentry clearfix">
						<header class="article-header">
							<h1>There are no products in this category!</h1>
						</header>
						<section class="entry-content">
							<p>Check back later or search for other products below!</p>
						</section>
						<footer class="article-footer search">
							<p><?php get_search_form(); ?></p>
						</footer>
					</article>

				<?php endif; ?>

			</section> <!-- end #main -->
		</div>
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->

<script type="text/javascript">
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade",
    controlNav: "thumbnails",
    slideshow: false,
    directionNav: false
  });
  $('.container').stickem();
});
</script>

<?php get_footer(); ?>
