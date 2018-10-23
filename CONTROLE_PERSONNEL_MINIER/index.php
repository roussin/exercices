<?php

require_once('Models/ConnectModel.php');

require_once('Classes/Ville.php');
require_once('Classes/Taverne.php');
require_once('Classes/Nain.php');

require_once('Models/VilleModel.php');
require_once('Models/TaverneModel.php');
require_once('Models/NainModel.php');

require_once('Controllers/VilleController.php');
require_once('Controllers/TaverneController.php');
require_once('Controllers/NainController.php');

$controllerVille = new VilleController;
$controllerVille->listVille();

if (!empty($_GET['id'])) { 
    $controllerVille->showVille($_GET['id']); 

    // if(!empty($_GET['fiche'])) {

    //     if($_GET['fiche']))

    // }
}

// $controllerTaverne = new TaverneController;
// $controllerTaverne->listTaverne();

// if (empty($_GET['c']) == 'taverne') {


// } else {

// }

// $ctrl = 'VilleController';
// if(isset($_GET['ctrl'])) 
// {
//     $ctrl = ucfirst(strtolower($_GET['ctrl'])) . 'Controller';
// }

// $method = 'list';
// if(isset($_GET['action'])) {
//     $method = $_GET['action'];
// }

// if(!empty($_GET['id'])) 
// {
//     $controller->showville($_GET['id']);  
// }
// else {
//     $controller->listVille();
// }

// $controller = new TaverneController;