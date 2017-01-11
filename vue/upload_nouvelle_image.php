<!doctype html>
<html>
<head>
        <title>Uploader une image</title>
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    	<link rel="stylesheet" href="#">
    	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    	<link rel="stylesheet" href="vue/css/styleNav.css">
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
