<?php
/*
This is the custom post type post template.
If you edit the post type name, you've got
to change the name of this template to
reflect that name change.

i.e. if your custom post type is called
register_post_type( 'bookmarks',
then your single template should be
single-bookmarks.php

*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="wrap clearfix">

			<div id="main" class="twelve columns first clearfix" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

					<header class="article-header">

						<img id="hero-img" class="bleed" src="http://placekitten.com/930/300" alt="<?php the_title(); ?>"/>

						<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

					</header> <!-- end article header -->

					<section class="entry-content clearfix">

						<div class="gallery">
							<?php $images = get_field('images');
							
							if( $images ): //large images for gallery ?>
								<div class="slider">
									<ul class="slides">
										<?php foreach( $images as $image ): ?>
											<li>
												<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
												<p><?php echo $image['caption']; ?></p>
											</li>
										<?php endforeach; ?>
									</ul>
								</div>
							<?php //The following code creates the thumbnail navigation ?>
							<div class="carousel">
								<ul class="slides">
									<?php foreach( $images as $image ): ?>
										<li>
											<img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
							<?php endif; ?>
						</div>

						<div class="side-info">

							<p class="description">
								<?php the_field('description'); ?>
							</p>
							<p class="spec-description">
								<?php the_field('specification_description'); ?>
							</p>
							<?php $specs = get_field_object('specifications'); 
								if($specs): ?>
								<ul class="specs">
									<?php foreach( $specs['value'] as $spec ): ?>
										<li class="<?php echo $spec; ?>"><?php echo $specs['choices'][$spec]; ?></li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>	
						<a href="<?php the_field('etsy_link'); ?>" class="etsy button">View on <span>Etsy</span></a>
						
						</div>
					</section> <!-- end article section -->

								<footer class="article-footer">

			</footer> <!-- end article footer -->

		</article> <!-- end article -->

		<?php endwhile; ?>

		<?php else : ?>

				<article id="post-not-found" class="hentry clearfix">
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

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>