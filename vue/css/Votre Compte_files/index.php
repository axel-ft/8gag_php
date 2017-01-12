<!DOCTYPE html>
<html lang="fr">
<head>
    	<title>Votre Compte</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="#">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="vue/css/styleNav.css">
    <link rel="stylesheet" href="vue/css/userview.css">
</head>
<body>

	<header id="home">
    <nav>
        <form method="post" action="index.php?p=recherche">
            	<input type="search" placeholder="Rechercher">
		<button type="submit"><i class="material-icons">search</i></button>
        </form>

        <ul class="topnav" id="myTopnav">
            <li><a href="index.php?p=upload"><i class="material-icons">backup</i> Envoyer</a></li>

                            <li><a href="index.php?p=mon_compte">Mon compte</a></li>
                <li><a href="index.php?p=logout">Deconnexion</a></li>
            
            <li><a href="#">A propos</a></li>
        </ul>
    </nav>
</header>






                <section class="row">

                <div class="col-md-6" id="avatar"><img src="vue/images/forme-de-carre-noir_318-35701 (1).jpg" alt="avatar"></div>
                <div class="col-md-6" id="images">
                    <h3>Images de jack</h3>
                </div>
        </section>

            <section class="row">
            <div class="col-md-6" id="identite">
            <h2>jack david</h2>
            <h4>davjackt</h4>
            </div>
            </section>
        </div>

            <br><br><br><br><br><br><br><br><br><br>
        






    <fieldset>
        <h2>Votre Compte</h2>
        
        	<p>Il y a une erreur</p>

        
        <br>
        <a href="#"><button type="button" class="action-button"> Modifier </button></a>
        <a href="#"><button type="button" class="action-button"> Vos Photos</button></a>
        <a href="index.php?p=logout"><button type="button" class="action-button"> Deconnexion </button></a>
    </fieldset>
</form>
</body>
</html>
