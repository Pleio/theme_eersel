<?php
/**
 * Walled garden CSS
 */

$url = elgg_get_site_url();

?>
/* <style> /**/

body {
	background: url('<?php echo THEME_GRAPHICS; ?>bg.jpg') top center repeat-y;
}

.elgg-page-walledgarden {
	background: url('<?php echo THEME_GRAPHICS; ?>bg_head.jpg') top center no-repeat;
	padding-top: 0px;
	width: 100%;
	height: 100%;
	min-height: 838px;
}

.elgg-body-walledgarden {
	margin: 0 auto;
	position: relative;
	width: 500px;
}
.elgg-module-walledgarden {
	position: absolute;
	top: 300px;
	background: white;
	width: 432px;
	height: 480px;
	background: url('<?php echo THEME_GRAPHICS; ?>form_inlog.png') top center no-repeat;
}
.elgg-module-walledgarden > .elgg-body {
	width: 280px;
	position: absolute;
	top: 200px;
	left: 100px;
	
	-ms-transform: rotate(-2deg); /* IE 9 */
    -webkit-transform: rotate(-2deg); /* Chrome, Safari, Opera */
    transform: rotate(-2deg);
}
.elgg-module-walledgarden .elgg-module .elgg-body {
	padding: 20px 10px 10px;
}

#elgg-walledgarden-register > .elgg-body,
#elgg-walledgarden-lost-password > .elgg-body {
	padding: 0px;
}

#elgg-walledgarden-register > .elgg-body > .elgg-inner > h2,
#elgg-walledgarden-lost-password > .elgg-body > .elgg-inner > h3 {
	background: #<?php echo THEME_COLOR_5; ?>;
	text-align: center;
	padding: 5px;
	color: white;
	text-transform: uppercase;
	font-weight: normal;
	font-size: 18px;
}

.elgg-module-walledgarden-login > .elgg-head {
	background: #<?php echo THEME_COLOR_5; ?>;
	text-align: center;
	padding: 5px;
}
.elgg-col > .elgg-inner {
	margin: 0 0 0 5px;
}
.elgg-col:first-child > .elgg-inner {
	margin: 0 5px 0 0;
}
.elgg-col > .elgg-inner {
	padding: 0 8px;
}

.elgg-walledgarden-single > .elgg-body {
	padding: 0 18px;
}

.elgg-module-walledgarden-login {
	margin: 0;
}

#elgg-walledgarden-register {
	top: 330px;
	
}
#elgg-walledgarden-register > .elgg-body > .elgg-inner > form {
	max-height: 280px;
	overflow: auto;
}

#profile_manager_register_right,
#profile_manager_register_left {
	width: inherit;
}

.elgg-body-walledgarden h3 {
	font-size: 18px;
	color: white;
	text-transform: uppercase;
	font-weight: normal;
}

.elgg-heading-walledgarden {
	margin-top: 60px;
	line-height: 1.1em;
}

h1, h2, h3, h4, h5, h6 {
	color: #666;
}

a {
	color: #999;
}
