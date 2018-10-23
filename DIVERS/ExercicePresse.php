<?php

$articles = array(
    array("article1","<Titre1>","<Texte1>","<Image1>"),
    array("article2","<Titre2>","<Texte2>","<Image2>"),
    array("article3","<Titre3>","<Texte3>","<Image3>"),
    array("article4","<Titre4>","<Texte4>","<Image4>"),
    array("article5","<Titre5>","<Texte5>","<Image5>")
);

$tmp1 = -1;
$tmp2 = -1;
$tmp3 = -1;

for($i = 0 ; $i < 3 ; $i++) {

   /* while ($tmp3 < 0) {
        $article = random_int(0,4); // prend au hasard un nombre (on doit comparer les nombres pour savoir si il n'y a pas de doublons)
        //$article = array_rand($articles);
        if ($tmp1 < 0) { $tmp1 = $article;};
        if ($tmp2 < 0 AND $article != $tmp1 ) { $tmp2 = $article;};
        if ($tmp3 < 0 AND $article != $tmp1 AND $article != $tmp2 ) { $tmp3 = $article;};
    }*/

    resetDoublon($tmp1,$tmp2,$tmp3,-1);
    
    switch($i) {
        case 0 :
            echo $articles[$tmp1][0] . $articles[$tmp1][1] . $articles[$tmp1][2] . $articles[$tmp1][3] . "\r\n";
            break;
        case 1 :
            echo $articles[$tmp2][0] . $articles[$tmp2][3] . $articles[$tmp2][1] . $articles[$tmp2][2] . "\r\n";
            break;
        case 2 :
            echo $articles[$tmp3][0] . $articles[$tmp3][1] . $articles[$tmp3][3] . $articles[$tmp3][2] . "\r\n";
            break;
    }
}

/**
 * resetDoublon vérifie si on rentre dans 3 variables des nombre différents
 * @param integer I/O $a //premiere variable
 * @param integer I/O $b //deuxième variable
 * @param integer I/O $c //troisième variable
 * @param integer     $c //valeur initiale des 3 variables
 * @return void 
 */
function resetDoublon(&$a,&$b,&$c,$int) {
    while ($c === $int) {
        $x = random_int(0,4); // prend au hasard un nombre (on doit comparer les nombres pour savoir si il n'y a pas de doublons)
        //$article = array_rand($articles);
        if ($a === $int) { $a = $x;};
        if ($b === $int AND $x != $a ) { $b = $x;};
        if ($c === $int AND $x != $a AND $x != $b ) { $c = $x;};
    }
}
//var_dump($articles); // test

/* CORRIGER */ 

$articles = array(
    array(
    "titre" => "Titre 1",
    "texte" => "Texte 1",
    "image" => "Image 1"
    ),
    array(
    "titre" => "Titre 2",
    "texte" => "Texte 2",
    "image" => "Image 2"
    ),
    array(
    "titre" => "Titre 3",
    "texte" => "Texte 3",
    "image" => "Image 3"
    ),
    array(
    "titre" => "Titre 4",
    "texte" => "Texte 4",
    "image" => "Image 4"
    ),
    array(
    "titre" => "Titre 5",
    "texte" => "Texte 5",
    "image" => "Image 5"
    )
);
/*

echo "article à afficher à la place 1 : " . "\r\n";
$nbAleatoire = rand(0,count($articles)-1);
echo "Titre" . $articles[$nbAleatoire]["titre"] . "\r\n";
echo "Texte" . $articles[$nbAleatoire]["texte"] . "\r\n";
echo "Image" . $articles[$nbAleatoire]["image"] . "\r\n";

do {
    $aleatoire = rand(0, count($articles)-1);
} while(in8array($aleatoire, $anciensAleatoire));
$anciensAleatoire[] = $aleatoire;
echo "article à afficher à la place 2 : " . "\r\n";
$nbAleatoire = rand(0,count($articles)-1);
echo "Image" . $articles[$nbAleatoire]["image"] . "\r\n";
echo "Titre" . $articles[$nbAleatoire]["titre"] . "\r\n";
echo "Texte" . $articles[$nbAleatoire]["texte"] . "\r\n";

do {
    $aleatoire = rand(0, count($articles)-1);
} while(in8array($aleatoire, $anciensAleatoire));
$anciensAleatoire[] = $aleatoire;
echo "article à afficher à la place 3 : " . "\r\n";
$nbAleatoire = rand(0,count($articles)-1);
echo "Titre" . $articles[$nbAleatoire]["titre"] . "\r\n";
echo "Image" . $articles[$nbAleatoire]["image"] . "\r\n";
echo "Texte" . $articles[$nbAleatoire]["texte"] . "\r\n"; */

// Solution 2 -> mélanger le tableau (avantages avec shuffle : pas de doublons possible)

shuffle($articles);

$formats = array(
    array("titre","texte","image"),
    array("image","titre","texte"),
    array("titre","image","texte")
);

shuffle($formats);

/*for ($numArticles = 0 ; $numArticles < 3 ; $numArticles++) {

    echo "article à afficher à la place " . ($numArticles+1) . " : " . "\r\n";

    for ($numFormats = 0 ; $numFormats < 3 ; $numFormats++) {

        $cleElementsArticle = $formats[$numArticles][$numFormats];

        echo $formats[$numArticles][$numFormats] . " : " . $articles[$numArticles][$cleElementsArticle] . "\r\n";
    }
}*/
 // le même avec foreach()
for ($numArticles = 0 ; $numArticles < 3 ; $numArticles++) {

    echo "article à afficher à la place " . ($numArticles+1) . " : " . "\r\n";

    foreach ($formats[$numArticles] as $value) {

        $cleElementsArticle = $value;
        
        echo $cleElementsArticle . " : " . $articles[$numArticles][$cleElementsArticle] . "\r\n";
    }
}
