<?php

//Déclaration/initialisation des variables retour de formulaire
$num1 = NULL; //$_POST['num1'];
$num2 = NULL; //$_POST['num2'];
$operateur = NULL; //$_POST['select'];

//controle si une variable est défini et différent de NULL
$is_isset = ( isset($_POST['num1'], $_POST['num2'], $_POST['select']) );
//controle si les valeur entrées sont des nombres
$is_number = ( is_numeric($_POST['num1']) && is_numeric($_POST['num2']) );

if ($is_isset) { 

    if ($is_number) { // a bien fermer

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operateur = $_POST['select'];

    $num1 = str_replace (",", ".",$num1);
    $num2 = str_replace (",", ".",$num2);

    $resultat = NULL;
   
    switch ($operateur) :
        case "+" :
            $resultat = $num1 + $num2;
            break;
        case "-" :
            $resultat = $num1 - $num2;
            break;
        case "x" :
            $resultat = $num1 * $num2;
            break;
        case "/" :
            //Test division par 0 avec retour message d'erreur
            if ( $num2 == 0 && $operateur === "/" ) {

                $erreur = "/!\ Vous ne pouvez faire de division par ";

            } else {

                $resultat = $num1 / $num2;
            }
           
            break;
                  
    endswitch;

    $derniersResultat = $num1 . " " . $operateur . " " . $num2 . " = " . $resultat;

} else {

    $erreur =  "/!\ attention vous ne devez entrer que des nombres";
}

//var_dump($resultat);

?>

<fieldset>
    <?php if( isset($erreur)) echo $erreur; ?>
    <form method="post">
        <legend>Calculatrice</legend>
        <input type="text" name="num1" placeholder="nombre" value"<?php if(isset($num1) ) echo $num1; ?>" >
        <select name="select">
            <option <?php if( isset($operateur) && $operateur=="+") echo selected;?> >+</option>
            <option <?php if( isset($operateur) && $operateur=="-") echo selected;?> >-</option>
            <option <?php if( isset($operateur) && $operateur=="x") echo selected;?> >x</option>
            <option <?php if( isset($operateur) && $operateur=="/") echo selected;?> >/</option>              
        </select>
        <input type="text" name="num2" placeholder="nombre" value"<?php echo $num2; ?>" >
        <input type="submit" value="=">
        <?php if (isset($resultat) ) echo $resultat?>
        <textarea name="historique">
            <?php if( isset($derniersResultat) ) echo $derniersResultat . PHP_EOL; ?>
            <?php if( isset($_POST['historique'])) ?>
        </textarea>
    </form>
</fieldset>




