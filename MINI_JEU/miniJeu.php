<?php

session_start();

if (isset( $_POST['nouvellePartie']) && $_POST['nouvellePartie'] === "oui" ) { // si non vide et nouvellePartie est oui

    unset($_SESSION['miniJeu']['nombreMystere']); // effacer nombre mystère
}

if( !isset($_SESSION['miniJeu']['nombreMystere']) ) { // si c'est vide

    $_SESSION['miniJeu']['nombreMystere'] = mt_rand(0,100);   // créer un nombre mystere
}

var_dump($_SESSION['miniJeu']['nombreMystere']);

if ( isset( $_POST['inputUser'] ) ) { // si non vide

    if ( ctype_digit( $_POST['inputUser'] ) ) { // uniquement un entier positif

        if ( $_POST['inputUser'] < $_SESSION['miniJeu']['nombreMystere'] ) {

            $message = "trop petit";
    
        } else if ( $_POST['inputUser'] == $_SESSION['miniJeu']['nombreMystere'] ) {
    
            $message = "Vous avez gagné";
    
        } else {
    
            $message = "trop grand";
        }
    }
}

?>

<h3>Retrouvez le nombre mystère compris entre 0 et 100 :)</h3>

<form action="" method="post">
    <input type="text" name="inputUser" placeholder="entrez votre nombre" />
    <br /><br /><input type="submit" value="Réponse" />
    <br /><br /><input type="text"  placeholder="avez-vous gagné ?" value="<?php if ( isset( $message) ) echo $message; ?>" />
    <br /><br /><label>Historique des coups :</label><br /><textarea name="historique" value="<?php if( isset( $message) ) echo $message ; ?>" /></textarea>
</form >
<form method="post">
    <label>Nouvelle partie ?</label>
    <br /><br /><label>oui</label><input type="radio" name="nouvellePartie" value="oui"/>
    <label>non</label><input type="radio" name="nouvellePartie" value="non" checked="checked"/>
    <br /><br /><input type="submit" value="Valider" />
</form>