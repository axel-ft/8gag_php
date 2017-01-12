<?php
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=connexion');

require_once ('modele/utilisateursql.php');

$update = new UtilisateurSQL();
$updateuser = $update->get_user($_SESSION['id_user']);

require_once ('vue/updateuser.php');