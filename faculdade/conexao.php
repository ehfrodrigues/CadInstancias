<?php
$servername = "localhost";
$username = "henrique";
$password = "1345";
$database = "db_faculdade";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
