<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Votre Compte</title>
    <?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" href="vue/css/inscription.css">
</head>
<body id="update_background">

    <?php require_once('vue/navbar.php'); ?>


    <form method="post" id="msform" >
        <fieldset>
            <h2>Votre Compte</h2>

                <h2>Bienvenue <?=$updateuser[0]['fname']?> </h2>
                <h3> Vos Informations : </h3>

                <?php echo '<div id="avatar"><img src="https://gravatar.com/avatar/'.md5($profil[0]['mail']).'?d=identicon&s=230" alt="avatar"></div>' ?>
                <a href="https://signup.wordpress.com/signup/?ref=oauth2&oauth2_redirect=49984d26d016001d3ef5a6deaeb9ded0%40https%3A%2F%2Fpublic-api.wordpress.com%2Foauth2%2Fauthorize%2F%3Fclient_id%3D1854%26response_type%3Dcode%26blog_id%3D0%26state%3Da82cd191af8b38c2d36f281bcfae395d707e3c2acc10789da054a00ab6263ed9%26redirect_uri%3Dhttps%253A%252F%252Fen.gravatar.com%252Fconnect%252F%253Faction%253Drequest_access_token%26jetpack-code%26jetpack-user-id%3D0%26action%3Doauth2-login&wpcom_connect=1" class="button"><p>Modifier votre avatar</p></a>
                <input type="text" placeholder="Nom" id="name" name="name" value="<?php echo $updateuser[0]['name'] ?>">
                <input type="text" placeholder="Prénom" id="fname" name="fname" value="<?php echo $updateuser[0]['fname'] ?>">
                <input type="pseudo" placeholder="Pseudo" id="pseudo" name="pseudo" value="<?php echo $updateuser[0]['pseudo'] ?>">
                <input type="mail" placeholder="Mail" id="mail" name="mail" value="<?php echo $updateuser[0]['mail'] ?>">
                <input type="password" placeholder="Remplir pour modifier le password" id="password" name="password" >
                <input type="password" placeholder="Confirmer votre password" id="pwdconfirm" name="pwdconfirm">
		<input type="submit" class="button" value="Modifier">
        </fieldset>
    </form>

</body>
</html>

