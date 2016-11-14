<?php
/**
 * extend the icon view with an acivity counter
 */

$entity = elgg_extract('entity', $vars);
if (!($entity instanceof ElggGroup)) {
	return;
}

if (!elgg_in_context('theme_eersel_group_activity')) {
	return;
}

$activity_count = theme_eersel_get_group_activity_count($entity);
if (empty($activity_count)) {
	return;
}

echo "<span class='theme-eersel-group-activity-count' title='" . elgg_echo('theme_eersel:group:icon:activity', [$activity_count]) . "'>{$activity_count}</span>";
