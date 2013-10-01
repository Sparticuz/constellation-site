<?php /* This is the page that will show ALL products */ ?>
<?php get_header(); ?>

<div id="content">

	<?php //Hero Image ?>
	<figure>
		<img src="http://placehold.it/960x250" class="bleed"/>
		<?php //Add in text that floats on top ?>
	</figure>

	<div id="inner-content" class="wrap clearfix">

		<section class="two columns first">
			<nav id="categories">
				<ul>
				<?php $args = array(
					'orderby'            => 'ID',
					'hide_empty'         => 0, //this
					'use_desc_for_title' => 0, //this
					'title_li'           => '', //this
					'current_category'   => 1, //this
					'taxonomy'           => 'product_category' //this
				); 
				
				wp_list_categories($args); ?>
				</ul>
			</nav>
			<br/>
			<a href="https://www.etsy.com/shop/constellationco" class="etsy button">Shop on <span>Etsy</span></a>
			<a href="">Intereseted in Wholesale?</a>
			<hr/>
			<a href="">Find a Store</a>

		</section>

		<div id="main" class="ten columns last" role="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix row'); ?> role="article">

				<figure class="six columns">
					<img src="http://placehold.it/350x350" class="bleed"/>
					<img src="http://placehold.it/115x115" />
					<img src="http://placehold.it/115x115" />
					<img src="http://placehold.it/115x115" />
				</figure>

				<section class="six columns">
					<header class="product-header">
						<h2 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
					</header>

					<section class="product-content">
						<?php the_field('description'); ?>

						<h3>SPECS</h3>
						<?php the_field('specification_description'); ?>
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

		</div> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
