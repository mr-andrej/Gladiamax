<?php

$hostname = 'localhost';
$database = 'gladiamax';
$username = 'root';
$password = 'azerty78';

$pdo = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);

?>
