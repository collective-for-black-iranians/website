<?php

$title = $block['data']['name'];
if (! empty($block['data']['title'])) {
	$title = "$title, {$block['data']['title']}";
}

if (! empty($block['data']['image'])) {
	$img_id = $block['data']['image'];
	list($img_src) = wp_get_attachment_image_src($img_id, 'medium');
}

?>
<div class="block-about-person">
	<div class="person-inner">
		<?php if (! empty($img_src)) { ?>
			<div class="person-image">
				<img src="<?php echo $img_src; ?>" alt="">
			</div>
		<?php } ?>
		<div class="person-text">
			<h4><?php echo $title; ?></h4>
			<div class="person-description">
				<?php echo nl2br($block['data']['description']); ?>
			</div>
		</div>
	</div>
</div>
