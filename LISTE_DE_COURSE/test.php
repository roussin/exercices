<?php

session_start();

//unset($_SESSION["listeCourse"]);

if( isset($_POST['article'], $_POST['quantite']) ) {

    $article = htmlspecialchars($_POST['article']);
    
    if( ctype_digit($_POST['quantite']) ) {

        $quantite = htmlspecialchars($_POST['quantite']);

        $_SESSION["listeCourse"][] = array(
            "article" => $article,
            "quantite" => $quantite
        );
    }
}

print_r( $_SESSION["listeCourse"]);

?>

<form method="post">
    <label>Articles </label><input type="text" name="article" />
    <label>Quantité </label><input type"text" name="quantite" />
    <input type="submit" name="submit" value="Enregister" />
</form>

<table width="50%"  border="1px">
<caption>LISTE DES COURSES</caption>
    <tr>
        <th>Articles</th>
        <th>Quantité</th>
        <th>Supprimer</th>
    </tr>

    <?php

        foreach( $_SESSION['listeCourse'] as $key => $articles) {
            echo "<tr>";
            foreach( $articles as $value) {

            echo "<th>" . $value . "</th>";

            };

            echo "<th>
                    <form method='post' /> 
                        <input type='checkbox' name='checked' />
                        
                  </th>;
                </tr>";
        }

    ?>
    <tr>
        <th colspan="3">
            <input type='submit' name='supp' value='Supprimer le(s) produit(s)' /> 
        </th>
    </tr>
</table>
