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
        <section class="contain">
            <div><a href="connexion.php">Connexion</a></div>
            <div><a href="?destroy">Déconnexion</a></div>   
        </section>
        <?php include_once('footer.php'); ?>
    </body>
</html>