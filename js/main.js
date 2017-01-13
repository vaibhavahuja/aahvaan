

  jQuery.noConflict();
    (function ($) {
        function readyFn() {
			$(window).scroll(function(){
				var currentScroll = $(this).scrollTop();
				if(currentScroll>100){
					$(".navbar-fixed-top").css("top","0px");
				}
				if(currentScroll<100){
					$(".navbar-fixed-top").css("top","-1000px");
				}
});

            
        }

        $(document).ready(readyFn); 
    })(jQuery);