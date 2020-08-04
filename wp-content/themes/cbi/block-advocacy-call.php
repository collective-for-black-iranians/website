<?php

if (! empty($block['data']['image'])) {
	$img_id = $block['data']['image'];
	list($img_src) = wp_get_attachment_image_src($img_id, 'large');
}

?>
<div class="block-advocacy-call">
	<div class="advocacy-call-column">
		<h3><?php echo $block['data']['title']; ?></h3>
		<div class="text-body">
			<?php echo nl2br($block['data']['description']); ?>
		</div>
	</div>
	<div class="advocacy-call-column">
		<img src="<?php echo $img_src; ?>" alt="">
	</div>
</div>
