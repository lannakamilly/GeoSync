<?php
// ARQUIVO: login.php
session_start();
// Certifique-se de que o arquivo 'conexao.php' existe e tem as credenciais corretas.
include 'conexao.php'; 

$mensagem = ""; // Variável para armazenar a mensagem de status/erro

// Verifica se o usuário JÁ está logado (se 'usuario' está na sessão)
if (isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta e limpa os dados do POST
    // É CRUCIAL que o 'name' dos inputs no HTML corresponda a 'email' e 'senha' aqui.
    $email = trim($_POST['email']);
    $senha = $_POST['senha'];

    // 1. Prepara a consulta SQL
    // Selecionamos o ID e o hash da senha para verificação
    $stmt = $conn->prepare("SELECT id, senha FROM usuarios WHERE email = ?");
    
    // Verifica se a preparação da query falhou (problema no SQL ou conexão)
    if ($stmt === false) {
         $mensagem = "Erro interno do servidor ao preparar a busca. Tente novamente.";
    } else {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        // Obtém o resultado para poder verificar o número de linhas
        $stmt->store_result(); 

        if ($stmt->num_rows > 0) {
            // 2. Usuário encontrado. Busca o hash da senha
            $stmt->bind_result($idUsuario, $senhaHash);
            $stmt->fetch();

            // 3. Verifica a senha com o hash
            if (password_verify($senha, $senhaHash)) {
                // SUCESSO NO LOGIN!
                
                // Define as variáveis de sessão (use o ID para ser mais robusto)
                $_SESSION['usuario_id'] = $idUsuario;
                $_SESSION['usuario'] = $email; // Mantendo para compatibilidade

                // Redireciona para a página principal
                header("Location: index.php");
                exit(); 

            } else {
                // Senha incorreta
                $mensagem = "Senha incorreta!";
            }
        } else {
            // Usuário não encontrado
            $mensagem = "Usuário não encontrado!";
        }

        $stmt->close();
    }
}

// Fecha a conexão (se aberta)
if (isset($conn)) {
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./imagens/GeoSync-bg.png" type="image/x-icon">
    <title>Geosync - Login</title>
    <style>
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
            font-size: 2.8rem;
            text-align: center;
            margin-bottom: 15px;
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
            font-weight: 600;
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

        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }

        .forgot-password a {
            color: rgba(226, 232, 240, 0.7);
            text-decoration: none;
            font-size: 14px;
        }

        .forgot-password a:hover {
            color: #ff1b7a;
        }

        /* Removi o CSS extra de "inovação" para focar no formulário */

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
        <div id="loginForm" class="form-container active">
            <div class="logo">
                <img src="./imagens/GeoSync-LOGO1.png" alt="GeoSync Logo">
            </div>

            <h2 class="form-title">Entrar</h2>

            <form method="POST">
                <div class="form-group">
                    <label for="loginEmail">E-mail</label>
                    <input type="email" id="loginEmail" name="email" placeholder="seu@email.com" required>
                </div>

                <div class="form-group">
                    <label for="loginPassword">Senha</label>
                    <input type="password" id="loginPassword" name="senha" placeholder="••••••••" required>
                </div>

                <button type="submit" class="btn btn-primary">Entrar</button>
            </form>

            <div class="divider">
                <span>ou</span>
            </div>

            <button class="btn btn-google" onclick="loginWithGoogle()">
                <svg width="20" height="20" viewBox="0 0 24 24">
                    <path fill="#4285F4"
                        d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                    <path fill="#34A853"
                        d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                    <path fill="#FBBC05"
                        d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                    <path fill="#EA4335"
                        d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                </svg>
                Continuar com Google
            </button>

            <div class="forgot-password">
                <a href="#" onclick="showForgotPassword()">Esqueceu sua senha?</a>
            </div>

            <div class="switch-form">
                Não tem uma conta? <a href="cadastro.php">Cadastre-se</a>
            </div>
        </div>
    </div>

    <script>
        function loginWithGoogle() {
            alert('Redirecionando para login com Google...\n\nEm uma aplicação real, isso abriria o OAuth do Google.');
        }

        function showForgotPassword() {
            const email = prompt('Digite seu e-mail para recuperar a senha:');
            if (email) {
                alert(`Link de recuperação enviado para: ${email}\n\nVerifique sua caixa de entrada!`);
            }
        }
        
        // === BLOCO DE CÓDIGO PARA O ALERT DE ERRO ===
        <?php if (!empty($mensagem)): ?>
            // Se a variável $mensagem do PHP não estiver vazia, exibe o alert
            alert("Erro de Login: <?php echo htmlspecialchars($mensagem); ?>");
        <?php endif; ?>
        // ===========================================
    </script>
</body>

</html>