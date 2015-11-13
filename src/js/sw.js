const CACHE_NAME = 'justmarkup'
const CACHE_VERSION = '-v1';

const theme_path = 'wp-content/themes/justmarkup.com/';

// The install event
self.addEventListener('install', function(event) {
	console.log('sw install', event);

	self.skipWaiting();

	event.waitUntil(
		caches.open(CACHE_NAME + CACHE_VERSION).then(function prefill (cache) {
			console.log('sw cache open', cache);
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

	console.log('sw requesturl in fetch event', requestURL);

	if (requestURL.hostname == location.hostname) {
		// 
		console.log('sw fetch from own domain', event);
		event.respondWith(
			caches.match(event.request).then(function(response) {
				return response || fetch(event.request);
			}).catch(function() {
				// show a fallback if both cache and network fails
				console.log('sw show offline page', event);
				return caches.match(theme_path + 'offline.html');
			})
		);
	} else {
		// don't cache external resources
		console.log('sw fetch from other domain', event);
		event.respondWith(fetch(event.request));
	}
});
