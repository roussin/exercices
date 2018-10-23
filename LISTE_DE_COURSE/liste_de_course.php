<?php

session_start();

if( isset($_POST['article']) && isset($_POST['quantite']) ) {

    $article = htmlspecialchars($_POST['article']);
    

    if( ctype_digit($_POST['quantite']) ) {

        $quantite = htmlspecialchars($_POST['quantite']);
    }

    $_SESSION["listeCourse"][] = array(

        $article => "",
        $quantite => ""
    );
}

foreach( $_SESSION['listeCourse'] as $key => $articles) {

    foreach( $articles as $article => $qte) {
    echo "Article/Qte : " . $article . " => " . $qte . "\r\n";
    }
}

?>

