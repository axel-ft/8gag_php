<?php

if (!$_SESSION['connected']) header('Location: index.php?p=connexion');

require_once('modele/utilisateursql.php');
require_once ('modele/imagesql.php');

$utilisateur = new UtilisateurSQL();
$profil = $utilisateur->get_user($_SESSION['id_user']);

$userimg = new ImageSQL();
$userimgview = $userimg->get_images($limit = null, $id_user =$_SESSION['id_user'], $name = null, $id =null);

require_once('vue/userview.php');