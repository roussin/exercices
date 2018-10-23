<?php

    //On inclus les bibliothèque du jeu
    include_once("assets\librairies\\nombresLotoChoisi.php");
    include_once("assets\librairies\\tirageDuLoto.php");
    include_once("assets\librairies\comparerLesGrilles.php");
    include_once("assets\librairies\leDirectLive.php");
    
    // Argent disponible
    $monnaie = 100;
    // L'argent gagné lors d'un tirage
    $monnaieGagner = 0;

    /*LES CONSTANTES -> gains etPrix de la grille */
    define('AVOIR6NUM', 20);
    define('AVOIR5NUM', 15);
    define('AVOIR4NUM', 8);
    define('AVOIR3NUM', 4);
    define('AVOIR2NUM', 2);
    define('PRIX1GRILLE',2);

    // pour que le joueur puisse arrêter de jouer
    $oui = readline("Pour participer au grand tirage de ce jouer en achetant une grille merci de taper ('o') : "); 
    $oui = strtolower($oui);
    // même si l'utilisateur rentre oui la variable ne garde que la première lettre
    $oui = substr($oui,0,1);


    /* // Nombre de grilles que le joueur veux acheter

    $nombreGrillesAchete = 0;
    $totalPrixGrilleAchete = 0; */

    while ($oui === 'o' && $monnaie > 0) {

        // Tableau qui contiendra les chiffres du loto
        $grille_gagnante = [];

        // Tableau qui contiendra les chifres de ma grille
        $maGrille = [];
       
        // Tableau qui contiendra les chiffres identiques
        $numIdentiques = [];

        /* //Achat d'une grille
        $monnaie -= PRIX1GRILLE; */

        // L'utilisateur entre ses 6 chiffres 
        nombresLotoChoisi($maGrille);

        // Le tirage des lettres sont mise dans le tableau
        tirageDuLoto($grille_gagnante);

        leDirectLive($grille_gagnante);

        echo "\r\nVous comparez vos numéros et ceux du tirage...\r\n";

        // pause 
        sleep(1);

        echo "Vos numéros = " . implode(" ", $maGrille) . "\r\n";
        echo "Les numéros gagnants = " . implode(" ", $grille_gagnante) . "\r\n";

        // pause 
        sleep(1);

        comparerLesGrilles($maGrille,$grille_gagnante,$numIdentiques);

        $nbNumIdentiques = count($numIdentiques);

        if ($nbNumIdentiques != 0) {

            switch ($nbNumIdentiques)  {

                case 2 :
                    $monnaieGagner = AVOIR2NUM;
                    break;
                case 3 :
                    $monnaieGagner = AVOIR3NUM;
                    break;
                case 4 :
                    $monnaieGagner = AVOIR4NUM;
                    break;
                case 5 : 
                    $monnaieGagner = AVOIR5NUM;
                    break;
                case 6 :
                    $monnaieGagner = AVOIR6NUM;
                    break;
            }
            $monnaie += $monnaieGagner;
            echo "\r\nVous allez chez votre buraliste... Vous avez $nbNumIdentiques nurméro(s) identique(s).\r\nVous récolté $monnaieGagner Euro(s) BRAVO !!!\r\nVous avez maintenant en poche $monnaie Euros\r\n";

        } else {

            echo "\r\nVous arrivez chez le buraliste... et... Dommage il fallait au moins 2 numéro identiques pour gagner un peu d'argent ;)\r\n";

        }
        // réinitialisation du compteur monnaie
        $monnaieGagner = 0;

        // on redemande au joueur si il veut continuer de jouer (bien sur si ila assez d'argent)
        $oui = readline("\r\nVoulez-vous acheter une nouvelle grille ? votre cagnotte est de $monnaie euro(s) ('o') : \r\n");
    }

    echo "\r\nMerci d'avoir joué et à bientôt :)";

   /* SUITE DE L'EXERCICE

   EN + (pas demandé)

   -> on demande si on veut continuer et combien de grilles on veut remplir 
   -> on demande si l'on veut créditer notre compte jeu lorsque monnaie > 100
    */

  /*  // Achat des grilles

  
    //Compléter la 1ere grille jusqu'à $nombreGrillesAchete - 1
    for ($i = 0 ; $i < $nombreGrillesAchete ; $i++) {

    }
    if ($oui === 'o') {

    $nombreGrillesAchete = readline("Combien de grilles voulez-vous acheter (maxi 5) ? (Vous avez $monnaie euros et chaque grille est à 2 euros\r\n");
    $totalPrixGrilleAchete = $nombreGrillesAchete * PRIX1GRILLE;
        
    while ($totalPrixGrilleAchete > $monnaie OR  $nombreGrillesAchete > 5) {

        echo "Vous demander trop de grille... vous n'avez pas assez d'argent :(";
        $nombreGrillesAchete = readline("Combien de grilles voulez-vous acheter ? (Vous avez $monnaie euros et chaque grille est à 2 euros\r\n");
    }

}

echo "Vous venez d'acheter $nombreGrillesAchete\r\n";
//Achat de grille(s)
$monnaie -= PRIX1GRILLE * $nombreGrillesAchete; */
