<?php

/**
 * afficherLigne permet d'afficher une ligne d'un tableau à l'indice demandé par l'utilisateur
 * @param array $tab : le tableau à parcourir
 * @param int $indiceUser : l'indice entré par l'utilisateur
 * @return mixed (string/false)
 */
function afficherLigne(array $tab, int $indiceUser) {

    if ( isset($tab[$indiceUser]['text'])) {
        return  $tab[$indiceUser]['text']; // Texte à afficher
    }
    return  false; // retourne faux si l'indice n'est pas dans le tableau
}

/**
 * afficherChoix permet d'afficher les choix du joueur pour pouvoir lire la ligne suivante
 * @param array $tab
 * @param int $indiceUser
 * @return string
 */
function afficherChoix(array $tab, int $indiceUser) : string {

    $result = '';

    if ( isset($tab[$indiceUser]['choice'])) {

        if ($tab[$indiceUser]['choice'] > 0) {

            $result .= '<form method="post">';

            foreach ($tab[$indiceUser]['choice'] as $choice) {

                $result .= '<button name="choice" type="submit" value="' . $choice['goto'] . '">';
            }
            $result .= "</form>";
        }
    }
    return $result;
}
/**
 * play sert à centraliser les 2 paramètres qui sont identiques pour les deux fonctions
 */
function play(array $tab, int $n) {

    return afficherLigne($tab, $n) . afficherChoix($tab, $n);
}
    