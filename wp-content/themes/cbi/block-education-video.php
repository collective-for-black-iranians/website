<?php

if (! empty($block['data']['image'])) {
	$img_id = $block['data']['image'];
	list($img_src) = wp_get_attachment_image_src($img_id, 'large');
}

?>
<div class="block-education-video">
	<?php if (! empty($block['data']['title'])) { ?>
		<h3><?php echo $block['data']['title']; ?></h3>
	<?php } ?>
	<?php if (! empty($img_src)) { ?>
		<div class="education-video-image">
			<img src="<?php echo $img_src; ?>" alt="">
		</div>
	<?php } ?>
</div>
