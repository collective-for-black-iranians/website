<?php

if (! empty($block['data']['image'])) {
	$img_id = $block['data']['image'];
	list($img_src) = wp_get_attachment_image_src($img_id, 'large');
}

?>
<div class="block-voices-link">
	<?php if (! empty($block['data']['title'])) { ?>
		<h3><?php echo $block['data']['title']; ?></h3>
	<?php } ?>
	<div class="voices-link-image">
		<?php if (! empty($block['data']['url'])) { ?>
			<a href="<?php echo $block['data']['url']; ?>">
		<?php } ?>
		<?php if (! empty($img_src)) { ?>
			<img src="<?php echo $img_src; ?>" alt="">
		<?php } ?>
		<?php if (! empty($block['data']['url'])) { ?>
			</a>
		<?php } ?>
	</div>
</div>
