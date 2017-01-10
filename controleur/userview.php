<?php

if (!$_SESSION['connected']) header('Location: index.php?p=connexion');

require_once('modele/utilisateursql.php');

$utilisateur = new UtilisateurSQL();
$profil = $utilisateur->get_user(1);

require_once('vue/userview.php');


//$profil[0]['fname']