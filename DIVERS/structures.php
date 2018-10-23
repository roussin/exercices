<?php
    
   /*  
   $valeur = readline("Entrez une valeur inférieur à 20 ");
   $seuil = 20;

    if ($valeur > $seuil) {

        echo "Le double de " . $valeur . " est " . ($valeur*2);
    } else {

        echo "La valeur dépasse le seuil";
    }
    */
    /* 
    $note = readline('Entrez votre note : ');

    if ($note >= 12) {

        echo "Reçu avec mention Assez bien";

    } else if ($note > 10 AND $note < 12) {

        echo "Reçu avec mention Passable";

    } else {

        echo "Insuffisant";
    }
    */
    /* $civilite = readline('Entrez Mme / Mlle / M / Autre : ');
    $civilite = strtolower($civilite);

    switch ($civilite) {
        case "m" : 
            echo "Monsieur";
            break;
        case "mlle" :
            echo "Mademoiselle";
            break;
        case "mme" :
            echo "Madame";
            break;
        case "autre" :
            echo "Transgenre";
            break;
        default :
            echo "Ne connais pas";
    } */

/* DÉBUT
    Exercice 0
    \\ programme qui échange la valeur de deux variables
    a = 2
    b = 5
    ÉCRIRE "Avant l'échange"
    ÉCRIRE "a :"
    ÉCRIRE a
    ÉCRIRE "b :"
    ÉCRIRE b
    temp = a
    a = b
    b = temp
    ÉCRIRE "Après l'échange"
    ÉCRIRE "a :"
    ÉCRIRE a
    ÉCRIRE "b :"
    ÉCRIRE b
FIN */

/* $a = readline("Saisir une première valeur : ");
$b = readline("Saisir une deuxième valeur : ");

echo "Avant l'inversion \$a vault " . $a . " et \$b vault " . $b . "<br>";

$tmp = $a;  // $a = $a + $b
$a = $b;    // $b = $a - $b
$b = $tmp;  // $a = $a - $b

echo "Après l'inversion \$a vault " . $a . " et \$b vault " . $b . "<br>"; */

/* DÉBUT
    EXERCIC1
    \\ écrire un algorithme qui demande deux nombres à
    \\ l'utilisateur et qui l'informe ensuite si le produit est
    \\ positif ou négatif
    REQUÊTE "Entrez votre premier nombre", nb1
    REQUÊTE "Entrez votre deuxième nombre", nb2
    SI nb1 < 0 ET nb2 < 0 OU nb1 > 0 ET nb2 > 0 ALORS
        ÉCRIRE "le produit est positif"
    SINON
        ÉCRIRE "le produit est négatif"
    FINSI
FIN */

/* $nombre1 = readline("Entrez un premier nombre : ");
$nombre2 = readline("Entrez un deuxième nombre : ");

if ($nombre1 < 0 AND $nombre2 < 0 OR $nombre1 > 0 AND $nombre2 > 0) {

    echo  "le produit de " . $nombre1 . " et " . $nombre2 . " est positif";

} else {

    echo  "le produit de " . $nombre1 . " et " . $nombre2 . " est négatif";
} */
/* 
DÉBUT
    EXERCICE2
    \\ Écrire un algorithme qui demande un nombre compris entre 10
    \\ et 20, jusqu’à ce que la réponse convienne. En cas de
    \\ réponse supérieure à 20, on fera apparaître un message :
    \\ "Plus petit !" , et inversement, "Plus grand !" si le
    \\ nombre est inférieur à 10.
    RÉPÉTER
        ÉCRIRE "Entrez un nombre entre 10 et 20"
        LIRE nombre
        SI nombre < 10 ALORS
            ÉCRIRE "Plus grand"
        SINON
            SI nombre > 20 ALORS
                ÉCRIRE "Plus petit"
            FINSI
        FINSI
    JUSQU'À nombre >= 10 ET nombre <= 20
FIN */

$nombre;

do {

    $nombre = readline("Entrez un nombre compris entre 10 et 20 : ");

    if ($nombre < 10) {

        echo "Plus grand!\r\n";

    } elseif ($nombre > 20) {

        echo "Plus petit!\r\n";
    }

} while ($nombre < 10 OR $nombre > 20);