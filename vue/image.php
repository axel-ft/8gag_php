<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>8GAG - <?php if (isset($image)) echo $image['name_img']; ?></title>
	<?php require_once('vue/head_commun.php'); ?>
	<link rel="stylesheet" type="text/css" href="vue/css/image.css">
</head>
<body id="image_background">
	<?php require_once('vue/navbar.php'); ?>

<div id="container">
	<section id="image">
		<img src="<?php if (isset($image)) echo $image['link']; ?>" alt="" >
	</section>

        <aside id="identite">
		<h4>Publié par : </h4>
                <div id="avatar">
			<img src="https://gravatar.com/avatar/<?php if (isset($image)) echo md5($sender[0]['mail']); ?>?d=identicon&s=100" alt="avatar">
			<div id="pseudoname"><h4><?php if (isset($image)) echo $sender[0]['pseudo']; ?></h4>
			<h6><?php if (isset($image)) echo $sender[0]['fname'].' '.$sender[0]['name']; ?></h6></div>
		</div>

		<p>Le : <?php if (isset($image)) echo $image['date_upload']; ?></p>
        </aside>

	<section id="info_image">
		<h2 class="titre_post"><?php if (isset($image)) echo $image['name_img']; ?></h2>
		<p class="description_post"><?php if (isset($image)) echo $image['description']; ?></p>
		<?php if ($_SESSION['id_user'] === $image['id_user']) echo '<a href="index.php?p=mon_compte'. '"  class="button">Modifier</a>'; ?>
		<a href="<?php if (isset($image)) echo $image['link']; ?>" download="<?php if (isset($image)) echo $image['name_img'] . $extension; ?>" class="button">Télécharger</a>
	</section>

</div>

</body>
</html>
