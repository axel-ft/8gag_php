<?php
	require_once('modele/dbconn.php');
	require_once('modele/utilisateursql.php');
	$utilisateur = new UtilisateurSQL;
	var_dump($utilisateur->getUser());
	echo $utilisateur->hello();
?>
