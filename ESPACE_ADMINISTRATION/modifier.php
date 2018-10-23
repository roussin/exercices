<?php
    session_start();

    echo "alors";
?>

<h2>Modifier un membre</h2>
<a href="admin.php"><< retour</a>

<h2>selectionner le membre à modifier</h2>
<form method="post">
    <select name="login"></select> 
    <button type="submit">Valider</button>
</form>

<?php
 
    $dsn = 'mysql:host=127.0.0.1;dbname=espace_administration;charset=utf8mb4';

    echo "alors";

    try {

        $db = new PDO( $dsn, 'root', '', array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION ) );



        if( ( $req = $db->query('SELECT `user_login` FROM `USER` ORDER BY `user_login`') ) !== false ) {

            /* var_dump($req) */ echo "alors";

            if( ( $rep = $req->fetchAll(PDO::FETCH_ASSOC) ) !== false ) {


                var_dump($req);
            ?>
                <option value="1"><?php $rep; ?></option>"
            <?php
            } else {

                die("problème if");            }

            $req->closeCursor();

        } else {

            die('Problème lors de la préparation');
        }

    } catch(PDOException $e) {

        die($e->getMessage());
    }

?>

<h2>faite votre modifications</h2>
<form action="#" method="post">
    <input type="text" name="login" placeholder="nouveau login ?">
    <input type="password" name="password" placeholder="nouveau password ?">
    <select name="role">
        <option value="1">Super admin</option>
        <option value="2">Admin</option>
        <option value="3">Invité</option>
    </select>
    <button type="submit">Soumettre</button>
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
                
            } catch(Exception $e) {

                die($e->getMessage());
            }
        }
    
    }

}