<?php 
/**
 * nombresLotoChoisi rempli un tableau 6 chiffres compris entre 1 et 49
 * @param array $tab I/O // le tableau dans lequel sera placé chaque nombres
 */
    function nombresLotoChoisi(array &$tab) : void {

    for ($i = 0 ; $i < 6 ; $i++) {
        do {
            $nombreChoisi = readline("Choisir 6 nombres compris entre 1 et 49 : ");
            // test de validité
            if ($nombreChoisi < 1 OR $nombreChoisi > 49) {
                echo "Le nombre doit être dans l'interval 1 - 49\r\n";
            } elseif (in_array($nombreChoisi,$tab)) {
                echo "Le nombre à déjà été proposé\r\n";
            }
        } while ($nombreChoisi < 1 OR $nombreChoisi > 49 OR in_array($nombreChoisi,$tab));

        $tab[] = $nombreChoisi;   
    }
}
 