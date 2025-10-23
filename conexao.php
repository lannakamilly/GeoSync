<?php
// ARQUIVO: conexao.php

// Define as credenciais de conexão
$host = "localhost";
$user = "root";    // SEU USUÁRIO DO MySQL
$pass = "";        // SUA SENHA DO MySQL
$dbname = "geosync";

// Cria a conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verifica se a conexão falhou
if ($conn->connect_error) {
    // Interrompe o script e exibe o erro em caso de falha na conexão
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Define o charset para evitar problemas com acentuação
$conn->set_charset("utf8mb4");

// $conn é a variável de conexão que será usada nos outros arquivos
?>