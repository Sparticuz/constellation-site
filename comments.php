<?php
/*
The comments page for Bones
*/

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<div class="alert alert-help">
			<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments.", "bonestheme"); ?></p>
		</div>
	<?php
		return;
	}
?>


	<h3 id="comments" class="h2">Join the Conversation (<?php echo get_comments_number();?>)</h3>

	<?php if ( comments_open() ) : ?>

		<section id="respond" class="respond-form">

			<div id="cancel-comment-reply">
				<p class="small"><?php cancel_comment_reply_link(); ?></p>
			</div>

			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

				<?php if ( is_user_logged_in() ) : ?>

				<p class="comments-logged-in-as">Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e("Log out of this account", "bonestheme"); ?>" class="logout_button"><?php _e("Log out", "bonestheme"); ?></a></p>
				<p><textarea name="comment" id="comment" placeholder="Enter your comment here" tabindex="4"></textarea></p>

				<?php else : ?>

				<ul id="comment-form-elements" class="clearfix">

					<li>
						<label for="author">Name <?php if ($req) _e("(required)"); ?></label>
						<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="Enter your name" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
					</li>

					<li>
						<label for="email">Mail <?php if ($req) _e("(required)"); ?></label>
						<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="Enter your email address" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
					</li>

					<li>
						<textarea name="comment" id="comment" placeholder="Enter your comment here" tabindex="4"></textarea>
					</li>

				</ul>

				<?php endif; ?>

				<input name="submit" type="submit" id="submit" class="button" tabindex="5" value="Submit" />
				<?php comment_id_fields(); ?>

				<?php do_action('comment_form', $post->ID); ?>

			</form>

		</section>

	<?php endif; //end comment form?>

	<ol class="commentlist">
		<?php wp_list_comments('type=comment&callback=bones_comments'); ?>
	</ol>


