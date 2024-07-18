<?php
// config


define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'crud_mvc');

//Funcion para conectar a la base de datos 
function connect(){
    //variable para la conexion
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if($conn -> connect_error){
        die("Conecction failed: " . $conn->connect_error);
    }else{
        return $conn;
    }
}



?>