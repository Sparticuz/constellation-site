<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<!-- Google Chrome Frame for IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title(''); ?></title>

	<!-- mobile meta (hooray!) -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<!-- or, set /favicon.ico for IE10 win -->
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->
	
	<!-- Load the fonts -->
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- drop Google Analytics Here -->
	<script>(function(G,o,O,g,l){G.GoogleAnalyticsObject=O;G[O]||(G[O]=function(){(G[O].q=G[O].q||[]).push(arguments)});
		G[O].l=+new Date;g=o.createElement('script'),l=o.scripts[0];g.src='//www.google-analytics.com/analytics.js';
		l.parentNode.insertBefore(g,l)}(this,document,'ga'));ga('create','UA-XXXX-Y');ga('send','pageview')</script>
	<!-- end analytics -->

</head>

<body <?php body_class(); ?>>

	<div id="container">

		<header class="header" role="banner">

			<div id="inner-header" class="wrap clearfix">

				<!-- to use an image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
				<a href="<?php echo home_url(); ?>" rel="nofollow" id="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" class="aligncenter" alt="<?php bloginfo('name'); ?>"/>
				</a>

				<nav role="navigation">
					<?php bones_main_nav(); ?>
				</nav>

			</div> <!-- end #inner-header -->

		</header> <!-- end header -->