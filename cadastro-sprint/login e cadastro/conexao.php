<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cadastro_sprint";

try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
} catch (PDOException $err) {
}
