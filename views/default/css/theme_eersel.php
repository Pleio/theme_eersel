<?php
?>
/* <style> */

.elgg-module-walledgarden .elgg-menu-general {
	font-size: 11px;
}

.elgg-module-walledgarden-login .fa-caret-down {
	font-size: 48px;
	color: #<?php echo THEME_COLOR_5; ?>;
	left: 0;
    margin: 0 auto;
    position: absolute;
    text-align: center;
    top: 10px;
    width: 100%;
}

.elgg-menu-topbar .elgg-menu-item-profile a {
	padding-top: 0px;
}

.elgg-module-aside a {
	color: white;
}

.elgg-module-aside h3 {
	font-size: 14px;
}

.elgg-menu-groups-my-status li a {
	display: block;
	line-height: 31px;
	font-size: 14px;
	color: #<?php echo THEME_COLOR_1; ?>;
	background-color: #<?php echo THEME_COLOR_5; ?>;
	margin: 3px 0 5px 0;
	padding: 2px 4px 2px 8px;
}

.elgg-menu-groups-my-status li a:hover {
	background-color: #<?php echo THEME_COLOR_1; ?>;
	color: white;
	text-decoration: none;
}
.elgg-menu-groups-my-status li.elgg-state-selected > a {
	background-color: #<?php echo THEME_COLOR_1; ?>;
	color: white;
}
#profile-owner-block {
	background: transparent;
}

#profile-owner-block a.elgg-button-action {
	display: block;
	border: 1px solid #<?php echo THEME_COLOR_2; ?>;
	background: #<?php echo THEME_COLOR_2; ?>;
	font-weight: normal;
	text-align: left;
	padding: 2px 4px 2px 8px;
	line-height: 31px;
	color: #<?php echo THEME_COLOR_1;?>;
}

#profile-owner-block a.elgg-button-action:hover {
	border-color: #<?php echo THEME_COLOR_1;?>;
	text-decoration: none;
	color: white;
	background: #<?php echo THEME_COLOR_1;?>;
}


.elgg-search-header {
	position: relative;
	bottom: auto;
	right: auto;
	margin: 5px;
	width: 260px;
}

.theme-eersel-search-header-input {
	width: 100%;
}

.theme-eersel-search-header-input input.search-input[type="text"] {
	width: 100%;
	border-left: 5px solid white;
	background: white;
	color: #CCC;
	padding: 0;
}

.theme-eersel-search-header-input input[type="text"]:focus {
	color: #<?php echo THEME_COLOR_1; ?>;
}

.theme-eersel-header-search {
	background: #<?php echo THEME_COLOR_5; ?>;
	position: absolute;
	right: 0;
	bottom: 30px;
	width: 26%;
	height: 31px;
	padding: 0;
}

.theme-eersel-header-search table {
	width: 100%;
}
.theme-eersel-header-search form {
	margin: 5px;
}
	

form.elgg-search,
.search-advanced-type-selection-dropdown {
	border-color: #<?php echo THEME_COLOR_1; ?>;
}

.search-advanced-type-selection-dropdown a:hover,
.search-advanced-type-selection > li > a {
	background: #<?php echo THEME_COLOR_1; ?>;
	white-space: nowrap;
}

.elgg-widget-content > .fa-caret-down {
	font-size: 40px;
    left: 0;
    position: absolute;
    text-align: center;
    top: 20px;
    width: 100%;
    color: #<?php echo THEME_COLOR_7; ?>;
}

.elgg-menu-widget {
	display: none;
}

.elgg-module-widget:hover .elgg-menu-widget {
	display: block;
}

.elgg-widget-content h2,
.elgg-widget-content h3 {
	font-size: 13px;
	color: #<?php echo THEME_COLOR_2; ?>;
}

.profile.elgg-col-2of3 {
	width: 72%;
}

.profile .elgg-inner {
	border: none;
}

#profile-details {
	padding: 0;
}

#profile-details .wire-status,
#profile-details h2 {
	display: none;
}

#profile-details .even,
#profile-details .odd,
.groups-profile-fields .odd,
.groups-profile-fields .even {
	background: #<?php echo THEME_COLOR_3; ?>;
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.15);
}

.subsite-manager-account-dropdown {
	border: 0;
	padding: 15px 20px;
}

.elgg-river-comments-tab,
#profile-details .even b,
#profile-details .odd b,
.groups-profile-fields .odd b,
.groups-profile-fields .even b,
.profile-aboutme-title {
	color: #<?php echo THEME_COLOR_1; ?>;
}

#custom_fields_userdetails .ui-accordion-content {
	border: none;
}

.groups-stats {
	width: 190px;
}

.event_manager_event_list_icon_month {
    background: none repeat scroll 0 0 #<?php echo THEME_COLOR_1; ?>;
    border: none;
}

.event_manager_event_list_icon_day {
    background: none repeat scroll 0 0 #FFFFFF;
    border-bottom: none;
    border-left: none;
    border-right: none;
}

