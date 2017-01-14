<?php
class ImageSQL {
	//Insérer les informations d'image
	public function insert_image($date_upload, $chemin_image) {
		global $db;
        	$image_ins = $db->prepare('INSERT INTO images(date_upload, ip_user, id_user, link, name_img, description) VALUES (:date_upload, :ip_user, :id_user, :link, :name_img, :description)');
		$image_ins->bindParam(':date_upload', $date_upload, PDO::PARAM_STR);
        	$image_ins->bindParam(':ip_user', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);
		$intid_user = intval($_SESSION['id_user']);
		$image_ins->bindParam(':id_user', $intid_user, PDO::PARAM_INT);
        	$image_ins->bindParam(':link', $chemin_image, PDO::PARAM_STR);
        	$image_ins->bindParam(':name_img', $_POST['name_img'], PDO::PARAM_STR);
        	$image_ins->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
        	$image_ins->execute();
	}
	
	/*****
	**
	**	Récupère une ou plusieurs images.
	**	Si plusieurs images sont récupérées, elles sont classées par date d'upload
	**	$limit pour les x dernières images uploadées
	**	$id pour récupérer une image
	**	$id_user pour récupérer les images d'un utilisateur via son id
	**	Utiliser null pour ne pas tenir compte d'un argument
	**
	*****/
	public function get_images($limit = null, $id_user = null, $name = null, $id = null) {
		global $db;

		if ($limit !== null) {
			$intlimit = intval($limit);
		}

		if ($id !== null) {
			$intid = intval($id);
		}

		if ($id_user !== null) {
			$intid_user = intval($id_user);
		}
		
		if ($name !== null) {
			$name = '%' . htmlEntities($name) . '%';
		}

		$select = 'SELECT * FROM images ';
		$idreq = 'WHERE id = :id ';
		$namereq = 'WHERE name_img OR description LIKE :namereq ';
		$user = 'WHERE id_user = :id_user ';
                $limitreq = 'LIMIT :limit';
                $orderby = 'ORDER BY date_upload DESC ';


		if (isset($intlimit) && isset($intid_user) && !isset($intid) && $name === null) {
		//Les x dernières images uploadées par un utilisateur
        		$get_images = $db->prepare($select . $user . $orderby . $limitreq);
			$get_images->bindParam(':id_user', $intid_user, PDO::PARAM_INT);
			$get_images->bindParam(':limit', $intlimit, PDO::PARAM_INT);
		} else if (isset($intid) && !isset($intlimit)  && !isset($intid_user) && $name === null) {
		//Une image par son id
			$get_images = $db->prepare($select . $idreq);
			$get_images->bindParam(':id', $intid, PDO::PARAM_INT);
		} else if ($name !== null && !isset($intid_user) && isset($intlimit) && !isset($intid)) {
		//Recherche par mot dans le nom ou la description de l'image. Nombre de résultats renvoyés défini par limit
			$get_images = $db->prepare($select . $namereq . $orderby . $limitreq);
			$get_images->bindParam(':namereq', $name, PDO::PARAM_STR);
			$get_images->bindParam(':limit', $intlimit, PDO::PARAM_INT);
		} else if ($name !== null  && !isset($intid_user) && !isset($intid)) {
		//Recherche par mot dans le nom ou la description de l'image
			$get_images = $db->prepare($select . $namereq . $orderby);
			$get_images->bindParam(':namereq', $name, PDO::PARAM_STR);
		} else if (isset($intlimit) && !isset($intid) && $name === null) {
		//Les x dernières images uploadées
			$get_images = $db->prepare($select . $orderby . $limitreq);
			$get_images->bindParam(':limit', $intlimit, PDO::PARAM_INT);
		} else if (isset($intid_user) && $name === null && !isset($intid)) {
		//Toutes les images uploadées par un utilisateur
        		$get_images = $db->prepare($select . $user . $orderby);
			$get_images->bindParam(':id_user', $intid_user, PDO::PARAM_INT);
		} else if ($limit === null && $id_user === null && $name == null && $id === null) {
		//Toutes les images uploadées
			$get_images = $db->prepare($select);
		} else {
			$erreur = 'Erreur';
		}
       
		if (!isset($erreur)) {
			$get_images->execute();
       			$images = $get_images->fetchAll();
			return $images;
		} else {
			return $erreur;
		}
	}

	//Modifier les informations d'image sans modifier le fichier
	public function maj_image() {
                global $db;
		$datetime = date_create()->format('Y-m-d H:i:s');
		$intid_user = intval($_SESSION['id_user']);
		$intid_img = intval($_GET['id']);
                $maj_image = $db->prepare('UPDATE images SET name_img = :name_img, description = :description, ip_user = :ip_user, id_user = :id_user, date_upload = :date_upload WHERE id = :id');
                $maj_image->bindParam(':date_upload', $datetime, PDO::PARAM_STR);
                $maj_image->bindParam(':ip_user', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);
                $maj_image->bindParam(':id_user', $intid_user, PDO::PARAM_INT);
                $maj_image->bindParam(':name_img', $_POST['name_img'], PDO::PARAM_STR);
                $maj_image->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
                $maj_image->bindParam(':id', $intid_img, PDO::PARAM_INT);
                $maj_image->execute();
	}

	//Modifier le lien d'image dans la bdd lors d'une modification d'image
	public function maj_image_fichier($chemin_image) {
                global $db;
		$intid_img = intval($_GET['id']);
                $maj_link = $db->prepare('UPDATE images SET link = :link WHERE id = :id');
                $maj_link->bindParam(':link', $chemin_image, PDO::PARAM_STR);
                $maj_link->bindParam(':id', $intid_img, PDO::PARAM_INT);
                $maj_link->execute();
	}
	
	//Supprimer une image de la base de données
	public function supprimer_image($id_image) {
		global $db;
		$supp_image = $db->prepare('DELETE FROM images WHERE id = :id');
		$intid = intval($id_image);
		$supp_image->bindParam(':id', $intid, PDO::PARAM_INT);
		$supp_image->execute();
	}
}
