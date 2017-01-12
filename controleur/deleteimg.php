<?php

$deleteimg = new ImageSQL();
$deleteimg->supprimer_image($_GET['image']);
header('Location: index.php?p=mon_compte');
