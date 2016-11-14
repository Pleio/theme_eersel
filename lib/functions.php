<?php
/**
 * All helper functions for this plugin are bundle here
 */

/**
 * Prepend some widget titles with an icon
 *
 * @param ElggWidget $widget the current widget
 * @param string     $title  the current title
 *
 * @return string
 */
function theme_eersel_prepend_widget_title_with_icon(ElggWidget $widget, $title) {
	
	if (!empty($widget) && elgg_instanceof($widget, "object", "widget")) {
		
		switch ($widget->handler) {
			case "activity":
			case "group_river_widget":
			case "river_widget":
			case "index_activity":
			case "thewire":
			case "thewire_post":
			case "thewire_groups":
			case "index_thewire":
			case "content_by_tag":
				$title = "<i class='fa fa-stack-exchange mrs'></i>" . $title;
				break;
			case "group_forum_topics":
			case "start_discussion":
			case "discussion":
				$title = "<i class='fa fa-comments-o mrs'></i>" . $title;
				break;
			case "group_files":
			case "file_tree":
			case "filerepo":
			case "index_file":
				$title = "<i class='fa fa-folder-open mrs'></i>" . $title;
				break;
			case "group_members":
			case "index_members_online":
			case "index_members":
				$title = "<i class='fa fa-user mrs'></i>" . $title;
				break;
			case "search":
				$title = "<i class='fa fa-search mrs'></i>" . $title;
				break;
			case "group_related":
			case "a_users_groups":
			case "index_groups":
			case "group_invitations":
			case "featured_groups":
				$title = "<i class='fa fa-users mrs'></i>" . $title;
				break;
			case "twitter_search":
				$title = "<i class='fa fa-twitter mrs'></i>" . $title;
				break;
			case "tagcloud":
				$title = "<i class='fa fa-tags mrs'></i>" . $title;
				break;
			case "pages":
			case "index_pages":
				$title = "<i class='fa fa-code-fork mrs'></i>" . $title;
				break;
			case "events":
				$title = "<i class='fa fa-calendar mrs'></i>" . $title;
				break;
			case "bookmarks":
			case "index_bookmarks":
				$title = "<i class='fa fa-star-o mrs'></i>" . $title;
				break;
			case "blog":
				$title = "<i class='fa fa-pencil-square mrs'></i>" . $title;
				break;
			case "etherpad":
				$title = "<i class='fa fa-globe mrs'></i>" . $title;
				break;
			case "album_view":
			case "latest_photos":
				$title = "<i class='fa fa-film mrs'></i>" . $title;
				break;
			case "videolist":
				$title = "<i class='fa fa-video-camera mrs'></i>" . $title;
				break;
			case "latestPolls":
			case "poll":
			case "poll_individual":
				$title = "<i class='fa fa-question mrs'></i>" . $title;
				break;
			case "birthdays":
				$title = "<i class='fa fa-gift mrs'></i>" . $title;
				break;
			case "free_html":
				$title = "<i class='fa fa-link mrs'></i>" . $title;
				break;
		}
	}
	
	return $title;
}

function theme_eersel_get_slider_images() {
	static $result;
	
	if (!isset($result)) {
		$result = false;
		
		$plugin = elgg_get_plugin_from_id("theme_eersel");
		
		$fh = new ElggFile();
		$fh->owner_guid = $plugin->getGUID();
		
		$prefix = "slider_images/";
		
		for ($i = 1; $i <= 5; $i++) {
			
			$fh->setFilename($prefix . $i . ".jpg");
			if ($fh->exists()) {
				$mod_time = filemtime($fh->getFilenameOnFilestore());
				
				if (!$result) {
					$result = array();
				}
				
				$result[$i] = "theme_eersel/slider/" . $i . "/" . $mod_time . ".jpg";
			}
		}
	}
	
	return $result;
}

/**
 * Get the activity count since last action of the previous login of the user
 *
 * @param ElggGroup $group the group to check for
 *
 * @return false|int
 */
function theme_eersel_get_group_activity_count(ElggGroup $group) {
	
	if (!($group instanceof ElggGroup)) {
		return false;
	}
	
	if (!elgg_is_logged_in() || empty($_SESSION['theme_eersel_activity_last_action'])) {
		return false;
	}
	
	if (!is_array($_SESSION['theme_eersel_group_activity_counter'])) {
		$_SESSION['theme_eersel_group_activity_counter'] = [];
	}
	
	if (isset($_SESSION['theme_eersel_group_activity_counter'][$group->getGUID()])) {
		return $_SESSION['theme_eersel_group_activity_counter'][$group->getGUID()];
	}
	
	// get river activity since last action of user
	$dbprefix = elgg_get_config('dbprefix');
	
	$options = [
		'count' => true,
		'joins' => [
			"JOIN {$dbprefix}entities oe ON rv.object_guid = oe.guid",
		],
		'wheres' => [
			"(rv.object_guid = {$group->getGUID()} || oe.container_guid = {$group->getGUID()})",
		],
		'posted_time_lower' => (int) $_SESSION['theme_eersel_activity_last_action'],
	];
	
	$_SESSION['theme_eersel_group_activity_counter'][$group->getGUID()] = elgg_get_river($options);
	
	return $_SESSION['theme_eersel_group_activity_counter'][$group->getGUID()];
}
