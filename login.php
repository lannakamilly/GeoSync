<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="shortcut icon" href="./imagens/GeoSync-bg.png" type="image/x-icon">
       <title>Geosync</title>
</head>

<body>
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

        .innovation-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(255, 27, 122, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 27, 122, 0.3);
            padding: 0.75rem 1.5rem;
            border-radius: 50px;
            font-size: 0.875rem;
            font-weight: 500;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
            color: #e2e8f0;
        }

        .innovation-badge:hover {
            background: rgba(255, 27, 122, 0.25);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255, 27, 122, 0.2);
        }

        .innovation-badge svg {
            color: #ff1b7a;
        }

        .hero-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            color: #e2e8f0;
        }

        .gradient-text {
            background: linear-gradient(135deg, #ff1b7a 0%, #a8245f 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: gradientPulse 2s ease-in-out infinite alternate;
        }

        @keyframes gradientPulse {
            0% {
                filter: brightness(1);
            }

            100% {
                filter: brightness(1.2);
            }
        }

        .hero-description {
            font-size: 1.125rem;
            line-height: 1.7;
            margin-bottom: 2.5rem;
            color: #e2e8f0;
            opacity: 0.9;
            max-width: 500px;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            background: linear-gradient(135deg, #ff1b7a 0%, #a8245f 100%);
            color: #e2e8f0;
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(255, 27, 122, 0.3);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 27, 122, 0.4);
            background: linear-gradient(135deg, #a8245f 0%, #ff1b7a 100%);
        }

        .hero-visual {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .backpack-container {
            position: relative;
            width: 300px;
            height: 400px;
            background: linear-gradient(145deg, #1c2231, #191c28);
            border-radius: 30px;
            border: 2px solid rgba(236, 72, 153, 0.4);
            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.3),
                inset 0 1px 0 rgba(255, 27, 122, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .backpack-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255, 27, 122, 0.05) 50%, transparent 70%);
            animation: shimmer 3s ease-in-out infinite;
        }

        @keyframes shimmer {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .backpack-svg {
            width: 200px;
            height: 250px;
            filter: drop-shadow(0 10px 20px rgba(255, 27, 122, 0.2));
            z-index: 1;
        }

        .floating-icon {
            position: absolute;
            background: rgba(28, 34, 49, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(236, 72, 153, 0.4);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 10px 30px rgba(255, 27, 122, 0.2);
            animation: float 3s ease-in-out infinite;
            color: #ff1b7a;
        }

        .floating-icon.security {
            top: 20%;
            left: -10%;
            animation-delay: 0s;
        }

        .floating-icon.location {
            bottom: 20%;
            right: -10%;
            animation-delay: 1.5s;
        }

        .floating-icon.notification {
            top: 50%;
            right: -15%;
            animation-delay: 3s;
        }

        .floating-icon:hover {
            background: rgba(255, 27, 122, 0.2);
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(255, 27, 122, 0.3);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-10px) rotate(2deg);
            }

            66% {
                transform: translateY(5px) rotate(-1deg);
            }
        }

        .tech-grid {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                linear-gradient(rgba(255, 27, 122, 0.05) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 27, 122, 0.05) 1px, transparent 1px);
            background-size: 50px 50px;
            pointer-events: none;
        }

        .glow-effect {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(255, 27, 122, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 4s ease-in-out infinite;
            pointer-events: none;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 0.5;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.1);
                opacity: 0.8;
            }
        }

        @media (max-width: 768px) {
            .hero-container {
                grid-template-columns: 1fr;
                gap: 2rem;
                text-align: center;
            }

            .hero-visual {
                order: -1;
            }

            .backpack-container {
                width: 250px;
                height: 320px;
            }

            .backpack-svg {
                width: 160px;
                height: 200px;
            }

            .floating-icon {
                width: 50px;
                height: 50px;
            }
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

        @media (max-width: 480px) {
            .container {
                margin: 20px;
                padding: 30px 25px;
            }
        }
    </style>
    <div class="container">
        <!-- Formulário de Login -->
        <div id="loginForm" class="form-container active">
            <div class="logo">
                <img src="./imagens/GeoSync-LOGO1.png" alt="">
            </div>

            <h2 class="form-title">Entrar</h2>

            <form onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label for="loginEmail">E-mail</label>
                    <input type="email" id="loginEmail" placeholder="seu@email.com" required>
                </div>

                <div class="form-group">
                    <label for="loginPassword">Senha</label>
                    <input type="password" id="loginPassword" placeholder="••••••••" required>
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
                <!-- onclick="showRegister()" -->
            </div>
        </div>

        <!-- Formulário de Cadastro -->

    </div>

    <script>
        function showLogin() {
            document.getElementById('loginForm').classList.add('active');
            document.getElementById('registerForm').classList.remove('active');
        }

        function showRegister() {
            document.getElementById('registerForm').classList.add('active');
            document.getElementById('loginForm').classList.remove('active');
        }

        function handleLogin(event) {
            event.preventDefault();
            const email = document.getElementById('loginEmail').value;
            const password = document.getElementById('loginPassword').value;

            // Simulação de login
            if (email && password) {
                alert(`Login realizado com sucesso!\nE-mail: ${email}`);
                // Aqui você integraria com sua API de autenticação
            }
        }

        function handleRegister(event) {
            event.preventDefault();
            const name = document.getElementById('registerName').value;
            const email = document.getElementById('registerEmail').value;
            const password = document.getElementById('registerPassword').value;
            const confirmPassword = document.getElementById('confirmPassword').value;

            if (password !== confirmPassword) {
                alert('As senhas não coincidem!');
                return;
            }

            // Simulação de cadastro
            if (name && email && password) {
                alert(`Conta criada com sucesso!\nNome: ${name}\nE-mail: ${email}`);
                // Aqui você integraria com sua API de cadastro
                showLogin(); // Volta para a tela de login após cadastro
            }
        }

        function loginWithGoogle() {
            alert('Redirecionando para login com Google...\n\nEm uma aplicação real, isso abriria o OAuth do Google.');
            // Em uma aplicação real, você usaria a API do Google OAuth
        }

        function registerWithGoogle() {
            alert('Redirecionando para cadastro com Google...\n\nEm uma aplicação real, isso abriria o OAuth do Google.');
            // Em uma aplicação real, você usaria a API do Google OAuth
        }

        function showForgotPassword() {
            const email = prompt('Digite seu e-mail para recuperar a senha:');
            if (email) {
                alert(`Link de recuperação enviado para: ${email}\n\nVerifique sua caixa de entrada!`);
            }
        }
    </script>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'984c5116525e6ea9',t:'MTc1ODgyMjEzMi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>
</body>

</html>