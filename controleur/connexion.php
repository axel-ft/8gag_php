<?php

$utilisateur = new UtilisateurSQL();
if (!empty($_POST['mail']) && !empty($_POST['password'])) {
    $compte = $utilisateur->connectCompte();
    if (count($compte)>0 && intval($compte[0]['active']) === 1){
        $_SESSION['connected'] = true;
        $_SESSION['id_user'] = $compte[0]['id'];
        header('Location: index.php?p=mon_compte');

    } elseif (count($compte)>0 && intval($compte[0]['active']) === 0) {
        $erreur = '<p class="erreur">Compte désactivé</p>';
    }
    else{
        $erreur = '<p class="erreur">Identifiants incorrects</p>';
    }

}
require_once ('vue/connexion.php');
