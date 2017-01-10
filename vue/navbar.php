<header id="home">


    <nav>
        <form>
            <input type="search" placeholder="Search">
        </form>

        <ul class="topnav" id="myTopnav">

            <li><a href="#"><i class="material-icons">backup</i> Envoyer</a></li>

            <?php if (!$_SESSION['connected']) {
                echo '<li ><a href = "index.php?p=connexion" > Connexion</a ></li >';
                echo '<li><a href="#">Crée un compte</a></li>';
            } else {
                echo '<li><a href="#">Deconnexion</a></li>';
            }
            ?>


            <li><a href="#">A propos</a></li>


        </ul>
    </nav>
</header>

