<?php
/**
 * Elgg Magic Topbar plugin
 *
 * @package ElggMagicTopbar
 */

elgg_register_event_handler('init', 'system', 'magic_topbar_init');

/**
 * Initialize the magic topbar plugin.
 */
function magic_topbar_init() {
	elgg_extend_view('css/elgg','magic_topbar/css');
	elgg_extend_view('js/elgg','magic_topbar/js');
}
