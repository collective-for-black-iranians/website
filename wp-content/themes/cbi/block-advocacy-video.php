<div class="block-advocacy-video">
	<h3><?php echo $block['data']['title']; ?></h3>
	<div class="advocacy-video-prev"><i class="far fa-arrow-alt-circle-left"></i></div>
	<div class="advocacy-video-intro"><?php echo $block['data']['intro']; ?></div>
	<?php if (! empty($block['data']['embed'])) { ?>
		<div class="advocacy-video-embed advocacy-video-media"><?php echo $block['data']['embed']; ?></div>
	<?php } else if (! empty($block['data']['image'])) { ?>
		<div class="advocacy-video-placeholder advocacy-video-media">
			<?php

			$img_id = $block['data']['image'];
			list($img_src) = wp_get_attachment_image_src($img_id, 'large');

			?>
			<img src="<?php echo $img_src; ?>" alt="">
		</div>
	<?php } ?>
	<div class="advocacy-video-next"><i class="far fa-arrow-alt-circle-right"></i></div>
</div>
