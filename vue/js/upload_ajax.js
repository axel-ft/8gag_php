$(document).ready(function (e) {
	$('#upload-image').find('input[name="image"]').on('change', function (e) {
 		$('#filepath').html(document.getElementById('image').value.split("\\")[document.getElementById('image').value.split("\\").length - 1]);


   	     	$("#message").empty();

        	var files = $(this)["0"].files;

        	if (files.length > 0) {
            		var file = files[0];
            		var filetype = file.type;
            		var match = ["image/jpeg", "image/png", "image/jpg", "image/bmp", "image/gif"];
	    
			if (!((filetype == match[0]) || (filetype == match[1]) || (filetype == match[2]) || (filetype == match[3]) || (filetype == match[4]))) {
                		$('#apercu').attr('src', 'noimage.png');
                		$("#message").html("<p id='message' class='erreur'>Types d'image accepté : JPG, JPEG, PNG, BMP, et GIF</p>");
                		return false;
            		} else {
                		var reader = new FileReader();
                		reader.onload = imageIsLoaded;
                		reader.readAsDataURL($(this)["0"].files[0]);
            		}
        	}
    	});

    	function imageIsLoaded(e) {
        	$("#upload-label").css("background-color", "green");
        	$('#div_apercu').css("display", "block");
        	$('#apercu').attr('src', e.target.result);
        	$('#apercu').attr('height', '230px');
    	};
});
