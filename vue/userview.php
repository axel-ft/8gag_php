<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Votre Compte</title>
	<?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" type="text/css" href="vue/css/userview.css">
</head>
<body>

	<?php require_once('vue/navbar.php'); ?>
    <aside id="identite">
        <?php
        if (!empty($profil[0]['avatar'])) {
            echo '<div id="avatar"><img src="'.$profil[0]['avatar'].'" alt="avatar"></div>';
        } else {
            echo '<div id="avatar"><img src="vue/css/default.jpg" alt="avatar"></div>';
        }
        ?>
        <h2><?=$profil[0]['fname'].' '.$profil[0]['name']?></h2>
        <h4><?=$profil[0]['pseudo']?></h4>
        <input type="submit" value="Modifier">
    </aside>

    <h3 id="h3_images">Mes images</h3>
    <section id="images_user">
                <?php
                    foreach ($userimgview as $imgview => $userimgviewer) {

                    //Protection contre XSS
                    $userimgview[$imgview]['name_img'] = htmlentities($userimgviewer['name_img']);
                    $userimgview[$imgview]['description'] = htmlentities($userimgviewer['description']);
                ?>
            <div class="post">
                <img class="img_post" alt="" src="<?= $userimgviewer['link'] ?>">
                <h3 class="titre_post"><?= $userimgviewer['name_img'] ?></h3>
            </div>
                <?php } ?>
    </section>



<form id="votre_compte">
    <fieldset>
        <h2>Votre Compte</h2>
            <?php if (isset($_SESSION['connected']) && $_SESSION['connected']) { ?>
                <h2>Bienvenue <?=$profil[0]['fname']?> </h2>
                <h3> Vos Informations : </h3>

                <p>Nom : <?=$profil[0]['name']?><br />
      	        Prenom : <?=$profil[0]['fname']?><br />
            	Pseudo : <?=$profil[0]['pseudo']?><br>
            	Email : <?=$profil[0]['mail']?></p>
            <?php } else { ?>
                <p>Il y a une erreur</p>
            <?php } ?>
        <a href="#"><button type="button" class="action-button"> Modifier </button></a>
        <a href="#"><button type="button" class="action-button"> Vos Photos</button></a>
        <a href="index.php?p=logout"><button type="button" class="action-button"> Déconnexion </button></a>
    </fieldset>
</form>

</body>
</html>
