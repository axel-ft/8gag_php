<?php


require_once ('modele/utilisateursql.php');
$utilisateur = new UtilisateurSQL();
if (!empty($_POST['mail']) && !empty($_POST['password'])) {
    $compte = $utilisateur->connect_compte();
    if (count($compte)>0){
        $_SESSION['connected'] = true;
        $_SESSION['id_user'] = $compte[0]['id'];
        header('Location: index.php?p=mon_compte');

    }else{
        $erreur = '<p>Identifiant incorrect</p>';
    }

}
require_once ('vue/connexion.php');