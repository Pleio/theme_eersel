<?php
?>
<div class="theme-eersel-slider">
	<ul class="slides center">
		<?php
	   
			$slider_images = theme_eersel_get_slider_images();
			if (!empty($slider_images)) {
				foreach ($slider_images as $image) {
					echo "<li>";
					echo elgg_view("output/img", array("src" => $image, 'class' => 'hidden'));
					echo "</li>";
				}
			}
	   
		?>
	</ul>
</div>
<script type='text/javascript'>
$(document).ready(function() {
	$(".theme-eersel-slider").flexslider({
    	animation: "slide"
  	}).find('.hidden').removeClass('hidden');
  	
});
</script>