<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>Connexion</title>
	<?php require_once('vue/head_commun.php'); ?>
</head>
<body>
	<?php require_once('vue/navbar.php'); ?>

<form action="" method="post">
    <fieldset>
        <h3>Connection</h3>
        <?php if (isset($erreur)) echo $erreur; ?>
        <input type="email" name="mail" placeholder="mail">
        <input type="password" name="password" placeholder="password">

        <button type="submit" class="bttn">Connexion</button>
    </fieldset>
</form>


</body>
</html>
