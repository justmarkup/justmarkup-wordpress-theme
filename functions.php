<?php
/**
 * Justmarkup functions and definitions
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage justmarkup.com
 * @since justmarkup.com 1.0
 */

if ( ! function_exists( 'justmarkup_posted_on' ) ) :
/**
 *
 * @since justmarkup.com 1.0
 */
function justmarkup_posted_on() {
	echo get_the_date('F j, Y');
}
endif;

if ( ! function_exists( 'justmarkup_posted_on_datetime' ) ) :
/**
 *
 * @since justmarkup.com 1.0
 */
function justmarkup_posted_on_datetime() {
	
	echo the_date('c');
}
endif;
