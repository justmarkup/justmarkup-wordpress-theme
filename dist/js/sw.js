const CACHE_NAME = 'justmarkup'
const CACHE_VERSION = '-v1';

const theme_path = 'wp-content/themes/justmarkup.com/';

// The install event
self.addEventListener('install', function(event) {
	void 0;


	self.skipWaiting();

	event.waitUntil(
		caches.open(CACHE_NAME + CACHE_VERSION).then(function prefill (cache) {
			void 0;
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

	void 0;

	if (requestURL.hostname == location.hostname) {
		// 
		void 0;
		event.respondWith(
			caches.match(event.request).then(function(response) {
				return response || fetch(event.request);
			}).catch(function() {
				// show a fallback if both cache and network fails
				void 0;
				return caches.match(theme_path + 'offline.html');
			})
		);
	} else {
		// don't cache external resources
		void 0;
		event.respondWith(fetch(event.request));
	}
});
