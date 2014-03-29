<?php
/*
Author: Eddie Machado
URL: htp://themble.com/bones/

This is where you can drop your custom functions or
just edit things like thumbnail sizes, header images,
sidebars, comments, ect.
*/

/************* INCLUDE NEEDED FILES ***************/

/*
1. library/bones.php
	- head cleanup (remove rsd, uri links, junk css, ect)
	- enqueueing scripts & styles
	- theme support functions
	- custom menu output & fallbacks
	- related post function
	- page-navi function
	- removing <p> from around images
	- customizing the post excerpt
	- custom google+ integration
	- adding custom fields to user profiles
*/
require_once('library/bones.php'); // if you remove this, bones will break
/*
2. library/product-post-type.php
	- This adds the Product Post type
*/
require_once('library/product-post-type.php');
/*
3. library/showcase-post-type.php
	- This adds the Showcase Post type
*/
require_once('library/showcase-post-type.php');

require_once('library/store-post-type.php');

/************* THUMBNAIL SIZE OPTIONS *************/

// Thumbnail sizes
add_image_size( 'bones-thumb-600', 600, 150, true );
add_image_size( 'bones-thumb-300', 300, 100, true );
/*
to add more sizes, simply copy a line from above
and change the dimensions & name. As long as you
upload a "featured image" as large as the biggest
set width or height, all the other sizes will be
auto-cropped.

To call a different size, simply change the text
inside the thumbnail function.

For example, to call the 300 x 300 sized image,
we would use the function:
<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
for the 600 x 100 image:
<?php the_post_thumbnail( 'bones-thumb-600' ); ?>

You can change the names and dimensions to whatever
you like. Enjoy!
*/

/************* ACTIVE SIDEBARS ********************/

// Sidebars & Widgetizes Areas
function bones_register_sidebars() {
	register_sidebar(array(
		'id' => 'sidebar1',
		'name' => __('Sidebar 1', 'bonestheme'),
		'description' => __('The first (primary) sidebar.', 'bonestheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	
} // don't remove this bracket!

/************* COMMENT LAYOUT *********************/

// Comment Layout
function bones_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>" class="clearfix">
			<header class="comment-author vcard">
				<cite class="fn"><?php comment_author(); ?></cite>
				<time datetime="<?php echo comment_time('Y-m-j'); ?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php comment_time('F jS, Y'); ?> </a></time>
				<?php edit_comment_link('Edit') ?>
			</header>
			<?php if ($comment->comment_approved == '0') : ?>
				<div class="alert alert-info">
					<p>Your comment is awaiting moderation.</p>
				</div>
			<?php endif; ?>
			<section class="comment_content clearfix">
				<span>
				<?php echo get_comment_text(); ?>
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</span>
			</section>
			
		</article>
	<!-- </li> is added by WordPress automatically -->
<?php
} // don't remove this bracket!

/************* SEARCH FORM LAYOUT *****************/

// Search Form
function bones_wpsearch($form) {
	$form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="'.esc_attr__('Search Our Blog','bonestheme').'" />
	<input type="submit" id="searchsubmit" class="search-icon" value="'. esc_attr__('') .'" />
	</form>';
	return $form;
} // don't remove this bracket!

//Insert content after second paragraph of single post content.
add_filter( 'the_content', 'prefix_insert_post_ads' );
function prefix_insert_post_ads( $content ) {
	if ( is_single() && ! is_admin() ) {
		$code = '<div class="the_rest row">';
		$code.= '<aside class="blog-metadata three columns">';
		$code.= '<span class="author">by '.bones_get_the_author_posts_link().'</span>';

		//comments
		$num_comments = get_comments_number();
		if( $num_comments == 0)
			$comments = "No comments";
		else if ( $num_comments == 1)
			$comments = "1 comment";
		else
			$comments = $num_comments." comments";

		$code.= '<span class="num-comments">'.$comments.'</span>';

		//categories
		$the_categories = get_the_category();
		$categories = "";
		if($the_categories){
			foreach($the_categories as $the_category){
				$categories .= '<a href="'.get_category_link($the_category->term_id).'" title="'.esc_attr($the_category->name).'" class="category_link_title">'.$the_category->cat_name.'</a>';
			}
		}
		$code.= '<span class="category_title">Filed Under</span>';
		$code.= $categories;

		//the sharing code
		$code.= '<span class="share_title">Share</span>';

		$code.= '</aside>';
		$code.= '<div class="rest_of_post nine columns">';

		return prefix_insert_after_paragraph( $code, 2, $content );
	}
	return $content;
}
 
// Parent Function that makes the magic happen
function prefix_insert_after_paragraph( $insertion, $paragraph_id, $content ) {
	$closing_p = '</p>';
	$paragraphs = explode( $closing_p, $content );
	foreach ($paragraphs as $index => $paragraph) {
		if ( trim( $paragraph ) ) {
			$paragraphs[$index] .= $closing_p;
		}
		if ( $paragraph_id == $index + 1 ) {
			$paragraphs[$index] .= $insertion;
		}
	}
	return implode( '', $paragraphs );
}

?>
