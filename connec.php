<?php

$servername = "localhost";
$username = "root";
$password = "password";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=gladiamax", $username, $password);
    // set the PDO error mode to exception

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}