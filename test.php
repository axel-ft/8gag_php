<?php
	require_once('modele/dbconn.php');
	require_once('modele/utilisateursql.php');
	
	$test = new UtilisateurSQL();
	$test->desactiver_compte();
	var_dump($test);
?>
