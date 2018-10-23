<?php

/**
 * creatArray divise une chaine de caractère en tableau à deux dimensions
 * @param array $tabIn // la variable à parcourir
 * @param $delimiter // le delimiteur de séparation en option
 * @return $tabOut // Le tableau retourné
 */
function createArray($tabIn, $delimiter = "\r\n") : array {
    $tabOut = array(); //Déclare un tableau vide
    $j = 0;
    for($i = 0 ; $i < count($tabIn) ; $i++) {

        if ($tabIn[$i] !== $delimiter) {

            $tabOut[$j][] = $tabIn[$i];

        } else {
      
            $j++;
        }  
    }
    return $tabOut;
}

// On définit le chemin vers le fichier et la fonction file() place dans un tableau le fichier lu.
$tab = file('C:\_xampp\htdocs\teste\MesDiscours\data.txt'); 

$delimiter = "\r\n";
$paragraphes = createArray($tab);
// Avant le file()
/* if( file_exists( $cheminFichier ) ) : // Si le fichier existe,
    $ressourceFichier = fopen( $cheminFichier, 'r' ); // On ouvre le fichier cible en lecture seul et on stocke cette ressource dans une variable
    //$tab = explode("\r\n", fread( $ressourceFichier, filesize( $cheminFichier ) ) ); // On place le contenu de tout le fichier dans un tableau en utilisant "\r\n" comme séparateur d'indice. On utilise la fonction "filesize()" qui nous retourne la taille du fichier en octets. (http://php.net/manual/fr/function.fread.php)
    //$fread = fread( $ressourceFichier, filesize( $cheminFichier )); 
    //fclose( $ressourceFichier ); // On ferme la ressource ouverte sur le fichier (http://php.net/manual/fr/function.fclose.php).
endif; */

//print_r($tab);
print_r($paragraphes);
$counter = count($paragraphes);
print_r($counter);
for ($i = 0 ; $i < count($paragraphes) ; $i) {

}
