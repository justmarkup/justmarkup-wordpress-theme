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

	<script async src="<?php echo get_template_directory_uri(); ?>/dist/js/main.min.js"></script>
	<script defer src="<?php echo get_template_directory_uri(); ?>/dist/js/prism.min.js"></script>
	<script>
		if ('serviceWorker' in navigator) {
			navigator.serviceWorker.register('/log/sw.min.js', {scope: '/log/'});
		}
		window.addEventListener("load", function() {
			if (navigator.serviceWorker.controller != null) {
				navigator.serviceWorker.controller.postMessage({"command":"trimCache"});
			}
		});
	<!-- Piwik -->
	var _paq = _paq || [];
	_paq.push(['trackPageView']);
	_paq.push(['enableLinkTracking']);
	(function() {
		var u="//justmarkup.com/piwik/";
		_paq.push(['setTrackerUrl', u+'piwik.php']);
		_paq.push(['setSiteId', 1]);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	})();
</script>
<noscript><p><img src="//justmarkup.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>
