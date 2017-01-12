<?php
if (!isset($_SESSION['connected']) || $_SESSION['connected'] === false) header('Location: index.php?p=connexion');

require_once ('modele/utilisateursql.php');

$update = new UtilisateurSQL();
$updateuser = $update->get_user($_SESSION['id_user']);


if (!empty($_POST['name']) && !empty($_POST['fname']) && !empty($_POST['pseudo']) && !empty($_POST['mail'])) {
    $update->maj_compte();
    if (empty($_POST['password']) && empty($_POST['pwdconfirm'])) {
        header('Location: index.php?p=mon_compte');
    } else if (!empty($_POST['password']) && !empty($_POST['pwdconfirm']) && $_POST['password'] === $_POST['pwdconfirm']) {
        $update->maj_password();
        header('Location: index.php?p=mon_compte');
    } else {
        echo "<h3>Tous les champs ne sont pas remplis ou les mots de passes ne correspondent pas. Vous pouvez laisser le champ mot de passe vide pour conserver votre mot de passe actuel</h3>";
    };
}

require_once ('vue/updateuser.php');
