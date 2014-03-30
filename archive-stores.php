<?php /* This is the page that will show ALL products */ ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero specialpage">
		<img src="http://beta.constellationco.com/wp-content/uploads/2014/03/stores_bg.jpg" class="bleed"/>
		<figcaption class="oneline">Find a Store</figcaption>
	</figure>

	<div id="inner-content" class="wrap clearfix container">

		<section id="main" class="twelve columns last content" role="main">

			<?php 
				//setup posts to sort alphabetically by the location
				$posts = get_posts(array(
					'posts_per_page'=>	-1,
					'post_type'		=>	'store',
					'meta_key'		=>	'location',
					'orderby'		=>	'meta_value',
					'order'			=>	'ASC'
				));
				//setup variables for location grouping
				$last_location = "";
				$current_location = "";
				$loop_num = 1;
			?>

			<?php if ($posts) : foreach ($posts as $post) : setup_postdata($post);
				//setup current_location
				$current_location = get_field('location');
				//setup last_location if it's the first run
				if($loop_num == 1){
					$last_location = $current_location; 
				} //end of 1st loop

				if(strcmp($last_location,$current_location) || $loop_num == 1){
					//runs if they are NOT the same || it's the first loop
					//also, (below), if the loop is > than 1, end the previous location
					if($loop_num > 1){ ?> </section> <?php	} ?>
					<section class="location row <?php echo $current_location; ?>">
						<article class="three columns"><h3><?php echo $current_location; ?></h3></article>
				<?php $last_location = $current_location;
				} //below is the actual store post ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix store three columns'); ?> role="article">
					<header class="store-name">
						<h3><?php the_title(); ?></h3>
					</header>

					<section class="store-location">
						<?php the_field('store_info'); ?>
					</section>
				</article> <!-- end store -->

				<?php $loop_num++; ?>

			<?php endforeach; ?>

			<?php endif; ?>

		</section> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>
