<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>Résultats de la recherche</title>
	<?php require_once('vue/head_commun.php'); ?>
	<link rel="stylesheet" type="text/css" href="vue/css/recherche.css">
</head>
<body id="recherche_background">
	<?php require_once('vue/navbar.php'); ?>

	<section id="recherche_images">
	<?php if (isset($presence) && $presence) {?>
		<h2>Résultat<?php if ($presence === true && count($resultats) > 1) echo 's'; ?> de votre recherche</h2>
		<div id="resultats">
			<?php
				foreach ($resultats as $cle => $resultat) {
				
				//Protection contre XSS
				$resultats[$cle]['name_img'] = htmlentities($resultat['name_img']);
				$resultats[$cle]['description'] = htmlentities($resultat['description']);
			?>

				<div class="post">
					<h3 class="titre_post"><?= $resultat['name_img'] ?></h3>
					<div><img class="img_post" alt="" src="<?= $resultat['link'] ?>"></div>
					<p class="description_post"><?= $resultat['description'] ?></p>
				</div>

			<?php }
	} else if (isset($presence) && !$presence) {
		echo '<div id="aucun_res"><div><h2>Aucun résultat</h2><a href="index.php" class="button">Retour à l\'accueil</a></div></div>';
	} else {
		echo '<div id="aucun_res"><h2>Erreur</h2></div>';
	} ?>

		</div>
	</section>
</body>
</html>
