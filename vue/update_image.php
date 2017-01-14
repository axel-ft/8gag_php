<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Modifier votre image</title>
    <?php require_once('vue/head_commun.php'); ?>
        <link rel="stylesheet" type="text/css" href="vue/css/form.css">
        <link rel="stylesheet" type="text/css" href="vue/css/update_image.css">
</head>
<body id="update_background" style="background: url('<?php if (isset($majimg)) echo $majimg[0]['link']; ?>') scroll no-repeat center;">

    <?php require_once('vue/navbar.php'); ?>

	<form method="post" class="form" id="upload-image" enctype="multipart/form-data">
	    <fieldset>
	        <h3> Modifiez votre image</h3>
		<?php if (isset($erreur)) echo $erreur; ?>
	        <label for="name_img">Nom</label>
	        <input type="text" placeholder="Nom" id="name_img" name="name_img" value="<?php echo $majimg[0]['name_img']?>" required pattern="[a-zA-Z0-9-_.]+">
	        <label for="description">Description</label>
	        <input type="text" placeholder="Description" id="description" name="description" value="<?php echo $majimg[0]['description']?>" required>
		<label for="image">Image <span style="color: #999999;">(laisser vide pour conserver)</span></label>
		<div id="file-upload">
                        <input type="file" name="image" id="image">
                        <label for="image" id="upload-label">Choisir une image&hellip;</label>
                        <p id="filepath" class="filepath"></p>
                        <div id="div_apercu"><img id="apercu"></div>
		</div>
	        <button type="submit" class="button">Modifier</button>
	    </fieldset>
	</form>
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="vue/js/upload_ajax.js"></script>
<script type="text/javascript" src="vue/js/upload-button.js"></script>
</body>

</html>
