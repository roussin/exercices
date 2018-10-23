<?php
/* DÉBUT
    REQUÊTE "Saisir un entier ", a
    b = abs( a )
    ÉCRIRE "La valeur absolue de ", a, "est", b
FIN
ENTRER unEntier
    SI unEntier>=0 ALORS
        tmp = unEntier
    SINON
        tmp = ( unEntier * -1 )
    FINSI
RETOURNER tmp 
*/

/**
 * abs retourne la valeur absolue d'un chiffre
 * @param integer $unEntier
 * @return integer 
 */

/* function abso(int $unEntier) : int {

    if ($unEntier >= 0) {

        return $unEntier;

    } else {

        return $unEntier * -1;
    }
}

$a = readline("Saisir un entier : ");
$abs = abso($a);
echo "La valeur absolue de " . $a . " est " . $abs; */

/* Exercice 1
Écrire un algorithme qui demande deux nombres à l’utilisateur et l’informe ensuite si leur
produit est négatif ou positif (on laisse de côté le cas où le produit est nul).
Attention toutefois : on ne doit pas calculer le produit des deux nombres.

DÉBUT
    ÉCRIRE factorielle( 5 )
FIN
ENTRER n
    SI n = 0 ALORS
        tmp = 1
    SINON
        tmp = factorielle( n-1 ) * n
    FINSI
RETOURNER tmp */

/**
 * factorielle calcule le factorielle d'un nomnbre
 * @param int $n
 * @return int
 */
/* function factorielle(int $n) : int {

    if ($n == 0) {

        $tmp = 1;

    } else {

        $tmp = factorielle( $n-1 ) * $n;
    }
    return $tmp;
}

echo factorielle( 5 ); */

/* 
Exercice ?

ENTRER p, n
    SI p = 0 || p = n ALORS
        tmp = 1
    SINON
        tmp = combinatoire( p, n-1 ) + combinatoire ( p-1, n-1 )
    FINSI
    ÉCRIRE "n=", n, "p=", p, "résultat=", tmp
RETOURNER tmp

DÉBUT
    ÉCRIRE combinatoire( 5, 10 )
FIN
 */

 /**
  * 
  */

/* function combinatoire(int $p, int $n) : int {
    if ($p == 0 || $p = $n) {
        $tmp = 1;
    } else {
        $tmp = combinatoire( p, n-1 ) + combinatoire ( p-1, n-1 );
    }
    echo "n=", $n, "p=", $p, "résultat=", $tmp;
    return $tmp;
}

echo combinatoire(5, 10); */

/* Exercice 1
Écrire le sous-algorithme de la fonction "moyenne" qui renvoie la moyenne de deux entiers.
Écrire l’algorithme qui contient la déclaration de la fonction moyenne et des instructions qui
appellent cette fonction.

ENTRER a, b
RETOURNER ( a + b ) / 2

DÉBUT
    \\ Écrire le sous-algorithme de la fonction "moyenne" qui
    \\ renvoie la moyenne de deux entiers.
    \\ Écrire l'algorithme qui contient la déclaration de la
    \\ fonction moyenne et des instructions qui appellent cette
    \\ fonction.
    REQUÊTE "Saisir un nombre : ", nombre1
    REQUÊTE "Saisir un autre nombre : ", nombre2
    ÉCRIRE "La moyenne de", nombre1, "et", nombre2, "est :", moyenne( nombre1, nombre2 )
FIN */

/**
 * Fonction qui calcule la moyenne de deux entiers
 * @param int $a $b
 * @return float
 */
/* function moyenne($a, $b) {
    return ($a + $b) / 2;
}

$nombre1 =  readline("Saisir un nombre : ");
$nombre2 =  readline("Saisir un nombre : ");

echo "La moyenne de ", $nombre1, " et ", $nombre2, " est : ", moyenne($nombre1, $nombre2);
 */
/* Exercice 0
En utilisant une fonction récursive, écrire un algorithme qui détermine le terme U n de la suite
de Fibonacci définie comme suit :
U 0 = 0
U 1 = 1
U n = U n -1 + U n -2, n >= 2 

ENTRER 
    REQUÊTE "Confirmez-vous l'écriture d'une cellule (o/n) ? ", confirm
    tmp = ""
    SI confirm="o" ALORS
        tmp = "\n            <td></td>" + genTD()
    FINSI
RETOURNER tmp

ENTRER 
    REQUÊTE "Confirmez-vous l'écriture d'une ligne (o/n) ? ", confirm
    tmp = ""
    SI confirm="o" ALORS
        tmp = "\n        <tr>" + genTD() + "\n        </tr>" + genTR()
    FINSI
RETOURNER tmp

ENTRER 
RETOURNER "<table>\n    <tbody>" + genTR() + "\n    </tbody>\n</table>"

DÉBUT

    \\ En utilisant une fonction récursive, écrire un algorithme
    \\ qui écrit la structure d'un tableau HTML
    \\ (<table><tr><td></td></tr></table>) en permettant
    \\ l'écriture de plusieurs lignes et plusieurs cellules si
    \\ l'utilisateur indique qu'il souhaite poursuivre ch
    ÉCRIRE genTABLE()
FIN
*/

/**
 * fonction genTD qui écrit les lignes de la structure d'un tableau HTML
 * @return string
 */
function genTD() {

    $confirm = readline("Confirmez-vous l'écriture d'une cellule (o/n) ? ");
    $tmp = "";
    if ($confirm == "o") {
        $tmp = "\n            <td></td>" . genTD();
    } 
    return $tmp;
}

/**
 * fonction genTD qui écrit les colonnes de la structure d'un tableau HTML
 * @return string
 */
function genTR() {

    $confirm = readline("Confirmez-vous l'écriture d'une ligne (o/n) ? ");
    $tmp = "";
    if ($confirm =="o") {
        $tmp = "\n        <tr>" . genTD() . "\n        </tr>" . genTR();
    }
    return $tmp;
}

/**
 * fonction genTD qui écrit la structure d'un tableau HTML
 * @return string
 */
function genTABLE() {

    return "<table>\n    <tbody>" . genTR() . "\n    </tbody>\n</table>";
}

echo genTABLE();


