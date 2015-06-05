<?php
if (!elgg_is_logged_in()) {
?>
<div id='theme-eersel-images-logo-container'>
	<div id='theme-eersel-images-logo'></div>
</div>
<?php } ?>

<div id='theme-eersel-images-potlood-container'>
	<?php if (!elgg_is_logged_in()) {?>
	<div id='theme-eersel-images-potlood-inloggen'></div>
	<?php } elseif (elgg_get_site_url() == current_page_url()) { ?>
	<div id='theme-eersel-images-potlood-weten'></div>
	<?php } else { ?>
	<div id='theme-eersel-images-potlood'></div>
	<?php } ?>
</div>

<div id='theme-eersel-images-plant'></div>

<div id='theme-eersel-images-textbook'></div>