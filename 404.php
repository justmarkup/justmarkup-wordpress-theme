<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage justmarkup.com
 * @since justmarkup.com 1.0
 */

get_header(); ?>

<main class="main site-article" role="main">
	<article class="article">
		<h1 class="entry-title">It seems we cant find what you're looking for :/</h1>

		<div class="entry-content">
			<p><?php _e( 'Sorry for that', 'justmarkup' ); ?></p>
			<h2><?php _e( 'Recent Posts', 'justmarkup' ); ?></h2>
			<ul>
			<?php
				$recent_posts = wp_get_recent_posts();
				foreach( $recent_posts as $recent ){
					echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
				}
			?>
			</ul>
		</div><!-- .entry-content -->
		
	</article><!-- #post-<?php the_ID(); ?> -->
</main>

<?php get_footer(); ?>
