<?php
    require_once('modele/utilisateursql.php');

    $create = new UtilisateurSQL();

if (!empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['password']) && $_POST['password'] === $_POST['pwdconfirm'])
{
   if ($create->mailTest()) {
        $create->inscriptionCompte();
	$succes = "<p class='erreur'>Inscription terminée</p>";
   } else {
        $erreur = "<p class='erreur'>Il existe déjà un compte pour cette adresse mail</p>";
   }
} else if (empty($_POST)) {} else {
    $erreur = '<p class="erreur">Il y a eu une erreur...</p>';
}

    require_once('vue/inscription.php');
