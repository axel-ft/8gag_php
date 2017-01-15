# Connexion à la base de données

Le fichier de connexion à la base de données est nommé dbconn.php et est créé de la façon suivante :

```php
<?php
        session_start();
        $dbinfo = 'mysql:dbname=DBNAME;host=localhost';
        $user = 'USER';
        $password = "PASSWORD";
        try {
            $db = new PDO($dbinfo, $user, $password);
        } catch (PDOException $e) {
            return 'Connexion échouée : ' . $e->getMessage();
        }
?>
```

Il n'a pas été ajouté ici pour ne pas afficher le mot de passe de connexion à la bdd.

# Dumps SQL

Le dossier contient aussi deux dumps SQL : un ne contenant que les tables vides, et le deuxième contenant un utilisateur et des images exemples.
Le nom d'utilisateur à utiliser est "test@test.fr" et le mot de passe est "ProjetPHP!"
