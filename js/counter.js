
  jQuery.noConflict();
    (function ($) {
        function readyFn() {
            $(function () {
				newYearsDay = new Date("2017-03-24");
				$('#countdown').countdown({until: newYearsDay});
			});
			
			
			
        }

        $(document).ready(readyFn); 
    })(jQuery);
