<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
		</a>
	</div>
	<?php endif; ?>
	<div class="header-container">
		<div class="header">
			<header id="masthead" class="site-header" role="banner">
				<div class="header-main">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"  atl="Nấm lim xanh" /></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"  atl="Nấm lim xanh" /></a></p>
					<?php endif;?>
					<div class="search-box">
						<?php get_search_form(); ?>
					</div>
					<div class="social">
						<a title="facebook" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb.png"  atl="Nấm lim xanh" /></a>
						<a title="twitter" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png"  atl="Nấm lim xanh" /></a>
						<a title="youtube" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/youtb.png"  atl="Nấm lim xanh" /></a>
						<a title="google" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/google.png"  atl="Nấm lim xanh" /></a>
						<!--<a title="rss" href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/rss.png"  atl="Nấm lim xanh" /></a>-->
					</div>
					<div class="hotline">
						Hotline : <span>04.3797.0138</span>
					</div>
				</div>
				<div class="banner-top">banner</div>
				<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
					<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
					<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>

				<div id="search-container" class="search-box-wrapper hide">
					<div class="search-box">
						<?php get_search_form(); ?>
					</div>
				</div>
			</header><!-- #masthead -->
		</div>
	</div>
	<div class="main-container">
		<div id="main" class="site-main">
