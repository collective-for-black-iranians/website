(function($) {

	$(window).ready(function() {

		// Mobile nav menu toggle
		$('header nav .menu').click(function(e) {
			e.preventDefault();
			$('#menu').toggleClass('open');
			if ($('#menu').hasClass('open')) {
				$('header nav .menu .fa').removeClass('fa-bars');
				$('header nav .menu .fa').addClass('fa-times');
			} else {
				$('header nav .menu .fa').addClass('fa-bars');
				$('header nav .menu .fa').removeClass('fa-times');
			}
		});

		// About page: tab behaviors
		function update_tabs() {
			var selected = location.hash.match(/#(.+)$/);
			if (selected) {
				var id = selected[1];
				$('.tab').each(function(i, el) {
					if ($(el).attr('id') == 'tab-' + id) {
						$(el).addClass('selected');
					} else {
						$(el).removeClass('selected');
					}
				});
				$('.tabs nav a.selected').removeClass('selected');
				$('.tabs nav a[href="#' + id + '"]').addClass('selected');
			}
		}
		window.onhashchange = update_tabs;
		update_tabs();

		// Resize #content to show full background
		function bg_resize() {
			var bg_imgs = {
				about: 3827 / 1200,
				work: 828 / 1200
			};
			var width = $(document.body).width();
			for (slug in bg_imgs) {
				if ($(document.body).hasClass(slug)) {
					var ratio = bg_imgs[slug];
					var height = width * ratio;
					$('.resize-bg').css('height', height + 'px');
				}
			}
		}
		$(window).resize(bg_resize);
		bg_resize();

		// Donate page: turn link into a button
		$('body.donate .page-content a').addClass('button');
	});

})(jQuery);
