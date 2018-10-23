<?php
/**
 * 
 */
/* function arborescence($tab) {

    
} */


$source = __DIR__ . DIRECTORY_SEPARATOR . teste . DIRECTORY_SEPARATOR . arbo_exerce . DIRECTORY_SEPARATOR . arborescence_test;

//$root = scandir($source);

//$tab = array_flip($root);

//print_r($root);

/* foreach (scandir($source) as $value) {
   if( $value !== '.' && $value !== '..') {
        echo $value . "\r\n";
   }
}*/

function arborescence($repertoire) {
    if(is_dir($repertoire)){
        if ($dh = opendir($repertoire))
    }
}

arborescence($root);