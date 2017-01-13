<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Votre Compte</title>
    <?php require_once('vue/head_commun.php'); ?>
    <link rel="stylesheet" href="vue/css/form.css">
</head>
<body id="update_background">

<?php require_once('vue/navbar.php'); ?>


<form method="post" class="form" >
    <fieldset>
        <h3> Votre Image : </h3>

        <label for="name_img">Nom</label>
        <input type="text" placeholder="Nom" id="name_img" name="name_img" value="<?php echo $majimg[0]['name_img']?>">
        <label for="description">Description</label>
        <input type="text" placeholder="Description" id="description" name="description" value="<?php echo $majimg[0]['description']?>">
        <button type="submit" class="button">Modifier</button>

    </fieldset>
</form>

</body>
</html>

