<?php
// Configurações e cabeçalhos
session_start(); // Inicia a sessão para usar o carrinho baseado em sessão
header('Content-Type: application/json');

// Incluir o arquivo de conexão
// ATENÇÃO: Verifique se este caminho está correto para o seu ambiente
require_once 'conexao.php'; 

// --- FUNÇÃO DE PROCESSAMENTO DO CARRINHO ---

function adicionarAoCarrinho($id_produto, $id_cor, $quantidade) {
    // Busca o preço e o nome do produto no banco de dados para garantir que são válidos
    global $conn; // A variável de conexão do PDO

    if (!is_numeric($id_produto) || $id_produto <= 0) {
        return ['success' => false, 'message' => 'ID de produto inválido.'];
    }
    if (!is_numeric($id_cor) || $id_cor <= 0) {
        return ['success' => false, 'message' => 'ID de cor inválido.'];
    }
    if (!is_numeric($quantidade) || $quantidade <= 0) {
        return ['success' => false, 'message' => 'Quantidade inválida.'];
    }
    
    // 1. Busca dados básicos do produto para adicionar à sessão (segurança e informação)
    try {
        $sql = "SELECT nome, preco FROM produtos WHERE id_produto = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id_produto]);
        $produto = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$produto) {
            return ['success' => false, 'message' => 'Produto não encontrado no banco de dados.'];
        }

        // 2. Busca o nome da cor (o ID foi enviado)
        $sql_cor = "SELECT nome_cor FROM cores WHERE id_cor = ?";
        $stmt_cor = $conn->prepare($sql_cor);
        $stmt_cor->execute([$id_cor]);
        $cor = $stmt_cor->fetch(PDO::FETCH_ASSOC);
        
        if (!$cor) {
             return ['success' => false, 'message' => 'Cor não encontrada.'];
        }

    } catch (PDOException $e) {
        // Erro de comunicação com o banco de dados
        return ['success' => false, 'message' => 'Erro interno ao consultar o produto.'];
    }

    // 3. Estrutura do item no carrinho
    $item_id = "{$id_produto}_{$id_cor}"; // ID único baseado em produto e cor
    $novo_item = [
        'id_produto' => $id_produto,
        'id_cor'     => $id_cor,
        'nome'       => $produto['nome'],
        'cor_nome'   => $cor['nome_cor'],
        'preco'      => (float)$produto['preco'],
        'quantidade' => (int)$quantidade
    ];

    // 4. Adiciona/Atualiza o item na sessão do carrinho
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    if (isset($_SESSION['carrinho'][$item_id])) {
        // Item já existe: apenas aumenta a quantidade
        $_SESSION['carrinho'][$item_id]['quantidade'] += (int)$quantidade;
    } else {
        // Item novo: adiciona ao carrinho
        $_SESSION['carrinho'][$item_id] = $novo_item;
    }
    
    return ['success' => true, 'message' => 'Produto adicionado ao carrinho com sucesso!'];
}


// --- EXECUÇÃO DO SCRIPT ---

// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Método não permitido
    echo json_encode(['success' => false, 'message' => 'Método de requisição inválido.']);
    exit;
}

// 1. Coleta os dados enviados pelo JavaScript (via POST)
$id_produto = $_POST['id_produto'] ?? null;
$id_cor = $_POST['id_cor'] ?? null;
$quantidade = $_POST['quantidade'] ?? null;

// 2. Chama a função de processamento
$resultado = adicionarAoCarrinho($id_produto, $id_cor, $quantidade);

// 3. Retorna a resposta ao JavaScript
if (!$resultado['success']) {
    // Se houve um erro (ex: produto não encontrado), retorna código de erro 400
    http_response_code(400);
}

echo json_encode($resultado);
exit;
?>