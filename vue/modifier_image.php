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
		<div id="dernieres_images">
			<form action="" method="">
				<input type="text" name="name_img" id="name_img" value="<?php if ($image !== false && !empty($image)) echo $image['name_img']">
				<input type="textarea" name="name_img" id="name_img"><?php if ($image !== false && !empty($image)) echo $image['description']"</textarea>
		</div>
	</section>
</body>
</html>
