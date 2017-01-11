<?php 
	if (!empty($_FILES['image']) && $_FILES['image']['error'] !== 4) {
                $dossier = 'vue/images/upload/';
                $extension = strrchr($_FILES['image']['name'], '.');
                $image = md5_file($_FILES['image']['tmp_name']) . $extension;
                $taille_maxi = 10485760;
                $taille = filesize($_FILES['image']['tmp_name']);
                $extensions = array('.png', '.gif', '.jpg', '.jpeg', '.bmp', '.PNG', '.GIF', '.JPG', '.JPEG', '.BMP');

		$finfo = finfo_open(FILEINFO_MIME_TYPE);
		$mime = finfo_file($finfo, $_FILES['image']['tmp_name']);
		$mimes = array('image/png', 'image/gif', 'image/jpeg', 'image/bmp');

                if (!in_array($extension, $extensions) && !in_array($mimes, $mime)) {
                        $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg';
                }

		finfo_close($finfo);

                if ($taille > $taille_maxi) {
			$erreur = 'Le fichier est trop gros...';
		}
                if(!isset($erreur)) {
                        if(move_uploaded_file($_FILES['image']['tmp_name'], $dossier . $image)) {
                                $chemin = $dossier . $image;
				$datetime = date_create()->format('Y-m-d H:i:s');
                                $succes = 'Upload effectué avec succès !';
                        } else {
                                $echec = 'Echec de l\'upload !';
                        }
                }
	}
