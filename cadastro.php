<?php
// Define as credenciais de conexão
$host = "localhost";
$user = "root";    // seu usuário do MySQL
$pass = "";        // sua senha do MySQL
$dbname = "geosync";

$mensagem = ""; // Variável para armazenar o status da operação
include 'conexao.php';
// Tenta estabelecer a conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se o formulário foi submetido (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta e limpa os dados do POST
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];
    $confirmaSenha = $_POST['confirmPassword'];

    // 1. Validação de Senha
    if ($senha !== $confirmaSenha) {
        $mensagem = "<span style='color: red;'>As senhas não coincidem!</span>";
    } elseif (strlen($senha) < 6) {
        $mensagem = "<span style='color: red;'>A senha deve ter pelo menos 6 caracteres!</span>";
    } else {
        // Criptografa a senha de forma segura
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        // 2. Prepara e executa a inserção no banco
        // Note que o nome da coluna na sua tabela é 'nome', não 'nome_completo'
        $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
        
        // Verifica se a preparação da query falhou
        if ($stmt === false) {
             $mensagem = "<span style='color: red;'>Erro ao preparar a query: " . $conn->error . "</span>";
        } else {
            // 'sss' indica que os 3 parâmetros são strings
            $stmt->bind_param("sss", $nome, $email, $senhaHash);

            if ($stmt->execute()) {
                // Sucesso
                $mensagem = "Conta criada com sucesso! Redirecionando para o login...";
                // Redireciona após 3 segundos
                header("refresh:3; url=login.php"); 
            } else {
                // Erro (ex: e-mail duplicado)
                if ($conn->errno === 1062) {
                    $mensagem = "<span style='color: red;'>Este e-mail já está cadastrado!</span>";
                } else {
                    $mensagem = "<span style='color: red;'>Erro: " . $conn->error . "</span>";
                }
            }

            $stmt->close();
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="./imagens/GeoSync-bg.png" type="image/x-icon">
    <title>Geosync-cadastro</title>
    <style>
        /* (Seu CSS original deve vir aqui) */
        /* ... (Conteúdo do CSS) ... */
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #1c2231 0%, #191c28 50%, #181e2b 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            background: rgba(34, 37, 52, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 27, 122, 0.38);
            margin: 50px;
        }

        .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .logo img {
            width: 200px;
            height: auto;
        }

        .form-title {
            color: #e2e8f0;
            font-size: 1.8rem;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: #e2e8f0;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 15px;
            border: 2px solid rgba(255, 27, 122, 0.2);
            border-radius: 10px;
            background: rgba(24, 30, 43, 0.8);
            color: #e2e8f0;
            font-size: 16px;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        .form-group input:focus {
            outline: none;
            border-color: #ff1b7a;
            box-shadow: 0 0 15px rgba(255, 27, 122, 0.3);
        }

        .form-group input::placeholder {
            color: rgba(226, 232, 240, 0.5);
        }

        .btn {
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #ff1b7a, #a8245f);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(255, 27, 122, 0.4);
        }

        .btn-google {
            background: white;
            color: #333;
            border: 2px solid rgba(255, 27, 122, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-google:hover {
            background: #f8f9fa;
            border-color: #ff1b7a;
        }

        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
            color: #fff;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: rgba(255, 27, 122, 0.2);
        }

        .divider span {
            padding: 0 20px;
        }

        .switch-form {
            text-align: center;
            margin-top: 25px;
            color: rgba(226, 232, 240, 0.7);
        }

        .switch-form a {
            color: #ff1b7a;
            text-decoration: none;
            font-weight: 600;
            cursor: pointer;
        }

        .switch-form a:hover {
            text-decoration: underline;
        }

        .success-message {
            background: rgba(236, 72, 153, 0.4);
            border: 1px solid #ff1b7a;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            color: #e2e8f0;
            text-align: center;
            /* Removido display: none para exibir a mensagem PHP */
        }

        @media (max-width: 480px) {
            .container {
                margin: 20px;
                padding: 30px 25px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="./imagens/GeoSync-LOGO1.png" alt="logo">
        </div>
        
        <h2 class="form-title">Criar Conta</h2>
        
        <?php if (!empty($mensagem)): ?>
            <div id="statusMessage" class="success-message" style="display: block;">
                <?php echo $mensagem; ?>
            </div>
        <?php endif; ?>
        
        <form method="POST">
            <div class="form-group">
                <label for="registerName">Nome completo</label>
                <input type="text" id="registerName" name="nome" placeholder="Seu nome" required>
            </div>
            
            <div class="form-group">
                <label for="registerEmail">E-mail</label>
                <input type="email" id="registerEmail" name="email" placeholder="seu@email.com" required>
            </div>
            
            <div class="form-group">
                <label for="registerPassword">Senha</label>
                <input type="password" id="registerPassword" name="senha" placeholder="••••••••" required minlength="6">
            </div>
            
            <div class="form-group">
                <label for="confirmPassword">Confirmar senha</label>
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="••••••••" required minlength="6">
            </div>
            
            <button type="submit" class="btn btn-primary">Criar Conta</button>
        </form>
        
        <div class="divider">
            <span>ou</span>
        </div>
        
        <button class="btn btn-google" onclick="registerWithGoogle()">
            <svg width="20" height="20" viewBox="0 0 24 24">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
            </svg>
            Cadastrar com Google
        </button>
        
        <div class="switch-form">
            Já tem uma conta? <a href="login.php">Entrar</a>
        </div>
    </div>

    <script>
        function registerWithGoogle() {
            alert('Redirecionando para cadastro com Google...\n\nEm uma aplicação real, isso abriria o OAuth do Google.');
        }

        // Função handleRegister (simulação) foi removida ou não será mais usada
    </script>

    </body>
</html>