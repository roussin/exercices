<?php

require_once('config/db.php');
require_once('autoload.php');


$ctrl = 'ConverController';

if (!empty($_GET['c'])) {
    $ctrl = ucfirst($_GET['c'] . 'Controller');
}

if (class_exists($ctrl)) {
    $controller = new $ctrl;
} else {
    header('Location:.?404');
    exit;
}

if (!empty($_GET['m']) && $_GET['m']=='message'){
    $controller->message($_GET['id']);
}

// ------------------------------------------------------------------------------------------------------

// $converModel = new ConversationModel;
// $conversation = $converModel->readAll();


if (!empty($_GET['id']) && ctype_digit($_GET['id'])) {

    $messModel = new MessageModel;


    // on vérifie que le bouton rewind ou forward a été activé
    if (isset($_GET['rewind']) || isset($_GET['forward'])) {

        if (!empty($_GET['forward']) && ctype_digit($_GET['forward'])) { // Si Le formulaire n'est pas vide et à renvoyé forward
            $tmp = $messModel->forwardTwenty();
        } elseif (!empty($_GET['rewind']) && ctype_digit($_GET['rewind'])) { // Sinon si Le formulaire n'est pas vide et à renvoyé rewind
            $tmp = $messModel->rewindTwenty();
        }

    }

    $message = $messModel->readFromId($_GET['id']);

    if (!($messModel->isIdExist($_GET['id']))) {
        header('Location: page_404.php');
        exit;
    }

} else {
        // rien dans le get ? 
    header('Location: page_404.php');
    exit;
}

