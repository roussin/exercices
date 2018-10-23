<?php
function loadController(string $controller) {
    if(file_exists('Controllers/' . $controller . '.php')) {
        require_once('Controllers/' . $controller . '.php');
    }
}
function loadModel(string $model){
    if(file_exists('Models/' . $model . '.php')){
        require_once('Models/' . $model . '.php');
    }
}
function loadClass(string $class){
    if (file_exists('Classes/' . $class . '.php')) {
        require_once('Classes/' . $class . '.php');
    }
}
spl_autoload_register('loadController');
spl_autoload_register('loadModel');
spl_autoload_register('loadClass');