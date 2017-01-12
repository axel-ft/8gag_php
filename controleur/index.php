<?php

$imgreq  = new ImageSQL();
$images = $imgreq->get_images(5);

require_once ('vue/index.php');