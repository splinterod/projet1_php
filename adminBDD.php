<?php

require_once 'connectBDD.php';
$pdo = new \PDO(DSN, USER, PASS);

/* var_dump($_SESSION); */

/*Efface un indesirale de la base*/

$query = "DELETE FROM nomuser WHERE id=6";
$statement = $pdo->query($query);


$query = "SELECT * FROM nomuser";
$statement = $pdo->query($query);
$users = $statement->fetchAll();

var_dump($users);