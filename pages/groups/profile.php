<?php

elgg_load_library('elgg:groups');

$guid = (int) get_input('guid');
elgg_set_page_owner_guid($guid);

// turn this into a core function
global $autofeed;
$autofeed = true;

elgg_push_context('group_profile');

$group = get_entity($guid);
if (!elgg_instanceof($group, 'group')) {
	forward('', '404');
}

elgg_push_breadcrumb(elgg_echo('groups'), "groups/all");
elgg_push_breadcrumb($group->name);

groups_register_profile_buttons($group);

$content = elgg_view('groups/profile/layout', array('entity' => $group));
$sidebar = '';

if (group_gatekeeper(false)) {
	if (elgg_is_active_plugin('search')) {
		$sidebar .= elgg_view('groups/sidebar/search', array('entity' => $group));
	}
	$sidebar .= elgg_view('groups/sidebar/members', array('entity' => $group));

	$subscribed = false;
	if (elgg_is_active_plugin('notifications')) {
		global $NOTIFICATION_HANDLERS;

		foreach ($NOTIFICATION_HANDLERS as $method => $foo) {
			$relationship = check_entity_relationship(elgg_get_logged_in_user_guid(),
					'notify' . $method, $guid);

			if ($relationship) {
				$subscribed = true;
				break;
			}
		}
	}

	$sidebar .= elgg_view('groups/sidebar/my_status', array(
		'entity' => $group,
		'subscribed' => $subscribed
	));
}

$params = array(
	'content' => $content,
	'sidebar' => $sidebar,
	'title' => $group->name,
	'filter' => '',
);
$body = elgg_view_layout('content', $params);

echo elgg_view_page($group->name, $body);
