<?php

$servername="localhost";
//$username= "iitpsports";
$username = "root"; 
$charset="utf8mb4";
//$password="infi5-2021";
$password="";
$database="infinito2k22";
$conn=mysqli_connect($servername ,$username ,$password ,$database);

$dsn = "mysql:host=$servername; dbname=$database;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];


try {
     $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

?>

