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
<html class="no-js" <?php language_attributes(); ?>>
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
	<script>var mustard=false; if('visibilityState' in document){document.documentElement.className='js';mustard=true}else{document.documentElement.className = 'oldie';}function loadFont(a,b,c,d){function e(){if(!window.FontFace)return!1;var a=new FontFace("t",'url("data:application/font-woff2,") format("woff2")',{}),b=a.load();try{b.then(null,function(){})}catch(c){}return"loading"===a.status}var f=navigator.userAgent,g=!window.addEventListener||f.match(/(Android (2|3|4.0|4.1|4.2|4.3))|(Opera (Mini|Mobi))/)&&!f.match(/Chrome/);if(!g){var h={};try{h=localStorage||{}}catch(i){}var j="x-font-"+a,k=j+"url",l=j+"css",m=h[k],n=h[l],o=document.createElement("style");if(o.rel="stylesheet",document.head.appendChild(o),!n||m!==b&&m!==c){var p=c&&e()?c:b,q=new XMLHttpRequest;q.open("GET",p),q.onload=function(){q.status>=200&&q.status<400&&(h[k]=p,h[l]=q.responseText,d||(o.textContent=q.responseText))},q.send()}else o.textContent=n}}loadFont('sourceSansPro', 'fonts.css', 'fonts1.css', true)</script>
	<style>
	.hidden{display:none !important;visibility:hidden}.visuallyhidden{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.visuallyhidden.focusable:active,.visuallyhidden.focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}.invisible{visibility:hidden}.clearfix:before,.main:before,.article-about:before,.nav:before,.footer:before,.clearfix:after,.main:after,.article-about:after,.nav:after,.footer:after{content:" ";display:table}.clearfix:after,.main:after,.article-about:after,.nav:after,.footer:after{clear:both}body{font-family:"Cantarell",Helvetica,Arial,sans-serif;color:#111}p{font-size:18px}html,body{margin:0;padding:0;font-family:"Cantarell",Helvetica,Arial,sans-serif}body{margin:0 auto;width:1000px;max-width:94%;max-width:90vw;background-image:url(https://justmarkup.com/justmarkup2015/src/img/bg.png)}.main-front{padding-top:20px}img{max-width:100%;height:auto}input,textarea{max-width:100%}textarea{width:100%}label{display:block}code{padding:0 3px;font-size:16px;background:rgba(221,221,221,0.2)}pre{background:rgba(221,221,221,0.2);max-width:100%;overflow-x:scroll;padding:10px;margin:20px 0 !important;border:2px solid rgba(39,174,96,0.6);border-width:2px 0}pre code{background:none}h1,h2,h3,h4,h5,p,li,a{overflow-wrap:break-word;word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto}h2{font-weight:400;font-size:28px}a:hover{text-decoration:none;border:none}p{line-height:1.6}.article{margin:0 0 40px 0}.article time{display:block;margin-bottom:5px}.article h3{font-family:"Muli",sans-serif;font-weight:300;font-size:24px;display:inline}.article h3 a{color:#111;text-decoration:none;font-size:20px;border-bottom:1px solid #1C5EA0}.article li{padding:4px 0}.article .more,.article .more-link{color:#1C5EA0;text-decoration:none;display:block}.article p a{color:currentColor}.main-front h3 a{font-size:24px}.article-details a{color:#111}.article-about{padding:10px;background:#ddd;text-align:center}.article-about h3{font-size:24px;font-weight:400;margin:0 0 5px 0}.article-about p{margin:4px 0}.article-about p a{color:#111}@media all and (min-width: 540px){.article-about{text-align:left}.article-about img{float:left;margin:0 20px 20px 0}}.site-article h1{margin-bottom:2px;font-size:30px;font-weight:400}.site-article h2{font-size:24px;font-weight:400;margin:0 0 14px 0}.site-article h3 a{color:#111}.hire-me{padding:10px;background:#ddd;margin:0 0 30px 0}.comments-wrapper a{color:#111}.commentlist{margin:0;padding:20px 0 0 0;list-style:none}.commentlist img{border-radius:20px}.commentlist li{padding-bottom:20px;border-bottom:1px solid #ddd}.header h1{margin:0}.logo{display:block;background-image:url(https://justmarkup.com/justmarkup2015/src/img/logo.svg);text-indent:-2015em;height:90px;width:110px;margin:10px 0}.nav ul{margin:0;padding:0}.nav li{list-style:none}.nav ul a{display:block;color:#111;text-decoration:none;border-top:1px solid #ddd;padding:8px 0;float:left;width:100%;-webkit-transition:all 400ms;transition:all 400ms}.nav li:nth-child(3) a,.nav li:last-child a{border-bottom:1px solid #ddd}@media all and (min-width: 300px){.logo{margin:10px auto 30px auto}.nav ul{text-align:center;padding:0 0 20px 0}.nav li{display:inline}.nav li.current_page_item a{border-color:rgba(39,174,96,0.6);border-width:2px;padding:7px 4px}.nav ul a{display:inline;width:auto;float:none;margin:0 15px 0 0;padding:8px 4px;border-bottom:1px solid #ddd}.nav ul a:hover{background:rgba(221,221,221,0.2)}}.footer{padding:10px 0;border-top:4px solid rgba(39,174,96,0.6)}.footer a{color:#111}

	</style>
</head>
<body <?php body_class(); ?>>
	<header class="header"role="banner">
		<h1><a class="logo" href="<?php echo get_home_url(); ?>">justmarkup</a></h1>
		<nav class="nav" role="navigation">
			<?php wp_nav_menu(); ?> 
		</nav>
	</header>
