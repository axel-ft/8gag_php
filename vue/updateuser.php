<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Votre Compte</title>
    <?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" href="vue/css/form.css">
</head>
<body id="update_user_background">

    <?php require_once('vue/navbar.php'); ?>


    <form method="post" class="form" >
        <fieldset>
                <h2>Bienvenue <?=$updateuser[0]['fname']?> </h2>
                <h3> Votre profil : </h3>

                <?php echo '<div id="avatar"><img src="https://gravatar.com/avatar/'.md5($updateuser[0]['mail']).'?d=identicon&s=230" alt="avatar"></div>' ?>
                <a id="modif_avatar" href="https://fr.gravatar.com/gravatars/new" class="button">Modifier votre avatar</a>
		<label for="name">Nom</label>
                <input type="text" placeholder="Nom" id="name" name="name" value="<?php echo $updateuser[0]['name'] ?>">
		<label for="fname">Prénom</label>
                <input type="text" placeholder="Prénom" id="fname" name="fname" value="<?php echo $updateuser[0]['fname'] ?>">
		<label for="pseudo">Pseudo</label>
                <input type="pseudo" placeholder="Pseudo" id="pseudo" name="pseudo" value="<?php echo $updateuser[0]['pseudo'] ?>">
                <input type="mail" placeholder="E-Mail" id="mail" name="mail" value="<?php echo $updateuser[0]['mail'] ?>">
                <input type="password" placeholder="Remplir pour modifier le mot de passe" id="password" name="password" >
                <input type="password" placeholder="Confirmer votre mot de passe" id="pwdconfirm" name="pwdconfirm">
		<button type="submit" class="button">Modifier</button>

                <a id="desactiver" href="index.php?p=desactiveruser" class="button">Désactiver votre compte</a>
        </fieldset>
    </form>


</body>
</html>

