<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
    </head>
    <body>
        <h1>Bienvenu dans le pays des nains</h1> 
        <h3>Liste des villes à visiter :</h3>
            <ul>
                <?php
                foreach ($villes as $ville) {
                ?>
                <li>goto : <a href=".?c=ville&a=fiche&id=<?php echo $ville->getId(); ?>"><?php echo $ville->getNom(); ?></a></li>
                <?php
                }
                ?>
            </ul>

        <!-- <h3>Liste des tavernes :</h3>
            <ul>
                <li>
                    charger/afficher tous les tavernes 
                </li>
            </ul> -->

        <!-- <h3>Liste des nains originaire de cette ville</h3>
            <ul>
                <li>
                    charger/afficher tous les nains originaire de cette ville 
                </li>
            </ul>

        <h3>Liste des tavernes de cette ville</h3>
            <ul>
                <li>
                    charger/afficher toutes les tavernes de cette ville 
                </li>
            </ul>

        <h3>Liste Des tunnels</h3>
            <ul>
                <li>
                    Tunnel vers charger/afficher ville cible(t_villearrivee_fk) ?> :  si (t_progression<100)progression du tunnel(t_progress) . '%' sinon'ouvert' ?>
                </li>
            </ul> -->
    </body>
</html>