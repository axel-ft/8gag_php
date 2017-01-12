<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Inscription</title>
    <?php require_once('vue/head_commun.php'); ?>
        <link rel="stylesheet" href="vue/css/inscription.css">
</head>
<?php
require_once ('vue/navbar.php');
?>

    <body>

        <form action="" method="post" id="msform">
            <fieldset>
                <h3>Inscription</h3>
                <?php if (isset($erreur)) echo $erreur; ?>
                    <input type="text" name="name" placeholder="name">
                    <input type="text" name="fname" placeholder="firstname">
                    <input type="text" name="pseudo" placeholder="pseudo">
                    <input type="password" name="password" placeholder="password">
                    <input type="mail" name="mail" placeholder="mail">
                    <button type="submit" class="bttn">Envoyer!</button>
            </fieldset>
        </form>

    </body>

</html>