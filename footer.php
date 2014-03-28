			<footer class="footer clearfix" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
					<?php //footer ?>
					<div class="two columns widget">
						<h3>Navigate</h3>
						<ul>
							<?php wp_nav_menu(array(
						    	'container' => false,                           // remove nav container
						    	'container_class' => 'footer-menu clearfix',           // class of container (should you choose to use it)
						    	'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
						    	'menu_class' => 'bottom-nav clearfix',         // adding custom nav class
						    	'theme_location' => 'main-nav',                 // where it's located in the theme
						    	'before' => '',                                 // before the menu
						        'after' => '',                                  // after the menu
						        'link_before' => '',                            // before each link
						        'link_after' => '',                             // after each link
						        'depth' => 0,                                   // limit the depth of the nav
						    	'fallback_cb' => 'bones_main_nav_fallback'      // fallback function
							)); ?>
						</ul>
					</div>
					<div class="three columns widget">
						<h3>Contact</h3>
						<ul>
							<li><a href="mailto:hello@constellationco.com">hello@constellationco.com</a></li>
							<li><a href="tel:2064149817">(206)414-9817</a></li>
						</ul>
					</div>
					<div class="two columns widget addy">
						<h3>Studio</h3>
						<a href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=110+cherry+street+seattle+wa+98104&amp;aq=&amp;sll=47.602631,-122.333898&amp;sspn=0.008377,0.01929&amp;vpsrc=0&amp;g=110+cherry+street+seattle+wa&amp;ie=UTF8&amp;hq=110+cherry+street+seattle+wa+98104&amp;hnear=&amp;radius=15000&amp;t=m&amp;cid=6147024036454479109&amp;z=12&amp;iwloc=A">
						<address>
							<div class="adr">
								<div class="street-address">110 Cherry St. #204</div>
								<span class="locality">Seattle</span>, <abbr class="region" title="Washington">WA</abbr>  
								<span class="postal-code">98104</span>
								<div class="country-name">USA</div>
							</div>
						</address>
						</a>
					</div>
					<div class="two columns widget">
						<h3>Follow Us</h3>
						<ul>
							<li><a href="https://facebook.com/constellationco">Facebook</a></li>
							<li><a href="https://twitter.com/constellationco">Twitter</a></li>
							<li><a href="http://pinterest.com/constellationco/">Pinterest</a></li>
							<li><a href="http://instagram.com/constellationco">Instagram</a></li>
							<li><a href="http://www.etsy.com/shop/constellationco">Etsy</a></li>
						</ul>
					</div>
					<div class="three columns widget copyright">
						<h3>Copyright</h3>
						<span>©2014 Constellation &amp; Co.<br/>All Rights Reserved.</span>
					</div>
				</div> <!-- end #inner-footer -->

				<div id="handmade-footer"><span>Handmade in the Pacific Northwest</span></div>

			</footer> <!-- end footer -->

		</div> <!-- end #container -->
		
		<div class="bleed">Page Template: <?php global $template; echo basename($template); ?></div>
		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
