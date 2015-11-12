<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package WordPress
 * @subpackage justmarkup.com
 * @since justmarkup.com 1.0
 */
?>

<main class="main site-article" role="main">
	<article class="article">
		<h1><?php the_title(); ?></h1>

		<?php if ( 'post' == get_post_type() ) : ?>
			<span class="article-details"><time datetime="<?php justmarkup_posted_on_datetime(); ?>"><?php justmarkup_posted_on(); ?></time> by <a href="http://twitter.com/justmarkup">Michael Scharnagl</a></span>
		<?php endif; ?>


		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'justmarkup' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	</article>

	<section class="article-about">
		<h3>Michael Scharnagl</h3>
		<img src="https://justmarkup.com/justmarkup2015/src/img/me.jpg" alt="Portrait Michael Scharnagl">
		<p>Follow me: <a href="http://twitter.com/justmarkup">@justmarkup</a></p>
		<p>A freelance front-end developer focusing on HTML5, CSS, progressive enhancement and web performance. </p><p>You can <strong><a href="#">hire me</a></strong>.</p>
	</section>
</main>
