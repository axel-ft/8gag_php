<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>Votre Compte</title>
	<?php require_once('vue/head_commun.php'); ?>
</head>
<body>

	<?php require_once('vue/navbar.php'); ?>

<form method="post" id="msform" action="#">
    <fieldset>
        <h2>Votre Compte</h2>
        <?php if ($_SESSION['connected'] === true) { ?>
            <h2>Bienvenue <?=$profil[0]['fname']?> </h2>

      	        <h3> Vos Informations : </h3>

      	        <p>Nom : <?=$profil[0]['name']?><br />
      	        Prenom : <?=$profil[0]['fname']?><br />
            	Pseudo : <?=$profil[0]['pseudo']?><br>
            	Email : <?=$profil[0]['mail']?></p>

        <?php } else { ?>

        	<p>Il y a une erreur</p>

        <?php } ?>

        <br>
        <a href="#"><button type="button" class="action-button"> Modifier </button></a>
        <a href="#"><button type="button" class="action-button"> Vos Photos</button></a>
        <a href="index.php?p=logout"><button type="button" class="action-button"> Deconnexion </button></a>
    </fieldset>
</form>
</body>
</html>
