
<?php

session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>liste</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include_once('header.php'); ?>
        <div class="formulaire">                
            <form action="admin.php" method="post">
                <input name="pseudo" type="text" placeholder="Pseudo" />
                <input name="pwd" type="password" placeholder="Mot de passe" />
                <input type="submit" value="Connexion" />
            </form>
        </div>
        <a href="creer_compte.php">Créer son compte</a>
        <div>
            <?php if( isset( $_GET['erreur'] ) ) echo $_GET['erreur']; ?>
        </div>       
        </section>
        <?php include_once('footer.php'); ?>
    </body>
</html>