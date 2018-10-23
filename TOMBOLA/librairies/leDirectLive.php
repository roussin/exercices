<?php
/**
 * leDirectLive affiche le tirage du loto
 * @param array $tab // affiche les numéros qui sont dans le tableau 
 * @return void
 */
function leDirectLive(array $tab) : void {
    // Tirage du loto en directLive
    echo "\r\nLe grand tirage du loto en directLive va commencer...\r\nnous remercions Maître Youri pour valider \r\nce tirage du 31 mai 2018\r\n";
    // pause 
    sleep(2);
    echo "\r\nATTENTION... Le tirage commence !!!!!!!!!\r\n\r\n";
    // pause 
    sleep(1);
    $nombre_a_tirer = 1;
    // affichage des numéro gagnants
    foreach ($tab as $value) {

        echo "Tirage de la boule n°$nombre_a_tirer ... ";
        // pause 
        sleep(1);
        echo "le numéro est... le $value !!!\r\n";
        // pause 
        sleep(2);
        $nombre_a_tirer += 1;
    }

    // pause 
    sleep(1);
}
