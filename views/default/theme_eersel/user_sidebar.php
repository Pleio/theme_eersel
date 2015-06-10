<?php

$user = elgg_get_logged_in_user_entity();
if (!$user) {
	return;
}

// plugin links
$links = elgg_get_plugin_setting("links", "theme_eersel");
$links = json_decode($links, true);

if ($links) {

	$title = "<div class='sidebar-social'>";
	$title .= elgg_view_icon('facebook-square');
	$title .= elgg_view_icon('twitter-square');
	$title .= elgg_view_icon('linkedin-square');
	$title .= elgg_view_icon('youtube-square');
	$title .= "</div>";
	
	$title .= "<h3>" . elgg_echo('theme_eersel:user_sidebar:links') . "</h3>";
	
	$body = "<ul>";
	foreach ($links as $link) {
		if (empty($link["href"]) || empty($link["name"])) {
			continue;
		}
		
		$body .= "<li>";
		$body .= elgg_view_icon('caret-right', 'mrm');
		$body .= elgg_view("output/url", array(
			"text" => $link["name"],
			"href" => $link["href"]
		));
		$body .= "</li>";
	}
	$body .= "</ul>";
	
	echo elgg_view_module("theme-eersel-sidebar", "", $title . $body, array("class" => "snel_naar"));
}

// my groups
if (elgg_is_active_plugin('groups')) {
	$title = elgg_echo('theme_eersel:user_sidebar:groups');
	$body = "";
	
	$options = array(
		'type' => 'group',
		'relationship' => 'member',
		'relationship_guid' => $user->getGUID(),
		'limit' => 5
	);
	$groups = elgg_get_entities_from_relationship($options);
	
	if (!empty($groups)) {
		$body .= "<table>";
		foreach ($groups as $group) {
			$body .= "<tr>";
			$body .= "<td>" . elgg_view_entity_icon($group, 'tiny', array("link_class" => "mrm")) . "</td>";
			$body .= "<td>" . elgg_view("output/url", array(
				"text" => $group->name,
				"href" => $group->getURL()
			)) . "</td>";
			$body .= "</tr>";
		}
		$body .= "</table>";
	}
	
	$body .= elgg_view_icon('plus', 'mrm');
	$body .= elgg_view("output/url", array("text" => elgg_echo("groups:add"), "href" => "groups/add"));
	$body .= "<br />";
	$body .= elgg_view("output/url", array("text" => elgg_echo("groups:all"), "href" => "groups/all"));
	
	echo elgg_view_module("theme-eersel-sidebar", $title, $body, array("class" => "groups"));
}

// my friends
$title = elgg_echo('theme_eersel:user_sidebar:friends');
$body = "";

$options = array(
	'type' => 'user',
	'relationship' => 'friend',
	'relationship_guid' => $user->getGUID(),
	'limit' => 5
);
$friends = elgg_get_entities_from_relationship($options);

if (!empty($friends)) {
	$body .= "<table>";
	foreach ($friends as $friend) {
		$body .= "<tr>";
		$body .= "<td>" . elgg_view_entity_icon($friend, 'tiny', array("class" => "mrm")) . "</td>";
		$body .= "<td>" . elgg_view("output/url", array(
			"text" => $friend->name,
			"href" => $friend->getURL()
		)) . "</td>";
		$body .= "</tr>";
	}
	$body .= "</table>";
}

$body .= elgg_view("output/url", array("text" => elgg_echo("members"), "href" => "members/all"));
echo elgg_view_module("theme-eersel-sidebar", $title, $body, array("class" => "friends"));

// my files
if (elgg_is_active_plugin('file')) {
	$title = elgg_echo('theme_eersel:user_sidebar:files');
	$body = "";
	
	$options = array(
		'type' => 'object',
		'subtype' => 'file',
		'owner_guid' => $user->getGUID(),
		'limit' => 5
	);
	$files = elgg_get_entities_from_relationship($options);
	
	if (!empty($files)) {
		$body .= "<ul>";
		foreach ($files as $file) {
			$body .= "<li>" . elgg_view("output/url", array("text" => $file->title, "href" => $file->getURL())) . "</li>";
		}
		$body .= "</ul>";
	}
	
	$body .= elgg_view("output/url", array("text" => elgg_echo("file:all"), "href" => "file/all"));
	
	echo elgg_view_module("theme-eersel-sidebar", $title, $body, array("class" => "files"));
}
