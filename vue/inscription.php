<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="vue/css/inscription.css">
</head>

<body>
    <div id="container"></div>

    <form action="" method="post">
        <fieldset>
            <h3>Inscription</h3>
            <?php if (isset($erreur)) echo '<p>' . $erreur . '</p>'; ?>
                <input type="text" name="name" placeholder="name">
                <input type="text" name="fname" placeholder="firstname">
                <input type="text" name="pseudo" placeholder="pseudo">
                <input type="password" name="password" placeholder="password">
                <input type="mail" name="mail" placeholder="mail">
                <button type="submit" class="bttn">Envoyer!</button>
        </fieldset>
    </form>

</body>

</html>