<?php
?>
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