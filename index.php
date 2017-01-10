<?php
	require_once('modele/dbconn.php');
	require_once('modele/utilisateursql.php');
	$utilisateur = new UtilisateurSQL;
	var_dump($utilisateur->get_user());
	echo $utilisateur->hello();
?>
