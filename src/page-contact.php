<?php //This is the Home Page! ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero ceiling specialpage">
		<img src="<?php echo get_template_directory_uri(); ?>/library/images/contact_bg.jpg" class="bleed" data-pin-no-hover="true"/>
		<figcaption>Let's Work Together</figcaption>
	</figure>

	<div id="inner-content" class="wrap clearfix">

		<div id="main" class="twelve columns first clearfix" role="main">
			
			<article class="six columns contact general">
				<h3>General Inquiries</h3>
				<span class="contactinfo"><a href="mailto:hello@constellationco.com">hello@constellationco.com</a></span>
				<span class="contactinfo"><a href="tel:2064149817">206 414 9817</a></span>
			</article>

			<article class="five columns contact">
				<h3>Visit Us</h3>
				<a href="https://www.google.com/maps/place/Constellation+%26+Co./@47.655638,-122.380877,17z/data=!3m1!4b1!4m2!3m1!1s0x54906aaffd9993c3:0x554e9dcaf6a83505">
					<span class="contactinfo">1900 West Nickerson St. Suite 101</span>
					<span class="contactinfo">Seattle, WA 98119</span>
				</a>
			</article>

			<article class="twelve columns contact wholesaleinquiries">
				<h3>Wholesale Inquiries</h3>
				<span class="contactinfo"><a href="mailto:wholesale@constellationco.com?body=Store URL:">wholesale@constellationco.com</a></span>
			</article>

			<article class="twelve columns contact">
				<h3>Follow Us</h3>
				<a href="https://www.facebook.com/constellationco" class="facebook button">Facebook</a>
				<a href="https://twitter.com/constellationco" class="twitter button">Twitter</a>
				<a href="http://www.pinterest.com/constellationco/" class="pinterest button">Pinterest</a>
				<a href="http://www.etsy.com/shop/constellationco" class="etsy button">Etsy</a>
				<a href="http://instagram.com/constellationco" class="instagram button">Instagram</a>
			</article>
		</div> <!-- end #main -->
	</div> <!-- end #inner-content -->
	
	<span class="bigquote" id="estimaterequest"><p>We want to hear about your project. Fill out this estimate request form and we'll get back to you.</p></span>

	<div class="wrap clearfix">
		<div id="main" class="twelve columns first clearfix" role="main">
			<section class="three column sidebarbody notice">
				<h3>Notice</h3>
				<p>Getting married? Starting a business? Want to collaborate on a product? We’d love to chat. If you're a designer looking to have a project printed, we recommend searching for a printer on <a href="http://letterpresscommons.com/printtrip/">Letterpress Commons.</a></p>
			</section>
			
			<section class="eight columns">
				
				<form id="form" method="get" action="<?php echo get_template_directory_uri(); ?>/process.php" enctype="multipart/form-data">
					<ul>
						<fieldset>
							<li class="six"><label for="name">Name*</label><input type="text" name="name" required/></li>
							<li class="six"><label for="email">Email*</label><input type="email" name="email"/></li>
						</fieldset>
						<fieldset>
							<li class="checkboxing">
								<span>Is your project design, letterpress, or both?</span>
								<input type="checkbox" name="design"/><label for="design">Design</label>
								<input type="checkbox" name="letterpress"/><label for="letterpress">Letterpress</label>
							</li>
							<li class="twelve"><label for="piece">What type of project is it?</label>
								<textarea name="type" placeholder="Logo Design, Business Card, Wedding, Etc."></textarea>
							</li>
							<li style="clear:both;"><label for="date">When do you need it?</label><input type="date" id="datepicker" name="date"/></li>
						</fieldset>
						<fieldset class="specs">
							<li>
								<label for="number_of_pieces">How many pieces?<span>Save the Date, Invitation &amp; RSVP Card are 3 pieces.</span></label>
								<select name="number_of_pieces">
									<option value="0">&mdash;</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</li>
							<li><label for="quantity">Quantity:<span>How many do you need?</span></label><input type="text" size="40" name="quantity"/></li> 
						</fieldset>
						<fieldset> 
							<li class="newsletter checkboxing">
								<input type="checkbox" name="newsletter"/><label for="newsletter">Sign up to be notified about news, events, and specials!</label>
							</li>  
						</fieldset>
						<li>
							<input type="submit" name="submit" value="SUBMIT ESTIMATE" class="button" />
							<input type="hidden" name="submitted" value="TRUE" />
						</li>
					</ul>
				</form>
			</section>
		</div> <!-- end #main -->
	</div>
</div> <!-- end #content -->

<script type="text/javascript" charset="utf-8">
	jQuery(document).ready(function($) {
		$('input[name="letterpress"]').click(function(){
				$('fieldset.specs').toggle();
		});
	});
</script>

<?php get_footer(); ?>