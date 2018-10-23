<?php

session_start();

if( isset($_GET['recommencer']) ) {
    unset( $_SESSION['tombola'] );
    header('Location:achat_ticket.php');
    exit;
}

require_once('ini.php');

// nombre de ticket à acheter et des tickets restant
if( isset( $_SESSION['tombola'] ) ) {

    $nombre_de_ticket_restant = NB_TOTAL_TICKETS - count($_SESSION['tombola']);
    $nombre_de_tickets_achete = count($_SESSION['tombola']);
    
} else {

    $nombre_de_ticket_restant = NB_TOTAL_TICKETS;
    $nombre_de_tickets_achete = 0;
}

// argent de départ du joueur initialisé à 500 euro
if( isset( $_SESSION['wallet'] ) ) {

    $_SESSION['wallet'] = 500;
    $portefeuille_joueur = $_SESSION['wallet'];

} /* else {

    $portefeuille_joueur = 500;
} */

// test donnée du formulaire
if (isset( $_POST['nbTickets']) ) { // si la formulaire a été envoyé

    if ( !empty($_POST['nbTickets']) ) { // si le champs n'est pas vide

        if (ctype_digit($_POST['nbTickets']) ) { // si le champs est binen un entier strictement positif 

            $tickets = $_POST['nbTickets'];

            // test si le joueur ne veux pas acheter plus de ticket qu'il ne peut
            if ( $tickets > $nombre_de_ticket_restant ) { 

                $erreur = "/!\ Vous demandez trop de ticket"; 

            } else {

                // SINON c'est bon
                $nombre_de_tickets_achete += $tickets;
                $portefeuille_joueur -= ($nombre_de_tickets_achete * PRIX_TICKET);
                $nombre_de_ticket_restant -= $nombre_de_tickets_achete;

                if( !isset( $_SESSION['tombola'] ) ) {

                    $_SESSION['tombola'] = array();
                }

                //mettre dans un tableau les numéros (tiré au hasard) des tickets acheté
                if ($tickets > 0) {

                    for ($i = 0 ; $i < $tickets ; $i++ ) {

                        do {

                            $numero = mt_rand(1,100);

                        } while( in_array($numero, $_SESSION['tombola'])!= false );

                        $_SESSION['tombola'][] =  $numero;
                    }
                }

            }
    
        } else {
    
            $erreur = "/!\ Vous devez rentrer seulement des nombres";
        }
        
    } else {

        $erreur = "/!\ Vous devez rentrer un nombre de ticket avant de valider";
    }
}

/* if (!empty($_SESSION['tombola'])) {
    //echo "<pre>";
    var_dump($_SESSION['tombola']);
    //echo "</pre>";
} */

?>

<center>
    <hr width="20%">    
    <h2>Bonjour </h2>
    <p>Vous êtes bien sur la page de la super tombola.</p> 
    <hr width="90%">
</center>

<?php
    if( isset($erreur) ) {

        echo $erreur; 
    }
    if ($nombre_de_ticket_restant === 0 OR $portefeuille_joueur === 2) {

        // Le joueur est arrivé à son maxi d'achat de tickets
        echo "
        <center>
            <br>
            <p>Vous ne pouvez plus achetez de tickets... vous êtes arrivé au maximum.</p>
            <p>Cliquez <a href='tirage.php'>ici</a> pour lancer le tirage de la super tombola :)</p>
            <br>
            <hr width='50%'>
            <p>BONNE CHANCE!!!</p>
            <hr width='50%'>
        </center>
        ";
         
    } else {

        echo "
        <center>
        <p>Vous avez le droit d'acheter au maximum 100 tickets...</p>
        <p>si bien sur il vous reste assez d'argent dans votre portefeuille.</p>
            <p>Vous pouvez encore acheter " . $nombre_de_ticket_restant . " ticket(s)</p>
            <p>vous avez dans votre portefeuille " . $portefeuille_joueur. " Euro(s) </p>

            <form method='post'>
                <input type='text' name='nbTickets' placeholder='nombre de ticket à acheter ?'>
                <input type='submit' value='acheter'>
            </form>
            <h2>"; 
            


            echo "</h2>
            <p>Si vous avez fini d'acheter vos tickets cliquez <a href='tirage.php'>ici</a> pour lancer le tirage de la super tombola :)</p>
        </center>";
    }

    echo"
    <center>
    <hr width='100%'>
    <p>Vos numéros : "; 

    if (isset($_SESSION['tombola']) ) {

        foreach( $_SESSION['tombola'] as $numero ) {
        
            echo $numero . " ";
        }
    }

    echo"
    <hr width='100%'>
    <form method='get'>
        <input type='submit' name='recommencer' value='RESTART_TEST'>
    </form>
    </center>";

