<?php
    session_start();

    if( isset($_GET['deconnexion']) ) {
        unset($_SESSION['admin']['user']);
        header('Location:index.php');
        exit;
    }

    $dsn = 'mysql:host=127.0.0.1;dbname=espace_administration;charset=utf8mb4';
?>

<h2>Administration du site</h2>
<form method='get'>
    <input type='submit' name='deconnexion' value='deconnexion'>
</form>
<p>Bonjour <?php echo $_SESSION['admin']['user'] ?>, que voulez-vous faire ?</p>
<!-- formulaire pour ajouter modifier ou supprimer un utilisateur -->
<form method='post'>
<select name="role">
        
        

<?php

if ( ($_SESSION['admin']['rang'] == 1) ) {

    ?>
        <option value="1">Ajouter</option>
        <option value="2">Supprimer</option>
        <option value="3">Modifier</option>
        <option value="4">Editer</option>
        <option value="5">Approuver</option>
    <?php

} else {

    ?>
        <option value="4">Editer</option>
    <?php
}

?>
    </select>
    <input type='submit' value='Envoyer'>
</form>

<?php

    if ( isset($_POST['role']) ) {

        if ($_POST['role'] == "1" && $_SESSION['admin']['rang'] == 1) {

            header('Location:ajouter.php');
            exit;

        } else if ($_POST['role'] == "2" && $_SESSION['admin']['rang'] == 1) {

            header('Location:supprimer.php');
            exit;

        } else if ($_POST['role'] == "3" && $_SESSION['admin']['rang'] == 1) {

            header('Location:modifier.php');
            exit;
        }


    }
?>

<table width="100%"  border="1px">
<caption>LISTE DES MEMBRES</caption>
    <tr>
        <th>login</th>
        <th>rôle</th>
    </tr>
    <?php
        try {

            $db = new PDO( $dsn, 'root', '', array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION ) );

            $requete = $db->query('SELECT user_login, role_id_fk FROM `USER`');

            while ($reponse = $requete->fetch()) {
            ?>
            <tr>
                <td text_align='center'>
                    <?php echo $reponse['user_login']; ?>
                </td>
                <td>
                    <?php if ($reponse['role_id_fk'] == 1) {
                        echo 'SuperAdmin';
                    } else if ($reponse['role_id_fk'] == 2) {
                        echo 'Admin';
                    } else {
                        echo 'Invité';
                    }?>   
                </td>
            </tr>
            <?php
            }

            $requete->closeCursor();
               
        } catch(PDOException $e) {

            die($e->getMessage());
        }
    ?>
</table>
<br>