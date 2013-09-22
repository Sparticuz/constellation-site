			<footer class="footer clearfix" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
					<?php get_sidebar(); ?>
				</div> <!-- end #inner-footer -->

				<div id="handmade-footer"><span>Handmade in the Pacific Northwest</span></div>

			</footer> <!-- end footer -->

		</div> <!-- end #container -->
		<div class="bleed">Page Template: <?php global $template; echo basename($template); ?></div>
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
