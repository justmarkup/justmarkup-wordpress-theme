if (navigator.share !== undefined) {
	var SHARE_BTN = document.querySelector('.share-btn');

	SHARE_BTN.textContent = 'Share';

	SHARE_BTN.addEventListener('click', function (ev) {

		navigator.share({
			title: document.title,
			url: document.querySelector('link[rel=canonical]').href
		}).then(function () {
			return console.log('Successful share');
		}).catch(function (error) {
			return console.log('Error sharing:', error);
		});

		ev.preventDefault();
	});
}
