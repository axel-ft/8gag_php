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
            <div id="avatar"><img src="https://gravatar.com/avatar/<?= md5($profil[0]['mail']) ?>?d=identicon&s=230" alt="avatar"></div>
            <h4><?=$profil[0]['fname'].' '.$profil[0]['name']?></h4>
            <h5><?=$profil[0]['pseudo']?></h5>
            <a class="button" id="modifier_profil" href="index.php?p=update_user">Modifier</a>
        </aside>

        <section id="images_user">
            <h3 id="h3_images">Mes images</h3>
            <?php
			if (!empty($userimgview)) {
				foreach ($userimgview as $imgview => $userimgviewer) {
			                    //Protection contre XSS
                    			$userimgview[$imgview]['name_img'] = htmlentities($userimgviewer['name_img']);
                    			$userimgview[$imgview]['description'] = htmlentities($userimgviewer['description']);
                ?>

                <div class="post">
                    <a href="?p=image&id=<?= $userimgviewer['id'] ?>"><div class="small img_post" style="background-image: url('<?= $userimgviewer['link'] ?>');"></div></a>
                    <h3 class="titre_post_small"><?= $userimgviewer['name_img'] ?></h3>
                    <a href="index.php?p=deleteimg&image=<?=$userimgviewer['id']?>" class="button supprimer"><i class="material-icons">clear</i></a>
                    <a class="button modifier" href="index.php?p=update_image&id=<?=$userimgviewer['id']?>"><i class="material-icons">edit</i></a>
                </div>
                <?php 		} 
			} else { echo '<div id="no_images"><h4>Vous n\'avez pas d\'images</h4></div>'; }
                ?>
        </section>
</body>

</html>
