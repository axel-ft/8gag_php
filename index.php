<?php

require_once('modele/dbconn.php');
require_once('modele/utilisateursql.php');
require_once('modele/imagesql.php');


	if (!isset($_GET['p']) OR $_GET['p'] === 'index') {
    		require_once('controleur/accueil.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'connexion') {
		require_once('controleur/connexion.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'logout') {
                require_once('controleur/logout.php'); 
	} else if (isset($_GET['p']) AND $_GET['p'] === 'inscription') {
                require_once('controleur/inscription.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'desactiveruser') {
		require_once('controleur/desactiveruser.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'upload') {
                require_once('controleur/upload_nouvelle_image.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'image') {
                require_once('controleur/image.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'deleteimg') {
	        require_once('controleur/deleteimg.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'recherche') {
                require_once('controleur/recherche.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'update_image') {
       	       require_once('controleur/update_image.php');
	} else if (isset($_GET['p']) AND $_GET['p'] === 'mon_compte') {
                require_once('controleur/userview.php');
   	} else if (isset($_GET['p']) AND $_GET['p'] === 'update_user') {
        	require_once('controleur/update_user.php');
   	} else if (isset($_GET['p']) AND $_GET['p'] === '500') {
        	require_once('controleur/500.php');
   	} else if (isset($_GET['p']) AND $_GET['p'] === '403') {
        	require_once('controleur/403.php');
	} else {
                require_once('controleur/404.php');
        }

