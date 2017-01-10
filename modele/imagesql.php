<?php
class ImageSQL {
	function __construct($db) {
		$this->db = $db;
	}	

	//Insérer les informations d'image
	public function insert_image($date_upload, $chemin_image) {
        	$image_ins = $db->prepare('INSERT INTO images(date_upload, ip_user, id_user, link, name_img, description) VALUES (:date_upload, :ip_user, :id_user, :link, :name_img, :description)');
		$image_ins->bindParam(':date_upload', $date_upload, PDO::PARAM_STR);
        	$image_ins->bindParam(':ip_user', $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);
		$image_ins->bindParam(':id_user', $_SESSION['id'], PDO::PARAM_INT);
        	$image_ins->bindParam(':link', $chemin_image, PDO::PARAM_STR);
        	$image_ins->bindParam(':name_img', $_FILES['image']['name'], PDO::PARAM_STR);
        	$image_ins->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
        	$image_ins->execute();
	}

	public function get_liste_produits($limit, $id = null) {
		if ($id !== null) {
        		$get_produit = $db->prepare('SELECT * FROM product WHERE id = :id');
			$intid = intval($id);
			$get_produit->bindParam(':id', $intid, PDO::PARAM_INT);
        		$get_produit->execute();
        		$produits = $get_produit->fetchAll();
			return $produits;
		} else {
			$get_produits = $db->prepare('SELECT * FROM product');
                        $get_produits->execute();
                        $produits = $get_produits->fetchAll();
			return $produits;
		}
	}

}