.event_manager_event_actions {
	background-color: #<?php echo THEME_COLOR_5; ?>;
	color: white;
	font-weight: normal;
	padding: 5px 20px 5px 5px;
	background-position: 95% center;
	line-height: 30px;
}

.event-manager-event-view-search-attendees .elgg-icon-search {
	line-height: 30px;
}

.event_manager_event_actions_drop_down {
	margin-top: 5px;
}

.elgg-sidebar > .elgg-menu {
	padding: 20px;
}

#elgg-widget-col-1 {
	width: 380px !important;
}
#elgg-widget-col-2 {
	width: 440px !important;
	margin-right: 20px;
}

.elgg-widget-more {
	text-align: right;
	display: block;
}

.elgg-module-theme-eersel-sidebar {
	margin-bottom: 20px;
    padding-bottom: 30px;
}

.elgg-module-theme-eersel-sidebar > .elgg-head > h3 {
	color: #333;
	font-size: 14px;
	padding-bottom: 5px;
}

.elgg-module-theme-eersel-sidebar .elgg-body a {
	color: #666;
}

.elgg-module-theme-eersel-sidebar .elgg-body a:hover {
	color: #AAA;
	text-decoration: none;
}

.elgg-module-theme-eersel-sidebar .fa {
	color: #<?php echo THEME_COLOR_1; ?>;
}

.elgg-module-theme-eersel-sidebar.snel_naar {
	background: url('<?php echo THEME_GRAPHICS; ?>snel_naar.png') bottom left no-repeat;
	width: 229px;
	height: 293px;
	padding: 0;
	margin: 0 0 20px;
}

.elgg-module-theme-eersel-sidebar.snel_naar > .elgg-body {
	-ms-transform: rotate(-2deg); /* IE 9 */
    -webkit-transform: rotate(-2deg); /* Chrome, Safari, Opera */
    transform: rotate(-2deg);
}
.elgg-module-theme-eersel-sidebar.groups {
	background: url('<?php echo THEME_GRAPHICS; ?>mijn_1.png') bottom left no-repeat;
}
.elgg-module-theme-eersel-sidebar.friends{
	background: url('<?php echo THEME_GRAPHICS; ?>mijn_2.png') bottom left no-repeat;
}
.elgg-module-theme-eersel-sidebar.files {
	background: url('<?php echo THEME_GRAPHICS; ?>mijn_3.png') bottom left no-repeat;
}

.elgg-form-groups-find .elgg-input-text,
.elgg-form-groups-search .elgg-input-text {
	width: 150px;
	font-size: 100%;
	height: 26px;
}

.elgg-sidebar .elgg-button-submit {
	background-color: #<?php echo THEME_COLOR_2; ?>;
	border-color: #<?php echo THEME_COLOR_2; ?>;
	color: #<?php echo THEME_COLOR_1; ?>;
}

.groups-profile-fields {
	position: relative;
}

.groups-profile-fields .even > b:first-child,
.groups-profile-fields .odd > b:first-child {
	display: block;
}

.groups-profile-fields h1 {
	background: #<?php echo THEME_COLOR_6; ?>;
	color: white;
	font-weight: normal;
	font-size: 18px;
	text-align: center;
	line-height: 30px;
	text-transform: uppercase;
}

.groups-profile-fields .fa-caret-down {
	color: #<?php echo THEME_COLOR_6; ?>;
	position: absolute;
	top: 10px;
	font-size: 48px;
	left: 0;
    margin: 0 auto;
    text-align: center;
    width: 100%;
}

.profile.elgg-col-2of3 {
	position: relative;
}

.profile.elgg-col-2of3 > .elgg-inner > .fa-caret-down{
	color: #<?php echo THEME_COLOR_7; ?>;
	position: absolute;
	top: 8px;
	font-size: 48px;
	left: 0;
    margin: 0 auto;
    text-align: center;
    width: 100%;
}

.elgg-owner-block-group {
	padding-top: 20px;
}

.elgg-owner-block-group .elgg-image img {
	width: 80px;
	height: 80px;
}

#custom_fields_userdetails > h3 {
	padding: 5px;
	border-bottom: 2px solid #<?php echo THEME_COLOR_1; ?>;
	margin-bottom: 10px;
}

.wire-status {
	margin: 20px 20px 0px;
	padding: 5px;
}

.profile-aboutme-title {
	background: #<?php echo THEME_COLOR_3; ?>;
}

.profile-aboutme-contents {
	background: #<?php echo THEME_COLOR_3; ?>;
}

#widget_profile_completeness_progress_bar {
	background: #<?php echo THEME_COLOR_2; ?>;
}

#widget_profile_completeness_progress {
	color: white;
}

#thewire_tools_search_form .elgg-button-submit {
	margin-top: 10px;
}

.elgg-widget-instance-thewire_post #thewire-submit-button {
	border-color: #<?php echo THEME_COLOR_1;?>;
	background: #<?php echo THEME_COLOR_1;?>;
}

