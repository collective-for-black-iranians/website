<?php

get_header();

global $sections;
$sections = array();

?>
<section>
	<div class="container">
		<h2 class="page-title"><?php the_title(); ?></h2>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
	</div>
</section>
<section>
	<nav class="subnav">
		<div class="container">
			<a href="#collective">Our Collective</a>
			<img src="<?php asset_url('img/separator.gif'); ?>" alt="">
			<a href="#story">Our Story</a>
			<img src="<?php asset_url('img/separator.gif'); ?>" alt="">
			<a href="#board">Our Board</a>
		</div>
	</nav>
</section>
<section class="resize-bg">
	<div class="container">
		<div id="collective" class="blocks">
			<h3>Our Collective</h3>
			<?php

			foreach ($sections['collective'] as $block) {

				if ($block['name'] == 'acf/about-person') {
					include __DIR__ . '/block-about-person.php';
				} else if ($block['name'] == 'acf/about-text') {
					include __DIR__ . '/block-about-text.php';
				}
			}

			?>
		</div>
	</div>
</section>
<section id="story">
	<div class="container">
		<?php

		foreach ($sections['story'] as $block) {

			if ($block['name'] == 'acf/about-person') {
				include __DIR__ . '/block-about-person.php';
			} else if ($block['name'] == 'acf/about-text') {
				include __DIR__ . '/block-about-text.php';
			}
		}

		?>
	</div>
</section>
<section id="board">
	<div class="container">
		<?php

		foreach ($sections['board'] as $block) {

			if ($block['name'] == 'acf/about-person') {
				include __DIR__ . '/block-about-person.php';
			} else if ($block['name'] == 'acf/about-text') {
				include __DIR__ . '/block-about-text.php';
			}
		}

		?>
	</div>
</section>
<?php

get_footer();
