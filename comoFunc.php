<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Geosync - Navbar</title>
   <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <script>
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

  <!-- Navbar -->
  <nav class="bg-primary border-b border-gray-700 sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        
        <!-- Logo -->
        <div class="flex items-center space-x-3">
          <img src="./imagens/GeoSync-bg.png" alt="Logo Geosync" class="w-10 h-10 object-contain">
          <span class="text-xl font-bold">Geosync</span>
        </div>

        <!-- Links desktop -->
        <div class="hidden md:flex space-x-8">
          <a href="./index.php" class="hover:text-accent transition-colors">Início</a>
          <a href="../GeoSync/comoFunc.php" class="text-accent font-medium">Saiba Mais</a>
          <a href="./produtos.php" class="hover:text-accent transition-colors">Produtos</a>
          <a href="./compras.php" class="hover:text-accent transition-colors">Carrinho</a>
        </div>

        <!-- Menu mobile -->
        <button class="md:hidden hover:text-accent transition-colors">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </nav>
 <style>
        .bg-primary { background-color: #202937; }
        .bg-accent { background-color: #ff2178; }
        .text-accent { color: #ff2178; }
        .border-accent { border-color: #ff2178; }
        .hover-accent:hover { background-color: #ff2178; }
        .gradient-bg { background: linear-gradient(135deg, #202937 0%, #2a3441 100%); }
        .card-hover { transition: all 0.3s ease; }
        .card-hover:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(255, 33, 120, 0.2); }
        .tech-animation { animation: pulse 2s infinite; }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .feature-icon { 
            background: linear-gradient(135deg, #ff2178 0%, #ff6b9d 100%);
            animation: glow 3s ease-in-out infinite alternate;
        }
        @keyframes glow {
            from { box-shadow: 0 0 20px rgba(255, 33, 120, 0.3); }
            to { box-shadow: 0 0 30px rgba(255, 33, 120, 0.6); }
        }
        .scroll-reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-primary text-white font-sans">
    <!-- Header -->
      <!-- Hero Section -->
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
            
            <!-- Mochila Central Animada -->
            <div class="scroll-reveal">
                <div class="relative mx-auto w-64 h-64 mb-12">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-500 to-pink-500 rounded-3xl flex items-center justify-center tech-animation">
                        <svg width="150" height="150" viewBox="0 0 120 120" class="text-white">
                            <path d="M30 20 L90 20 L90 100 L60 110 L30 100 Z" fill="currentColor" opacity="0.9"/>
                            <circle cx="60" cy="40" r="10" fill="#ff2178" class="tech-animation"/>
                            <rect x="45" y="55" width="30" height="5" rx="2.5" fill="#ff2178"/>
                            <rect x="45" y="65" width="20" height="5" rx="2.5" fill="#ff2178"/>
                            <!-- Ondas de sinal -->
                            <circle cx="60" cy="40" r="15" fill="none" stroke="#ff2178" stroke-width="2" opacity="0.6" class="tech-animation"/>
                            <circle cx="60" cy="40" r="20" fill="none" stroke="#ff2178" stroke-width="1" opacity="0.4" class="tech-animation"/>
                        </svg>
                    </div>
                    <!-- Indicadores de conectividade -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-wifi text-white text-sm"></i>
                    </div>
                    <div class="absolute -bottom-4 -left-4 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-satellite text-white text-sm"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Como Funciona - Tecnologia -->
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="scroll-reveal text-center mb-16">
                <h3 class="text-4xl font-bold mb-6">Tecnologia <span class="text-accent">Simples e Eficaz</span></h3>
                <p class="text-xl text-gray-300 max-w-2xl mx-auto">
                    Combinamos componentes de alta tecnologia em uma solução intuitiva e confiável
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Arduino Integrado -->
                <div class="scroll-reveal bg-gray-700 rounded-2xl p-8 text-center card-hover">
                    <div class="feature-icon w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-microchip text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Arduino Integrado</h4>
                    <p class="text-gray-300 mb-4">Microcontrolador de alta performance embarcado na mochila</p>
                    <div class="bg-gray-600 rounded-lg p-4">
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

                <!-- GPS -->
                <div class="scroll-reveal bg-gray-700 rounded-2xl p-8 text-center card-hover">
                    <div class="feature-icon w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-satellite-dish text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Conectividade GPS</h4>
                    <p class="text-gray-300 mb-4">Localização precisa via satélite com cobertura nacional</p>
                    <div class="bg-gray-600 rounded-lg p-4">
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

                <!-- App Mobile -->
                <div class="scroll-reveal bg-gray-700 rounded-2xl p-8 text-center card-hover">
                    <div class="feature-icon w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-mobile-alt text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">App Mobile</h4>
                    <p class="text-gray-300 mb-4">Interface intuitiva para monitoramento em tempo real</p>
                    <div class="bg-gray-600 rounded-lg p-4">
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

                <!-- Plataforma Web -->
                <div class="scroll-reveal bg-gray-700 rounded-2xl p-8 text-center card-hover">
                    <div class="feature-icon w-20 h-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Plataforma Web</h4>
                    <p class="text-gray-300 mb-4">Acesso completo via navegador com dashboard avançado</p>
                    <div class="bg-gray-600 rounded-lg p-4">
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

    <!-- Fluxo de Funcionamento -->
    <section class="py-20">
        <div class="container mx-auto px-6">
            <div class="scroll-reveal text-center mb-16">
                <h3 class="text-4xl font-bold mb-6">Como Tudo se <span class="text-accent">Conecta</span></h3>
                <p class="text-xl text-gray-300">Veja o fluxo completo de funcionamento da tecnologia Geosync</p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <!-- Linha conectora -->
                    <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-accent opacity-30"></div>
                    
                    <!-- Etapa 1 -->
                    <div class="scroll-reveal flex items-center mb-12">
                        <div class="w-1/2 pr-8 text-right">
                            <h4 class="text-2xl font-bold mb-3">1. Detecção de Movimento</h4>
                            <p class="text-gray-300">Sensores integrados detectam quando a mochila está em movimento ou foi aberta</p>
                        </div>
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center relative z-10">
                            <i class="fas fa-running text-white text-xl"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-gray-800 rounded-lg p-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                    <span class="text-sm">Sensor ativo</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Etapa 2 -->
                    <div class="scroll-reveal flex items-center mb-12">
                        <div class="w-1/2 pr-8">
                            <div class="bg-gray-800 rounded-lg p-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                                    <span class="text-sm">GPS ativo</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center relative z-10">
                            <i class="fas fa-satellite text-white text-xl"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <h4 class="text-2xl font-bold mb-3">2. Captura de Localização</h4>
                            <p class="text-gray-300">Sistema GPS captura coordenadas precisas e envia para nossos servidores</p>
                        </div>
                    </div>

                    <!-- Etapa 3 -->
                    <div class="scroll-reveal flex items-center mb-12">
                        <div class="w-1/2 pr-8 text-right">
                            <h4 class="text-2xl font-bold mb-3">3. Processamento Inteligente</h4>
                            <p class="text-gray-300">IA analisa padrões e identifica situações que requerem atenção dos pais</p>
                        </div>
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center relative z-10">
                            <i class="fas fa-brain text-white text-xl"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <div class="bg-gray-800 rounded-lg p-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-purple-500 rounded-full"></div>
                                    <span class="text-sm">IA processando</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Etapa 4 -->
                    <div class="scroll-reveal flex items-center">
                        <div class="w-1/2 pr-8">
                            <div class="bg-gray-800 rounded-lg p-4">
                                <div class="flex items-center space-x-2">
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                    <span class="text-sm">Notificação enviada</span>
                                </div>
                            </div>
                        </div>
                        <div class="w-16 h-16 bg-accent rounded-full flex items-center justify-center relative z-10">
                            <i class="fas fa-bell text-white text-xl"></i>
                        </div>
                        <div class="w-1/2 pl-8">
                            <h4 class="text-2xl font-bold mb-3">4. Notificação Instantânea</h4>
                            <p class="text-gray-300">Pais recebem alertas em tempo real no app e podem acompanhar pelo dashboard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefícios -->
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="scroll-reveal text-center mb-16">
                <h3 class="text-4xl font-bold mb-6">Impacto Positivo para <span class="text-accent">Toda Família</span></h3>
                <p class="text-xl text-gray-300">Benefícios que transformam o dia a dia e trazem tranquilidade</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Segurança Total -->
               <div class="scroll-reveal bg-gradient-to-br from-[#ff2178] to-[#ff6b9d] rounded-2xl p-8 text-center card-hover">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-shield-alt text-white text-3xl"></i>
                    </div>
                    <h4 class="text-2xl font-bold mb-4">Segurança Total</h4>
                    <p class="text-lg mb-6">Monitoramento 24/7 com tecnologia de ponta para proteger o que mais importa.</p>
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

                <!-- Tranquilidade -->
               <div class="scroll-reveal bg-gradient-to-br from-[#ff2178] to-[#ff6b9d] rounded-2xl p-8 text-center card-hover">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
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

                <!-- Praticidade -->
              <div class="scroll-reveal bg-gradient-to-br from-[#ff2178] to-[#ff6b9d] rounded-2xl p-8 text-center card-hover">
                    <div class="w-20 h-20 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-6">
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

    <!-- CTA Section -->
    <section class="py-20 gradient-bg">
        <div class="container mx-auto px-6 text-center">
            <div class="scroll-reveal">
                <h3 class="text-4xl font-bold mb-6">Pronto para Experimentar?</h3>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
                    Junte-se a milhares de famílias que já confiam na tecnologia Geosync para proteger seus filhos
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-accent hover:bg-pink-600 text-white px-8 py-4 rounded-xl font-bold text-lg transition-colors">
                        <i class="fas fa-shopping-cart mr-2"></i>
                        Ver Produtos
                    </button>
                    <button class="border-2 border-accent text-accent hover:bg-accent hover:text-white px-8 py-4 rounded-xl font-bold text-lg transition-colors">
                        <i class="fas fa-play mr-2"></i>
                        Ver Demo
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-gray-900 py-12">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-8 h-8 bg-accent rounded-lg flex items-center justify-center">
                            <i class="fas fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="text-xl font-bold">Geosync</h4>
                    </div>
                    <p class="text-gray-400">Tecnologia inteligente para a segurança das crianças.</p>
                </div>
                
                <div>
                    <h5 class="font-bold mb-4">Links Rápidos</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-accent transition-colors">Início</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">Produtos</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">Como Funciona</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">Suporte</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-bold mb-4">Contato</h5>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-phone mr-2 text-accent"></i> (11) 9999-9999</li>
                        <li><i class="fas fa-envelope mr-2 text-accent"></i> contato@geosync.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2 text-accent"></i> São Paulo, SP</li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-bold mb-4">Redes Sociais</h5>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-accent rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-accent rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-accent rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-700 hover:bg-accent rounded-lg flex items-center justify-center transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Geosync. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Animação de scroll reveal
        function revealOnScroll() {
            const reveals = document.querySelectorAll('.scroll-reveal');
            
            reveals.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;
                
                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add('revealed');
                }
            });
        }

        window.addEventListener('scroll', revealOnScroll);
        
        // Revelar elementos já visíveis no carregamento
        document.addEventListener('DOMContentLoaded', revealOnScroll);

        // Animação suave para links internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97d956f9c56716b3',t:'MTc1NzYxNjUxMS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
</body>
</html>
