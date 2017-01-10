<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Account</title>
    <link rel="stylesheet" href="styleform.css">

</head>
<?php
require ('vue/navbar.php');
?>
<body>

<form method="post" id="msform" action="#">
    <fieldset>
        <h2>Votre Compte</h2>
        <?php if ($_SESSION['connected'] == true) { ?>

            Bienvenue <?=$_SESSION['user']['name']?> <br />

            <br /> Vos Information: <br/><br />
            Nom : <?=$_SESSION['user']['name']?><br />
            Email : <?=$_SESSION['user']['email']?><br />

        <?php } else { ?>

        <p>Il y a une erreur</p>

        <?php } ?>




        ?>


        <br>
        <a href="admin.php"><button type="button" class="action-button"> Modifier </button></a>
        <a href="liste.php"><button type="button" class="action-button"> Vos produits </button></a>


        <a href="logout.php"><button type="button" class="action-button"> Deconnexion </button></a>


    </fieldset>
</form>




</body>
</html>