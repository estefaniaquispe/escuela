<?php
function Conectar (){
    $conn = null;
    $host = 'localhost';
    $db =   'biblioteca';
    $user = 'root';
    $pwd =  '';
    try {
        $conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
    }
    catch (PDOException $e) {
        echo 'No se pudo conectar a la base de datos !!';
        exit;
    }
    return $conn;
 }
?>