<?php
/**
 * Created by PhpStorm.
 * User: juanlu
 * Date: 21/10/17
 * Time: 14:45
 */
include "config.php";

try {
    $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $pass);
}catch(PDOException $e){
    die("No se pudo conectar a la base de datos");
    echo $e->getMessage();
}