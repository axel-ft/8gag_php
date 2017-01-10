<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="#">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="vue/css/styleNav.css">
</head>
<body>
<?php
require_once('vue/navbar.php');

?>

<form action="" method="post">
    <fieldset>
        <h3>Connection</h3>
        <?php
        if (isset($erreur)) {
            echo $erreur;
        }
        ?>
        <input type="email" name="mail" placeholder="mail">
        <input type="password" name="password" placeholder="password">

        <button type="submit" class="bttn">Connexion</button>
    </fieldset>
</form>


</body>
</html>