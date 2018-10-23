<?php
    session_start();

?>

<h2>Supprimer un membre</h2>
<a href="admin.php"><< retour</a>
<form action="#" method="post">
    <input type="text" name="login" placeholder="login">
    <button type="submit">Ok</button>
</form>

<?php
if ( isset ( $_POST['login']) ) {

    $dsn = 'mysql:host=127.0.0.1;dbname=espace_administration;charset=utf8mb4';

    try {

        $db = new PDO( $dsn, 'root', '', array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION ) );

        if ( ($requete = $db->prepare('DELETE FROM `USER` WHERE `user_login`=:login') )!= false ) {

            if( $requete->bindValue('login', $_POST['login']) ) {

                if( $requete->execute() ) {

                    $requete->closeCursor();
                    header('Location:admin.php');
                    exit;

                } else {die('Problème lors de l\'exécution');}

            } else {die('Problème lors du lien');}

        } else {die('Problème lors de la préparation');}
        
    } catch(PDOException $e) {

        die($e->getMessage());
    }

}

?>