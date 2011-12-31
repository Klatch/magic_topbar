<?php
/**
 * Hide the topbar when no using with an animation.
 *
 * @package ElggMagicTopbar
 */
?>

$(function() {

    var $topbar   = $(".elgg-page-topbar"),
        $window   = $(window),
        ontop     = false;

    $('.elgg-page-header').css({'margin-top':'24px'});
    $topbar.css({'position':'fixed', 'margin-top':'-24px'});

    $window.scroll(function() {
	$topbar.stop();
	top = $window.scrollTop();
	var top = $window.scrollTop();
	var opacity;
	if(top>14){
		$topbar.animate({opacity:0.4, marginTop:-24-14}, 'fast');
	}
	else{
		$topbar.css({opacity:1, marginTop:-24-top});
	}
	
	
    });

    $topbar.mouseenter(function(){
	$topbar.stop();
	$topbar.animate({marginTop:-24,opacity:1});
    });

    $topbar.mouseleave(function(){
	$topbar.stop();
	var top = $window.scrollTop();
	var opacity;
	if(top>14){
		top = 14;
		opacity = 0.4;
	}
	else{
		opacity = 1;
	}
	$topbar.animate({opacity:opacity, marginTop:-24-top});
    });

});
