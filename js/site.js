
	jQuery(document).ready(function($) {
		
		$('.post').hover(function() {
			$(this).children('.overlay').fadeIn(200);
		//	$(this).children('.rating').fadeIn(200);
		 }, function(){
		 	$(this).children('.overlay').fadeOut(200);
		 //	$(this).children('.rating').fadeOut(200);

		 });
		 
		 $('.gridcontainer').fadeIn(1000);
		 
	$('.overlay-form').hide();
		
		$('a#subapi').click(function(){
 
 			console.log("clicked");
 			$('.overlay-form').show();
 			console.log('clicked again');
 		});
		 



var elem = $("#chars");
$("#text").limiter(100, elem);

	});
	
	
	(function($) {
    $.fn.extend( {
        limiter: function(limit, elem) {
            $(this).on("keyup focus", function() {
                setCount(this, elem);
            });
            function setCount(src, elem) {
                var chars = src.value.length;
                if (chars > limit) {
                    src.value = src.value.substr(0, limit);
                    chars = limit;
                }
                elem.html( limit - chars );
            }
            setCount($(this)[0], elem);
        }
    });
})(jQuery);
