<?php

session_start();

require_once('_db/story.php');
require_once('fonctions.php');

/* unset($_SESSION['livre']);
unset($_POST['choix']); */

$_SESSION['livre'] = $story;

if ( isset($_POST['choix']) ) {

    $ligne = afficherLigne($_SESSION['livre'], $_POST['choix']);
    $choix = afficherChoix($_SESSION['livre'], $_POST['choix']);
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <title>Le livre dont vous êtes le héro | Les sessions - Mise en pratique</title>
    </head>
    <body>
        <h1>Le livre dont vous êtes le héro | Les sessions - Mise en pratique</h1>
        <hr>
        <p><em>Le livre dont vous êtes le héro est un concept bien connu dans lequel il existe plusieurs points d'arrêt où un choix vous est proposé. Ce choix influence la suite de votre parcours dans l'histoire.</em></p>
        <p><em>Dans cet exercice, le fichier <a href="_db/story.php" title="Morceaux de l'hitoire">story.php</a> contenant les différents morceaux de l'histoire vous est mis à disposition.<br />Il vous est demandé :</em></p>
        <ol style="font-style:italic;">
            <li>de créer une fonction pour afficher le chapitre n</li>
            <li>mettre en place un formulaire proposant les choix possibles à chaque décision à prendre</li>
            <li>faire en sorte d'ajouter une persistance des données pour ne pas perdre le cours de l'histoire</li>
        </ol>

        <hr>

        <h2>L'histoire :</h2>
        <?php 
            echo $ligne;
            echo "<p>Que voulez-vous faire ?</p>";
            $choix;
        ?>
    </body>
</html>