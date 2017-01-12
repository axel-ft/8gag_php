<!doctype html>
<html>
<head>
        <title>Uploader une image</title>
	<?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" href="vue/css/inscription.css">
</head>
<body id="upload_background">
	<?php require_once('vue/navbar.php');?>


        <form action="" method="POST" enctype="multipart/form-data" id="msform">
            <fieldset>
                <h3>Uploader une image</h3>
                <?php if (isset($erreurupload)) echo $erreurupload . '<br>';?>
                <label for="name_img">Nom de l'image  </label>
                <input type="text" name="name_img" id="name_img"><br>
                <label for="description" value="">Description  </label>
                <input type="text" name="description" id="description"><br>
                <label for="image">Image  </label>
                <input type="file" name="image" id="image"><br>
		<?php if (isset($erreur)) echo $erreur . '<br>';
		if (isset($succes)) {echo $succes . '<br>';} else if (isset($echec)) {echo $echec . '<br>';} ?>
                <input type="submit" name="ajouter" id="ajouter" value="Ajouter">
            </fieldset>
        </form>



</body>
</html>
