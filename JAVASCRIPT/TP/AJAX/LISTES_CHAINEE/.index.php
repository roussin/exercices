<?php

// function connectDB($host, $name, $login, $pwd)
// {
//     try { // On essaie de faire
//         return new PDO('mysql:host=' . $host . ';dbname=' . $name . ';charset=utf8', $login, $pwd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // On crée une instance de l'objet PDO qui par défaut nous connecte à la base de données.
//     } catch (PDOException $_e) { // Dans le cas d'un échec, on récupère l'exception
//         // return array( '_err'=>array( 'code'=>$_e->getCode(), 'msg'=>'<span style="background-color:red;color:white;display:block;margin:10px 0;padding:4px 7px;">' . $_e->getMessage() . '</span>' ) ); // On stocke en session les données d'erreur.
//         die($_e->getMessage()); // On tue le processus et affiche le message d'erreur.
//     }
// }
$bdd = new PDO("127.0.0.1","liste_pays", "root","");
$response = $bdd->query('SELECT `pays_noms` FROM `pays` ');
$response->execute;
$datas = $response->fetchAll();
$responde->closeCursor();
var_dump($datas);
?>

<select name="pays" id="pays">
    <option value="<?php //id ?>"><?php //récupère info bdd ?></option>
</select>