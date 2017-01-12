<?php

if (!empty($_GET['query'])) {
	$query = new ImageSQL();
	$resultats = $query->get_images(null, null, $_GET['query'], null);
	
	if (count($resultats) > 0) {
		$presence = true;
	} else {
		$presence = false;
	}
} else {
	header('Location: index.php');
}



require_once('vue/recherche.php');
