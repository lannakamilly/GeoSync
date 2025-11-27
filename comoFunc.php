<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosync</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./imagens/GeoSync-bg.png" type="image/x-icon">

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

    <style>
        /* Estilos customizados para as cores */
        :root {
            --color-primary: #202937;
            --color-accent: #ff2178;
            --color-card-bg: #192230;
        }

        .bg-primary {
            background-color: var(--color-primary);
        }

        .bg-accent {
            background-color: var(--color-accent);
        }

        .text-accent {
            color: var(--color-accent);
        }

        .border-accent {
            border-color: var(--color-accent);
        }

        .hover-accent:hover {
            background-color: var(--color-accent);
        }

        .gradient-bg {
            background: linear-gradient(135deg, #202937 0%, #2a3441 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
            background-color: #263140;
            /* Fundo do card um pouco mais claro */
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(255, 33, 120, 0.2);
            background-color: #2c394a;
        }

        /* Animação para o ícone de destaque */
        .feature-icon {
            background: linear-gradient(135deg, var(--color-accent) 0%, #ff6b9d 100%);
            animation: glow 3s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                box-shadow: 0 0 15px rgba(255, 33, 120, 0.3);
            }

            to {
                box-shadow: 0 0 25px rgba(255, 33, 120, 0.6);
            }
        }

        /* Animação de Scroll Reveal */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            /* Curva suave */
        }

        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        /* Estilo do ícone de rede social no footer */
        .social-icon-hover {
            background-color: rgba(15, 23, 42, 0.5);
            transition: all 0.3s ease;
        }

        .social-icon-hover:hover {
            background-color: var(--color-accent);
        }
    </style>
</head>

