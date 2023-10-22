<?php
$host = "192.168.20.18"; // Altere para o endereço do seu servidor PostgreSQL
$port = "5432";      // Porta padrão do PostgreSQL
$dbname = "dyessicapinto";
$user = "dyessicapinto";
$password = "123456";

// Conectando ao banco de dados
$conn = pg_connect("host=192.168.20.18 port=5432 dbname=dyessicapinto user=dyessicapinto password=123456");

if (!$conn) {
    die("Falha na conexão com o banco de dados: " . pg_last_error());
}
?>
