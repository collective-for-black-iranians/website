<?php

acf_form_head();
get_header();

global $blocks;
$blocks = array(
	'chapters' => array(),
	'form' => null
);

?>
<section class="chapters-intro">
	<div class="container">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
	</div>
	<div class="chapters-map">
		<img src="<?php asset_url('img/world-map.png'); ?>" alt="World Map">
	</div>
	<div class="chapters-current">
		<div class="container">
			<h3>Current Chapters</h3>
			<div class="chapters-container">
				<?php

				foreach ($blocks['chapters'] as $block) {
					include __DIR__ . '/block-chapters-chapter.php';
				}

				?>
			</div>
		</div>
	</div>
</section>
<section class="chapters-form">
	<div class="container">
		<?php

		$block = $blocks['form'];
		include __DIR__ . '/block-chapters-form.php';

		?>
	</div>
</section>
