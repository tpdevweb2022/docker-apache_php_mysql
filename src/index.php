<?php

$dsn = 'mysql:dbname=mydb;host=db';
$user = 'root';
$password = 'example';

try {
    $bdd = new PDO($dsn, $user, $password);
    echo "Connecté";
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
