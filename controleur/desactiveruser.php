<?php
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=connexion');

$deleteuser = new UtilisateurSQL();
$deleteuser->desactiver_compte();
header('Location: index.php');

require_once ('vue/desactiveruser.php');