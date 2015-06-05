<?php
/**
 * CSS buttons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* **************************
	BUTTONS
************************** */

/* Base */
.elgg-button {
	font-size: 14px;
	width: auto;
	padding: 2px 4px;
	cursor: pointer;
	outline: none;
}
a.elgg-button {
	padding: 3px 6px;
}

/* Submit: This button should convey, "you're about to take some definitive action" */
.elgg-button-submit {
	color: white;
	text-decoration: none;
	border: 1px solid #<?php echo THEME_COLOR_1; ?>;
	background: #<?php echo THEME_COLOR_1; ?>;
}

.elgg-button-submit:hover {
	border-color: #<?php echo THEME_COLOR_1;?>;
	text-decoration: none;
	color: white;
	background: #<?php echo THEME_COLOR_1;?>;
}

.elgg-button-submit.elgg-state-disabled {
	background: #999;
	border-color: #999;
	cursor: default;
}

/* Cancel: This button should convey a negative but easily reversible action (e.g., turning off a plugin) */
.elgg-button-cancel {
	color: #FFF;
	background: #<?php echo THEME_COLOR_1; ?>;
	border:1px solid #<?php echo THEME_COLOR_1; ?>;
}
.elgg-button-cancel:hover {
	background: #<?php echo THEME_COLOR_1; ?>;
	border-color: #<?php echo THEME_COLOR_1; ?>;
	color: #FFF;
	text-decoration: none;
}

/* Action: This button should convey a normal, inconsequential action, such as clicking a link */
.elgg-button-action {
	background: #<?php echo THEME_COLOR_1; ?>;
	border:1px solid #<?php echo THEME_COLOR_1; ?>;
	color: #FFF;
	padding: 2px 15px;
	text-align: center;
	text-decoration: none;
	cursor: pointer;
}

.elgg-button-action:hover,
.elgg-button-action:focus {
	background: #<?php echo THEME_COLOR_1; ?>;
	text-decoration: none;
	color: #FFF;
	border: 1px solid #<?php echo THEME_COLOR_1; ?>;
}

/* Delete: This button should convey "be careful before you click me" */
.elgg-button-delete {
	color: #bbb;
	text-decoration: none;
	border: 1px solid #333;
	background: #555 url(<?php echo elgg_get_site_url(); ?>_graphics/button_graduation.png) repeat-x left 10px;
	text-shadow: 1px 1px 0px black;
}
.elgg-button-delete:hover {
	color: #999;
	background-color: #333;
	background-position: left 10px;
	text-decoration: none;
}

.elgg-button-dropdown {
	padding:3px 6px;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: white;
	border:1px solid #71B9F7;
	
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
	
	-webkit-box-shadow: 0 0 0;
	-moz-box-shadow: 0 0 0;
	box-shadow: 0 0 0;
	
	/*background-image:url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png);
	background-position:-150px -51px;
	background-repeat:no-repeat;*/
}

.elgg-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.elgg-button-dropdown:hover {
	background-color:#71B9F7;
	text-decoration:none;
}

.elgg-button-dropdown.elgg-state-active {
	background: #ccc;
	outline: none;
	color: #333;
	border:1px solid #ccc;
	
	-webkit-border-radius:4px 4px 0 0;
	-moz-border-radius:4px 4px 0 0;
	border-radius:4px 4px 0 0;
}
