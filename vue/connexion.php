<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>Connexion</title>
	<?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" href="vue/css/form.css">
</head>
<body id="connexion_background">
	<?php require_once('vue/navbar.php'); ?>

<form action="" method="post" class="form">
    <fieldset>
        <h3>Connexion</h3>
	<a href="index.php?p=inscription">Pas encore inscrit ? Inscrivez-vous</a>
        <?php if (isset($erreur)) echo $erreur; ?>
        <input type="email" name="mail" placeholder="E-mail" required>
        <input type="password" name="password" placeholder="Mot de passe" required>

        <button type="submit" class="button">Connexion</button>
    </fieldset>
</form>


</body>
</html>
