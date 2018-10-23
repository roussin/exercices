<?php

session_start();

if( isset($_GET['deconnexion']) ) {
    unset($_SESSION['admin']['user']);
    header('Location:index.php');
    exit;
}

if ( isset ( $_POST['login']) ) {

    if ( isset ($_POST['password']) ) {

        $dsn = 'mysql:host=127.0.0.1;dbname=espace_administration;charset=utf8mb4';

        try {

            $db = new PDO( $dsn, 'root', '', array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION ) );

            if( ( $requete = $db->prepare('SELECT * FROM `USER` WHERE `user_login`=:login AND `user_password`=:password') ) !== false ) {

                if( $requete->bindValue('login', $_POST['login']) && $requete->bindValue('password', $_POST['password']) ) {

                    if( $requete->execute() ) {
                       
                        if( ( $reponse = $requete->fetch(PDO::FETCH_ASSOC) ) !== false ) {

                            $_SESSION['admin']['user'] = $_POST['login'];
                            $_SESSION['admin']['rang'] = $reponse['role_id_fk'];
                            $_SESSION['admin']['autorisation'] = $reponse['autori_id_fk'];
                            header('Location:admin.php');
                            exit;

                        } else {

                            echo "Mauvais identifiant/mot de passe!";
                        }

                        $requete->closeCursor();

                    } else {

                        die('Problème lors de l\'exécution');
                    }

                } else {

                    die('Problème lors du lien');
                }

            } else {

                die('Problème lors de la préparation');
            }

        } catch(PDOException $e) {

            die($e->getMessage());
        }

    } 

} 
?>

<h2>Page de connexion</h2>
<form action="#" method="post">
    <input type="text" name="login" placeholder="login" aria-label="Identifiant">
    <input type="password" name="password" placeholder="password" aria-label="Mot de passe">
    <button type="submit">Ok</button>
</form> 
<form method='get'>
    <input type='submit' name='deconnexion' value='deconnexion'>
</form>


