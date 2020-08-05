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
				work: 828 / 1200,
				voices: 3125 / 1200,
				contact: 1621 / 1200
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

		// Our Voices page
		if ($(document.body).hasClass('voices')) {
			function update_page() {
				var page_width = $(document.body).width();
				var fixed_height = $('body.voices .fixed').height();
				var fixed_width = $('body.voices .fixed').width();
				var scrolly_height = $('body.voices .scrolly').height();
				if (fixed_width == 930) {
					$('body.voices .fixed').css('left', ((page_width - 930) / 2) + 'px');
				}
				$('body.voices .scrolly').css('top', fixed_height);
				$('#voices-content').css('height', fixed_height + scrolly_height);
			}
			update_page();
			$(window).resize(update_page);
		}

		// Advocacy page
		if ($(document.body).hasClass('advocacy')) {
			function update_page() {
				var page_width = $(document.body).width();
				var fixed_height = $('.advocacy-video').height();
				var fixed_width = $('.advocacy-video').width();
				var scrolly_height = $('.advocacy-top').height() + $('.advocacy-bottom').height();
				$('.advocacy-bottom').css('top', ($('.advocacy-top').height() + fixed_height) + 'px');
				$('#advocacy-content').css('height', (fixed_height + scrolly_height) + 'px');
			}
			setTimeout(function() {
				update_page();
			}, 0);
			$(window).resize(update_page);

			$('.advocacy-video-next').click(function(e) {
				$('.advocacy-video-intro, .advocacy-video-next').hide();
				$('.advocacy-video-embed, .advocacy-video-prev').show();
			});

			$('.advocacy-video-prev').click(function(e) {
				$('.advocacy-video-embed, .advocacy-video-prev').hide();
				$('.advocacy-video-intro, .advocacy-video-next').show();
			});
		}
	});

})(jQuery);
