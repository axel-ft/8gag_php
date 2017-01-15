<?php
	if (!isset($_SESSION['connected']) || !isset($_SESSION['id_user'])) header('Location: index.php?p=connexion');
	
	require_once('upload_image.php');
	
        if (isset($datetime) && !empty($_SERVER['REMOTE_ADDR']) && !empty($_SESSION['id_user']) && isset($chemin) && !empty($_POST['name_img']) && !empty($_POST['description'])) {
		$nouvelle_image = new ImageSQL();
		$nouvelle_image->insertImage($datetime, $chemin);
        } else if (empty($_POST)) {} else {
                $erreurupload = "<p class='erreur'>Il y a un problème... Veuillez vérifier que vous avez tout rempli</p>";
        }
	
	require_once('vue/upload_nouvelle_image.php');
