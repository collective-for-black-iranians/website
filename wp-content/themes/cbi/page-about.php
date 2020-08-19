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
<section class="tabs resize-bg">
	<nav>
		<a href="#collective" class="selected">Our Collective</a>
		<img src="<?php asset_url('img/separator.gif'); ?>" alt="">
		<a href="#story">Our Story</a>
		<img src="<?php asset_url('img/separator.gif'); ?>" alt="">
		<a href="#board">Our Board</a>
	</nav>
	<div class="container">
		<?php

		foreach ($sections as $section => $blocks) {

			$selected = ($section == 'collective') ? ' selected' : '';

			echo "<div id=\"tab-$section\" class=\"tab$selected\">\n";

			foreach ($blocks as $block) {
				if ($block['name'] == 'acf/about-person') {
					include __DIR__ . '/block-about-person.php';
				} else if ($block['name'] == 'acf/about-text') {
					include __DIR__ . '/block-about-text.php';
				}
			}

			echo "</div>\n";

		}

		?>
	</div>
</section>
<?php

get_footer();
