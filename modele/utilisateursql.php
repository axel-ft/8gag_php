<?php
class UtilisateurSQL {
	/*****
	**
	**	Requêtes pour les utilisaturs
	**
	*****/

	//Création d'un compte utilisateur
	public function inscription_compte() {
		global $db;
		$inscription = $db->prepare('INSERT INTO users(name, fname, pseudo, email, password) VALUES (:name, :fname, :pseudo, :email, :password)');
		$inscription->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
		$inscription->bindParam(':fname', $_POST['fname'], PDO::PARAM_STR);
		$inscription->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
		$inscription->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
		$inscription->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
		$inscription->execute();
	}
	
	//Récupère les informations d'un utilisateur pour la connexion (via mail et password)
        public function connect_compte() {
		global $db;
                $connexion = $db->prepare('SELECT * FROM users WHERE email = :email AND password = :password');
                $connexion->bindParam(':email', $_POST['email']);
                $connexion->bindParam(':password', $_POST['password']);
                $connexion->execute();
                $compte = $connexion->fetchAll();
                return $compte;
        }

	//Récupérer un utilisateur en précisant l'id en argument. Si aucun id n'est précisé tous les utilisateurs sont retournés
	public function getUser($id = null) {
		global $db;
		if ($id !== null) {
        		$get_users = $db->prepare('SELECT * FROM users WHERE id = :id');
			$intid = intval($id);
			$get_produit->bindParam(':id', $intid, PDO::PARAM_INT);
        		$get_produit->execute();
        		$users = $get_users->fetchAll();
			return $users;
			echo 'hello';
		} else {
			$get_user = $db->prepare('SELECT * FROM users');
                        $get_user->execute();
                        $user = $get_user->fetchAll();
			return $user;
			echo 'hello';
		}
	}

	//Désactiver le compte utilisateur connecté
	public	function desactiver_compte() {
		global $db;
		$desactiver = $db->prepare('UPDATE users SET active = :active WHERE id = :id');
		$desactiver->bindParam(':active', 0, PDO::PARAM_INT);
		$desactiver->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
		$desactiver->execute();
	}

	//Mettre à jour le profil à l'exception du mot de passe
	public function maj_compte() {
		global $db;
		$maj = $db->prepare('UPDATE users SET name = :name, fname = :fname, pseudo = :pseudo, email = :email WHERE id = :id');
		$maj->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
		$maj->bindParam(':fname', $_POST['fname'], PDO::PARAM_STR);
		$maj->bindParam(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
		$maj->bindParam(':email', $_POST['email'], PDO::PARAM_STR);
		$maj->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
		$maj->execute();
	}

	//Mettre la jour le mot de passe de l'utilisateur
	public function maj_password() {
		global $db;
		$majpwd = $db->prepare('UPDATE users SET password = :password WHERE id = :id');
		$majpwd->bindParam(':password', $_POST['password'], PDO::PARAM_STR);
		$majpwd->bindParam(':id', $_SESSION['id'], PDO::PARAM_INT);
		$majpwd->execute();
	}
}
