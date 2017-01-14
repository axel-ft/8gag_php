<?php

$imgreq  = new ImageSQL();
$images = $imgreq->getImages(5);

require_once ('vue/accueil.php');