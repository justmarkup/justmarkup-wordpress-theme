<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage justmarkup.com
 * @since justmarkup.com 1.0
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'single' ); ?>
	<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
