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
		top = $window.scrollTop();
		var top = $window.scrollTop();
		var opacity;
		if (top > 14) {
			$topbar.animate({opacity: 0.4, marginTop: -14}, 'fast');
		} else {
			$topbar.css({opacity: 1, marginTop: -top});
		}
	});

	$topbar.mouseenter(function(){
		$topbar.stop();
		$topbar.animate({marginTop: 0, opacity: 1});
	})
	.mouseleave(function(){
		$topbar.stop();
		var top = $window.scrollTop();
		var opacity;
		if (top > 14) {
			top = 14;
			opacity = 0.4;
		} else {
			opacity = 1;
		}
		$topbar.animate({opacity: opacity, marginTop: -top});
	});
});
