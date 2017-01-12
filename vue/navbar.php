<header id="home">
    <nav>
        <form id="recherche_form" method="post" action="index.php?p=recherche">
            	<input type="search" placeholder="Rechercher">
		    <i class="material-icons">search</i>

        </form>

        <ul class="topnav" id="myTopnav">
            <li><a class="upload" ref="index.php?p=upload"><i class="material-icons">backup</i> Envoyer</a></li>

            <?php if (!isset($_SESSION['connected'])) { ?>
                <li><a href="index.php?p=connexion">Connexion</a></li>
                <li><a href="index.php?p=inscription">Créer un compte</a></li>
            <?php } else { ?>
                <li><a href="index.php?p=mon_compte">Mon compte</a></li>
                <li><a href="index.php?p=logout">Deconnexion</a></li>
            <?php } ?>

            <li><a href="#">A propos</a></li>
        </ul>
    </nav>
</header>

