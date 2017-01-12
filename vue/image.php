<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>8GAG - <?php if ($image !== false) echo $image['name_img']; ?></title>
	<?php require_once('vue/head_commun.php'); ?>
	<link rel="stylesheet" type="text/css" href="vue/css/index.css">
</head>
<body id="main_background">
	<?php require_once('vue/navbar.php'); ?>
	<section id="image">
		<img src="<?php if ($image !== false) echo $image['link']; ?>" alt="" >
	</section>
	<section id="section_dernieres_images">
		<h2>Les 5 dernières images uploadées</h2>
		<div id="dernieres_images">
				<div class="post">
					<h3 class="titre_post"><?= $image['name_img'] ?></h3>
					<div><img class="img_post" alt="" src="<?= $image['link'] ?>"></div>
					<p class="description_post"><?= $image['description'] ?></p>
				</div>
		</div>
	</section>
</body>
</html>
