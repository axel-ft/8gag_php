<!doctype html>
<html>
<head>
        <title>Uploader une image</title>
	<?php require_once('vue/head_commun.php'); ?>
</head>
<body>
	<?php require_once('vue/navbar.php');?>

        <h1>Ajouter un produit</h1>
        <form action="" method="POST" enctype="multipart/form-data">
                <label for="name_img">Nom de l'image : </label>
                <input type="text" name="name_img" id="name_img"><br>
                <label for="description" value="">Description : </label>
                <input type="text" name="description" id="description"><br>
                <label for="image">Image : </label>
                <input type="file" name="image" id="image"><br>
		<?php if (isset($erreur)) {echo $erreur . '<br>';}
		if (isset($succes)) {echo $succes . '<br>';} else if (isset($echec)) {echo $echec . '<br>';} ?>
                <input type="submit" name="ajouter" id="ajouter" value="Ajouter">
        </form>



</body>
</html>
