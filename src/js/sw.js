const CACHE_NAME = 'justmarkup'
const CACHE_VERSION = '-v4';

const theme_path = 'wp-content/themes/justmarkup.com/';

// The install event
self.addEventListener('install', function(event) {

	self.skipWaiting();

	event.waitUntil(
		caches.open(CACHE_NAME + CACHE_VERSION).then(function prefill (cache) {
			return cache.addAll([
				'./',
				theme_path + 'dist/js/head.min.js',
				theme_path + 'offline.html',
				new Request('https://justmarkup.com/favicon.ico', {mode: 'no-cors'}),
				new Request('https://justmarkup.com/justmarkup2015/src/img/logo.svg', {mode: 'no-cors'}),
				new Request('https://justmarkup.com/justmarkup2015/src/img/bg.png', {mode: 'no-cors'})
			]);
		})
	);
});



self.addEventListener('fetch', function(event) {
	var requestURL = new URL(event.request.url);

	if (requestURL.hostname == location.hostname) {
		// don't cache admin resources
		if (requestURL.href.match('\/wp-admin\/')) {
			event.respondWith(fetch(event.request));
		}
		event.respondWith(
			caches.match(event.request).then(function(response) {
				return response || fetch(event.request);
			}).catch(function() {
				// show a fallback if both cache and network fails
				return caches.match(theme_path + 'offline.html');
			})
		);
	} else {
		// don't cache external resources
		event.respondWith(fetch(event.request));
	}
});
