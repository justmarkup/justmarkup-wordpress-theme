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
	<style>
	.hidden{display:none !important;visibility:hidden}.visuallyhidden{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.visuallyhidden.focusable:active,.visuallyhidden.focusable:focus{clip:auto;height:auto;margin:0;overflow:visible;position:static;width:auto}.invisible{visibility:hidden}.clearfix:before,.main:before,.footer:before,.article-about:before,.nav:before,.clearfix:after,.main:after,.footer:after,.article-about:after,.nav:after{content:" ";display:table}.clearfix:after,.main:after,.footer:after,.article-about:after,.nav:after{clear:both}body{font-family:"Cantarell",Helvetica,Arial,sans-serif;color:#111}p{font-size:1.125em}code[class*="language-"],pre[class*="language-"]{color:black;font-family:Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;direction:ltr;text-align:left;white-space:pre;word-spacing:normal;word-break:normal;word-wrap:normal;line-height:1.5;-moz-tab-size:4;-o-tab-size:4;tab-size:4;-webkit-hyphens:none;-moz-hyphens:none;-ms-hyphens:none;hyphens:none}pre[class*="language-"]{position:relative;margin:.5em 0;box-shadow:-1px 0px 0px 0px rgba(39,174,96,0.6),0px 0px 0px 1px #dfdfdf;border-left:10px solid rgba(39,174,96,0.6);background-color:#fdfdfd;background-image:-webkit-linear-gradient(transparent 50%, rgba(69,142,209,0.04) 50%);background-image:linear-gradient(transparent 50%, rgba(69,142,209,0.04) 50%);background-size:3em 3em;background-origin:content-box;overflow:visible;max-height:30em;padding:0}code[class*="language"]{max-height:inherit;height:100%;padding:0 1em;display:block;overflow:auto}:not(pre)>code[class*="language-"],pre[class*="language-"]{background-color:#fdfdfd;box-sizing:border-box;margin-bottom:1em}:not(pre)>code[class*="language-"]{position:relative;padding:.2em;border-radius:0.3em;color:#c92c2c;border:1px solid rgba(0,0,0,0.1);display:inline;white-space:normal}pre[class*="language-"]:before,pre[class*="language-"]:after{content:'';z-index:-2;display:block;position:absolute;bottom:0.75em;left:0.18em;width:40%;height:20%;box-shadow:0px 13px 8px #979797;-webkit-transform:rotate(-2deg);-ms-transform:rotate(-2deg);transform:rotate(-2deg)}:not(pre)>code[class*="language-"]:after,pre[class*="language-"]:after{right:0.75em;left:auto;-webkit-transform:rotate(2deg);-ms-transform:rotate(2deg);transform:rotate(2deg)}.token.comment,.token.block-comment,.token.prolog,.token.doctype,.token.cdata{color:#7D8B99}.token.punctuation{color:#5F6364}.token.property,.token.tag,.token.boolean,.token.number,.token.function-name,.token.constant,.token.symbol,.token.deleted{color:#c92c2c}.token.selector,.token.attr-name,.token.string,.token.char,.token.function,.token.builtin,.token.inserted{color:#2f9c0a}.token.operator,.token.entity,.token.url,.token.variable{color:#a67f59;background:rgba(255,255,255,0.5)}.token.atrule,.token.attr-value,.token.keyword,.token.class-name{color:#1990b8}.token.regex,.token.important{color:#e90}.language-css .token.string,.style .token.string{color:#a67f59;background:rgba(255,255,255,0.5)}.token.important{font-weight:normal}.token.bold{font-weight:bold}.token.italic{font-style:italic}.token.entity{cursor:help}.namespace{opacity:.7}@media screen and (max-width: 767px){pre[class*="language-"]:before,pre[class*="language-"]:after{bottom:14px;box-shadow:none}}.token.tab:not(:empty):before,.token.cr:before,.token.lf:before{color:#e0d7d1}pre[class*="language-"].line-numbers{padding-left:0}pre[class*="language-"].line-numbers code{padding-left:3.8em}pre[class*="language-"].line-numbers .line-numbers-rows{left:0}pre[class*="language-"][data-line]{padding-top:0;padding-bottom:0;padding-left:0}pre[data-line] code{position:relative;padding-left:4em}pre .line-highlight{margin-top:0}html,body{margin:0;padding:0;font-family:"Cantarell",Helvetica,Arial,sans-serif}body{margin:0 auto;background-image:url(/log/wp-content/themes/justmarkup.com/src/img/bg.png)}.main,.footer{width:62.5em;max-width:94%;max-width:90vw;margin:0 auto}.main-front{padding-top:1.25em}img{max-width:100%;height:auto}input,textarea{max-width:100%}textarea{width:100%}label{display:block}code{padding:0 0.188em;font-size:1em;background:#fff}pre{background:rgba(221,221,221,0.2);max-width:100%;overflow-x:scroll;padding:0.625em;margin:1.25em 0 !important;border:1px solid rgba(39,174,96,0.6);border-width:2px 0}pre code{background:none}h1,h2,h3,h4,h5,p,li,a{overflow-wrap:break-word;word-wrap:break-word;-webkit-hyphens:auto;-moz-hyphens:auto;-ms-hyphens:auto;hyphens:auto}h2{font-weight:400;font-size:1.75em}a:hover{text-decoration:none;border:none}p{line-height:1.6}.article{margin:0 0 2.5em 0}.article time{display:block;margin-bottom:0.3em}.article h2{font-family:"Muli",sans-serif;font-weight:300;font-size:1.5em;display:inline}.article h2 a{color:#111;text-decoration:none;font-size:inherit;border-bottom:1px solid #1C5EA0}.article li{padding:0.25em 0}.article .more,.article .more-link{color:#1C5EA0;text-decoration:none;display:block}.article p a{color:currentColor}.main-front h3 a{font-size:1em}.banner{margin:0;padding:0.625em 0;background-color:#ddd;text-align:center}.banner a{color:#111}.article-details a{color:#111}.article-about{padding:0.625em;background:#ddd;text-align:center}.article-about h3{font-size:1.5em;font-weight:400;margin:0 0 0.313em 0}.article-about p{margin:0.25em 0}.article-about p a{color:#111}@media all and (min-width: 33.75em){.article-about{text-align:left}.article-about img{float:left;margin:0 1.25em 1.25em 0}}.site-article h1{margin-bottom:0.125em;font-size:1.875em;font-weight:400}.site-article h2{font-size:1.5em;font-weight:400;margin:0 0 0.875em 0}.site-article h3 a{color:#111}.hire-me{padding:0.625em;background:#ddd;margin:0 0 1.875em 0}.comments-wrapper a{color:#111}.commentlist{margin:0;padding:1.25em 0 0 0;list-style:none}.commentlist img{border-radius:1.25em}.commentlist li{padding-bottom:1.25em;border-bottom:1px solid #ddd}.info-updated{background-color:#f44336;display:block;margin:20px 0;padding:10px;color:#fff}.header h1{margin:0}.logo{display:block;height:90px;width:110px;margin:0.625em 0}.logo svg #poly-right,.logo svg #poly-left{-webkit-transition:all 300ms;transition:all 300ms}.logo:hover svg #poly-right{-webkit-transform:scale(0.94);-ms-transform:scale(0.94);transform:scale(0.94)}.logo:hover svg #poly-left{-webkit-transform:scale(1.4);-ms-transform:scale(1.4);transform:scale(1.4)}.nav ul{margin:0;padding:0}.nav li{list-style:none}.nav ul a{display:block;color:#111;text-decoration:none;border-top:1px solid #ddd;padding:0.5em;float:left;width:100%;-webkit-transition:all 400ms;transition:all 400ms}.nav li:nth-child(3) a,.nav li:last-child a{border-bottom:1px solid #ddd}@media all and (min-width: 18.75em){.logo{margin:0.625em auto 1.875em auto}.nav ul{text-align:center;padding:0 0 1.250em 0}.nav li{display:inline}.nav li.current_page_item a{border-color:rgba(39,174,96,0.6);border-width:2px;padding:0.438em 0.250em}.nav ul a{display:inline;width:auto;float:none;margin:0 0.938em 0 0;padding:0.438em 0.250em;border-bottom:1px solid #ddd}.nav ul a:hover{background:rgba(221,221,221,0.2)}}.footer{padding:0.625em 0;border-top:4px solid rgba(39,174,96,0.6)}.footer a{color:#111}

	</style>
</head>
<body <?php body_class(); ?>>
	<header class="header"role="banner">
		<h1><a class="logo" title="Home" href="<?php echo get_home_url(); ?>/"><svg width="120" height="90" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title">
 <title id="title">justmarkup</title>
 <g>
	<g id="text">
	 <g>
		<path d="m30.25079,25.380058h2.677387v18.570969c0,0.848572 -0.032722,1.79636 -0.066769,2.383713c-0.063839,1.075493 -0.326397,1.954918 -0.750416,2.740963c-0.717964,1.271271 -2.05599,2.282909 -3.786922,2.871849l-1.303978,-1.662819c1.206089,-0.489464 2.219059,-1.306652 2.675802,-2.187935c0.424276,-0.75042 0.554895,-1.796116 0.554895,-4.078999v-18.637741l0,0l0,0z" fill="#00CC66"/>
		<path d="m38.377926,25.380058h2.64175v14.328636c0,1.53249 0.097889,2.805084 0.2285,3.428062c0.391563,1.762058 2.02301,2.741249 4.537331,2.741249c1.859947,0 3.263153,-0.489727 3.948654,-1.4048c0.686577,-0.91214 0.848312,-1.729591 0.848312,-3.818047v-15.27351h2.643337v15.568787c0,3.19796 -0.326385,4.276104 -1.69688,5.480602c-1.370747,1.176296 -3.166851,1.729591 -5.875359,1.729591c-3.459202,0 -5.581696,-1.109528 -6.626053,-3.230694c-0.489456,-0.978909 -0.651196,-1.437252 -0.651196,-3.917263v-15.632614l0.001602,0l0,0z" fill="#00CC66"/>
		<path d="m71.468781,27.045818l-1.178413,1.924042c-2.146431,-1.401867 -3.520119,-1.891331 -5.447891,-1.891331c-2.809864,0 -4.472157,1.401888 -4.472157,3.687181c0,1.793421 1.077072,2.839384 3.722805,3.656569l2.575775,0.814781c1.990295,0.619797 3.067368,1.207413 3.949188,2.253906c0.913208,1.042759 1.467316,2.544655 1.467316,3.948647c0,2.088455 -1.139587,4.048409 -3.09848,5.386181c-1.467331,0.945137 -2.966019,1.370483 -5.026272,1.370483c-2.677124,0 -4.964005,-0.654121 -7.180676,-2.024605l1.170975,-2.088696c1.865269,1.337746 3.753937,1.926956 6.009701,1.926956c1.701397,0 2.606632,-0.261223 3.558941,-0.979439c1.077087,-0.817184 1.600052,-1.891068 1.600052,-3.197716c0,-1.990017 -1.311165,-3.361294 -4.019669,-4.176888l-2.247791,-0.690834c-2.021412,-0.62059 -3.098484,-1.07547 -3.980309,-1.991074c-0.913208,-0.978661 -1.405056,-2.218788 -1.405056,-3.656591c0,-3.817228 2.9035,-6.428123 7.242912,-6.428123c2.419632,0.001589 4.636292,0.719034 6.759048,2.156549l0,0l0,0z" fill="#00CC66"/>
		<path d="m74.50061,25.380146h14.81665l-0.16172,2.25161h-6.071045v20.137318h-2.578064v-20.137318h-6.005821v-2.25161l0,0z" fill="#00CC66"/>
	 </g>
	 <g>
		<path d="m27.316776,55.506214h3.207825l1.615612,6.165844c0.226334,0.887421 0.32,1.241779 0.421471,1.879402c0.124866,-0.637623 0.249733,-1.204277 0.44487,-1.932457l1.662415,-6.112789h3.246815l1.100471,12.315296h-2.442883l-0.468327,-6.573231c-0.04681,-0.780479 -0.101467,-1.313545 -0.101467,-1.967598c-0.140472,0.709427 -0.234138,1.063786 -0.444881,1.80835l-1.951206,6.732479h-2.177544l-1.756084,-6.46706c-0.156065,-0.601799 -0.491728,-2.144821 -0.491728,-2.144821c0,0.726654 -0.039005,1.419712 -0.093615,2.182259l-0.421471,6.431171h-2.497545l1.147272,-12.316845l0,0z" fill="#00CC66"/>
		<path d="m43.504211,55.470322h2.676857l3.878952,12.35112h-2.653446l-0.874371,-2.923729h-3.613487l-0.866398,2.923729h-2.583485l4.035378,-12.35112l0,0l0,0zm0.015427,7.370079h2.411644c0,0 -0.405655,-1.291744 -0.671143,-2.479481c-0.124756,-0.56818 -0.491585,-2.180756 -0.491585,-2.180756s-0.359116,1.452427 -0.585484,2.374943c-0.234097,0.886608 -0.39024,1.4729 -0.663433,2.285294l0,0z" fill="#00CC66"/>
		<path d="m50.887589,55.488411l4.589203,0.017822c2.185272,0 3.621464,1.45163 3.621464,3.615887c0,1.842125 -1.225506,3.367146 -2.747356,3.40147c0.249779,0.195774 0.351135,0.300598 0.514996,0.514465c0.710255,0.887402 2.958031,4.784981 2.958031,4.784981h-2.926636c-0.476154,-0.813988 -0.671413,-1.149681 -1.147305,-2.018219c-1.225506,-2.216671 -1.615746,-2.802147 -2.037106,-3.012829c-0.125023,-0.053738 -0.202965,-0.088856 -0.39024,-0.106922v5.13958h-2.435051v-12.336235l0,0l0,0l0,0zm2.450478,2.002537l-0.023411,3.331234h0.835278c1.061378,0 1.521843,-0.106922 1.865269,-0.408318c0.296593,-0.281696 0.476158,-0.724888 0.476158,-1.239353c0,-0.762367 -0.304325,-1.274448 -0.889809,-1.507198c-0.280899,-0.105354 -0.796173,-0.176365 -1.397087,-0.176365h-0.866398l0,0l0,0l0,0z" fill="#00CC66"/>
		<path d="m61.127396,55.506214h2.536617v5.617188l3.504353,-5.617188h3.051689l-3.933632,5.706131l4.378502,6.609936h-3.262421l-3.738491,-6.431942v6.431942h-2.536617v-12.316067l0,0l0,0z" fill="#00CC66"/>
		<path d="m71.624924,55.506214h2.53656v8.096798c0,0.923271 0.031258,1.136383 0.210732,1.471992c0.288795,0.550201 0.874138,0.851509 1.685883,0.851509c1.084862,0 1.771675,-0.533112 1.880943,-1.437691c0.031265,-0.265327 0.031265,-0.443321 0.031265,-1.097359v-7.88525h2.52095v8.294254c0,1.169136 -0.015602,1.398621 -0.195129,1.931679c-0.320007,0.974075 -1.521942,2.321182 -4.183426,2.321182c-1.880951,0 -3.246826,-0.568199 -3.949234,-1.647644c-0.405869,-0.638397 -0.530731,-1.136383 -0.530731,-2.321884v-8.577587l-0.007813,0l0,0z" fill="#00CC66"/>
		<path d="m82.629745,55.470367h3.239014c2.091736,0 2.731743,0.213821 3.426353,0.602482c1.147339,0.639233 1.771683,1.770981 1.771683,3.19067c0,1.629604 -0.780479,2.975174 -2.130684,3.614407c-0.569801,0.26535 -1.100471,0.406639 -2.466347,0.406639h-1.365875v4.536945h-2.474144v-12.351143l0,0l0,0zm2.481934,2.002712v3.792339h1.287811c1.014679,0 1.311218,-0.124107 1.646812,-0.637623c0.218536,-0.337994 0.304398,-0.726654 0.304398,-1.312771c0,-1.151249 -0.624336,-1.841946 -1.662399,-1.841946h-1.576622l0,0l0,0z" fill="#00CC66"/>
	 </g>
	 <polyline id="poly-left" points="14.154014587402344,41.89519500732422 14.154014587402344,9.538511276245117 46.51069259643555,9.538511276245117 " stroke="#00CC66" fill="none"/>
	 <polyline id="poly-right" points="105.845703125,48.104305267333984 105.845703125,80.46099853515625 73.48605346679688,80.46099853515625 " stroke="#00CC66" fill="none"/>
	</g>
 </g>
</svg></a></h1>
		<nav class="nav" role="navigation">
			<?php wp_nav_menu(); ?> 
		</nav>
	</header>
