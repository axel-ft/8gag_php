<?php

if (empty($_SESSION['id_user']) || (!isset($_SESSION['connected']) && !$_SESSION['connected'])) header('Location: index.php?p=connexion');

$maj = new ImageSQL();
$majimg = $maj->get_images(null, null, null,$_GET['id']);

// Un utilisateur ne peut pas modifier les images des autres utilisateurs
if ($_SESSION['id_user'] !== $majimg[0]['id_user']) header('Location: index.php?p=403');

if (!empty($_POST['name_img']) && !empty($_POST['description'])) {
	$maj->maj_image();
	require_once('controleur/upload_image.php');
	if (isset($chemin)) $maj->maj_image_fichier($chemin);
	
	$intid_img = intval($_GET['id']);
	header('Location: index.php?p=image&id=' . $intid_img);
} else if (!empty($_POST)) {
        $erreur = "<p>Tous les champs ne sont pas remplis</p>";
}

require_once ('vue/update_image.php');
