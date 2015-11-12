<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage justmarkup.com
 * @since justmarkup.com 1.0
 */
?>

	</main><!-- #main -->

	<footer class="footer" role="contentinfo">
		<small>Copyright &copy; Michael Scharnagl <time datetime="<?php echo date('Y'); ?>"><?php echo date('Y'); ?></time>. All rights reserved. <a href="<?php echo get_site_url(); ?>/index.php/imprint/"><?php _e( 'Imprint', 'justmarkup' ); ?></a></small>
	</footer>
	<script>
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('service-worker.js');
		}
	</script>
</body>
</html>
