(function($) {

	$(window).ready(function() {
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
	});

})(jQuery);
