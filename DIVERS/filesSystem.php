<?php
// chemin absolu    => chemin entier 'C:\_xampp\htdocs\teste\assets\librairies\tirageDuLoto.php'
// chemin relatif   => a partir de (plus pratique pour la maintenance)
// mode d'ouverture (voir doc php) :
//                  => r (lecture seule) r+ (lecture et écriture place curseur en début ligne) 
//                  => w (écriture sans possibilité de relecture curseur en début ligne ) w+ (lecure écriture si le fichier n'existe pas il le dit)
// une ressource doit être ouverte le moins longtemps possible
// la derniere personne qui ouvre le fichier écrase tout le reste (si plusieurs utilisateur qui ouvrent en meme temps)
//                  => flock() empeche un autre utilisateur de travailler sur le même fichier
$ressource = fopen('C:\_xampp\htdocs\teste\assets\librairies\tirageDuLoto.php','r+');
// fermeture du dossier aux autres 
flock($ressource);
// opérations sur la ressource (lire la taille exact d'un fichier avec son poids)
$monFichier =  fread($ressource,filesize('C:\_xampp\htdocs\teste\assets\librairies\tirageDuLoto.php'));
// feof() pour connaitre la fin du fichier
while(!feof($ressource)) {
    $tab1[] = fgets($ressource); // mode de lecture ligne à ligne pour enregistrer une ligne dans un tableau
}
while(!feof($ressource)) {
    $tab2[] = fgetc($ressource);// lecture caractère par caractère curseur doit etre en début (remplacement de caractère pour agir sur la chaine)
}
// fermeture de la ressource
fclose( $ressource);
// affichage de la ressource
echo $monFichier;
// on affiche les deux tableaux
print_r($tab1);
print_r($tab2); 
// créer et ecrire dans un dossier
$ressource = fopen('C:\_xampp\htdocs\teste\nouveauDossier.php','w');
fwrite($ressource,'<?php"\r\n"');
fclose($ressource);
//saut de ligne serveur window ou linux
//test de constantes prédéfini (php)
//PHP_EOL (le bon symbole de fin de ligne)
//var_dump(substr(PHP_OS,0,3); // affiche la version de l'OS et  recuperation sous chaine avec substr

/* if (!defined('PHP_EOL')){ // if (define('PHP_EOL)===false)
    if(strtoupper(substr(PHP_OS, 0, 3))=="WIN") {
        define('PHP_EOL', "\r\n");
    } else {
        define('PHP_EOL', "\n");
    }
} else {
    if (PHP_EOL==="\r\n" OR PHP_EOL==="\n\r") {
        echo "CRLF";
    } else if (PHP_EOL==="\n") {
        echo "LF";
    }
} */
// pathinfo()
//print_r(pathinfo('../nouveauDossier.php'));
print_r(realpath('nouveauDossier.php'));
//supprimer un fichier sur le serveur
unlink('C:\_xampp\htdocs\teste\nouveauDossier.php');