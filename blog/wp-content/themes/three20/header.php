<?php
/**
 * Three20 News Theme.
 *
 * @package Three20
 * @subpackage Three20
 * @since Three20 1.0
 */
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://opengraphprotocol.org/schema/"
      xmlns:fb="http://www.facebook.com/2008/fbml" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta property="fb:app_id" content="114720825217072"/>
<meta property="fb:admins" content="122605446"/>
<meta property="og:title" content="three20.info"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="http://three20.info/"/>
<meta property="og:image" content="http://github.com/facebook/three20/raw/master/samples/Resources/Icon.png"/>
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
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="http://three20.info/css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://three20.info/css/global.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://three20.info/css/article.css" />
<link rel="stylesheet" type="text/css" media="all" href="http://three20.info/css/headerbar.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>

<div id="page-wrapper"> 

<!-- HEADER --> 

<div id="header"> 
<div class="fixed-width"> 

<ul class="right-links"> 
  <li><a href="/roadmap">Roadmap</a></li> 
  <li><a href="/documentation">Documentation</a></li> 
  <li><a href="/tutorials">Tutorials</a></li> 
  <li><a href="http://api.three20.info/">API</a></li> 
  <li><a href="/community">Community</a></li>
</ul> 

<div class="right-links">
  
			<li id="search" class="widget-container widget_search">
				<?php get_search_form(); ?>
			</li>
  
</div>

<div class="leadin"> 
  <h1><a href="/">Three20</a></h1> 
  <h2><a href="/">An open-source library for iOS applications</a></h2> 
</div> <!-- .leadin --> 

</div> <!-- .fixed-width --> 
</div> <!-- #header -->

<div id="content"> 
<div class="fixed-width">

<div id="wrapper" class="hfeed">
	<div id="main">
