<?php

/**
 * Fonction qui permet de trouver le minimum compris dans un tableau
 * @param array $tab
 * @param int $nb, $ran
 * @return int $indiceMini
 */
function indiceMini($tab, $nb, $rang) {

    $indiceMini = $rang;
    for($i = $rang + 1 ; $i < $nb ; $i++) {

        if ($tab[$i]< $tab[$indiceMini]) {

            $indiceMini = $i;
        }
    }
    return $indiceMini;
}
/**
 * fonction qui permet d'intervertir deux valeurs
 * @param int $a, $b
 */
function inverserValeurs(&$a, &$b) {

    $temp = $a;
    $a = $b;
    $b = $temp;
}