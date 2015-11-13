<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage justmarkup.com
 * @since justmarkup.com 1.0
 */
?><!DOCTYPE html>
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json" />
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
		echo ' | ' . sprintf( __( 'Page %s', 'justmarkup' ), max( $paged, $page ) );

	?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	?>
	<script src="<?php echo get_template_directory_uri(); ?>/dist/js/head.min.js"></script>
	<style>
	@{css_include}@
	</style>
</head>
<body <?php body_class(); ?>>
	<header class="header"role="banner">
		<p class="banner">This site is undergoing an <a href="https://justmarkup.com/log/2015/11/open-redesign/">open redesign</a>. See the <a href="https://github.com/justmarkup/justmarkup.com">Code</a> and open <a href="https://github.com/justmarkup/justmarkup.com/issues">Issues</a>.</p>
		<h1><a class="logo" href="<?php echo get_home_url(); ?>/">justmarkup</a></h1>
		<nav class="nav" role="navigation">
			<?php wp_nav_menu(); ?> 
		</nav>
	</header>
