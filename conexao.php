<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cadastro_sprint";

 // Criar conexão 
 $conn = mysqli_connect($host, $user, $pass, $dbname);

 // checar conexão
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

 // echo "Conexão realizada com sucesso";
?>