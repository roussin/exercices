<?php

session_start();

/**
 * fonction qui stock dans un tableau a 2 dimensions les informations laissé par l'utilisateur
 * @param I/O $tab //
 */
/* function creerMembre( array &$tab,) : ??? {


} */

$admin = array(

    'utilisateur1' => array(
        'pseudo' => 'yoannrou',
        'pwd' => 2606,
        'nom' => 'roussin',
        'prenom' => 'yoann' 
    ),
    'utilisateur2' => array(
        'pseudo' => 'clementrou',
        'pwd' => 2007,
        'nom' => 'roussin',
        'prenom' => 'clement' 
    ),
    'utilisateur3' => array(
        'pseudo' => 'mickaelrou',
        'pwd' => 0506,
        'nom' => 'roussin',
        'prenom' => 'mickael' 
    ),
);



//Création de compte
/* if ( isset($_POST['pseudo'], $_POST['pwd'], $_POST['confPwd'], $_POST['nom'], $_POST['prenom']) ) {

    if ( $_POST['pwd'] == $_POST['confPwd'] ) {

        $admin = array(

            'utilisateur4' => array(

                'pseudo' => $_POST['pseudo'],
                'pwd' => $_POST['pwd'],
                'nom' => $_POST['nom'],
                'prenom' => $_POST['prenom'] 
            )
        );

    } else {

        $erreur = "/!\ Vos mot de passe sont différent";
    }
} */

var_dump($admin);

if ( isset($_POST['pseudo'], $_POST['pwd']) ) {

    foreach ($admin as $user => $userValue) {
        
        if ( $_POST['pseudo'] == $userValue['pseudo'] && $_POST['pwd'] == $userValue['pwd'] ) {
            $_SESSION['monSite'] = $userValue; //Création de la session nommé 'monSite'
            header('Location: maPage.php'); 
            exit;
        }
    }
    // le mot de passe et l'identifiant ne sont pas dans le tableau donc message erreur
    $erreur = "Mauvais identifiant ou mot de passe";
    header('Location: index.php?erreur='.$erreur); // get pour renvoier le message d'erreur dans ma page index.php
    exit;
}

?>