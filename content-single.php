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

		<?php 
		$dateNow = time();
		$dateNow = strtotime('-1 years', $dateNow);

		$lastModDate = get_the_modified_time('F j, Y');
		$lastModDateTime = strtotime($lastModDate);
	
		if ($lastModDateTime < $dateNow) {
			echo '<p class="info-updated">This article has been updated the last time on '.$lastModDate.' and the given information may be not accurate anymore. Feel free to contact me on <a href="https://twitter.com/justmarkup">twitter</a> to get more details.</p>';
		} 
		?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<a class="share-btn" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>%20<?php echo get_permalink(); ?>">Share via Twitter</a>
	</article>

	<?php comments_template( '', true ); ?>

	<section class="article-about">
		<h3>Michael Scharnagl</h3>
		<img src="<?php echo get_template_directory_uri(); ?>/src/img/me.jpg" alt="Portrait Michael Scharnagl">
		<p>Follow me: <a href="http://twitter.com/justmarkup">@justmarkup</a></p>
		<p>Subscribe to RSS: <a href="http://justmarkup.com/log/feed">/feed</a></p>
		<p>A freelance front-end developer focusing on HTML5, CSS, progressive enhancement and web performance. </p>
	</section>
</main>
