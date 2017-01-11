<!DOCTYPE html>
<html lang="fr">

<head>
    	<title>Inscription</title>
	<?php require_once('vue/head_commun.php'); ?>
</head>

<body>
    <div id="container"></div>

    <form action="" method="post">
        <fieldset>
            <h3>Inscription</h3>
            <input type="text" name="name" placeholder="name">
            <input type="text" name="firstname" placeholder="firstname">
            <input type="password" name="password" placeholder="password">
            <input type="email" name="mail" placeholder="mail">
            <button type="submit" class="bttn">Envoyer!</button>
        </fieldset>
    </form>

</body>

</html>
