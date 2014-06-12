$(document).ready(function(){
	var $container = $('.platform');
	// initialize

	$container.imagesLoaded(function(){
		$container.masonry({
			itemSelector: '.item'
		});
	})
})