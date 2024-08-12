<?php

$host = 'localhost';
$db = 'senatidb';
$user = 'root';
$pass = '';

$dsn = 'mysql: host='.$host.'; dbname='.$db;

$option = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

try{
    $conexion = new PDO($dsn, $user, $pass, $option);
}catch(PDOException $error){
    throw new PDOException($error->getMessage(), (int)$error->getCode());
}