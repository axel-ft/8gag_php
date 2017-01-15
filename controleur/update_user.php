<?php
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=connexion');

$update = new UtilisateurSQL();
$updateuser = $update->getUser($_SESSION['id_user']);


if (!empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['pseudo']) && !empty($_POST['mail'])) {
    $update->majCompte();
    if (empty($_POST['password']) && empty($_POST['pwdconfirm'])) {
        header('Location: index.php?p=mon_compte');
    } else if (!empty($_POST['password']) && !empty($_POST['pwdconfirm']) && $_POST['password'] === $_POST['pwdconfirm']) {
        $update->majPassword();
        header('Location: index.php?p=mon_compte');
    } else {
        $erreur = "<p class='erreur'>Tous les champs ne sont pas remplis ou les mots de passes ne correspondent pas. Vous pouvez laisser le champ mot de passe vide pour conserver votre mot de passe actuel</p>";
    };
}

require_once ('vue/updateuser.php');
