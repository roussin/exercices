<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>STREET-FIGHTER</h1>
    <fieldset>
        <legend>Choix des personnages</legend>
        <form action="" method="get">
            <input type="text" name="creationPerso" placeholder="Entrez le nom de votre nouveau personnage">
            <select name="personnages">
                <option value="numéro de l'id">Nom des personnage existants dans la bdd</option>
            </select>
            <input type="submit" value="Créer Partie">
        </form>
    </fieldset>
    <fieldset>
        <legend>La bataille</legend>
        <form action="" methode="get">
            <select name="personnages">
                <option value="se trouve dans en session">nom des perso pouvant être attaqué</option>
            </select>
            <input type="submit" value="Attaquez">
        </form>
        <fieldset>
            <legend>Résultat</legend>
        </fieldset>
    </fieldset>
    
</body>
</html>