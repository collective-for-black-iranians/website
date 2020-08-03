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

		// About page: resize to show full image
		function about_resize() {
			var ratio = 3827 / 1200; // baagh.jpg
			var width = $(document.body).width();
			var height = width * ratio;
			$('body.about section.tabs').css('height', height + 'px');
		}
		$(window).resize(about_resize);
		about_resize();

		// Donate page: turn link into a button
		$('body.donate .page-content a').addClass('button');
	});

})(jQuery);
