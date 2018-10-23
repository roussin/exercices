<?php

/**
 * 
 */
function tables($nb,$nbMaxi = 10) {
    $result = $nb * $nbMaxi;
    for ($i = 1 ; $i < $nbMaxi ; $i++ ) {
        echo $nb . " x " . $nbMaxi . " = " . $result . "\r\n";
    }
    
}