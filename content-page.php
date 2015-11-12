<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage justmarkup.com
 * @since justmarkup.com 1.0
 */
?>
<main class="main site-article" role="main">
	<article class="article">
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'justmarkup' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'justmarkup' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post-<?php the_ID(); ?> -->
</main>
