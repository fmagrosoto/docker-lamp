<?php
$host = "servidor-mysql";
$user = "root";
$pass = "secret";
$db = "main_pruebas";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    echo "Connected successfully" . PHP_EOL;
    echo date('Y-m-d H:i:s');
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}