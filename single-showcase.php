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

			<div id="main" class="eightcol first clearfix" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

					<header class="article-header">

						<img id="hero-img" class="bleed" src="<?php the_field('hero_image'); ?>" alt="<?php the_title(); ?>"/>

						<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>
						
					</header> <!-- end article header -->

					<section class="entry-content clearfix">

						<?php while(has_sub_field("content")): ?>
							
							<?php if (get_row_layout() == "left_img_desc" ): //Photo + Description ?>
								<img src="<?php the_sub_field("photo"); ?>" />
								<div>
									<?php the_sub_field("description"); ?>
								</div>
							<?php elseif(get_row_layout() == "double_img_desc"): //2 Photos + Description ?>
								<img src="<?php the_sub_field("photo_one"); ?>" />
								<img src="<?php the_sub_field("photo_two"); ?>" />
								<div>
									<?php the_sub_field("description"); ?>
								</div>
							<?php elseif(get_row_layout() == "left_img_double_right"): //1 Large + 2 Small Photos ?>
								<img src="<?php the_sub_field("photo_one"); ?>" />
								<img src="<?php the_sub_field("photo_two"); ?>" />
								<img src="<?php the_sub_field("photo_three"); ?>" />
							<?php elseif(get_row_layout() == "triple_threat"): ?>
								<img src="<?php the_sub_field("photo_one"); ?>" />
								<img src="<?php the_sub_field("photo_two"); ?>" />
								<img src="<?php the_sub_field("photo_three"); ?>" />
							<?php elseif(get_row_layout() == "small_img"): ?>
								<img src="<?php the_sub_field("photo"); ?>" />
							<?php elseif(get_row_layout() == "large_img"): ?>
								<img src="<?php the_sub_field("photo"); ?>" />
							<?php elseif(get_row_layout() == "quote"): ?>
								<blockquote>
									<?php the_sub_field("quote"); ?>
								</blockquote>
							<?php elseif(get_row_layout() == "double_img"): ?>
								<img src="<?php the_sub_field("photo_one"); ?>" />
								<img src="<?php the_sub_field("photo_two"); ?>" />
							<?php elseif(get_row_layout() == "tall_img_double_wide"): ?>
								<img src="<?php the_sub_field("photo_one"); ?>" />
								<img src="<?php the_sub_field("photo_two"); ?>" />
								<img src="<?php the_sub_field("photo_three"); ?>" />
							<?php elseif(get_row_layout() == "dual_tall_img"): ?>
								<img src="<?php the_sub_field("photo_one"); ?>" />
								<img src="<?php the_sub_field("photo_two"); ?>" />
							<?php endif; ?>
						 
						<?php endwhile; ?>

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

			</div> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
