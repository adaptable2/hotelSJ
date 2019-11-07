(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		//arrow input number
		$('<div class="quantity-nav"><div class="quantity-button quantity-up">^</div><div class="quantity-button quantity-down">^</div></div>').insertAfter('.quantity input');
		$('.quantity').each(function() {
			var spinner = $(this),
			input = spinner.find('input[type="number"]'),
			btnUp = spinner.find('.quantity-up'),
			btnDown = spinner.find('.quantity-down'),
			min = input.attr('min'),
			max = input.attr('max');

			btnUp.click(function() {
				var oldValue = parseFloat(input.val());
				if (oldValue >= max) {
					var newVal = oldValue;
				} else {
					var newVal = oldValue + 1;
				}
				spinner.find("input").val(newVal);
				spinner.find("input").trigger("change");
			});

			btnDown.click(function() {
				var oldValue = parseFloat(input.val());
				if (oldValue <= min) {
					var newVal = oldValue;
				} else {
					var newVal = oldValue - 1;
				}
				spinner.find("input").val(newVal);
				spinner.find("input").trigger("change");
			});

		});
		
		//slick
		$('.carousel').slick({
			nextArrow: '<button type="button" class="slick-next">></button>',
			prevArrow: '<button type="button" class="slick-prev"><</button>',
			dots: true
		});
		$('.carousel-banner').slick({
			nextArrow: '<button type="button" class="slick-next">></button>',
			prevArrow: '<button type="button" class="slick-prev"><</button>'
		});

	});
	
})(jQuery, this);
