<?php //This is the Home Page! ?>
<?php get_header(); ?>

<div id="content">

	<figure class="hero ceiling specialpage">
		<img src="http://beta.constellationco.com/wp-content/uploads/2014/03/contact_bg.jpg" class="bleed"/>
		<figcaption>Let's Work<br />Together</figcaption>
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
				<a href="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=110+cherry+street+seattle+wa+98104&amp;aq=&amp;sll=47.602631,-122.333898&amp;sspn=0.008377,0.01929&amp;vpsrc=0&amp;g=110+cherry+street+seattle+wa&amp;ie=UTF8&amp;hq=110+cherry+street+seattle+wa+98104&amp;hnear=&amp;radius=15000&amp;t=m&amp;cid=6147024036454479109&amp;z=12&amp;iwloc=A">
					<span class="contactinfo">110 Cherry Street #204</span>
					<span class="contactinfo">Seattle, WA 98104</span>
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
					<div id="inner-content" class="wrap clearfix">

		<div id="main" class="twelve columns first clearfix" role="main">
		<section class="three column sidebarbody notice">
				<h3>Notice</h3>
				<p>Getting married? Starting a business? Want to collaborate on a product? We’d love to chat. If you're a designer looking to have a project printed, we recommend searching for a printer on <a href="http://letterpresscommons.com/printtrip/">Letterpress Commons.</a></p>
			</section>
			<section class="eight columns">
				<form id="form" method="get" action="http://www.constellationco.com/wp-content/themes/constellation/process.php" enctype="multipart/form-data">
					<ul>
						<fieldset>
							<li class="six"><label>Name*</label><input type="text" name="name" required/></li>
							<li class="six"><label>Email</label><input type="email" name="email"/></li>
						</fieldset>
						<fieldset>
							<li>
								<label>Is your project design, letterpress, or both?<br /></label>
								<input type="checkbox" name="design"/> Design<br />
								<input type="checkbox" name="specs"/> Letterpress<br />
							</li>
							<li class="twelve"><label>What type of project is it?</label>
								<textarea name="piece" placeholder="Logo Design, Business Card, Wedding, Etc."></textarea>
							</li>
							<li style="clear:both;"><label>When do you need it?</label><input type="date" id="datepicker"/></li>
						</fieldset>
						<fieldset class="specs">
							<li>
								<label>How many pieces?<span>Save the Date, Invitation &amp; RSVP Card are 3 pieces.</span></label>
								<select name="number_of_pieces">
									<option value="0">&mdash;</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</li>
							<li><label>Quantity:<span>How many do you need?</span></label><input type="text" size="40" name="quantity"/></li> 
						</fieldset>
						<fieldset> 
							<li class="newsletter">
								<input type="checkbox" name="design"/> Sign up to be notified about news, events, and specials!
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
						</div> <!-- end #inner-content -->


<script type="text/javascript" charset="utf-8">
	jQuery(document).ready(function($) {
		$('input[name="specs"]').click(function(){
				$('fieldset.specs').toggle();
		});
	});
</script>

</div> <!-- end #content -->

<?php get_footer(); ?>