<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>Accueil</title>
	<?php require_once('vue/head_commun.php'); ?>
	<link rel="stylesheet" type="text/css" href="vue/css/index.css">
</head>
<body id="main_background">
	<?php require_once('vue/navbar.php'); ?>

	<section id="bienvenue">
		<div>
			<h1>Bienvenue sur 8gag</h1>
			<h2>Partagez vos images</h2>
			<p>Vous pouvez envoyer vos images sur ce site pour les partager. Un lien direct vous est donné à l'issue de l'upload.<br>
			Dans la limite de 10 Mo, les formats JPEG, JPG, PNG, BMP, et GIF sont acceptés.</p>
			<a class="button" id="start_upload" href="index.php?p=upload">Démarrer l'envoi</a>
			<p>OU</p>
			<a class="button" id="discover" href="#dernieres_images">Découvrir les 5 dernières images uploadées</a>
		</div>
	</section>

	<section id="section_dernieres_images">
		<h2>Les 5 dernières images uploadées</h2>
		<div id="dernieres_images">
			<?php
				foreach ($images as $cle => $image) {
				
				//Protection contre XSS
				$images[$cle]['name_img'] = htmlentities($image['name_img']);
				$images[$cle]['description'] = htmlentities($image['description']);
			?>

				<div class="post">
					<h3 class="titre_post"><?= $image['name_img'] ?></h3>
					<div><img class="img_post" alt="" src="<?= $image['link'] ?>"></div>
					<p class="description_post"><?= $image['description'] ?></p>
				</div>

			<?php } ?>
		</div>
	</section>
</body>
</html>
