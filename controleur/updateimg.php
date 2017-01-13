<?php
require_once ('modele/imagesql.php');

$maj = new ImageSQL();
$majimg = $maj->get_images(null, null, null,$_GET['image']);


if (!empty($_POST['name_img']) && !empty($_POST['description'])) {
    $maj->maj_image();
} else {
        echo "<h3>Tous les champs ne sont pas remplis</h3>";
    };

require_once ('vue/updateimg.php');