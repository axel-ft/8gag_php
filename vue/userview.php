<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Votre Compte</title>
	<?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" type="text/css" href="vue/css/userview.css">
</head>
<body id="userview_background">

	<?php require_once('vue/navbar.php'); ?>
    <aside id="identite">
        <?php

            echo '<div id="avatar"><img src="https://gravatar.com/avatar/'.md5($profil[0]['mail']).'?d=identicon&s=230" alt="avatar"></div>';

        ?>
        <h2><?=$profil[0]['fname'].' '.$profil[0]['name']?></h2>
        <h4><?=$profil[0]['pseudo']?></h4>
        <a class="button" id="modifier_profil" href="index.php?p=update_user">Modifier</a>
    </aside>

    <h3 id="h3_images">Mes images</h3>
    <section id="images_user">
                <?php
                    if (!empty($userimgview)) {


                    foreach ($userimgview as $imgview => $userimgviewer) {

                    //Protection contre XSS
                    $userimgview[$imgview]['name_img'] = htmlentities($userimgviewer['name_img']);
                    $userimgview[$imgview]['description'] = htmlentities($userimgviewer['description']);
                ?>
            <div class="post">
                <img class="img_post" alt="" src="<?= $userimgviewer['link'] ?>">
                <h3 class="titre_post"><?= $userimgviewer['name_img'] ?></h3>
            </div>
                <?php } }
                    else {
                        echo "Vous n'avez pas de photo";
                    }
                    ?>
    </section>

</body>
</html>
