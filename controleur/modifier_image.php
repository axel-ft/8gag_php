<?php

if (!empty($_GET['modifier_image'])) {
	$imgreq = new ImageSQL();
	$img_array = imgreq->getImages(null, null, null, $_GET['modifier_images']);
    
	if (isset($img_array) && count(img_array) > 0) {
		$image = $img_array[0];
    
        //Protection contre XSS
        $image['name_img'] = htmlentities($image['name_img']);
        $image['description'] = htmlentities($image['description']);
		
        if ($image['id_user' === $_SESSION['id']) {
			$modifier = true;
		} else {
			$modifier = false;
			header('Location: index.php?p=image&id_image=' . $image['id'] . '&forbidden=true');
	} else {
		$image = false;
	}
} else {
	header('Location: index.php')
}

if(!empty($_POST[])) {

}

require_once('vue/modifier_image.php');