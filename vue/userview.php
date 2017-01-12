<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>Votre Compte</title>
	<?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" href="vue/css/userview.css">
</head>
<body>

	<?php require_once('vue/navbar.php'); ?>





        <?php if (isset($_SESSION['connected']) && $_SESSION['connected']) { ?>
        <section class="row">

            <?php
            if (!empty($profil[0]['avatar'])) {

                echo '<div class="col-md-6" id="avatar"><img src="'.$profil[0]['avatar'].'" alt="avatar"></div>';
            } else {
                echo '<div class="col-md-6" id="avatar"><img src="vue/css/default.jpg" alt="avatar"></div>';
            }


            ?>

                <div class="col-md-6" id="images">
                    <h3>Images de <?=$profil[0]['fname']?></h3>
                    <br>
                    <br>

                </div>

        </section>

            <section class="row">
                <div class="col-md-6" id="identite">
                <h2><?=$profil[0]['fname'].' '.$profil[0]['name']?></h2>
                <h4><?=$profil[0]['pseudo']?></h4>
            </div>
            </section>
        </div>
            <section class="row">
                <div class="col-md-6">
                    <input type="submit" value="Modifier" class="submit-btn btn--primary">
                </div>
            </section>

            <br><br><br><br><br><br><br><br><br><br>
        <?php } ?>







    <fieldset>
        <h2>Votre Compte</h2>
        <?php if (isset($_SESSION['connected']) && $_SESSION['true']) { ?>
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
