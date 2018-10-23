<?php

/* DÉBUT
    Exercice Boucle for :
    \\ En fonction d’un nombre d’itérations saisi, faire la somme
    \\ des entiers saisis et afficher le résultat de l’opération.
    ÉCRIRE "Saisir le nombre de note à demander"
    LIRE nbNotes
    somme = 0
    POUR i = 1 JUSQU'À nbNotes INCRÉMENT +1 FAIRE
        ÉCRIRE "Saisir la note"
        LIRE note
        somme = somme + note
    FINPOUR
    ÉCRIRE "Le résultat est :"
    ÉCRIRE somme
FIN */

/* $nbNotes = readline("Saisir le nombre de note à demander : ");
while (is_numeric($nbNotes) == false) {

    $nbNotes = readline("vous ne devez entrer que des chiffres : ");
}

$somme = 0;

for ($i = 0 ; $i < $nbNotes ; $i++) {

    $note = readline("Entrez votre note : ");
    
    while (($note < 0 OR $note > 20) OR is_numeric($note) == false) {

        $note = readline("Entrez une note compris entre 0 et 20 uniquement : ");
    }
    
    $somme +=  $note;
}

echo "Le résultat est : " . $somme; */

/* DÉBUT
    EXERCICE Boucle do while :
    \\ Boucle RÉPÉTER ... TANT QUE Saisir des données et s'arrêter
    \\ dès que leur somme dépasse 500.
    somme = 0
    RÉPÉTER
        ÉCRIRE "Saisir vos notes"
        LIRE notes
        somme = somme + notes
    JUSQU'À somme > 500
    ÉCRIRE "Vous avez dépassé 500"
FIN */

/* $somme = 0;

do {
    
    $note =  readline("Saisir vos notes : ");

    while (is_numeric($note) == false) {

        $note = readline("vous ne devez entrer que des chiffres : ");
    }

    $somme += $note;

} while ($somme <= 500);

echo "Vous avez dépassé 500"; */



