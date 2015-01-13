$(function () {
	$('.lang').on('click', 'a:first-child', function (e) {
		e.preventDefault();
		$('.lang').toggleClass('show');
	})

	$('.btn-order-open').click(function (e) {
		e.preventDefault();
		var parent = $(this).parents('.wood');
		$('.wood-order').hide();
		$('.validation-price-failed').hide();
		if ( parent.find('.price').text() !== '—' ) {
			$('.wood-order').detach().insertAfter(parent.find('.wood-config'));
			parent.find('.wood-order').show();
		} else {
			parent.find('.validation-price-failed').show();
		}
	});

	$('.jcarousel.circular').jcarousel({
        wrap: 'circular'
	}).jcarouselAutoscroll({
        interval: 3000,
        target: '+=1',
        autostart: true
    });

    $('.jcarousel-left').jcarousel({
	    vertical: true
	});

    $('.jcarousel-right').jcarousel({
    });

    $('.jcarousel-pagination')
    .on('jcarouselpagination:active', 'a', function() {
        $(this).addClass('active');
    })
    .on('jcarouselpagination:inactive', 'a', function() {
        $(this).removeClass('active');
    });

    $('.jcarousel-pagination').jcarouselPagination({
        item: function(page) {
            return '<a href="#' + page + '">' + page + '</a>';
        }
    });

    $('dl.tabs dt').click(function(){
		$(this)
			.siblings().removeClass('selected').end()
			.next('dd').andSelf().addClass('selected');
		$('.jcarousel-left').jcarousel('scroll', $(this).data('show'));
		$('.jcarousel-right').jcarousel('scroll', $(this).data('show'));
	});

	woods = {
		grab: {
			price: {
				'1RM': {
					'15-25%': '55€',
					'>25%': '—'
				},
				'1.7RM': {
					'15-25%': '—',
					'>25%': '72€'
				},
				'2RM': {
					'15-25%': '110€',
					'>25%': '79€'
				}
			}
		},
		buk: {
			price: {
				'1RM': {
					'15-25%': '—',
					'>25%': '—'
				},
				'1.7RM': {
					'15-25%': '—',
					'>25%': '72€'
				},
				'2RM': {
					'15-25%': '—',
					'>25%': '79€'
				}
			}
		},
		dub: {
			price: {
				'1RM': {
					'15-25%': '55€',
					'>25%': '—'
				},
				'1.7RM': {
					'15-25%': '—',
					'>25%': '72€'
				},
				'2RM': {
					'15-25%': '110€',
					'>25%': '79€'
				}
			}
		},
		yasen: {
			price: {
				'1RM': {
					'15-25%': '—',
					'>25%': '—'
				},
				'1.7RM': {
					'15-25%': '—',
					'>25%': '—'
				},
				'2RM': {
					'15-25%': '—',
					'>25%': '79€'
				}
			}
		},
		klen: {
			price: {
				'1RM': {
					'15-25%': '—',
					'>25%': '—'
				},
				'1.7RM': {
					'15-25%': '—',
					'>25%': '—'
				},
				'2RM': {
					'15-25%': '—',
					'>25%': '79€'
				}
			}
		},
		bereza: {
			price: {
				'1RM': {
					'15-25%': '—',
					'>25%': '—'
				},
				'1.7RM': {
					'15-25%': '—',
					'>25%': '—'
				},
				'2RM': {
					'15-25%': '—',
					'>25%': '75€'
				}
			}
		}
	}

	$('.wood-config table').on('click', '.value', function () {
		$(this).parents('tr').find('.value').removeClass('selected');
		$(this).addClass('selected');
		var wood  = $(this).parents('table').data('wood'),
			price = $(this).parents('table').find('.price');
		console.log(wood);
		if ( $('.value-size').hasClass('selected') && $('.value-humidity').hasClass('selected') ) {
			var size = $('.value-size.selected').data('value'),
				humidity = $('.value-humidity.selected').data('value'),
				price_value = woods[wood].price[size][humidity];
			price.text(price_value);

			$('input[name="wood"]').val(wood);
			$('input[name="size"]').val(size);
			$('input[name="humidity"]').val(humidity);
			$('input[name="price"]').val(price_value);
		}
	});

	$('.btn-order').click(function (e) {
		e.preventDefault();
		var isValid = true;
        $('input[type="text"]').each(function() {
            if ($.trim($(this).val()) == '') {
                isValid = false;
            }
        });
        if (isValid == false) {
        	$('.validation-failed').show();
        }
        else {
        	$('.validation-failed').hide();
        	$(this).parents('form').submit();
        }
	});

})
