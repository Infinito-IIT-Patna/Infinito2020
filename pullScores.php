<?php 
require('./connect.php');
ini_set('display_errors',1);
$stmt = $pdo->query("SELECT * FROM Scores ORDER BY Time DESC");
$const = 0;

