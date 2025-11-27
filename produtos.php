<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosync - Produtos</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Variáveis de Cores */
        :root {
            --color-primary: #202937;
            --color-accent: #ff2178;
            /* Definição das novas cores */
            --color-red: #f87171; /* Vermelho Suave (vermelho-1.jpeg) */
            --color-pink: #f472b6; /* Rosa (vermelho-2.jpeg, ajustado para ser rosa) */
            --color-blue: #60a5fa; /* Azul (azul-1.jpeg - cor de exemplo) */
            --color-green: #34d399; /* Verde (verde-1.jpeg - cor de exemplo) */
        }

        /* Classes Customizadas */
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
            background: linear-gradient(135deg, var(--color-primary) 0%, #2a3441 100%);
        }

        /* Efeito de Card Premium */
        .card-hover {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 33, 120, 0.1);
        }

        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 25px 50px rgba(255, 33, 120, 0.25);
            border-color: rgba(255, 33, 120, 0.5);
        }

        /* Fundo do Modal com Blur (Efeito Glassmorphism) */
        .modal-backdrop {
            backdrop-filter: blur(10px);
        }

        /* Padrão de Fundo Sutil */
        .tech-pattern {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(255, 33, 120, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255, 33, 120, 0.05) 0%, transparent 50%);
        }

        /* Estilo para o carrossel */
        .carousel-item-modern {
            transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
            opacity: 0;
            transform: scale(0.95);
            pointer-events: none;
        }

        .carousel-item-modern.active {
            opacity: 1;
            transform: scale(1);
            pointer-events: auto;
        }

        /* Estilo para o seletor de cor ativo no modal */
        .color-selector {
            transition: all 0.2s ease-in-out;
            /* Adicionado o fundo para a cor real */
            background-color: currentColor; 
        }
        .color-selector.active {
            /* Destaque: Borda dupla (primário + accent) */
            box-shadow: 0 0 0 4px var(--color-primary), 0 0 0 6px var(--color-accent);
            transform: scale(1.1);
        }
        
        /* Classes para as cores reais das bolinhas */
        .color-red { background-color: var(--color-red); }
        .color-pink { background-color: var(--color-pink); }
        .color-blue { background-color: var(--color-blue); }
        .color-green { background-color: var(--color-green); }

        #modal-content-area::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        #modal-content-area::-webkit-scrollbar-track {
            background: var(--color-primary);
            border-radius: 10px;
        }

        #modal-content-area::-webkit-scrollbar-thumb {
            background-color: var(--color-accent);
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        #modal-content-area::-webkit-scrollbar-thumb:hover {
            background-color: #ff529c;
        }

        /* Estilização para o Firefox */
        #modal-content-area {
            scrollbar-width: thin;
            scrollbar-color: var(--color-accent) var(--color-primary);
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#202937',
                        accent: '#ff2178'
                    },
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
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
                        <a href="../GeoSync/comoFunc.php" class="hover:text-accent transition-colors">Saiba Mais</a>
                        <a href="./produtos.php"
                            class="text-accent font-medium transition-colors border-b-2 border-accent pb-1">Produtos</a>
                  
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
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Saiba
                    Mais</a>
                <a href="./produtos.php"
                    class="block px-3 py-2 rounded-md text-base font-medium text-accent bg-gray-700 transition-colors">Produtos</a>

                <a href="./login.php"
                    class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-800 hover:bg-gray-700 transition-colors">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login / Criar Conta
                </a>
            </div>
        </div>
    </nav>

    <section class="gradient-bg py-20 tech-pattern border-b border-gray-700">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight tracking-tight">
                    Mochilas <span class="text-accent">Inteligentes</span>
                </h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Tecnologia avançada de rastreamento GPS e sensores inteligentes para máxima segurança infantil
                </p>
                <div class="flex flex-wrap justify-center gap-4 text-sm">
                    <span class="feature-badge px-4 py-2 rounded-full font-medium shadow-md">GPS Ultra-Preciso <i
                            class="fas fa-satellite-dish ml-2 text-accent"></i></span>
                    <span class="feature-badge px-4 py-2 rounded-full font-medium shadow-md">Sensores Inteligentes <i
                            class="fas fa-brain ml-2 text-accent"></i></span>
                    <span class="feature-badge px-4 py-2 rounded-full font-medium shadow-md">App Integrado <i
                            class="fas fa-mobile-alt ml-2 text-accent"></i></span>
                </div>
            </div>
        </div>
    </section>

    <section id="hero-carousel"
        class="relative w-full overflow-hidden bg-gradient-to-br from-primary to-gray-900 py-16">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-gray-700/50"
                style="height: 400px;">
                <div class="carousel-track absolute inset-0 flex transition-transform duration-700 ease-in-out">

                    <div class="carousel-item-modern absolute inset-0 w-full h-full" data-index="0">
                        <img src="./imagens/banner1.png" alt="Geosync Pro com IA" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-black/60 flex items-center justify-start text-white p-6 md:p-10 banner-text-fade-in">
                            <div class="max-w-md">
                                <span
                                    class="bg-accent text-white text-xs md:text-sm font-bold px-3 py-1 rounded-full mb-3 inline-block">LANÇAMENTO
                                    EXCLUSIVO | 30% OFF</span>
                                <h2 class="text-3xl font-extrabold leading-tight mb-3">Geosync Safetrake com IA</h2>
                                <p class="text-gray-200 text-base mb-4">Monitoramento preditivo e alertas antecipados
                                    para segurança inteligente.</p>
                                <a href="#"
                                    class="bg-accent hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-xl transition-colors inline-flex items-center text-sm">
                                    Ver Oferta Especial <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item-modern absolute inset-0 w-full h-full" data-index="1">
                        <img src="./imagens/banner2.png" alt="Kit Segurança Total Combo Família"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-primary/70 flex items-center justify-end text-white p-6 md:p-10 banner-text-fade-in">
                            <div class="max-w-md text-right">
                                <span
                                    class="bg-green-500 text-white text-xs md:text-sm font-bold px-3 py-1 rounded-full mb-3 inline-block">COMBO
                                    FAMÍLIA | MAIOR DESCONTO</span>
                                <h2 class="text-3xl font-extrabold leading-tight mb-3">Kit Segurança Total</h2>
                                <p class="text-gray-200 text-base mb-4">Duas mochilas Geosync Classic com o maior
                                    desconto do ano para a sua família.</p>
                                <a href="#"
                                    class="bg-accent hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-xl transition-colors inline-flex items-center text-sm">
                                    Conhecer Kit <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item-modern absolute inset-0 w-full h-full" data-index="2">
                        <img src="./imagens/banner2.jpeg" alt="Geosync Kids" class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-indigo-900/50 flex items-center justify-center text-white p-6 md:p-10 banner-text-fade-in">
                            <div class="text-center max-w-md">
                                <span
                                    class="bg-yellow-500 text-primary text-xs md:text-sm font-bold px-3 py-1 rounded-full mb-3 inline-block">NOVO
                                    PRODUTO</span>
                                <h2 class="text-3xl font-extrabold leading-tight mb-3">Geosync Kids</h2>
                                <p class="text-gray-200 text-base mb-4">Design divertido e recursos seguros para os
                                    pequenos aventureiros.</p>
                                <a href="#"
                                    class="bg-yellow-500 hover:bg-yellow-400 text-primary font-bold py-2 px-6 rounded-xl transition-colors inline-flex items-center text-sm">
                                    Comprar Agora <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item-modern absolute inset-0 w-full h-full" data-index="3">
                        <img src="./imagens/banner1.jpeg" alt="Tecnologia de Localização Avançada"
                            class="w-full h-full object-cover">
                        <div
                            class="absolute inset-0 bg-primary/70 flex items-center justify-start text-white p-6 md:p-10 banner-text-fade-in">
                            <div class="max-w-md">
                                <span
                                    class="text-accent text-xs md:text-sm font-bold px-3 py-1 rounded-full border border-accent mb-3 inline-block">TECNOLOGIA
                                    AVANÇADA</span>
                                <h2 class="text-3xl font-extrabold leading-tight mb-3">GPS Tri-Layer e Criptografia</h2>
                                <p class="text-gray-200 text-base mb-4">Localização precisa e seus dados 100% seguros
                                    com nossa criptografia de ponta.</p>
                                <a href="#"
                                    class="border border-white hover:border-accent hover:text-accent text-white font-bold py-2 px-6 rounded-xl transition-colors inline-flex items-center text-sm">
                                    Saiba Mais <i class="fas fa-arrow-right ml-2 text-sm"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <button
                    class="absolute top-1/2 left-4 z-20 transform -translate-y-1/2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl carousel-control-btn bg-black/30 hover:bg-black/60 transition-colors"
                    onclick="prevSlide()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button
                    class="absolute top-1/2 right-4 z-20 transform -translate-y-1/2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl carousel-control-btn bg-black/30 hover:bg-black/60 transition-colors"
                    onclick="nextSlide()">
                    <i class="fas fa-chevron-right"></i>
                </button>

                <div id="carousel-indicators-modern"
                    class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="text-5xl font-extrabold mb-4">Nossa Linha de Produtos</h3>
                <p class="text-gray-400 text-xl max-w-2xl mx-auto">Segurança, estilo e tecnologia de ponta desenvolvida
                    para cada fase da vida.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" id="products-grid">

                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer shadow-2xl"
                    onclick="openModal('geosync-pro')">
                    <div class="h-64 relative bg-gray-800">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-accent px-3 py-1 rounded-full text-xs font-bold shadow-lg">NOVO - IA</span>
                        </div>
                        <img src="./imagens/vermelho-1.jpeg" alt="Geosync Pro"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-2xl font-bold">Geosync Safetrake</h4>
                            <span class="text-3xl font-extrabold text-accent">R$ 899</span>
                        </div>
                        <p class="text-gray-400 mb-4 h-12 overflow-hidden">Modelo premium com inteligência artificial
                            integrada e rastreamento de altíssima precisão.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-accent font-medium">IA</span>
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">GPS
                                Ultra</span>
                        </div>
                        <button
                            class="w-full bg-accent hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                            <i class="fas fa-eye mr-2"></i> Ver Detalhes
                        </button>
                    </div>
                </div>

                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer shadow-2xl"
                    onclick="openModal('geosync-classic')">
                    <div class="h-64 relative bg-gray-800">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-blue-500 px-3 py-1 rounded-full text-xs font-bold shadow-lg">POPULAR</span>
                        </div>
                        <img src="./imagens/vermelho-2.jpeg" alt="Geosync Classic"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-2xl font-bold">Geosync Classic</h4>
                            <span class="text-3xl font-extrabold text-accent">R$ 599</span>
                        </div>
                        <p class="text-gray-400 mb-4 h-12 overflow-hidden">Funcionalidades essenciais com excelente
                            custo-benefício, confiável e durável.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">GPS</span>
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">Sensor
                                Abertura</span>
                        </div>
                        <button
                            class="w-full bg-accent hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                            <i class="fas fa-eye mr-2"></i> Ver Detalhes
                        </button>
                    </div>
                </div>

                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer shadow-2xl"
                    onclick="openModal('geosync-kids')">
                    <div class="h-64 relative bg-gray-800">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-green-500 px-3 py-1 rounded-full text-xs font-bold shadow-lg">KIDS</span>
                        </div>
                        <img src="./imagens/vermelho-3.jpeg" alt="Geosync Kids"
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-2xl font-bold">Geosync Kids</h4>
                            <span class="text-3xl font-extrabold text-accent">R$ 449</span>
                        </div>
                        <p class="text-gray-400 mb-4 h-12 overflow-hidden">Especialmente desenvolvida para crianças
                            pequenas (3-8 anos), com materiais atóxicos.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-green-400 font-medium">SOS</span>
                            <span
                                class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">Infantil</span>
                        </div>
                        <button
                            class="w-full bg-accent hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                            <i class="fas fa-eye mr-2"></i> Ver Detalhes
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    
    <div id="product-modal"
        class="fixed inset-0 bg-black bg-opacity-70 modal-backdrop hidden z-50 flex items-center justify-center p-4 transition-opacity duration-300">
        <div class="bg-gray-900 rounded-3xl max-w-4xl w-full max-h-[95vh] overflow-y-auto border border-accent/40 shadow-2xl shadow-accent/20 transform transition-all duration-500 ease-out scale-95 opacity-0"
            id="modal-content-area">
            <div class="p-8 md:p-10">
                <div class="flex justify-between items-center mb-6 border-b border-gray-700/50 pb-4">
                    <div class="flex flex-col">
                        <h3 id="modal-title" class="text-3xl font-extrabold text-white mb-0"></h3>
                        <div class="flex items-center mt-1">
                            <span class="text-xl font-medium text-gray-400 mr-2">Preço:</span>
                            <div id="modal-price" class="text-4xl font-extrabold text-accent"></div>
                        </div>
                    </div>
                    <button onclick="closeModal()"
                        class="text-gray-400 hover:text-white text-3xl w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-800 transition-colors ml-4 focus:outline-none focus:ring-2 focus:ring-accent">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid lg:grid-cols-2 gap-10">
                    
                    <div>
                        <div id="modal-main-image-container"
                            class="h-72 md:h-80 rounded-2xl mb-6 overflow-hidden shadow-xl border border-gray-700 bg-gray-800 flex items-center justify-center">
                            <img id="modal-main-image" src="" alt="Imagem principal do produto"
                                class="w-full h-full object-cover transition-opacity duration-300 ease-in-out">
                        </div>

                        <div class="mb-8 p-4 rounded-xl bg-gray-800 border border-gray-700 shadow-inner">
                            <label class="block text-lg font-semibold mb-3 text-gray-200 text-center">
                                Selecione a Cor
                            </label>
                            <div id="modal-color-selectors" class="flex gap-4 justify-center">
                                <div class="color-selector color-red w-10 h-10 rounded-full cursor-pointer active"
                                    data-color="red" title="Vermelho" onclick="selectColor(this)"></div>
                                <div class="color-selector color-pink w-10 h-10 rounded-full cursor-pointer"
                                    data-color="pink" title="Rosa" onclick="selectColor(this)"></div>
                                <div class="color-selector color-blue w-10 h-10 rounded-full cursor-pointer"
                                    data-color="blue" title="Azul" onclick="selectColor(this)"></div>
                                <div class="color-selector color-green w-10 h-10 rounded-full cursor-pointer"
                                    data-color="green" title="Verde" onclick="selectColor(this)"></div>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <div class="bg-gray-800 rounded-xl p-6 shadow-md border border-gray-700/50">
                                <h4 class="text-xl font-bold mb-4 text-accent border-b border-accent/50 pb-2 uppercase tracking-wider">
                                    VISÃO GERAL
                                </h4>
                                <p id="modal-description" class="text-gray-300 leading-relaxed text-base">
                                    </p>
                            </div>
                            
                            <div class="bg-gray-800 rounded-xl p-6 shadow-md border border-gray-700/50">
                                <h4 class="text-xl font-bold mb-4 text-accent border-b border-accent/50 pb-2 uppercase tracking-wider">
                                    ESPECIFICAÇÕES TÉCNICAS
                                </h4>
                                <ul id="modal-specs" class="space-y-3 text-base text-gray-300">
                                    </ul>
                            </div>
                        </div>

                    </div>

                    <div class="space-y-6 lg:sticky lg:top-10">
                        <div class="bg-gray-800 rounded-2xl p-6 shadow-2xl border-2 border-accent/50">
                            <h4 class="text-2xl font-bold mb-5 border-b border-gray-700 pb-3 text-white uppercase tracking-wider">
                            Detalhes do Pedido
                            </h4>
                            <p class="text-gray-400 mb-6 border-b border-gray-700/50 pb-4 text-sm">
                                Configure a cor desejada e escolha sua forma de finalização de pedido.
                            </p>

                            <a id="whatsapp-link" href="#" target="_blank" onclick="event.preventDefault(); sendWhatsAppMessage()"
                                class="w-full inline-flex items-center justify-center bg-green-500 hover:bg-green-600 text-white py-4 rounded-xl font-extrabold text-xl 
                                shadow-xl shadow-green-500/30 transition-all transform hover:scale-[1.02] focus:outline-none focus:ring-4 focus:ring-green-500/50">
                                <i class="fab fa-whatsapp mr-3"></i> PEDIDO VIA WHATSAPP
                            </a>
                        </div>
                        
                        <div class="text-center">
                            <a href="garantia.php"
                                class="inline-flex items-center text-sm text-gray-500 hover:text-accent transition-colors">
                                <i class="fas fa-shield-alt mr-2"></i> Ver política de devolução e garantia
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        // Dados do Produto
        const productsData = {
            'geosync-pro': {
                id: 'geosync-pro',
                name: 'Geosync Safetrake',
                price: 899.00,
                description: 'Modelo premium com inteligência artificial integrada, monitoramento preditivo e alertas antecipados para uma segurança verdadeiramente inteligente. Possui GPS Tri-Layer para máxima precisão e criptografia de ponta.',
                specs: [
                    'GPS Tri-Layer (Máxima Precisão)',
                    'Inteligência Artificial de Alerta',
                    'Bateria de Longa Duração (7 dias)',
                    'Sensor de Abertura Imediata',
                    'Criptografia de Dados E2E',
                    'Material Premium Impermeável'
                ],
                colors: {
                    red: './imagens/vermelho-1.jpeg',
                    pink: './imagens/rosa1.jpeg',
                    blue: './imagens/azul-1.jpeg',
                    green: './imagens/verde-1.jpeg',
                }
            },
            'geosync-classic': {
                id: 'geosync-classic',
                name: 'Geosync Classic',
                price: 599.00,
                description: 'Nosso modelo mais vendido, oferecendo funcionalidades essenciais com excelente custo-benefício. Possui rastreamento GPS e sensores de abertura confiáveis. O equilíbrio perfeito entre segurança e acessibilidade.',
                specs: [
                    'Rastreamento GPS Padrão',
                    'Sensor de Abertura Simples',
                    'Bateria de Média Duração (4 dias)',
                    'Material Resistente (IPX4)'
                ],
                colors: {
                    red: './imagens/vermelho-2.jpeg',
                    pink: './imagens/rosa-2.jpeg',
                    blue: './imagens/azul-2.jpeg',
                    green: './imagens/verde-2.jpeg',
                }
            },
            'geosync-kids': {
                id: 'geosync-kids',
                name: 'Geosync Kids',
                price: 449.00,
                description: 'Especialmente desenvolvida para crianças pequenas (3-8 anos), com design divertido e recursos seguros. Possui botão SOS de fácil acesso e materiais atóxicos. Leveza e segurança para os pequenos aventureiros.',
                specs: [
                    'Botão de Emergência SOS',
                    'Localização GPS Simplificada',
                    'Material Atóxico e Leve',
                    'Design Ergonômico Infantil'
                ],
                colors: {
                    red: './imagens/vermelho-3.jpeg',
                    pink: './imagens/rosa-3.jpeg',
                    blue: './imagens/azul-3.jpeg',
                    green: './imagens/verde-3.jpeg',
                }
            }
        };

        let selectedProduct = null;
        let selectedColor = 'red'; // Cor inicial

        // ------------------------------------------
        // Função para Abrir o Modal de Detalhes
        // ------------------------------------------
        function openModal(productId) {
            selectedProduct = productsData[productId];
            selectedColor = 'red'; // Reseta para a cor padrão ao abrir
            
            // Popula os dados
            document.getElementById('modal-title').textContent = selectedProduct.name;
            document.getElementById('modal-price').textContent = `R$ ${selectedProduct.price.toFixed(2).replace('.', ',')}`;
            document.getElementById('modal-description').textContent = selectedProduct.description;

            // Preenche as especificações
            const specsList = document.getElementById('modal-specs');
            specsList.innerHTML = '';
            selectedProduct.specs.forEach(spec => {
                const li = document.createElement('li');
                li.innerHTML = `<i class="fas fa-check-circle text-accent mr-2"></i>${spec}`;
                specsList.appendChild(li);
            });

            // Atualiza a imagem principal e seletores de cor (necessário para a próxima função)
            updateModalView(selectedColor);

            // Exibe o modal
            const modal = document.getElementById('product-modal');
            const modalContent = document.getElementById('modal-content-area');

            modal.classList.remove('hidden');
            setTimeout(() => {
                modal.classList.add('opacity-100');
                modalContent.classList.remove('scale-95', 'opacity-0');
            }, 10);
        }

        // ------------------------------------------
        // Função para Fechar o Modal
        // ------------------------------------------
        function closeModal() {
            const modal = document.getElementById('product-modal');
            const modalContent = document.getElementById('modal-content-area');
            
            modalContent.classList.add('scale-95', 'opacity-0');
            
            setTimeout(() => {
                modal.classList.add('hidden');
                modal.classList.remove('opacity-100');
            }, 300); // Deve corresponder à transição CSS
        }


        // ------------------------------------------
        // Função para Selecionar Cor (AJUSTADA PARA USAR AS NOVAS CLASSES DE COR)
        // ------------------------------------------
        function selectColor(element) {
            const newColor = element.getAttribute('data-color');
            if (newColor === selectedColor) return;

            // Remove a classe 'active' de todos os seletores
            document.querySelectorAll('#modal-color-selectors .color-selector').forEach(sel => {
                sel.classList.remove('active');
            });

            // Adiciona a classe 'active' ao seletor clicado
            element.classList.add('active');
            
            selectedColor = newColor;
            updateModalView(selectedColor);
        }

        // ------------------------------------------
        // Função para Atualizar a View do Modal (Imagem)
        // ------------------------------------------
        function updateModalView(color) {
            const mainImage = document.getElementById('modal-main-image');
            
            // Simula a mudança de imagem
            if (selectedProduct.colors[color]) {
                mainImage.src = selectedProduct.colors[color];
            }

            // Garante que o seletor visual correto esteja ativo
            document.querySelectorAll('#modal-color-selectors .color-selector').forEach(sel => {
                sel.classList.remove('active');
                if (sel.getAttribute('data-color') === color) {
                    sel.classList.add('active');
                }
            });
        }

        // ------------------------------------------
        // Função para Enviar Mensagem do WhatsApp
        // ------------------------------------------
        function sendWhatsAppMessage() {
            if (!selectedProduct) return;

            const product = selectedProduct.name;
            const colorName = selectedColor.charAt(0).toUpperCase() + selectedColor.slice(1);
            const price = selectedProduct.price.toFixed(2).replace('.', ',');
            const message = `Olá! Tenho interesse em adquirir o produto *${product}* na cor *${colorName}* (R$ ${price}). Gostaria de finalizar a compra.`;
            
            // Número de telefone de exemplo (substitua pelo seu)
            const phoneNumber = '5512988647020'; 

            const whatsappUrl = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            
            window.open(whatsappUrl, '_blank');
        }

        // ------------------------------------------
        // Funções de Navegação e Carrossel (Inalteradas)
        // ------------------------------------------
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            if (mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.remove('hidden');
                hamburgerIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            } else {
                mobileMenu.classList.add('hidden');
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            }
        }

        // Carrossel
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-item-modern');
        const totalSlides = slides.length;
        const indicatorsContainer = document.getElementById('carousel-indicators-modern');

        function updateCarousel() {
            slides.forEach((slide, index) => {
                slide.classList.remove('active');
                if (index === currentSlide) {
                    slide.classList.add('active');
                }
            });
            updateIndicators();
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        function goToSlide(index) {
            currentSlide = index;
            updateCarousel();
        }

        function createIndicators() {
            for (let i = 0; i < totalSlides; i++) {
                const indicator = document.createElement('button');
                indicator.classList.add('w-3', 'h-3', 'rounded-full', 'bg-white/50', 'hover:bg-accent', 'transition-colors');
                indicator.setAttribute('data-slide', i);
                indicator.onclick = () => goToSlide(i);
                indicatorsContainer.appendChild(indicator);
            }
        }

        function updateIndicators() {
            const indicators = indicatorsContainer.querySelectorAll('button');
            indicators.forEach((indicator, index) => {
                indicator.classList.remove('bg-accent');
                indicator.classList.add('bg-white/50');
                if (index === currentSlide) {
                    indicator.classList.add('bg-accent');
                    indicator.classList.remove('bg-white/50');
                }
            });
        }

        document.addEventListener('DOMContentLoaded', () => {
            if (totalSlides > 0) {
                createIndicators();
                updateCarousel(); 
                setInterval(nextSlide, 7000); // Auto-play a cada 7 segundos
            }
        });
    </script>
</body>

</html>