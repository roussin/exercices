<?php

// connexion à la base de donnée

function connected(){

    $dsn = 'mysql:host=127.0.0.1;dbname=liste_pays;charset=utf8mb4';
    
    try {   
        $db = new PDO($dsn, 'root', '', array( PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION )); 
        return $db;  
    } catch(PDOException $e) {
        
        die($e->getMessage());
    }
}

// requête Pays ----------------------------------------

function selectedPays() {
    $db = connected();
    $reqPays = $db->prepare('SELECT pays_id, pays_nom FROM `pays`');
    $reqPays->execute();
    $reponsePays = $reqPays->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($reponsePays);
    return $reponsePays;
    $reqPays->closeCursor(); 
}

$pays = selectedPays();
// var_dump($pays);
echo '<p>PAYS</p>';
echo '<select name="select">';
foreach ($pays as $keys=>$values) {
    echo '<option value="' . $values['pays_id'] . '">' . $values['pays_nom'] . '</option>';
};
echo '</select>';

// requête Départements -------------------------------- 

function selectedDept($id)
{
    $db = connected();
    var_dump($id);
    $reqDept = $db->prepare('SELECT * FROM `departement` WHERE departement_id= ?');
    $reqDept->bindValue(1, $id, PDO::PARAM_INT);
    $reqDept->execute();
    $reponseDept = $reqDept->fetch(PDO::FETCH_ASSOC);
    var_dump($reponseDept);
    return $reponseDept;
    $reqDept->closeCursor();
}

$dept = selectedDept(5);
var_dump($dept);
echo '<p>DEPARTEMENTS</p>';
echo '<select name="select">';
foreach ($dept as $keys => $values) {
    echo '<option value="' . $values['departement_id'] . '">' . $values['departement_code'] . $values['departement_nom'] . '</option>';
};
echo '</select>';

// var_dump(selectedDepartments(5));

// selectedDepartments();

// // requête Villes --------------------------------------
// $reqVille = $db->prepare('SELECT * FROM `ville`');
// $reqVille->execute();
// $reponseVille = $reqVille->fetchAll(PDO::FETCH_ASSOC);
// // var_dump($reponseVille);
// $reqVille->closeCursor(); 

// echo '<h2>Liste des pays</h2>';
// echo '<select name="select">';

// foreach ($reponsePays as $keys=>$values) {
//     echo '<option value=" ' . $values['pays_id'] . '">' . $values['pays_nom'] . '</option>';
// };
// echo '</select>';

// afficher la liste des pays -> le fait que l'on note les lettres les une après les autres permet d'afficher tous les pays ayant les mêmes lettres
// lorsque l'on clique sur le pays -> changer le h2 et les options pour afficher les départements du pays choisi
// lorsque l'on clique sur le département -> changer le h2 et les options pour afficher les villes du département choisi

// je dois viser quoi ? l'id du select
// var select = document.getElementById("select");
// console.log(select);
//addEventLIstener('click', function(){

// });