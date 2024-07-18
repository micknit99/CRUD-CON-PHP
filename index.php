<?php
//index.php
//llamado a ficheros vamos a necesitar
require_once('config.php');
require_once('controllers/UserController.php');

//direccionamientos 
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

//con un switch
switch($action){
    case 'list':
        UserController::index();
        break;
    
    case 'create':
        UserController::create();
        break;
    
    case 'edit':
        UserController::edit($_GET['id']);
        break;

    case 'update':
        UserController::update($_POST);
        break;

    case 'delete':
        UserController::delete($_GET['id']);
        break;

    default:
        echo 'Action not exist';
        break;
}

?>