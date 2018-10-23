<?php

/**
    * comparerLesGrilles qui compare notre grille avec celle du lotodeux tableau et affiche les nombres identiques et lesquel 
    * @param array $tab1 // premier tableau
    * @param array $tab2 // deuxième tableau
    * @param array $tabResult // tableau qui contient les nombre identiques
    */
    function comparerLesGrilles(array $tab1, array $tab2, array &$tabResult) : void {
        foreach ($tab1 as $monNum) {
            if (in_array($monNum,$tab2)) {
                $tabResult[] = $monNum;
            }
        }
    }