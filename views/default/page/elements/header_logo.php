<?php
/**
 * Elgg header logo
 */

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();


?>

<h1>
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>" title="<?php echo $site_name; ?>"><img src="<?php echo elgg_get_site_url(); ?>mod/theme_eersel/_graphics/logo.png" alt="<?php echo $site_name; ?>"/></a>
</h1>

<?php if (elgg_in_context("index")) { ?>

<style type="text/css">
	.elgg-page-header > .elgg-inner,
	.elgg-page-header {
		height: 20px;
	}
	
	.elgg-sidebar-alt {
		margin-top: 150px;
	}
	.elgg-widget-add-control {
		right: 20px;
		top: 0;
		position: absolute;
	}
	
	.elgg-layout {
		padding-top: 0;
	}
	
	.elgg-main {
		padding-top: 0px;
	}
	
	.elgg-sidebar,
	.elgg-sidebar-alt {
		display: none;
	}
	
	#elgg-widget-col-3 {
		width: 23% !important;
		padding-top: 45px;
	}
	#elgg-widget-col-2 {
		width: 50% !important;
		margin-left: 2% !important;
	}
	#elgg-widget-col-1 {
		padding-top: 45px;
		width: 23% !important;
	}
</style>
<?php } elseif (!elgg_in_context("groups") && !elgg_in_context("profile")) { ?>
<style type="text/css">
	.elgg-page-body {
		background: url('<?php echo THEME_GRAPHICS; ?>bg.jpg') top center repeat-y;
	}
	.elgg-page-default {
		background-position: center 30px ;
	}
</style>
<?php } ?>
