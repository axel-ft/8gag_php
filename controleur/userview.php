<?php

//if (!$_SESSION['connected']) header('Location:connexion.php');

require_once('modele/utilisateursql.php');
$utilisateur = new UtilisateurSQL();
$profil = $utilisateur->get_user(1);
var_dump($profil);
require_once('vue/userview.php');
