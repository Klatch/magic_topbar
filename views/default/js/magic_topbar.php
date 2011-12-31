<script>
$(function() {

    var $topbar   = $("#elgg_topbar"),
        $window    = $(window);

    $('#page_container').css({'margin-top':'24px'});
    $topbar.css({'position':'fixed', 'margin-top':'-24px'});

    $window.scroll(function() {
	$topbar.stop();
	top = $window.scrollTop();
	var top = $window.scrollTop();
	var opacity;
	if(top>14){
		top = 14;
		opacity = 0.4;
	}
	else{
		opacity = 1;
	}
	$topbar.animate({opacity:opacity, marginTop:-24-top}, 'fast');
	
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
</script>
