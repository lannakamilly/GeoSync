<?php
session_start();

// Redireciona para a página de login se a variável de sessão 'usuario' não estiver definida.
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

/**
 * Define o nome do usuário.
 * * Acessa o nome a partir de $_SESSION['usuario']['nome'].
 * Se o array 'usuario' existir, mas a chave 'nome' não, ou se 'usuario' for uma string,
 * a lógica abaixo tenta lidar com isso, mas o ideal é que a sessão siga uma estrutura consistente:
 * * Se $_SESSION['usuario'] for um ARRAY (e.g., ['id' => 1, 'nome' => 'Seu Nome']):
 * $nome_usuario = $_SESSION['usuario']['nome'] ?? 'Usuário';
 * * Se $_SESSION['usuario'] for apenas uma STRING (e.g., 'Seu Nome'):
 * $nome_usuario = is_array($_SESSION['usuario']) ? ($_SESSION['usuario']['nome'] ?? 'Usuário') : $_SESSION['usuario'];
 * * MANTENDO A SUA VERSÃO MAIS PROVÁVEL e segura (acessando a chave 'nome' de um array de sessão):
 */
$nome_usuario = is_array($_SESSION['usuario']) && isset($_SESSION['usuario']['nome']) 
              ? $_SESSION['usuario']['nome'] 
              : (is_string($_SESSION['usuario']) ? $_SESSION['usuario'] : 'Usuário');

// Se a sessão for um array, mas sem 'nome', ou se for algo inesperado, usa o default 'Usuário'.
// Se a sua sessão for SOMENTE a string com o nome, a linha acima garante que funcione.
// Se a sua sessão for um array com a chave 'nome', a linha acima garante que funcione.

