<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
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
mMMody:`    :dMs-    -NNmmNN/smMs     `-_-`    dMM
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

            Letterpress by Sara McNally
  Site Design and Development by Brad & Kyle McNally
    Photography by Dorothy Huynh & Jenny Linquist
              Copy by Cali Pitchel
-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(''); ?></title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<![endif]-->
<meta name="msapplication-TileColor" content="#f01d4f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
<meta name="theme-color" content="#db5945">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
<script type="text/javascript" data-pin-color="white" data-pin-height="28" data-pin-hover="true">
	//async all the things
	//Typekit
	(function(d) {var config = {kitId: 'psw0mrb',scriptTimeout: 3000},
	h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},
	config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;
	h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;
	tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;
	f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)})(document);
	//Analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-15087480-1', 'constellationco.com');
	ga('send', 'pageview');
</script>
<script type="text/javascript" async data-pin-color="white" data-pin-height="28" data-pin-hover="true" src="<?php echo get_site_url(); ?>/wp-content/themes/constellation-site/library/js/libs/pinterest/pinit.js"></script>
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<header class="header wrap clearfix" role="banner">
			<a href="<?php echo home_url(); ?>" rel="nofollow" id="logo"></a>
			<nav role="navigation" id="navigation">
				<?php bones_main_nav(); ?>
				<a href="#" id="navtoggle"><div id="hamburger">&#x2261;</div></a>
			</nav>
		</header>