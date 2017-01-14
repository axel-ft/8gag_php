<?php

$deleteimg = new ImageSQL();
$deleteimg->supprimerImage($_GET['image']);
header('Location: index.php?p=mon_compte');