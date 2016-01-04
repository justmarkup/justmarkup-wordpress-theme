<?php
/**
 * The default template for displaying content on front page
 *
 * @package WordPress
 * @subpackage justmarkup.com
 * @since justmarkup.com 1.0
 */
?>

	
<article class="article">
	<?php if ( 'post' == get_post_type() ) : ?>
		<time datetime="<?php echo justmarkup_posted_on_datetime(); ?>"><?php justmarkup_posted_on(); ?></time>
		
	<?php endif; ?>
	<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'justmarkup' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
		<?php the_content("Read more <span class=\"visuallyhidden\">about " . get_the_title('', '', false) . "</span>"); ?>
		
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'justmarkup' ) . '</span>', 'after' => '</div>' ) ); ?>
	<?php endif; ?>
</article>
