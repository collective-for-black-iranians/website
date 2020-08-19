<?php

get_header();

global $blocks;
$blocks = array(
	'video' => null,
	'facts' => array(),
	'messages' => array(),
	'call' => null
);

?>
<div id="advocacy-content">
	<div class="advocacy-top">
		<section class="advocacy-intro">
			<div class="container">
				<h2 class="page-title"><?php the_title(); ?></h2>
				<div class="page-content">
					<?php the_content(); ?>
				</div>
			</div>
		</section>
	</div>
	<div class="advocacy-video-scroll">Scroll Down<br><i class="fa fa-arrow-down"></i></div>
	<div class="advocacy-bottom">
		<section class="advocacy-resources">
			<div class="container">
				Resources on Dismantling Anti-Blackness in the Iranian Diaspora
				<div class="arrow">
					<i class="fa fa-chevron-down"></i>
				</div>
			</div>
		</section>
		<section class="advocacy-facts">
			<div class="container">
				<h3>Key Facts</h3>
				<div class="facts-container">
					<?php

					foreach ($blocks['facts'] as $block) {
						include __DIR__ . '/block-advocacy-fact.php';
					}

					?>
				</div>
			</div>
		</section>
		<section class="advocacy-messages">
			<div class="container">
				<h3>Key Advocacy Messages</h3>
				<div class="messages-container">
					<?php

					foreach ($blocks['messages'] as $block) {
						include __DIR__ . '/block-advocacy-message.php';
					}

					?>
				</div>
			</div>
		</section>
		<section class="advocacy-call">
			<div class="container">
				<?php

				$block = $blocks['call'];
				include __DIR__ . '/block-advocacy-call.php';

				?>
			</div>
		</section>
	</div>
</div>
<section class="advocacy-video">
	<div class="container">
		<?php

		$block = $blocks['video'];
		include __DIR__ . '/block-advocacy-video.php';

		?>
	</div>
</section>
<?php

get_footer();
