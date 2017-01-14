<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Inscription</title>
    <?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" type="text/css" href="vue/css/form.css">
</head>
<?php
require_once ('vue/navbar.php');
?>

    <body id="inscription_background">

        <form action="" method="post" class="form">
            <fieldset>
                <h3>Inscription</h3>
		<a href="index.php?p=connexion">Déjà inscrit ? Connectez-vous</a>
                <?php if (isset($erreur)) echo $erreur; ?>
                <?php if (isset($succes)) echo $succes; ?>
                    <input type="text" name="name" placeholder="Nom">
                    <input type="text" name="fname" placeholder="Prénom">
                    <input type="text" name="pseudo" placeholder="Pseudo">
                    <input type="password" name="password" placeholder="Mot de passe">
                    <input type="password" name="pwdconfirm" placeholder="Confirmation du mot de passe">
                    <input type="mail" name="mail" placeholder="E-mail">
                    <button type="submit" class="button">Envoyer !</button>
            </fieldset>
        </form>

    </body>

</html>
