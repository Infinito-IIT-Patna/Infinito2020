<?php

$servername="localhost";
$username= "root";
// $user = "root"; 
$charset="utf8mb4";
$password="";
$database="infinitoadmin1";
$conn=mysqli_connect($servername ,$username ,$password ,$database);

$dsn = "mysql:host=$servername; dbname=$database;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];