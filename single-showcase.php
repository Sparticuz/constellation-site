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

	<div id="inner-content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

			<header class="article-header">

				<img id="hero-img" class="bleed" src="<?php the_field('hero_image'); ?>" alt="<?php the_title(); ?>"/>

				<div class="wrap"><h1 class="single-title custom-post-type-title first twelve columns"><?php the_title(); ?></h1></div>
				
			</header> <!-- end article header -->

			<section class="entry-content clearfix wrap">

				<?php while(has_sub_field("content")): ?>
					
					<?php if (get_row_layout() == "left_img_desc" ): //Photo + Description ?>
						<section class="left_img_desc clearfix row">
							<img src="<?php the_sub_field("photo"); ?>" class="eight columns first" />
							<div class="four columns last">
								<?php the_sub_field("description"); ?>
							</div>
						</section>
					<?php elseif(get_row_layout() == "double_img_desc"): //2 Photos + Description ?>
						<section class="double_img_desc clearfix row">
							<img src="<?php the_sub_field("photo_one"); ?>" class="four columns first" />
							<img src="<?php the_sub_field("photo_two"); ?>" class="four columns" />
							<div class="four columns last">
								<?php the_sub_field("description"); ?>
							</div>
						</section>
					<?php elseif(get_row_layout() == "left_img_double_right"): //1 Large + 2 Small Photos ?>
						<section class="left_img_double_right clearfix row">
							<img src="<?php the_sub_field("photo_one"); ?>" class="eight columns first"/>
							<div class="four columns last">
								<img src="<?php the_sub_field("photo_two"); ?>" />
								<img src="<?php the_sub_field("photo_three"); ?>" />
							</div>
						</section>
					<?php elseif(get_row_layout() == "triple_threat"): ?>
						<section class="triple_threat clearfix row">
							<img src="<?php the_sub_field("photo_one"); ?>" class="four columns first" />
							<img src="<?php the_sub_field("photo_two"); ?>" class="four columns" />
							<img src="<?php the_sub_field("photo_three"); ?>" class="four columns last" />
						</section>
					<?php elseif(get_row_layout() == "small_img"): ?>
						<section class="small_img clearfix row">
							<img src="<?php the_sub_field("photo"); ?>" class="eight columns first" />
						</section>
					<?php elseif(get_row_layout() == "large_img"): ?>
						<section class="large_img clearfix row">
							<img src="<?php the_sub_field("photo"); ?>" class="twelve columns first" />
						</section>
					<?php elseif(get_row_layout() == "quote"): ?>
						<section class="quote twelve columns clearfix first row">
							<blockquote>
								<?php the_sub_field("quote"); ?>
							</blockquote>
						</section>
					<?php elseif(get_row_layout() == "double_img"): ?>
						<section class="double_img clearfix row">
							<img src="<?php the_sub_field("photo_one"); ?>" class="six columns first" />
							<img src="<?php the_sub_field("photo_two"); ?>" class="six columns last" />
						</section>
					<?php elseif(get_row_layout() == "tall_img_double_wide"): ?>
						<section class="tall_img_double_wide clearfix row">
							<img src="<?php the_sub_field("photo_one"); ?>" class="six columns first" />
							<div class="six columns last">
								<img src="<?php the_sub_field("photo_two"); ?>" />
								<img src="<?php the_sub_field("photo_three"); ?>" />
							</div>
						</section>
					<?php elseif(get_row_layout() == "dual_tall_img"): ?>
						<section class="dual_tall_img clearfix row">
							<img src="<?php the_sub_field("photo_one"); ?>" class="six columns first"/>
							<img src="<?php the_sub_field("photo_two"); ?>" class="six columns last" />
						</section>
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

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
