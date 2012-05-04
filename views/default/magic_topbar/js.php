<?php
/**
 * Hide the topbar when no using with an animation.
 *
 * @package ElggMagicTopbar
 */
?>

$(function() {

	var $topbar   = $(".elgg-page-topbar"),
		$window   = $(window);

	$topbar.css({position: 'fixed', width: '100%'});

	$window.scroll(function() {
		$topbar.stop();
		var opacity;
		if ($window.scrollTop() > 14) {
			$topbar.animate({opacity: 0}, 'fast');
		} else {
			$topbar.css({opacity: 1});
		}
	});

	$topbar.mouseenter(function(){
		$topbar.stop();
		$topbar.animate({opacity: 1});
	})
	.mouseleave(function(){
		$topbar.stop();
		var opacity;
		if ($window.scrollTop() > 14) {
			opacity = 0;
		} else {
			opacity = 1;
		}
		$topbar.animate({opacity: opacity});
	});
});
