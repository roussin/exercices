<?php

/* DÉBUT

    \\ Affichage de la moyenne des notes d’une promo saisies

    sum = 0

    RÉPÉTER
        REQUÊTE "Nombre d'élèves (max. 100) ? ", nbStudents
    JUSQU'À nbStudents>0 ET nbStudents <= 100

    POUR i = 1 JUSQU'À nbStudents INCRÉMENT 1 FAIRE
        REQUÊTE "Saisissez une note : ", score[i]
        sum = sum + score[i]
    FINPOUR

    ÉCRIRE "Moyenne des notes :", ( sum / nbStudents )

    POUR i = 1 JUSQU'À nbStudents INCRÉMENT 1 FAIRE
        ÉCRIRE "Note n°", i, ":", score[i]
    FINPOUR
FIN */

//$score = [];   // Déclare un tableau vide
/* $notes = array();     // autre façon de déclarer un tableau
$sum;
$nbEtudiants = count($notes);

do {

    $nbEtudiants = readline("Nombre d'élèves (max. 100) ? ");

} while ($nbEtudiants < 0 OR $nbEtudiants > 100);

for ($i = 0 ; $i < $nbEtudiants ; $i++) {
    
    $notes[$i] = readline("Entrez votre note : ");
    $sum += $notes[$i];

}
echo "Moyenne des notes : " . ( $sum / $nbEtudiants) . "\r\n";

//var_dump($score);
for ($j = 0 ; $j < $nbEtudiants ; $j++) {

    echo "Note n°" . ($j+1) . " : note " . $notes[$j] . "\r\n";
} 

$tab1 = array(
    array()

) */

/* PRINCIPAL
DÉBUT

    \\ Exercice 0
    \\ Écrire un programme qui affiche en ordre croissant les
    \\ notes d’une promotion de 10 élèves,
    \\ suivies de la note la plus faible, de la note la plus
    \\ élevée et de la moyenne.
    nbStudent = 5
    somme = 0
    noteMini = 21
    noteMaxi = 0
    POUR i = 1 JUSQU'À nbStudent INCRÉMENT 1 FAIRE
        REQUÊTE "Entrez la note de l'étudiant (entre 0 et 20) ", note[i]
        TANTQUE note[i] < 0 OU note[i] > 20 FAIRE
            REQUÊTE "ERREUR !!! Entrez une note entre 0 et 20", note[i]
        FINTANTQUE
        somme = somme + note[i]
        SI note[i] > noteMaxi ALORS
            noteMaxi = note[i]
        FINSI
        SI note[i] < noteMini ALORS
            noteMini = note[i]
        FINSI
    FINPOUR
    temp = 0
    POUR j = 1 JUSQU'À nbStudent INCRÉMENT 1 FAIRE
        POUR k = 1 JUSQU'À nbStudent INCRÉMENT 1 FAIRE
            SI note[j] < note[k] ALORS
                temp = note[k]
                note[k] = note[j]
                note[j] = temp
            FINSI
        FINPOUR
    FINPOUR
    POUR l = 1 JUSQU'À nbStudent INCRÉMENT 1 FAIRE
        ÉCRIRE note[l]
    FINPOUR
    ÉCRIRE "Moyenne : " , somme / nbStudent
    ÉCRIRE "Note maxi : " , noteMaxi
    ÉCRIRE "Note mini : " , noteMini
FIN
MODULES AUXILIAIRES
INDICEMINI
ENTRER tab, nb, rang

    \\ Trouve le nombre minimum compris dans un tableau
    indiceMini = rang
    POUR i = rang + 1 JUSQU'À nb INCRÉMENT 1 FAIRE
        SI tab[i]< tab[indiceMini] ALORS
            indiceMini = i
        FINSI
    FINPOUR
RETOURNER indiceMini
INVERSERVALEURS
ENTRER REFERENCE a, REFERECENCE b

    \\ le passage par référence permet de changer la valeur
    \\ initiale
    temp = a
    a = b
    b = temp
RETOURNER 
TRIMINI
 */

require_once("assets/librairies/libTab.php"); // utilisé pour inclure une seule fois les libraires

$nbStudent = 5;
$somme = 0;
$noteMini = 21;
$noteMaxi = 0;

$note = array();

for ($i = 1 ; $i <= $nbStudent ; $i++) {

    $note[$i] = readline("Entrez la note de l'étudiant (entre 0 et 20) ");

    while($note[$i] < 0 OR $note[$i] > 20) {

        $note[$i] = readline("ERREUR !!! Entrez une note entre 0 et 20"); 
    }

    $somme = $somme + $note[$i];

    if($note[$i] > $noteMaxi) {

        $noteMaxi = $note[$i];
    }
    if($note[$i] < $noteMini) {

        $noteMini = $note[$i];
    }
    
}

$temp = 0;

for ($j = 1 ; $j <= $nbStudent ; $j++) {

    for ($k = 1 ; $k < $nbStudent ; $k++) {

        if($note[$j] < $note[$k]) {

            $temp = $note[$k];
            $note[$k] = $note[$j];
            $note[$j] = $temp;
        }
    }
}

echo "Les notes [ ";
for ($l = 1 ; $l <= $nbStudent ; $l++) {

   echo $note[$l] . " " ;
}

echo "]\r\n";
echo "Moyenne : " . $somme / $nbStudent . "\r\n";
echo "Note maxi : " . $noteMaxi . "\r\n";
echo "Note mini : " . $noteMini . "\r\n";