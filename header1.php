<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml" xmlns:og="http://ogp.me/ns#">

<head>

	<meta charset="<?php bloginfo( 'charset' ); // lets you change the charset from within wp, defaults to UTF8 ?>" />

	<!--Forces latest IE rendering engine & chrome frame-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<!-- title & meta handled by the yoast plugin, don't add your own here just activate the plugin -->

	<title><?php wp_title(''); ?></title>

	<!-- favicon & other link Tags -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="/favicon.ico" type="image/x-icon" />
	<!--link rel="apple-touch-icon" href="/images/custom_icon.png"/--><!-- 114x114 icon for iphones and ipads -->
	<link rel="copyright" href="#copyright" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--ADD GOOGLE FONTS HERE-->

	<!-- CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?v1.00" media="screen" />

	<!-- BEGIN: IE Specific Hacks -->
	<!--[if IE 9]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/ie9.css" media="screen" /><![endif]-->
	<!--[if IE 8]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/ie8.css" media="screen" /><![endif]-->
	<!--[if IE 7]><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/ie7.css" media="screen" /><![endif]-->
	<!--END: IE Specific Hacks-->

	<!--REMOVE this viewport code if you are making a site that is NOT responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 	<!--REMOVE this viewport code if you are making a site that is NOT responsive-->

	<?php wp_head(); // wp_head hook for Plugins ~ always keep this just before the /head tag ?>

</head>

<body <?php body_class(); // we add to the body classes with a function in functions.php ?>>

		<!-- Start of the Navigation Bar -->
		<header class="navigation">
		  <div class="navigation-wrapper">
		    <a href="#" class="navigation-menu-button" id="js-mobile-menu">MENU</a>
		    <div class="nav">
		      <ul id="navigation-menu">
		        <li class="nav-link"><a href="javascript:void(0)" class="current"><i class="fa fa-home"></i> Home</a></li>
		        <li class="nav-link"><a href="javascript:void(0)"><i class="fa fa-info-circle"></i> About Us</a></li>
		        <li class="nav-link"><a href="javascript:void(0)"><i class="fa fa-users"></i> Membership</a></li>
		        <li class="nav-link more"><a href="javascript:void(0)"><i class="fa fa-calendar"></i> Events</a>
		          <ul class="submenu">
		            <li><a href="javascript:void(0)">Upcoming Events</a></li>
		            <li><a href="javascript:void(0)">View Past Events</a></li>
		          </ul>
		        </li>
		        <li class="nav-link"><a href="#"><i class="fa fa-briefcase"></i> Resources</a></li>
		        <li class="nav-link"><a href="#"><i class="fa fa-envelope-o"></i>  Contact Us</a></li>
		      </ul>
		    </div>
		    <div class="navigation-tools">
		      <div class="search-bar">
		        <div class="search-and-submit">
		          <input type="search" placeholder="Enter Search" />
		          <button type="submit">
		            <img src="img/search-icon.png" alt="">
		          </button>
		        </div>
		      </div>
		     
		    </div>
		  </div>
		</header>
		<!-- end of header & navigation bar -->
