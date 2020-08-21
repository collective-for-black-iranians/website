<?php

get_header();

global $blocks;
$blocks = array(
	'videos' => array(),
	'books' => array()
);

?>
<div id="education-content">
	<section class="intro">
		<div class="container">
			<h2 class="page-title"><?php the_title(); ?></h2>
			<div class="page-content">
				<?php the_content(); ?>
				<div class="education-video-scroll"><i class="fa fa-chevron-down"></i></div>
			</div>
		</div>
	</section>
	<section class="videos">
		<div class="container">
			<?php

			foreach ($blocks['videos'] as $block) {
				include __DIR__ . '/block-education-video.php';
			}

			?>
		</div>
	</section>
	<section class="books">
		<div class="container">
			<h3>Further Study</h3>
			<div class="books-container">
				<?php

				foreach ($blocks['books'] as $block) {
					include __DIR__ . '/block-education-book.php';
				}

				?>
			</div>
		</div>
	</section>
</div>
<?php

get_footer();
