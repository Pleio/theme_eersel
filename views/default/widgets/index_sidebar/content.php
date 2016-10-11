<?php

$links = elgg_get_plugin_setting("links", "theme_eersel");
$links = json_decode($links, true);

if ($links) {

	$title = "<div class='sidebar-social'>";
	$title .= "<a href='http://www.facebook.com/gemeenteEersel' target='_blank'><i class='fa fa-facebook-square'></i></a>";
	$title .= "<a href='http://www.twitter.com/gemeersel' target='_blank'><i class='fa fa-twitter-square'></i></a>";
	$title .= "<a href='https://www.linkedin.com/company/gemeente-eersel' target='_blank'><i class='fa fa-linkedin-square'></i></a>";
	$title .= "<a href='https://www.youtube.com/user/GemEersel' target='_blank'><i class='fa fa-youtube-square'></i></a>";
	$title .= "</div>";
	
	$title .= "<h3>" . elgg_echo('theme_eersel:user_sidebar:links') . "</h3>";
	
	$body = "<ul>";
	foreach ($links as $link) {
		if (empty($link["href"]) || empty($link["name"])) {
			continue;
		}
		
		$body .= "<li>";
		$body .= "<i class='fa fa-caret-right mrm'></i>";
		$body .= elgg_view("output/url", array(
			"text" => $link["name"],
			"href" => $link["href"]
		));
		$body .= "</li>";
	}
	$body .= "</ul>";
	
	echo elgg_view_module("theme-eersel-sidebar", "", $title . $body, array("class" => "snel_naar"));
}