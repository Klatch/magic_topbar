<?php

function magic_topbar_init() {
	elgg_extend_view('css','magic_topbar/css');
	elgg_extend_view('metatags','js/magic_topbar');
}

register_elgg_event_handler('init','system','magic_topbar_init');

?>
