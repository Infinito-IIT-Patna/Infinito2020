<?php
date_default_timezone_set('Asia/Calcutta');
$host = 'localhost';
$db   = 'infinitoAdmin';
$user = 'root';
<<<<<<< HEAD
$pass = '#Adi1403';
=======
$pass = '12345678';
>>>>>>> 15053c31c6c45a2da40dd1e398bc33d8e3d10aa4
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}