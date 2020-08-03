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
<section class="tabs">
	<nav>
		<a href="#collective" class="selected">Our Collective</a>
		<a href="#story">Our Story</a>
		<a href="#board">Our Board</a>
	</nav>
	<div class="container">
		<?php

		foreach ($sections as $section => $blocks) {

			$selected = ($section == 'collective') ? ' selected' : '';

			echo "<div id=\"tab-$section\" class=\"tab$selected\">\n";

			foreach ($blocks as $block) {
				if ($block['name'] == 'acf/about-person') {
					include __DIR__ . '/lib/block-about-person.php';
				} else if ($block['name'] == 'acf/about-text') {
					include __DIR__ . '/lib/block-about-text.php';
				}
			}

			echo "</div>\n";

		}

		?>
	</div>
	<div class="image-credit">Website Artwork by <a href="https://www.minamjafari.com/art">Mina M. Jafari</a></div>
</section>
<?php

get_footer();
