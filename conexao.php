<?php
// ARQUIVO: conexao.php

// === CONFIGURAÇÕES DO BANCO DE DADOS ===
$host = 'localhost';
$dbname = 'geosync';
$user = 'root';
$pass = ''; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    // ESSENCIAL: Lança exceções em caso de erro, permitindo o uso do bloco try...catch
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
    // Define o modo padrão de busca como array associativo (como o FETCH_ASSOC)
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false, // Melhor performance e segurança
];

try {
    // Cria a conexão PDO
    $conn = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // Captura falhas de conexão
    error_log("Erro de conexão com o banco de dados (PDO): " . $e->getMessage());
    // Em produção, exiba uma página de erro genérica em vez de detalhes
    // die("Erro crítico de conexão."); 
    exit("Erro crítico de conexão: " . $e->getMessage()); // Para debug, descomente para ver o erro.
}

// $conn é agora um objeto PDO e seu código de busca original funcionará!
?>