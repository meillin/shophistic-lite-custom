/**
 * Meilan's own javascript
 */

(function($) {
  "use strict";

	jQuery(document).ready(function($){


		$('.ql_cart-btn').click(function (e) {
			location.href = $(e.currentTarget).attr('href');
		});

	});

})(jQuery);
