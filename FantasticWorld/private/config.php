<?php
/* Connexion à une base ODBC avec l'invocation de pilote */
$dbpdo = 'mysql:dbname=fantasticworld;host=127.0.0.1;charset=UTF8';
$user = 'root';
$password = '';

try {
    $db = new PDO($dbpdo, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>