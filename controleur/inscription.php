<?php
    require_once('modele/utilisateursql.php');

    $create = new UtilisateurSQL();

if (!empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['password']))
{
   if ($create->mail_test()) {
        $create->inscription_compte();
   } else {
        $erreur = "<p>Il existe déjà un compte pour cette adresse mail</p>";
   }
} else if (empty($_POST)) {} else {
    $erreur = '<p>Il y a eu une erreur...</p>';
}

    require_once('vue/inscription.php');