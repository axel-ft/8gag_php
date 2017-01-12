<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>Résultats de la recherche</title>
	<?php require_once('vue/head_commun.php'); ?>
	<link rel="stylesheet" type="text/css" href="vue/css/index.css">
</head>
<body id="main_background">
	<?php require_once('vue/navbar.php'); ?>

	<section id="section_dernieres_images">
		<h2>Résultat<?php if ($presence === true && count($resultats) > 0 echo 's'; ?> de votre recherche</h2>
		<div id="dernieres_images">
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

			<?php } ?>
		</div>
	</section>
</body>
</html>
