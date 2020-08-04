<?php

if (! empty($block['data']['image'])) {
	$img_id = $block['data']['image'];
	list($img_src) = wp_get_attachment_image_src($img_id, 'large');
}

?>
<div class="block-advocacy-fact">
	<?php if (! empty($img_src)) { ?>
		<div class="advocacy-fact-image">
			<img src="<?php echo $img_src; ?>" alt="">
		</div>
	<?php } ?>
</div>
