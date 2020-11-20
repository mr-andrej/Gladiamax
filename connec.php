<?php<?php

$hostname = 'localhost';
$database = 'gladiamax';
$username = 'root';
$password = 'password';

$pdo = new PDO('mysql:host=' . $hostname . ';dbname=' . $database, $username, $password);

?>