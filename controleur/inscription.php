<?php
    require_once('modele/utilisateursql.php');
    require_once('vue/inscription.php');
 
     $create = new UtilisateurSQL();

if ((!empty($_POST['name']) ? trim($_POST['name']): null) && (!empty($_POST['fname']) ? trim($_POST['fname']): null) && (!empty($_POST['pseudo']) ? trim($_POST['pseudo']): null) && (!empty($_POST['mail']) ? trim($_POST['mail']): null) && !empty($_POST['password']))
{
   
    $createuser = $create->inscription_compte();
    
} else {
    
    $erreur = '<p>Il y a eu une erreur...</p>';
    
}
