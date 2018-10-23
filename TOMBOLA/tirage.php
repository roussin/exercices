<?php

session_start();

if( isset($_GET['rejouer']) ) {
    unset( $_SESSION['tombola'] );
    unset( $_SESSION['tirage'] );
    header('refresh:1;url="achat_ticket.php"');
    exit;
}

require_once('ini.php');

// si la session 'tirage' est créée alors
if( !isset( $_SESSION['tirage'] ) ) {

    $_SESSION['tirage'] = array();  

    for ($i = 0 ; $i < 3 ; $i++ ) {

        do {
    
            $numero = mt_rand(1,100);
    
        } while( in_array($numero, $_SESSION['tirage'])!= false );
    
            $_SESSION['tirage'][$i] =  $numero;
    }
} 

/* echo "<pre>";
var_dump($numerosGagnant);
echo "</pre>"; */

echo "
<Center>
    <h1>Bienvenu et bonne chance pour ce Super tirage de la tombola</h1>
    <hr width='90%'>   
    <h3>La roue tourne... </h3>
    <p>Les numéros gagnants sont le : ";

    foreach($_SESSION['tirage'] as $num) {

        echo $num . " | ";
    }

echo" 
<hr width='60%'>
<h3>Comparons les à vos numéros...</h3>
";

foreach( $_SESSION['tombola'] as $num) {

    echo $num . " ";
}
echo"
<hr width='50%'>
<h3>Vous avez gagné... "; 

// comparaison entre nos tickets et les trois numéros gagnants
$nb_tickets_gagnants = 0;

foreach($_SESSION['tombola'] as $mes_nums) {

    if ( in_array($mes_nums, $_SESSION['tirage'])!=false ) {

        $nb_tickets_gagnants += 1;
    }
}

switch ($nb_tickets_gagnants) {
    case 3:
        echo PREMIER_PRIX . " euros</h3>
        <p>soit 3 tickets gagnants :)</p>";
        $_SESSION['wallet'] += PREMIER_PRIX;
        break;
    case 2:
        echo DEUXIEME_PRIX . " euros</h3>
        <p>soit 2 tickets gagnants :)</p>";
        $_SESSION['wallet'] += DEUXIEME_PRIX;
        break;
    case 1:
        echo TROISIEME_PRIX . " euros</h3>
        <p>soit 3 tickets gagnants :)</p>";
        $_SESSION['wallet'] += TROISIEME_PRIX;
        break;
    default:
        echo "</h3><p>désolé vous n'avez rien gagné :(</p>";
        break;
}
echo" 
<p>Votre portefeuille est maintenant de " . $_SESSION['wallet'] . " euro(s)
<hr width='50%'>
<form method='get'>
<input type='submit' name='rejouer' value='Si vous voulez retenter votre chance cliquer ici'>
</form>
<hr width='45%'>
</Center> 
"; 