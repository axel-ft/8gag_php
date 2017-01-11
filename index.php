<?php

require_once('modele/dbconn.php');

	if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
    		require_once('controleur/index.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'connexion') {
		require_once('controleur/connexion.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'inscription') {
                require_once('controleur/inscription.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'upload') {
                require_once('controleur/upload_nouvelle_image.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'mon_compte') {
                require_once('controleur/userview.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'logout') {
                require_once('controleur/logout.php');
        } else {
                require_once('controleur/404.php');
        }

