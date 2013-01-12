<?php
/*
Theme Name: happycameraclub
Theme URI: http://www.happycameraclub.com
Description: A Photography blog
Version: 1.0
Author: Axisfusion.org
Author URI: http://www.axisfusion.org
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet"  id='theme-css' type="text/css" media='screen, projection' href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/layout.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/style_s.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/responsive.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/css/ie8.css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/swfobject.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/css3-mediaqueries.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fwslider.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/customjs.js"></script>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
</head>
<body  class="home">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Page Wrap Starts-->
<div id="wrap" class="clearfix" data-role="page"> 
  <!--header starts-->
  <header id="header" class="fluid clearfix" data-role="header">
    <div class="container">
      <div id="logo"> <a  title="HappyClub" href="<?php echo bloginfo('home') ?>"><img id="sitelogo" src="<?php bloginfo('template_directory'); ?>/images/logo.png"></a> </div>

      <div id="pressthebutton"> <a  title="pressthebutton" href="<?php echo bloginfo('home') ?>"><img id="pressthebutton" src="<?php bloginfo('template_directory'); ?>/images/pressthebutton.png"></a> </div>
    </div>
    <div class="container">
      <nav id="navigation" class="clearfix">
        <ul id="menu-top" class="menu clearfix">
         <li id="menu-item" class="menu-item current_page_item"><a href="<?php echo get_category_link(3); ?>">Workshops</a><span class="naviline">&nbsp;</span></li>
          <li id="menu-item" class="menu-item"><a href="<?php echo get_category_link(4); ?>">Students</a><span class="naviline">&nbsp;</span> </li>
          <li id="menu-item" class="menu-item"><a href="<?php echo get_category_link(5); ?>">Mentors</a><span class="naviline">&nbsp;</span> </li>
          <li id="menu-item" class="menu-item"><a href="#">Partner</a><span class="naviline">&nbsp;</span> </li>
          <li id="menu-item" class="menu-item"><a href="<?php echo get_category_link(6); ?>">Volunteer</a><span class="naviline">&nbsp;</span> </li>
          <li id="menu-item" class="menu-item"><a href="<?php echo get_category_link(7); ?>">Design</a><span class="naviline">&nbsp;</span> </li>
          <li id="menu-item" class="menu-item"><a href="<?php echo get_category_link(8); ?>">Media</a><span class="naviline">&nbsp;</span></li>
        </ul>
      </nav>
    </div>
  </header>
  
