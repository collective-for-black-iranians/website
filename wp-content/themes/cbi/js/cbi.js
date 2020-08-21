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

		// Resize #content to show full background
		function bg_resize() {
			var bg_imgs = {
				about: 6123 / 1920,
				work: 828 / 1200,
				voices: 3125 / 1200,
				contact: 1621 / 1200,
				donate: 875 / 1200
			};
			var width = $(document.body).width();
			var height = null;
			for (slug in bg_imgs) {
				if ($(document.body).hasClass(slug)) {
					var ratio = bg_imgs[slug];
					height = width * ratio;
					$('.resize-bg').css('min-height', height + 'px');
					break;
				}
			}

			// Mobile vs. Desktop collective
			if ($(document.body).hasClass('about')) {
				var page_width = $(document.body).width();
				if (page_width < 539) {
					$('#collective').css('padding-top', height + 'px');
				} else {
					$('#collective').css('padding-top', '500px');
				}
			}
		}
		$(window).resize(bg_resize);
		bg_resize();

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
				$('.advocacy-video-media, .advocacy-video-prev').show();
			});

			$('.advocacy-video-prev').click(function(e) {
				$('.advocacy-video-media, .advocacy-video-prev').hide();
				$('.advocacy-video-intro, .advocacy-video-next').show();
			});
		}

		// Donate page
		if ($(document.body).hasClass('donate')) {
			$('body.donate .page-content a').addClass('button');
			function update_page() {
				var page_width = $(document.body).width();
				var fixed_height = $('body.donate .fixed').height() + 75;
				var fixed_width = $('body.donate .fixed').width();
				var scrolly_height = $('body.donate .scrolly').height();
				if (fixed_width == 930) {
					$('body.donate .fixed').css('left', ((page_width - 930) / 2) + 'px');
				}
				$('body.donate .scrolly').css('top', fixed_height);
				$('#donate-content').css('height', fixed_height + scrolly_height - 75);
			}
			update_page();
			$(window).resize(update_page);
		}
	});

})(jQuery);
