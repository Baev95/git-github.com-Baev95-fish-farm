

$(function () {
	if ($('.news__card').length > 8) {
		$('.news__card:gt(8)').hide();
		$('.show-more').show();
	}

	$('.show-more').on('click', function () {
		if ($(this).text() === 'Show less') {
			$('.news__card:gt(8)').slideUp(500);
			$(this).text('Show more');
			$('html, body').animate({
				scrollTop: $(this).offset().top
			}, 500); // прокрутка к кнопке
		} else {
			if ($('.news__card:hidden').length === 0) {
				$(this).text('Show less');
			} else {
				$(this).text('Show more');
				$('.news__card:hidden').slice(0, 3).fadeIn(500);
				if ($('.news__card:hidden').length === 0) {
					$(this).text('Show less');
				}
				$('html, body').animate({
					scrollTop: $(this).offset().top
				}, 500); // прокрутка к кнопке
			}
		}
	})
});
