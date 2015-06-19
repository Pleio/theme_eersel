<?php
/**
 * Main file for this plugin
 */

define("THEME_GRAPHICS", elgg_get_site_url() . "mod/theme_eersel/_graphics/");

define("THEME_COLOR_1", "498f96"); // Donkergroen
define("THEME_COLOR_2", "CCE4DB"); // Lichtgroen
define("THEME_COLOR_3", "F5F1E9"); // Beige


define("THEME_COLOR_4", "d3e0bb"); // Groen meest licht: # d3e0bb (achtergrond menu’s rechts)
define("THEME_COLOR_5", "498f96"); // TEAL
define("THEME_COLOR_8", "acb26b"); // green
define("THEME_COLOR_6", "00774D"); // Groen meest donker: # a0b67c (voor linkjes en buttons)
define("THEME_COLOR_7", "00A5E4"); // Blauw: # 333590 (widgets)

require_once(dirname(__FILE__) . "/lib/functions.php");
require_once(dirname(__FILE__) . "/lib/hooks.php");
require_once(dirname(__FILE__) . "/lib/page_handlers.php");

elgg_register_event_handler("init", "system", "theme_eersel_init");
elgg_register_event_handler("init", "system", "theme_eersel_translations", 99999999999);

/**
 * Initialize the theme
 *
 * @return void
 */
function theme_eersel_init() {
	
	elgg_register_css('font-awesome', 'mod/theme_eersel/vendors/font-awesome-4.3.0/css/font-awesome.min.css');
	elgg_load_css('font-awesome');
			
	elgg_extend_view("js/elgg", "js/theme_eersel");
	elgg_extend_view("css/elgg", "css/theme_eersel");
	elgg_extend_view("css/elgg", "css/theme_eersel_images");
	elgg_extend_view("page/layouts/widgets", "theme_eersel/widgets_fix");
	
// 	elgg_register_js('jquery.flexslider', 'mod/theme_eersel/vendors/jquery.flexslider/jquery.flexslider-min.js');
// 	elgg_load_js('jquery.flexslider');

	elgg_unextend_view("page/elements/header", "search/header");
	elgg_unextend_view("page/elements/owner_block/extend", "group_tools/owner_block");
	
	// page handlers
	elgg_register_page_handler("theme_eersel", "theme_eersel_page_handler");
	elgg_register_page_handler("profile", "theme_eersel_profile_page_handler");
	
	elgg_register_widget_type("profile_owner_block", elgg_echo("theme_eersel:widgets:profile_owner_block:title"), elgg_echo("theme_eersel:widgets:profile_owner_block:description"), "profile");
	elgg_register_widget_type("index_photos", elgg_echo("theme_eersel:widgets:index_photos:title"), elgg_echo("theme_eersel:widgets:index_photos:description"), "index");
	
	elgg_register_plugin_hook_handler("register", "menu:topbar", "theme_eersel_register_topbar_menu_handler");
	elgg_register_plugin_hook_handler("prepare", "menu:owner_block", "theme_eersel_prepare_owner_block_menu_handler");
	
	elgg_register_plugin_hook_handler('route', 'groups', 'theme_eersel_route_groups_handler');
	
	elgg_register_admin_menu_item("configure", "theme_eersel", "appearance");
	
	elgg_register_action("theme_eersel/slider_upload", dirname(__FILE__) . "/actions/slider_upload.php", "admin");
	elgg_register_action("theme_eersel/links", dirname(__FILE__) . "/actions/links.php", "admin");
}

/**
 * Custom translations for this theme
 *
 * @return void
 */
function theme_eersel_translations() {
	$nl = array(
		"profile:website" => "Website"
	);
	
	add_translation("nl", $nl);
}
