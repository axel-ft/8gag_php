<!doctype html>
<html>
<head>
        <title>Uploader une image</title>
	<?php require_once('vue/head_commun.php'); ?>
	<link type="text/css" rel="stylesheet" href="vue/css/form.css">
</head>
<body id="upload_background">
	<?php require_once('vue/navbar.php');?>

        <form action="index.php?p=upload" method="POST" enctype="multipart/form-data" id="upload-image" class="form">
            <fieldset>
                <h3>Uploader une image</h3>
                <?php if (isset($erreurupload)) echo $erreurupload;
		if (isset($erreur)) echo $erreur;
		if (isset($erreurremp)) echo $erreurremp;
		if (isset($succes)) { echo $succes; } else if (isset($echec)) { echo $echec; } ?>
		<div id="message"></div>
                <label for="name_img">Nom de l'image  </label>
                <input type="text" name="name_img" id="name_img" required pattern="[a-zA-Z0-9-_.]+"><br>
                <label for="description" value="">Description  </label>
                <input type="text" name="description" id="description" required><br>
                <label for="image">Image  </label>
                <div id="file-upload">
			<input type="file" name="image" id="image" required>
			<label for="image" id="upload-label">Choisir une image&hellip;</label>
			<p id="filepath" class="filepath"></p>
			<div id="div_apercu"><img id="apercu"></div>
		</div>
                <button type="submit" name="ajouter" class="button" id="ajouter">Ajouter</button>
            </fieldset>
        </form>

<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="vue/js/upload.js"></script>
</body>
</html>
