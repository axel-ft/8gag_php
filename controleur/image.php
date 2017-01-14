<?php

if (!empty($_GET['id'])) {
	$imgreq = new ImageSQL();
	$img_array = $imgreq->get_images(null, null, null, $_GET['id']);
	if (isset($img_array) && count($img_array) > 0) {
		$image = $img_array[0];
		$extension = strrchr($image['name_img'], '.');

		//Protection contre XSS
                $image['name_img'] = htmlentities($image['name_img']);
                $image['description'] = htmlentities($image['description']);

		$user = new UtilisateurSQL();
		$sender = $user->get_user($image['id_user']);
	} else {
		header('Location: index.php');
	}
} else {
	header('Location: index.php');
}

require_once('vue/image.php');
