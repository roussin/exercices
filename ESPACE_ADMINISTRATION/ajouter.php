<?php
    session_start();

?>

<h2>Ajouter un membre</h2>
<a href="admin.php"><< retour</a>
<form action="#" method="post">
    <input type="text" name="login" placeholder="login">
    <input type="password" name="password" placeholder="password">
    <select name="role">
        <option value="1">Super admin</option>
        <option value="2">Admin</option>
        <option value="3">Invité</option>
    </select>
    <button type="submit">Ok</button>
</form>

<?php
if ( isset ( $_POST['login']) ) {

    if ( isset ($_POST['password']) ) {

        if ( isset ($_POST['role']) ) {

            $dsn = 'mysql:host=127.0.0.1;dbname=espace_administration;charset=utf8mb4';

            try {

                $db = new PDO( $dsn, 'root', '', array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION ) );

                if ( ($requete = $db->prepare('INSERT INTO `USER` (`user_login`, `user_password`, `role_id_fk`) VALUES (:login, :password, :role)') )!= false ) {

                    if( $requete->bindValue('login', $_POST['login']) && $requete->bindValue('password', $_POST['password'])  && $requete->bindValue('role', $_POST['role'])) {

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
    
    }

}

?>