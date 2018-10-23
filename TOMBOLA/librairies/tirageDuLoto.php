<?php

/**
     * tirageDuLoto tire au hasard 6 chiffres compris entre 1 et 49
     * @param array I/O $tab // la tableau à remplir
     */
    function tirageDuLoto(array &$tab) : void {
        $i = 0;
        while ($i < 6) {
            $nb = rand(1,49);
            if (in_array($nb,$tab)===false) {
                $tab[] = $nb;
                $i++;
            }
        }
    }