<?php

$slider = "<div>";
$slider .= elgg_view("output/longtext", array("value" => elgg_echo("theme_eersel:slider_upload:description")));
$slider .= "</div>";

$slider .= elgg_view_form("theme_eersel/slider_upload", array("enctype" => "multipart/form-data"));

echo elgg_view_module("inline", elgg_echo("theme_eersel:slider_upload"), $slider);

$links = elgg_view_form("theme_eersel/links");

echo elgg_view_module("inline", elgg_echo("Links"), $links);