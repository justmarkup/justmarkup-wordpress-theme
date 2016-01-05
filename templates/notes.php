<?php
/**
 * Template Name: Notes Page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage justmarkup.com
 * @since justmarkup.com 1.0
 */

get_header(); ?>

<main class="main main-front" role="main">
	<?php if ( have_posts() ) : ?>


		<?php query_posts('cat=4'); ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

		

	<?php else : ?>

		<h3 class="entry-title"><?php _e( 'Nothing Found', 'justmarkup' ); ?></h3>
		<p><?php _e( 'Apologies, but no results were found.', 'justmarkup' ); ?></p>

	<?php endif; ?>
</main>

<?php get_footer(); ?>
