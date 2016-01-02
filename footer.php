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

	<script async src="<?php echo get_template_directory_uri(); ?>/dist/js/head.min.js"></script>
	<script>
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('/log/sw.min.js', {scope: '/log/'});
		}
		window.addEventListener("load", function() {
			if (navigator.serviceWorker.controller != null) {
				navigator.serviceWorker.controller.postMessage({"command":"trimCache"});
			}
		});
	</script>
</body>
</html>
