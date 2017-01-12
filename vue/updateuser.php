<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Votre Compte</title>
    <?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" href="vue/css/inscription.css">
</head>
<body id="inscription_background">

    <?php require_once('vue/navbar.php'); ?>


    <form id="msform" >
        <fieldset>
            <h2>Votre Compte</h2>

                <h2>Bienvenue <?=$updateuser[0]['fname']?> </h2>
                <h3> Vos Informations : </h3>

                <input type="text" placeholder="Nom" id="name" name="name" value="<?php echo $updateuser[0]['name'] ?>">
                <input type="text" placeholder="Prénom" id="fname" name="fname" value="<?php echo $updateuser[0]['fname'] ?>">
                <input type="pseudo" placeholder="Pseudo" id="pseudo" name="pseudo" value="<?php echo $updateuser[0]['pseudo'] ?>">
                <input type="mail" placeholder="Mail" id="mail" name="mail" value="<?php echo $updateuser[0]['mail'] ?>">
                <input type="password" placeholder="Remplir pour modifier le password" id="password" name="password" >


            <a href="#" class="button">Modifier</a>

        </fieldset>
    </form>

</body>
</html>

