<?php
	if (!isset($_SESSION['connected']) || !isset($_SESSION['id_user'])) header('Location: index.php?p=connexion');
	
	require_once('upload_image.php');
	
	var_dump($_SESSION['id_user']); //. $chemin . $_POST['name_img'] . $_POST['description']);

        if (isset($datetime) && !empty($_SERVER['REMOTE_ADDR']) && !empty($_SESSION['id_user']) && isset($chemin) && !empty($_POST['name_img']) && !empty($_POST['description'])) {
		require_once('modele/imagesql.php');
		$nouvelle_image = new ImageSQL();
		$nouvelle_image->insert_image($datetime, $chemin);
        } else if (empty($_POST)) {} else {
                echo "<h2>Il y a un problème... Veuillez vérifier que vous avez tout rempli</h2>";
        }
	
	require_once('vue/upload_nouvelle_image.php');
