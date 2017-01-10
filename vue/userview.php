<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Votre Compte</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="#">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="vue/css/styleNav.css">

</head>
<?php
require_once('vue/navbar.php'); // remetre en vue/navbar
?>
<body>

<form method="post" id="msform" action="#">
    <fieldset>
        <h2>Votre Compte</h2>
        <?php if ($_SESSION['connected'] === true) { ?>

            <p>Bienvenue</p> <?=$profil[0]['fname']?> <br />

            <br /> Vos Information: <br/><br />
            <p>Nom :</p> <?=$profil[0]['fname']?><br />
            <p>Email :</p> <?=$profil[0]['mail']?><br />

        <?php } else {
             ?>

        <p>Il y a une erreur</p>

        <?php } ?>






        <br>
        <a href="admin.php"><button type="button" class="action-button"> Modifier </button></a>
        <a href="liste.php"><button type="button" class="action-button"> Vos produits </button></a>


        <a href="logout.php"><button type="button" class="action-button"> Deconnexion </button></a>


    </fieldset>
</form>




</body>
</html>