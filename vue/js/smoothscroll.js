$(document).ready(function(){
	$('a[href^="#"]').click(function() {
		var id = $(this).attr("href");

		$('html, body').animate({
			scrollTop:$(id).offset().top-60
		}, 1000);
	return false;
	});
});
