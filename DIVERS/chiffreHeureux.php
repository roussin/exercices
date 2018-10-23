<?php

$chiffre_init = readline("entrez un nombre");
$chiffre = $chiffre_init;
$nbChiffres = strlen($chiffre);
$sommeDuCarre = 0;

$nombres = [];
$compteur = 0;

/* echo "------ état initial -----------------------" . "\r\n";
echo "\r\n";
echo "chiffre : " . $chiffre . "\r\n";
echo "sommeDuCarre : " . $sommeDuCarre . "\r\n";
echo "nbChiffres : " . $nbChiffres . "\r\n";
echo "\r\n"; */

while (true) :

    /* echo "---- boucle début -------------------------------" . "\r\n";
    echo "\r\n"; */
    $nbChiffres = strlen($chiffre);
    //echo "nbChiffres : " . $nbChiffres . "\r\n";
    //echo "\r\n";
    for ($i = 0 ; $i < $nbChiffres ; $i++ ) :
        
        $unite = $chiffre%10;
        //echo "unite : " . $unite . "\r\n";
    
        if ($unite > 0) :

            $sommeDuCarre += $unite * $unite;
            //echo "sommeDuCarre : " . $sommeDuCarre . "\r\n";
        endif;
        
        if ($chiffre > 0) :

            $chiffre = ($chiffre-$unite);
            $chiffre = $chiffre/10;
        endif;
        /* echo "nouveau chiffre : " . $chiffre . "\r\n";
        echo "\r\n";
        echo "---- boucle " . ($i) . " -----------------" . "\r\n";
        echo "\r\n"; */   
    endfor; 
    /* echo "on sort de la boucle " . "\r\n";
    echo "\r\n";
    echo "sommeDuCarre : " . $sommeDuCarre . "\r\n";
    echo "\r\n"; */

    if ($sommeDuCarre === 1) {

        echo $chiffre_init . " est un chiffre Heureux :)";
        break;

    } else {
         
         /* echo "-- réiniti pour passage suivant --------------" . "\r\n";
        echo "\r\n";
        //echo "\r\n";*/
        //La valeur de la variable $chiffre sera le résultat de $sommeDuCarre
        $chiffre = $sommeDuCarre;
        echo "chiffre : " . $chiffre . "\r\n";
        //réinitialisation de la variable à 0
        $sommeDuCarre = 0;
        //echo "sommeDuCarre : " . $sommeDuCarre . "\r\n";
        //echo "\r\n";
    } 
    
    foreach ($nombres as $val) :

        // on compare les chiffres qui ont été stocké dans le tableau
        if ($chiffre === $val) {

            echo $chiffre_init . " est un chiffre malheureux :(";
            break 2;
        }

    endforeach;

    $nombres[$compteur] = $chiffre;
    $compteur += 1;

    //var_dump($nombres);
    
endwhile;