.elgg-widget-instance-thewire_post #thewire-submit-button:hover {
	border-color: #<?php echo THEME_COLOR_6; ?>;
	background-color: #<?php echo THEME_COLOR_6; ?>;
}

.elgg-sidebar > .elgg-owner-block {
	padding-top: 20px;
}
.elgg-sidebar > .elgg-owner-block .elgg-head a {
	color: white;
}

.ui-datepicker-header {
	background: #<?php echo THEME_COLOR_7; ?>;
	border-bottom: 1px solid #<?php echo THEME_COLOR_7; ?>;
}

.ui-datepicker {
	border-color: #<?php echo THEME_COLOR_7; ?>;
}

.ui-datepicker-calendar .ui-state-default,
.ui-datepicker th {
	color: #<?php echo THEME_COLOR_7; ?>;
}

.theme-eersel-tape {
	position: absolute;
	right: 10px;
    top: -20px;
}

.theme-eersel-topbar-status-new {
	position: absolute;
	background: #498f96;
	color: white;
	border-radius: 10px !important;
	position: absolute;

	font-size: 8px;
	border-radius: 20px !important;
	min-width: 16px;
	height: 16px;
	text-align: center;
	top: 0;
	right: 5px;
}

.theme-eersel-widget-blauw,
.elgg-widget-instance-index_thewire {
	padding: 0;
}

.theme-eersel-widget-blauw .elgg-menu-widget > li,
.elgg-widget-instance-index_thewire .elgg-menu-widget > li {
	top: 0;
}

.theme-eersel-widget-blauw .elgg-button,
.elgg-widget-instance-index_thewire .elgg-button {
	background: #<?php echo THEME_COLOR_7; ?>;
	border-color: #<?php echo THEME_COLOR_7; ?>;
	color: white;
}

.theme-eersel-widget-blauw a,
.elgg-widget-instance-index_thewire a {
	color: #<?php echo THEME_COLOR_7; ?>;
}

.theme-eersel-widget-groen {
	padding: 0;
	background: #<?php echo THEME_COLOR_1; ?>;
}

.theme-eersel-widget-groen .elgg-menu-widget > li {
	top: 0;
}

.theme-eersel-widget-groen .elgg-widget-content {
	background: #<?php echo THEME_COLOR_2; ?>;
}

.theme-eersel-widget-groen .elgg-button {
	color: white;
}

.theme-eersel-widget-groen .event_manager_event_actions,
.theme-eersel-widget-groen a {
	color: #<?php echo THEME_COLOR_1; ?>;
}

.theme-eersel-widget-groen h3,
.theme-eersel-widget-groen h3 a {
	color: #333;
}

.theme-eersel-widget-groen.elgg-module-widget > .elgg-head a {
	color: #<?php echo THEME_COLOR_2; ?>;
}

.theme-eersel-widget-groen.elgg-module-widget > .elgg-head h3,
.theme-eersel-widget-groen.elgg-module-widget > .elgg-head h3 a {
	color: #FFF;
	text-align: center
}

.theme-eersel-widget-geel,
.theme-eersel-widget-geel .elgg-body {
	background: transparent !important;
	padding: 0;
}
.theme-eersel-widget-geel .elgg-widget-content {
	padding: 0;
}

.theme-eersel-widget-geel .elgg-list,
.theme-eersel-widget-geel .elgg-list > li {
	border: none;
}

.theme-eersel-widget-geel .elgg-list > li {
	background: #<?php echo THEME_COLOR_3; ?>;
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.15);
	margin-bottom: 5px;
    padding: 5px 10px;
}

.theme-eersel-widget-geel a {
	color: #333;
}

.elgg-widget-instance-content_by_tag .fa-chevron-circle-right {
	color: #7FB358;
}

.widget_manager_hide_header_admin > .elgg-head {
	display: none;
}

.widget_manager_hide_header_admin:hover  > .elgg-head {
	display: block;
}

.widget_manager_hide_header,
.widget_manager_hide_header_admin {
	padding: 0;
}

.widget_manager_hide_header .elgg-menu-widget > li,
.widget_manager_hide_header_admin .elgg-menu-widget > li {
	top: 0;
}

.elgg-page-topbar > .elgg-inner > .elgg-search {
    background: white;
    border-color: white;
    left: 288px;
    position: absolute;
    top: 33px;
}

.elgg-search input[type="text"] {
	width: 380px;
}

.elgg-page-topbar > .elgg-inner > .elgg-search input[type="text"] {
	border: none;
	background: none;
	color: #333;
}

.elgg-page-topbar .search-advanced-type-selection > li > a {
	background: white;
	color: #333;
	font-size: 12px;
}

.sidebar-social .fa {
	font-size: 30px;
}
.sidebar-social .fa-facebook-square {
	color: #0c508b;
}
.sidebar-social .fa-twitter-square {
	color: #00a5e4;
}
.sidebar-social .fa-youtube-square {
	color: #ee1124;
}
.sidebar-social .fa-linkedin-square {
	color: #196293;
}
.sidebar-social .fa:hover {
	color: #1a1a19;
}