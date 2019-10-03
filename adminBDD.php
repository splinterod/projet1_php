<?php

require_once 'connectCommitTree.php';
$pdo = new \PDO(DSN, USER, PASS);

var_dump($_SESSION);

/*Efface un indesirale de la base

$query = "DELETE FROM nomuser WHERE id=2";
$statement = $pdo->query($query);
*/

$query = "SELECT * FROM nomuser";
$statement = $pdo->query($query);
$users = $statement->fetch();

var_dump($users);