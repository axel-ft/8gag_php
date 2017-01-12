<?php

if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=connexion');

require_once('modele/utilisateursql.php');
require_once ('modele/imagesql.php');

$utilisateur = new UtilisateurSQL();
$profil = $utilisateur->get_user($_SESSION['id_user']);

$userimg = new ImageSQL();
$userimgview = $userimg->get_images(null, $_SESSION['id_user']);

require_once('vue/userview.php');