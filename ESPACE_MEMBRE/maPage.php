<?php

session_start();

if (isset($_GET['destroy'])  ){

    unset($_SESSION['monSite'] );
}

if( !isset( $_SESSION['monSite'] ) ) {

    header('Location: index.php');
    exit;
}

var_dump($_SESSION['monSite']);

//var_dump($_SESSION['monSite']['prenom']);

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
        <a href="?destroy">Déconnexion</a>
        <section>
            <h2>BIENVENU SUR TA PAGE <?php echo strtoupper($_SESSION['monSite']['prenom']); ?> :)</h2>
        </section>
        <?php include_once('footer.php'); ?>
    </body>
</html>