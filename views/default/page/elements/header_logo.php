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

<div class="theme-eersel-slider">
	<ul class="slides">
		<?php
	   
			$slider_images = theme_eersel_get_slider_images();
			if (!empty($slider_images)) {
				$slider_images_keys = array_rand($slider_images, 3);
				
				foreach ($slider_images_keys as $key) {
					echo "<li>";
					echo elgg_view("output/img", array("src" => $slider_images[$key]));
					echo "</li>";
				}
			}
	   
		?>
	</ul>
</div>
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
