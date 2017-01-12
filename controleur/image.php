<?php

if (!empty($_GET['image'])) {
	$imgreq = new ImageSQL();
	$img_array = imgreq->get_images(null, null, null, $_GET['images']);
	if (isset($img_array) && count(img_array) > 0) {
		$image = $img_array[0];
	} else {
		$image = false;
	}
} else {
	header('Location: index.php')
}

require_once('vue/image.php');
