<!DOCTYPE html>
<!--
               `-+shdmNMMMMNNdhs+:`               
           `:smMMMNdyso++++osydMMMMmy/`           
         :yNMMdo:`             .yMshNMMh/`        
       /mMMMd-                   N:  :yMMNo`      
     :mMMdo++ymdo.               Ns    `oNMN+     
    sMMd-      -hMo             oM:      `yMMd.   
  `dMMo          hM-        .:+dm/         :NMN-  
 `dMM/           yM-    :ymMmho:            .NMN. 
 yMM+           -Mm    hMd:                  -MMm 
-MMd            sMo   sMd   `-:/:.            hMM+
sMM:            +Mm`  dMd-omMMmmNMm+`        .NMMm
mMM`     ``      oMNs/hMddMMo`   .sNN+`   `:sNhNMM
NMN  -sdmddNh+`   .sdMMy``hMMds-   `+dMmmmMmo. hMM
mMMody:`    :dMs-    -NNmmNN/smMs     `---`    dMM
yMMM-         :hMNddNMNy:yMN   hMs            `MMm
-MMN            `-//:.   sMd   :Md            oMM+
 yMM+                  -sMm.   yM/           -MMm 
 `dMM/            -+ydNNh+`   `Md           .NMN- 
  `dMM+         :mmo:-`       `Nh          :NMN-  
   `yMMh.      .My             /My.      `sMMd.   
     :mMMs.    +M.              .oddo/:/yNMN+     
       +mMMh/` -M.                 `-hMMMNs`      
         :hMMMhoMh.              -+yNMMd+`        
           `/ymMMMMdyo++//++oshmMMMNh+.           
               `:+shmNMMMMMMNmdyo/.               

        Conviction, Craftsmanship, & Community
-->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

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

	<!-- drop Google Analytics Here (Uncomment when ready)-->
	<script>(//function(G,o,O,g,l){G.GoogleAnalyticsObject=O;G[O]||(G[O]=function(){(G[O].q=G[O].q||[]).push(arguments)});
		//G[O].l=+new Date;g=o.createElement('script'),l=o.scripts[0];g.src='//www.google-analytics.com/analytics.js';
		//l.parentNode.insertBefore(g,l)}(this,document,'ga'));ga('create','UA-XXXX-Y');ga('send','pageview')</script>
	<!-- end analytics -->

</head>

<body <?php body_class(); ?>>

	<div id="container">

		<header class="header wrap clearfix" role="banner">

			<a href="<?php echo home_url(); ?>" rel="nofollow" id="logo"></a>

			<nav role="navigation" id="navigation">
				<a href="#" id="navtoggle"><div id="hamburger">&#9776;</div></a>
				<?php bones_main_nav(); ?>
			</nav>

		</header> <!-- end header -->