// NOTA: Para este código, vamos manter a lógica mais simples e comum do seu rascunho, 
// assumindo que a sessão é um array com a chave 'nome', mas aprimorando a verificação:
$nome_usuario = $_SESSION['usuario']['nome'] ?? $_SESSION['usuario'] ?? 'Usuário';
$nome_usuario = htmlspecialchars($nome_usuario); // Garante segurança contra XSS

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosync</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="./imagens/GeoSync-bg.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        /* Estilos customizados para as cores (Variáveis CSS) */
        :root {
            --color-primary: #202937; /* Fundo principal da Navbar/Body */
            --color-accent: #ff2178;  /* Cor Rosa/Destaque (Accent) */
            --color-card-bg: #192230; /* Fundo dos cards e rodapé */
            --color-text-light: #e5e7eb; /* Cor do texto principal */
        }
        .bg-primary { background-color: var(--color-primary); }
        .text-accent { color: var(--color-accent); }
        .custom-pink { color: var(--color-accent); }
        .custom-bg-pink { background-color: rgba(255, 33, 120, 0.1); } 
        .custom-btn-pink { background-color: var(--color-accent); }
        .custom-btn-pink:hover { background-color: #e01c6a; }
        .highlight-pink { color: var(--color-accent); }

        /* Estilo do ícone de rede social no footer */
        .social-icon-hover {
            background-color: rgba(15, 23, 42, 0.5); 
            transition: all 0.3s ease;
        }
        .social-icon-hover:hover {
            background-color: var(--color-accent);
        }
        
        /* ************************************************* */
        /* ESTILOS PARA OS CARDS DE TECNOLOGIA */
        /* ************************************************* */
        .tech-card-container {
            /* Fundo escuro levemente diferente do body */
            background-color: var(--color-card-bg); 
            border-radius: 12px;
            padding: 1.5rem;
            /* Simula a borda rosa ao redor do card */
            border: 1px solid rgba(255, 33, 120, 0.3); 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
            height: 100%;
        }

        .tech-card-container:hover {
            transform: translateY(-5px);
        }

        .tech-icon-box {
            /* O quadrado rosa que você enviou na imagem */
            width: 40px;
            height: 40px;
            background-color: var(--color-accent); 
            border-radius: 6px;
            margin-right: 1rem;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white; /* Cor do ícone dentro da caixa (opcional) */
        }

        .tech-title {
            font-size: 1.5rem; /* 24px */
            font-weight: 700;
            color: var(--color-text-light);
            margin-bottom: 0.25rem;
        }
        
        .tech-description {
            font-size: 1rem; /* 16px */
            color: #9ca3af; /* gray-400 */
            line-height: 1.5;
        }

        /* ************************************************* */
        /* Estilos do Carrossel e Seções */
        /* ************************************************* */
        .tech, .testimonials {
            padding: 4rem 1.5rem;
            max-width: 76rem;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .tech h2, .testimonials h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .tech p, .testimonials p {
            font-size: 1.125rem;
            color: #ccc;
            margin-bottom: 3rem; 
        }

        .carousel-container {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }
        .carousel-wrapper {
            overflow: hidden;
            position: relative;
        }
        .carousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .carousel-slide {
            flex: 0 0 100%;
            padding: 1rem;
        }
        .testimonial-content {
            background-color: var(--color-card-bg);
            padding: 2.5rem;
            border-radius: 0.75rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .stars {
            color: gold;
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }
        .testimonial-text {
            font-size: 1.125rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            color: #e5e7eb;
            min-height: 100px; 
        }
        .testimonial-author {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }
        .author-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--color-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }
        .author-info h4 {
            font-weight: 600;
            margin: 0;
            color: white;
        }
        .author-info p {
            font-size: 0.875rem;
            color: #9ca3af;
            margin: 0;
        }
        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            z-index: 10;
            font-size: 1.5rem;
            border-radius: 50%;
            opacity: 0.7;
            transition: opacity 0.3s;
        }
        .carousel-btn:hover {
            opacity: 1;
        }
        .carousel-btn.prev { left: 0; }
        .carousel-btn.next { right: 0; }

        .carousel-indicators {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 1.5rem;
        }
        .indicator {
            width: 10px;
            height: 10px;
            background-color: #6b7280;
            border-radius: 50%;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .indicator.active {
            background-color: var(--color-accent);
        }
    </style>

    <script>
        // Configuração customizada do Tailwind para usar as cores
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#202937',
                        accent: '#ff2178'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-primary text-white">

    <nav class="bg-primary border-b border-gray-700 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <div class="flex items-center space-x-3">
                    <img src="./imagens/GeoSync-bg.png" alt="Logo Geosync" class="w-10 h-10 object-contain">
                    <span class="text-xl font-bold">Geosync</span>
                </div>

                <div class="flex items-center space-x-6">

                    <div class="hidden md:flex space-x-8">
                        <a href="./index.php" class="text-accent font-medium transition-colors border-b-2 border-accent pb-1">Início</a> 
                        <a href="../GeoSync/comoFunc.php" class="hover:text-accent transition-colors">Saiba Mais</a>
                        <a href="./produtos.php" class="hover:text-accent transition-colors">Produtos</a>
                        <a href="./compras.php" class="hover:text-accent transition-colors">Carrinho</a>
                    </div>

                    <div class="hidden md:flex items-center space-x-4">
                        <span class="text-gray-300">Olá, <strong><?php echo $nome_usuario; ?></strong></span>
                        <a href="sair.php" class="text-white custom-btn-pink px-3 py-1 rounded-md text-sm font-medium hover:bg-red-600 transition-colors" title="Sair da Conta">
                            <i class="fas fa-sign-out-alt mr-1"></i> Sair
                        </a>
                    </div>
                    <button class="md:hidden hover:text-accent transition-colors" onclick="toggleMobileMenu()">
                        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 flex flex-col bg-gray-900 border-t border-gray-700">
                <p class="px-3 py-2 text-base font-bold text-white border-b border-gray-700 mb-1">Olá, <?php echo $nome_usuario; ?></p>
                <a href="./index.php" class="block px-3 py-2 rounded-md text-base font-medium text-accent bg-gray-700 transition-colors">Início</a>
                <a href="../GeoSync/comoFunc.php" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Saiba Mais</a>
                <a href="./produtos.php" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Produtos</a>
                <a href="./compras.php" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Carrinho</a>
                <a href="./sair.php" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-red-700 hover:bg-red-600 transition-colors mt-2">
                    <i class="fas fa-sign-out-alt mr-2"></i> Sair
                </a>
            </div>
        </div>
        </nav>
    <div class="content">
    <section class="py-16 px-6 max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full custom-bg-pink">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-rocket-takeoff-fill custom-pink" viewBox="0 0 16 16">
                            <path
                                d="M12.17 9.53c2.307-2.592 3.278-4.684 3.641-6.218.21-.887.214-1.58.16-2.065a3.6 3.6 0 0 0-.108-.563 2 2 0 0 0-.078-.23V.453c-.073-.164-.168-.234-.352-.295a2 2 0 0 0-.16-.045 4 4 0 0 0-.57-.093c-.49-.044-1.19-.03-2.08.188-1.536.374-3.618 1.343-6.161 3.604l-2.4.238h-.006a2.55 2.55 0 0 0-1.524.734L.15 7.17a.512.512 0 0 0 .433.868l1.896-.271c.28-.04.592.013.955.132.232.076.437.16.655.248l.203.083c.196.816.66 1.58 1.275 2.195.613.614 1.376 1.08 2.191 1.277l.082.202c.089.218.173.424.249.657.118.363.172.676.132.956l-.271 1.9a.512.512 0 0 0 .867.433l2.382-2.386c.41-.41.668-.949.732-1.526zm.11-3.699c-.797.8-1.93.961-2.528.362-.598-.6-.436-1.733.361-2.532.798-.799 1.93-.96 2.528-.361s.437 1.732-.36 2.531Z" />
                            <path
                                d="M5.205 10.787a7.6 7.6 0 0 0 1.804 1.352c-1.118 1.007-4.929 2.028-5.054 1.903-.126-.127.737-4.189 1.839-5.18.346.69.837 1.35 1.411 1.925" />
                        </svg>
                        <span class="text-sm font-medium custom-pink">Inovação em segurança infantil</span>
                    </div>

                    <div class="space-y-2">
                        <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight">
                            Sua <span class="custom-pink">Tranquilidade</span>
                        </h1>
                        <h2 class="text-4xl lg:text-5xl font-bold text-white leading-tight">
                            Nossa <span class="custom-pink">Tecnologia</span>
                        </h2>
                    </div>

                    <p class="text-lg text-gray-300 leading-relaxed max-w-lg">
                        A primeira mochila inteligente do Brasil que permite monitorar seus filhos em tempo real,
                        oferecendo segurança, praticidade e tranquilidade para toda a família.
                    </p>

                    <a href="./produtos.php" 
                        class="custom-btn-pink hover:custom-btn-pink text-white font-semibold px-5 py-3 rounded-lg transition-colors duration-300 shadow-lg hover:shadow-xl inline-block">
                        Quero conhecer
                    </a>
                </div>

                <div class="relative">
                    <div class="relative w-[500px] h-[500px] mx-auto">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-pink-600 via-pink-500 to-red-500 rounded-full opacity-20 blur-xl">
                        </div>
                        <div
                            class="absolute inset-4 bg-gradient-to-br from-pink-800 via-pink-400 to-red-400 rounded-full opacity-30">
                        </div>

                        <div class="absolute inset-8 bg-white rounded-full shadow-2xl flex items-center justify-center">
                            <img src="./imagens/geosync-bag.jpeg" alt="Mochila GeoSync"
                                class="w-full h-full object-cover rounded-full"
                                onerror="this.src=''; this.alt='Image failed to load'; this.style.display='none';" />
                        </div>

                        <div
                            class="absolute top-8 right-8 bg-pink-600 rounded-full p-4 shadow-xl transform hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                            </svg>
                        </div>

                        <div
                            class="absolute bottom-8 left-8 bg-pink-600 rounded-full p-4 shadow-xl transform hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                            </svg>
                        </div>

                        <div class="absolute top-16 left-16 w-3 h-3 bg-pink-700 rounded-full animate-bounce"
                            style="animation-delay: 0s;"></div>
                        <div class="absolute top-24 right-20 w-2 h-2 bg-pink-200 rounded-full animate-bounce"
                            style="animation-delay: 0.5s;"></div>
                        <div class="absolute bottom-20 left-20 w-2 h-2 bg-pink-300 rounded-full animate-bounce"
                            style="animation-delay: 1s;"></div>
                        <div class="absolute bottom-16 right-16 w-3 h-3 bg-pink-600 rounded-full animate-bounce"
                            style="animation-delay: 1.5s;"></div>

                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <div class="w-80 h-80 border-2 border-pink-300 rounded-full animate-ping opacity-30"></div>
                            <div class="absolute inset-8 border-2 border-purple-300 rounded-full animate-ping opacity-40"
                                style="animation-delay: 0.5s;"></div>
                            <div class="absolute inset-16 border-2 border-blue-300 rounded-full animate-ping opacity-50"
                                style="animation-delay: 1s;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="tech">
            <h2>
                Tecnologia que <span class="highlight-pink">Protege</span>
            </h2>
            <p>
                Descubra como nossa mochila inteligente revoluciona a segurança infantil com recursos inovadores
            </p>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
                
                <div class="tech-card-container">
                    <div class="flex items-start mb-4">
                        <div class="tech-icon-box">
                               <i class="fas fa-map-marker-alt"></i>
                        </div> 
                        <div class="flex-grow">
                            <h3 class="tech-title">Rastreamento GPS em Tempo Real</h3>
                        </div>
                    </div>
                    <p class="tech-description">
                        Localização precisa da mochila a qualquer momento, com atualizações em tempo real no seu smartphone.
                    </p>
                </div>

                <div class="tech-card-container">
                    <div class="flex items-start mb-4">
                        <div class="tech-icon-box">
                            <i class="fas fa-bell"></i>
                        </div> 
                        <div class="flex-grow">
                            <h3 class="tech-title">Notificações Inteligentes</h3>
                        </div>
                    </div>
                    <p class="tech-description">
                        Alertas automáticos quando a mochila é aberta fora do horário programado ou em locais não autorizados.
                    </p>
                </div>

                <div class="tech-card-container">
                    <div class="flex items-start mb-4">
                        <div class="tech-icon-box">
                            <i class="fas fa-history"></i>
                        </div> 
                        <div class="flex-grow">
                            <h3 class="tech-title">Histórico Completo</h3>
                        </div>
                    </div>
                    <p class="tech-description">
                        Acompanhe todo o trajeto percorrido com histórico detalhado de movimentação e paradas.
                    </p>
                </div>

            </div>
        </section>
        <section class="testimonials">
            <h2>O que dizem nossos <span class="highlight-pink">Clientes</span></h2>
            <div class="carousel-container">
                <div class="carousel-wrapper">
                    <div class="carousel-track">
                        <div class="carousel-slide">
                            <div class="testimonial-content">
                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="testimonial-text">
                                    A Geosync mudou completamente minha rotina. Agora consigo trabalhar tranquila
                                    sabendo onde meus filhos estão.
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-avatar">M</div>
                                    <div class="author-info">
                                        <h4>Maria Silva</h4>
                                        <p>Empresária</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-slide">
                            <div class="testimonial-content">
                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="testimonial-text">
                                    Tecnologia incrível! O histórico de trajetos me ajuda a entender melhor a rotina
                                    do meu filho.
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-avatar">J</div>
                                    <div class="author-info">
                                        <h4>João Santos</h4>
                                        <p>Diretor de Marketing</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-slide">
                            <div class="testimonial-content">
                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="testimonial-text">
                                    Simplesmente fantástico! Uma solução inovadora que trouxe mais segurança para
                                    nossa comunidade escolar. Os pais estão muito satisfeitos.
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-avatar">A</div>
                                    <div class="author-info">
                                        <h4>Ana Costa</h4>
                                        <p>Arquiteta</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-slide">
                            <div class="testimonial-content">
                                <div class="stars">
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                    <span class="star">★</span>
                                </div>
                                <div class="testimonial-text">
                                    Qualidade excepcional e prazo cumprido à risca. A comunicação foi clara durante
                                    todo o processo e o resultado final ficou ainda melhor do que imaginávamos.
                                    Parabéns pela dedicação e profissionalismo!
                                </div>
                                <div class="testimonial-author">
                                    <div class="author-avatar">P</div>
                                    <div class="author-info">
                                        <h4>Pedro Oliveira</h4>
                                        <p>Gerente de Projetos</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-btn prev">‹</button>
                    <button class="carousel-btn next">›</button>
                </div>

                <div class="carousel-indicators">
                    <div class="indicator active"></div>
                    <div class="indicator"></div>
                    <div class="indicator"></div>
                    <div class="indicator"></div>
                </div>
            </div>
        </section>
        </div>
    
    <footer class="bg-primary text-white pt-16 pb-6">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-sm">

                <div class="col-span-2 md:col-span-1">
                    <div class="flex items-center mb-6">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" class="mr-3">
                            <path d="M16 0L31.547 8.27214V23.7279L16 32L0.453018 23.7279V8.27214L16 0Z" fill="#FF2178"/>
                            <circle cx="16" cy="12" r="4" fill="#192230"/>
                        </svg>
                        <div>
                            <span class="text-xl font-bold">Geosync</span>
                            <p class="text-gray-400 text-xs">Smart Security</p>
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed max-w-xs">
                        Tecnologia inteligente para a segurança das crianças, com inovação e qualidade premium.
                    </p>
                </div>

                <div>
                    <h4 class="text-accent font-bold mb-6 uppercase tracking-wider">Navegação</h4>
                    <ul class="space-y-3">
                        <li><a href="./index.php" class="text-gray-400 hover:text-white transition-colors">Página Inicial</a></li>
                        <li><a href="./produtos.php" class="text-gray-400 hover:text-white transition-colors">Produtos</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Tecnologia</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Suporte</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-accent font-bold mb-6 uppercase tracking-wider">Contato</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center">
                            <i class="fas fa-phone-alt text-accent mr-3"></i>
                            <span class="text-gray-400">(11) 9999-9999</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-accent mr-3"></i>
                            <span class="text-gray-400">contato@geosync.com</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt text-accent mr-3"></i>
                            <span class="text-gray-400">São Paulo, SP</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-accent font-bold mb-6 uppercase tracking-wider">Redes Sociais</h4>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="w-10 h-10 social-icon-hover rounded-full flex items-center justify-center">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 social-icon-hover rounded-full flex items-center justify-center">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <a href="#" class="w-10 h-10 social-icon-hover rounded-full flex items-center justify-center">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a>
                    </div>
                    <p class="text-gray-400 text-xs mt-6">Siga-nos para novidades e atualizações</p>
                </div>

            </div>

            <div class="border-t border-gray-700 mt-12 pt-6 text-center text-xs text-gray-500">
                &copy; 2024 Geosync. Todos os direitos reservados. | Tecnologia e Segurança
            </div>
        </div>
    </footer>
    
    <script>
        // **********************************************
        // FUNÇÃO PARA O MENU MOBILE RESPONSIVO (Hamburger)
        // **********************************************
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenu.classList.toggle('hidden'); 
            hamburgerIcon.classList.toggle('hidden'); 
            closeIcon.classList.toggle('hidden'); 	
        }

        // **********************************************
        // FUNÇÃO PARA O CAROUSEL DE TESTEMUNHOS
        // **********************************************
        document.addEventListener('DOMContentLoaded', () => {
            const track = document.querySelector('.carousel-track');
            const slides = Array.from(track.children);
            const nextButton = document.querySelector('.carousel-btn.next');
            const prevButton = document.querySelector('.carousel-btn.prev');
            const indicators = document.querySelectorAll('.indicator');

            let slideWidth = slides.length > 0 ? slides[0].getBoundingClientRect().width : 0;
            
            const setSlidePosition = (slide, index) => {
                slide.style.left = slideWidth * index + 'px';
            };
            if (slides.length > 0) {
                slides.forEach(setSlidePosition);
            }

            let currentSlideIndex = 0;

            const updateCarousel = (targetIndex) => {
                const currentIndicator = indicators[currentSlideIndex];
                const targetIndicator = indicators[targetIndex];
                const targetSlide = slides[targetIndex];
                
                // Recalcula a largura para garantir responsividade
                slideWidth = slides[0].getBoundingClientRect().width;
                slides.forEach(setSlidePosition);

                track.style.transform = 'translateX(-' + targetSlide.style.left + ')';

                currentIndicator.classList.remove('active');
                targetIndicator.classList.add('active');

                currentSlideIndex = targetIndex;
            };

            // Navegação por botões
            nextButton.addEventListener('click', () => {
                let targetIndex = (currentSlideIndex + 1) % slides.length;
                updateCarousel(targetIndex);
            });

            prevButton.addEventListener('click', () => {
                let targetIndex = (currentSlideIndex - 1 + slides.length) % slides.length;
                updateCarousel(targetIndex);
            });

            // Navegação por indicadores
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    updateCarousel(index);
                });
            });

            // Recalcular largura ao redimensionar (melhora a responsividade)
            window.addEventListener('resize', () => {
                slideWidth = slides.length > 0 ? slides[0].getBoundingClientRect().width : 0;
                if (slides.length > 0) {
                    slides.forEach(setSlidePosition);
                    // Garante que o carrossel permaneça na posição correta após o redimensionamento
                    track.style.transform = 'translateX(-' + slides[currentSlideIndex].style.left + ')';
                }
            });

            // Configuração do Autoplay (Opcional)
            /*
            setInterval(() => {
                let targetIndex = (currentSlideIndex + 1) % slides.length;
                updateCarousel(targetIndex);
            }, 5000); // Muda a cada 5 segundos
            */
        });
    </script>
</body>
</html>