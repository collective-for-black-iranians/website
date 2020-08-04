<?php

if (! empty($block['data']['image'])) {
	$img_id = $block['data']['image'];
	list($img_src) = wp_get_attachment_image_src($img_id, 'large');
}

?>
<div class="block-education-book">
	<?php if (! empty($img_src)) { ?>
		<div class="education-book-image">
			<img src="<?php echo $img_src; ?>" alt="">
		</div>
	<?php } ?>
	<?php if (! empty($block['data']['author'])) { ?>
		<div class="education-book-author"><?php echo $block['data']['author']; ?></div>
	<?php } ?>
	<?php if (! empty($block['data']['title'])) { ?>
		<div class="education-book-title"><?php echo $block['data']['title']; ?></div>
	<?php } ?>
</div>