<body class="bg-primary text-white font-sans">

    <nav class="bg-primary border-b border-gray-700 sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <div class="flex items-center space-x-3">
                    <img src="./imagens/GeoSync-bg.png" alt="Logo Geosync" class="w-10 h-10 object-contain">
                    <span class="text-xl font-bold">Geosync</span>
                </div>

                <div class="flex items-center space-x-6">

                    <div class="hidden md:flex space-x-8">
                        <a href="./index.php" class="hover:text-accent transition-colors">Início</a>
                        <a href="../GeoSync/comoFunc.php" class="text-accent font-medium transition-colors border-b-2 border-accent pb-1">Saiba Mais</a>
                        <a href="./produtos.php" class="hover:text-accent transition-colors">Produtos</a>
                       
                    </div>

         
                    <button class="md:hidden hover:text-accent transition-colors" onclick="toggleMobileMenu()">
                        <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 flex flex-col bg-gray-900 border-t border-gray-700">
                <a href="./index.php"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Início</a>
                <a href="../GeoSync/comoFunc.php"
                    class="block px-3 py-2 rounded-md text-base font-medium text-accent bg-gray-700 transition-colors">Saiba
                    Mais</a>
                <a href="./produtos.php"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Produtos</a>
            
                <a href="./login.php"
                    class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-800 hover:bg-gray-700 transition-colors">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login / Criar Conta
                </a>
            </div>
        </div>
    </nav>
    <section class="gradient-bg py-20">
        <div class="container mx-auto px-6 text-center">
            <div class="scroll-reveal">
                <h2 class="text-5xl md:text-7xl font-bold mb-6">
                    Como <span class="text-accent">Funciona</span>
                </h2>
                <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto">
                    Descubra a tecnologia revolucionária por trás das mochilas inteligentes Geosync.
                    Segurança, inovação e tranquilidade em um só produto.
                </p>
            </div>

            <div class="flex justify-center">
                <div class="relative w-64 h-64">
                    <img src="./imagens/geosync-bag.jpeg" alt="Mochila GeoSync"
                        class="w-full h-full object-contain tech-animation rounded-xl shadow-2xl"
                        onerror="this.src=''; this.alt='Image failed to load'; this.style.display='none';" />
                    <div
                        class="absolute -top-2 -right-2 w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center border-4 border-primary">
                        <i class="fas fa-wifi text-white text-sm"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="scroll-reveal text-center mb-16">
                <h3 class="text-4xl font-bold mb-6">Tecnologia <span class="text-accent">Simples e Eficaz</span></h3>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Combinamos componentes de alta tecnologia em uma solução intuitiva e confiável
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="scroll-reveal bg-gray-700 rounded-2xl p-8 text-center card-hover">
                    <div class="feature-icon w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-microchip text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Arduino Integrado</h4>
                    <p class="text-gray-300 mb-4">Microcontrolador de alta performance embarcado na mochila</p>
                    <div class="bg-gray-900 rounded-lg p-4">
                        <div class="flex items-center justify-between text-sm">
                            <span>Processamento:</span>
                            <span class="text-accent font-bold">32-bit</span>
                        </div>
                        <div class="flex items-center justify-between text-sm mt-2">
                            <span>Memória:</span>
                            <span class="text-accent font-bold">4MB</span>
                        </div>
                    </div>
                </div>

                <div class="scroll-reveal bg-gray-700 rounded-2xl p-8 text-center card-hover">
                    <div class="feature-icon w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-satellite-dish text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Conectividade GPS</h4>
                    <p class="text-gray-300 mb-4">Localização precisa via satélite com cobertura nacional</p>
                    <div class="bg-gray-900 rounded-lg p-4">
                        <div class="flex items-center justify-between text-sm">
                            <span>Precisão:</span>
                            <span class="text-accent font-bold">±1 metro</span>
                        </div>
                        <div class="flex items-center justify-between text-sm mt-2">
                            <span>Atualização:</span>
                            <span class="text-accent font-bold">Tempo real</span>
                        </div>
                    </div>
                </div>

                <div class="scroll-reveal bg-gray-700 rounded-2xl p-8 text-center card-hover">
                    <div class="feature-icon w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-mobile-alt text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">App Mobile</h4>
                    <p class="text-gray-300 mb-4">Interface intuitiva para monitoramento em tempo real</p>
                    <div class="bg-gray-900 rounded-lg p-4">
                        <div class="flex items-center justify-between text-sm">
                            <span>Plataformas:</span>
                            <span class="text-accent font-bold">iOS & Android</span>
                        </div>
                        <div class="flex items-center justify-between text-sm mt-2">
                            <span>Notificações:</span>
                            <span class="text-accent font-bold">Push</span>
                        </div>
                    </div>
                </div>

                <div class="scroll-reveal bg-gray-700 rounded-2xl p-8 text-center card-hover">
                    <div class="feature-icon w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Plataforma Web</h4>
                    <p class="text-gray-300 mb-4">Acesso completo via navegador com dashboard avançado</p>
                    <div class="bg-gray-900 rounded-lg p-4">
                        <div class="flex items-center justify-between text-sm">
                            <span>Acesso:</span>
                            <span class="text-accent font-bold">24/7</span>
                        </div>
                        <div class="flex items-center justify-between text-sm mt-2">
                            <span>Relatórios:</span>
                            <span class="text-accent font-bold">Detalhados</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="scroll-reveal text-center mb-16">
                <h3 class="text-4xl font-bold mb-6">Como Tudo se <span class="text-accent">Conecta</span></h3>
                <p class="text-xl text-gray-300">Veja o fluxo completo de funcionamento da tecnologia Geosync</p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-accent opacity-30"></div>

                    <div class="scroll-reveal flex items-center mb-12">
                        <div class="w-1/2 pr-8 text-right">
                            <h4 class="text-2xl font-bold mb-3">1. Detecção de Movimento</h4>
                            <p class="text-gray-300">Sensores integrados detectam quando a mochila está em movimento ou
                                foi aberta</p>
                        </div>
                        <div
                            class="w-16 h-16 bg-accent rounded-full flex items-center justify-center relative z-10 shadow-lg">
                            <i class="fas fa-running text-white text-xl"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                    <span class="text-sm">Sensor ativo</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-reveal flex items-center mb-12">
                        <div class="w-1/2 pr-8">
                            <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <span class="text-sm">GPS ativo</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-16 h-16 bg-accent rounded-full flex items-center justify-center relative z-10 shadow-lg">
                            <i class="fas fa-satellite text-white text-xl"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <h4 class="text-2xl font-bold mb-3">2. Captura de Localização</h4>
                            <p class="text-gray-300">Sistema GPS captura coordenadas precisas e envia para nossos
                                servidores</p>
                        </div>
                    </div>

                    <div class="scroll-reveal flex items-center mb-12">
                        <div class="w-1/2 pr-8 text-right">
                            <h4 class="text-2xl font-bold mb-3">3. Processamento Inteligente</h4>
                            <p class="text-gray-300">IA analisa padrões e identifica situações que requerem atenção dos
                                pais</p>
                        </div>
                        <div
                            class="w-16 h-16 bg-accent rounded-full flex items-center justify-center relative z-10 shadow-lg">
                            <i class="fas fa-brain text-white text-xl"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                    <span class="text-sm">IA processando</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="scroll-reveal flex items-center">
                        <div class="w-1/2 pr-8">
                            <div class="bg-gray-800 rounded-lg p-4 border border-gray-700">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <span class="text-sm">Notificação enviada</span>
                                </div>
                            </div>
                        </div>
                        <div
                            class="w-16 h-16 bg-accent rounded-full flex items-center justify-center relative z-10 shadow-lg">
                            <i class="fas fa-bell text-white text-xl"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <h4 class="text-2xl font-bold mb-3">4. Notificação Instantânea</h4>
                            <p class="text-gray-300">Pais recebem alertas em tempo real no app e podem acompanhar pelo
                                dashboard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="scroll-reveal text-center mb-16">
                <h3 class="text-4xl font-bold mb-6">Impacto Positivo para <span class="text-accent">Toda Família</span>
                </h3>
                <p class="text-xl text-gray-300">Benefícios que transformam o dia a dia e trazem tranquilidade</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="scroll-reveal bg-gradient-to-br from-[#ff2178] to-[#ff6b9d] rounded-2xl p-8 text-center card-hover">
                    <div
                        class="w-20 h-20 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Segurança Total</h4>
                    <p class="text-lg mb-6">Monitoramento 24/7 com tecnologia de ponta para proteger o que mais importa.
                    </p>
                    <div class="space-y-3">
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-check text-white-300"></i>
                            <span>Rastreamento contínuo</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-check text-white-300"></i>
                            <span>Alertas inteligentes</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-check text-white-300"></i>
                            <span>Histórico completo</span>
                        </div>
                    </div>
                </div>

                <div
                    class="scroll-reveal bg-gradient-to-br from-[#ff2178] to-[#ff6b9d] rounded-2xl p-8 text-center card-hover">
                    <div
                        class="w-20 h-20 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-heart text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Tranquilidade para Pais</h4>
                    <p class="text-lg mb-6">Durma em paz sabendo onde seu filho está a qualquer momento do dia.</p>
                    <div class="space-y-3">
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-check text-white-300"></i>
                            <span>Localização em tempo real</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-check text-white-300"></i>
                            <span>Notificações personalizadas</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-check text-white-300"></i>
                            <span>Suporte 24h</span>
                        </div>
                    </div>
                </div>

                <div
                    class="scroll-reveal bg-gradient-to-br from-[#ff2178] to-[#ff6b9d] rounded-2xl p-8 text-center card-hover">
                    <div
                        class="w-20 h-20 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-mobile-alt text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Praticidade no Dia a Dia</h4>
                    <p class="text-lg mb-6">Interface simples e intuitiva, acessível de qualquer lugar pelo celular.</p>
                    <div class="space-y-3">
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-check text-white-300"></i>
                            <span>App intuitivo</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-check text-white-300"></i>
                            <span>Acesso remoto</span>
                        </div>
                        <div class="flex items-center justify-center space-x-2">
                            <i class="fas fa-check text-white-300"></i>
                            <span>Configuração fácil</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 gradient-bg">
        <div class="container mx-auto px-6 text-center">
            <div class="scroll-reveal">
                <h3 class="text-4xl font-bold mb-6">Pronto para Experimentar?</h3>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Junte-se a milhares de famílias que já confiam na tecnologia Geosync para proteger seus filhos
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="./produtos.php"
                        class="bg-accent hover:bg-pink-600 text-white px-8 py-4 rounded-xl font-bold text-lg transition-colors">
                        <i class="fas fa-shopping-cart mr-2"></i>
                        Ver Produtos
                    </a>
                    <button
                        class="border-2 border-accent text-accent hover:bg-accent hover:text-white px-8 py-4 rounded-xl font-bold text-lg transition-colors"
                        onclick="window.location.href = 'video.php';">
                        <i class="fas fa-play mr-2"></i>
                        Ver Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

 <footer class="bg-primary text-white pt-16 pb-6">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-2 md:grid-cols-5 gap-10 text-sm">

            <div class="col-span-2 md:col-span-2">
                
                <div class="mb-4">
                    <img src="./imagens/GeoSync-LOGO1.png" alt="Logo Geosync" class="h-8 w-auto">
                </div>
                
                <p class="text-gray-400 leading-relaxed max-w-xs mb-8">
                    Tecnologia inteligente para a segurança e monitoramento das crianças, com inovação e qualidade premium.
                </p>

                <h4 class="text-accent font-bold mb-4 uppercase tracking-wider">Disponível para Instalar</h4>
                <div class="flex space-x-3">
                    <a href="#" target="_blank" aria-label="Baixar na Google Play">
                        <img src="./imagens/appp.png" alt="Google Play" class="h-10 transition-transform duration-300 hover:scale-105">
                    </a>
                    <a href="#" target="_blank" aria-label="Baixar na App Store">
                        <img src="./imagens/googleteste.png" alt="App Store" class="h-10 transition-transform duration-300 hover:scale-105">
                    </a>
                </div>
            </div>

            <div class="hidden md:block"> <h4 class="text-accent font-bold mb-6 uppercase tracking-wider">Navegação</h4>
                <ul class="space-y-3">
                    <li><a href="./index.php" class="text-gray-400 hover:text-white transition-colors">Página Inicial</a></li>
                    <li><a href="./produtos.php" class="text-gray-400 hover:text-white transition-colors">Produtos</a></li>
              
                    <li><a href="./comoFunc.php" class="text-gray-400 hover:text-white transition-colors">Saiba Mais</a></li>
                    <li><a href="./garantia.php" class="text-gray-400 hover:text-white transition-colors">Política de Privacidade</a></li>
                   
                </ul>
            </div>

            <div>
                <h4 class="text-accent font-bold mb-6 uppercase tracking-wider">Contato</h4>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <i class="fas fa-phone-alt text-accent mt-1 mr-3"></i>
                        <span class="text-gray-400">(11) 9999-9999</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope text-accent mt-1 mr-3"></i>
                        <span class="text-gray-400">contato@geosync.com</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt text-accent mt-1 mr-3"></i>
                        <span class="text-gray-400">São Paulo, SP - Brasil</span>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="text-accent font-bold mb-6 uppercase tracking-wider">Siga-nos</h4>
                <div class="flex space-x-4 mb-4">
                    <a href="https://www.instagram.com/geosync.web/?utm_source=ig_web_button_share_sheet"
                        class="text-gray-400 hover:text-pink-500 transition-colors text-2xl" target="_blank" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                
                </div>
                <p class="text-gray-400 text-xs mt-6">Acompanhe nossas novidades e dicas de segurança.</p>
            </div>

        </div>

        <div class="border-t border-gray-700 mt-12 pt-6 text-center text-xs text-gray-500">
            &copy; 2024 Geosync. Todos os direitos reservados. | CNPJ: 00.000.000/0001-00
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
        // FUNÇÃO PARA ANIMAÇÃO SCROLL REVEAL
        // **********************************************
        function revealOnScroll() {
            const reveals = document.querySelectorAll('.scroll-reveal');

            reveals.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150; // Quantos pixels de distância do topo da viewport para revelar

                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('revealed');
                }
            });
        }

        window.addEventListener('scroll', revealOnScroll);

        // Revelar elementos já visíveis no carregamento
        document.addEventListener('DOMContentLoaded', revealOnScroll);
    </script>
</body>

</html>