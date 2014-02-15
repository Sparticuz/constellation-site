<?php /* This is the page that will show ALL products */ ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero">
		<img src="http://beta.constellationco.com/wp-content/uploads/2014/01/peruse_test.jpg" class="bleed"/>
		<figcaption>Peruse the<br />Merchandise</figcaption>
	</figure>

	<div id="inner-content" class="wrap clearfix">

		<div class="two columns first stickem-container">
			<section class="stickem">
				<nav id="categories">
					<ul>
						<?php $args = array(
							'orderby'            => 'ID',
							'hide_empty'         => 0, //this
							'use_desc_for_title' => 0, //this
							'title_li'           => '', //this
							'taxonomy'           => 'product_category' //this
						); 		
						wp_list_categories($args); ?>
					</ul>
				</nav>
				<a href="https://www.etsy.com/shop/constellationco" class="etsy button">Shop on <span>Etsy</span></a>
				<span id="stores">
					<a href="http://beta.constellationco.com/wholesale/" class="wholesale">Wholesale Inquiries</a>
					<a href="#" class="map-icon">Find a store</a>
				</span>
			</section>
		</div>

		<section id="main" class="ten columns last" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix row product'); ?> role="article">

					<section class="seven columns">
						<?php $images = get_field('images');
						if( $images ): ?>
							<div class="flexslider">
								<ul class="slider_<?php the_ID(); ?> slides">
									<?php foreach($images as $image): ?>
										<li data-thumb="<?php echo $image['sizes']['thumbnail']; ?>">
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif ?>
					</section>

					<section class="five columns">
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

				<?php if (function_exists('bones_page_navi')) { ?>
						<?php bones_page_navi(); ?>
				<?php } else { ?>
						<nav class="wp-prev-next">
								<ul class="clearfix">
									<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
									<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
								</ul>
						</nav>
				<?php } ?>

			<?php else : ?>

				<article id="post-not-found" class="hentry clearfix">
					<header class="article-header">
						<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
					</header>
					<section class="entry-content">
						<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
					</section>
					<footer class="article-footer">
							<p><?php _e("This is the error message in the taxonomy-custom_cat.php template.", "bonestheme"); ?></p>
					</footer>
				</article>

			<?php endif; ?>

		</section> <!-- end #main -->

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
  $('.content').stickem();
});
</script>

<?php get_footer(); ?>
