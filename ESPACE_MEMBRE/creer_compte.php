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
        <h2>Création de compte</h2>
        <div class="formulaire">                
            <form action="admin.php" method="post">
                <input name="nom" type="text" placeholder="Votre nom" />
                <input name="prenom" type="text" placeholder="Votre prénom" />
                <input name="pseudo" type="text" placeholder="Pseudo" />
                <input name="pwd" type="password" placeholder="Mot de passe" />
                <input name="confPwd" type="password" placeholder="Confirmer mot de passe" />
                <input type="submit" value="Envoyer" />
            </form>
        </div>
        <div>
              <?php if( isset( $_GET['erreur'] ) ) echo $_GET['erreur']; ?>
        </div>       
        </section>
        <?php include_once('footer.php'); ?>
    </body>
</html>