<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosync</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet"> -->
    <style>
        /* Variáveis de Cores */
        :root {
            --color-primary: #202937;
            --color-accent: #ff2178;
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
        .color-selector.active {
            /* Destaque: Borda dupla (primário + accent) */
            box-shadow: 0 0 0 4px var(--color-primary), 0 0 0 6px var(--color-accent);
            transform: scale(1.1);
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
                        <a href="./produtos.php"class="text-accent font-medium transition-colors border-b-2 border-accent pb-1">Produtos</a>
                        <a href="./compras.php" class="hover:text-accent transition-colors">Carrinho</a>
                    </div>

                    <a href="./login.php" class="hidden md:block text-white hover:text-accent transition-colors"
                        title="Login / Perfil">
                        <i class="fas fa-user-circle text-2xl"></i>
                    </a>

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
                <a href="./compras.php"
                    class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Carrinho</a>
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
                    class="absolute top-1/2 left-4 z-20 transform -translate-y-1/2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl carousel-control-btn"
                    onclick="prevSlide()">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button
                    class="absolute top-1/2 right-4 z-20 transform -translate-y-1/2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl carousel-control-btn"
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
                            <span
                                class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">GPS</span>
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
                            <span
                                class="bg-gray-800 text-xs px-3 py-1 rounded-full text-green-400 font-medium">SOS</span>
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
        class="fixed inset-0 bg-black bg-opacity-70 modal-backdrop hidden z-50 flex items-center justify-center p-4">
        <div class="bg-gray-900 rounded-2xl max-w-6xl w-full max-h-[95vh] overflow-y-auto border border-accent/30 shadow-2xl transform transition-all duration-300 scale-95 opacity-0"
            id="modal-content-area">
            <div class="p-8 md:p-12">
                <div class="flex justify-between items-start mb-8 border-b border-gray-700 pb-4">
                    <div>
                        <h3 id="modal-title" class="text-4xl font-extrabold mb-1"></h3>
                        <div id="modal-price" class="text-4xl font-extrabold text-accent"></div>
                    </div>
                    <button onclick="closeModal()"
                        class="text-gray-400 hover:text-white text-3xl w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-800 transition-colors ml-4">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="grid lg:grid-cols-2 gap-12">
                    <div>
                        <div id="modal-main-image-container"
                            class="h-96 rounded-xl mb-4 overflow-hidden shadow-xl border border-gray-700 bg-gray-800 flex items-center justify-center">
                            <img id="modal-main-image" src="" alt="Imagem principal do produto"
                                class="w-full h-full object-cover transition-opacity duration-150 ease-in-out">
                        </div>

                        <div class="mt-6 mb-8">
                            <label class="block text-xl font-semibold mb-3 text-gray-200">Selecione a Cor:</label>
                            <div id="modal-color-selectors" class="flex gap-4 justify-center">
                            </div>
                        </div>
                        <div class="bg-gray-800 rounded-xl p-6 mt-8 shadow-inner">
                            <h4 class="text-lg font-bold mb-4 text-accent border-b border-accent/50 pb-2">Descrição</h4>
                            <p id="modal-description" class="text-gray-300 mb-6"></p>
                            <h4 class="text-lg font-bold mb-4 text-accent border-b border-accent/50 pb-2">Especificações
                                Técnicas</h4>
                            <div id="modal-specs" class="space-y-3 text-sm text-gray-300">
                            </div>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-2xl font-bold mb-4">Opções de Compra</h4>
                        <p class="text-gray-400 mb-6">Selecione as opções desejadas para adicionar ao seu carrinho.</p>

                        <div class="mb-8">
                            <label class="block text-lg font-semibold mb-2">Tamanho:</label>
                            <div class="flex space-x-3">
                                <button
                                    class="px-4 py-2 bg-gray-700 rounded-lg border border-gray-600 transition-colors hover:bg-accent text-sm">Pequeno</button>
                                <button
                                    class="px-4 py-2 bg-accent rounded-lg border border-accent text-white font-bold text-sm">Médio</button>
                                <button
                                    class="px-4 py-2 bg-gray-700 rounded-lg border border-gray-600 transition-colors hover:bg-accent text-sm">Grande</button>
                            </div>
                        </div>

                        <a href="./compras.php" class="block">
                            <button
                                class="w-full bg-accent hover:bg-pink-600 text-white py-4 rounded-xl font-extrabold text-xl shadow-xl transition-all transform hover:scale-[1.01]">
                                <i class="fas fa-shopping-cart mr-3"></i> ADICIONAR AO CARRINHO
                            </button>
                        </a>

                        <a href="garantia.php"
                            class="block text-center mt-4 text-gray-400 hover:text-accent transition-colors">Ver
                            política de devolução e garantia</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-primary text-white pt-16 pb-6">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 text-sm">

                <div class="col-span-2 md:col-span-1">
                    <div class="flex items-center mb-6">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"
                            class="mr-3">
                            <path d="M16 0L31.547 8.27214V23.7279L16 32L0.453018 23.7279V8.27214L16 0Z"
                                fill="#FF2178" />
                            <circle cx="16" cy="12" r="4" fill="#192230" />
                        </svg>
                        <div>
                            <span class="text-xl font-bold">Geosync</span>
                            
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed max-w-xs">
                        Tecnologia inteligente para a segurança das crianças, com inovação e qualidade premium.
                    </p>
                </div>

                <div>
                    <h4 class="text-accent font-bold mb-6 uppercase tracking-wider">Navegação</h4>
                    <ul class="space-y-3">
                        <li><a href="./index.php" class="text-gray-400 hover:text-white transition-colors">Página
                                Inicial</a></li>
                        <li><a href="./produtos.php"
                                class="text-gray-400 hover:text-white transition-colors">Produtos</a></li>
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
                        <!-- <a href="#" class="w-10 h-10 social-icon-hover rounded-full flex items-center justify-center">
                            <i class="fab fa-facebook-f text-white"></i>
                        </a> -->
                        <a href="https://www.instagram.com/geosync.web/?utm_source=ig_web_button_share_sheet"
                            class="w-10 h-10 social-icon-hover rounded-full flex items-center justify-center" target="_blank">
                            <i class="fab fa-instagram text-white"></i>
                        </a>
                        <!-- <a href="#" class="w-10 h-10 social-icon-hover rounded-full flex items-center justify-center">
                            <i class="fab fa-linkedin-in text-white"></i>
                        </a> -->
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

            mobileMenu.classList.toggle('hidden'); // Alterna a visibilidade do menu
            hamburgerIcon.classList.toggle('hidden'); // Esconde o ícone de hambúrguer
            closeIcon.classList.toggle('hidden');     // Mostra o ícone de fechar
        }

        // **********************************************
        // Script do Carrossel 
        // **********************************************
        let currentSlide = 0;
        const items = document.querySelectorAll('.carousel-item-modern');
        const totalItems = items.length;
        const indicatorsContainer = document.getElementById('carousel-indicators-modern');
        let autoPlayInterval;

        function createIndicators() {
            indicatorsContainer.innerHTML = '';
            for (let i = 0; i < totalItems; i++) {
                const indicator = document.createElement('button');
                indicator.classList.add('w-2.5', 'h-2.5', 'rounded-full', 'carousel-indicator-dot');
                indicator.setAttribute('aria-label', `Go to slide ${i + 1}`);
                indicator.setAttribute('onclick', `goToSlide(${i})`);
                indicatorsContainer.appendChild(indicator);
            }
        }

        function updateCarousel() {
            items.forEach((item, index) => {
                if (index === currentSlide) {
                    item.classList.add('active');
                    item.style.zIndex = 2;
                } else {
                    item.classList.remove('active');
                    item.style.zIndex = 1;
                }
            });

            const indicators = indicatorsContainer.querySelectorAll('.carousel-indicator-dot');
            indicators.forEach((indicator, index) => {
                // Adiciona o estilo de cor nos indicadores
                if (index === currentSlide) {
                    indicator.classList.add('bg-accent', 'border', 'border-white');
                } else {
                    indicator.classList.remove('bg-accent', 'border', 'border-white');
                    indicator.classList.add('bg-gray-500/50');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalItems;
            updateCarousel();
            resetAutoPlay();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + totalItems) % totalItems;
            updateCarousel();
            resetAutoPlay();
        }

        function goToSlide(index) {
            currentSlide = index;
            updateCarousel();
            resetAutoPlay();
        }

        function startAutoPlay() {
            autoPlayInterval = setInterval(nextSlide, 5000); // Muda a cada 5 segundos
        }

        function resetAutoPlay() {
            clearInterval(autoPlayInterval);
            startAutoPlay();
        }

        // Inicializar carrossel
        createIndicators();
        updateCarousel();
        startAutoPlay(); // Inicia o auto-play

        // **********************************************
        // Script de Modal e Seleção de Cor 
        // **********************************************

        // Mapeamento de classes de cor para Tailwind (VERMELHO, VERDE, AZUL, ROSA CLARO)
        const colorClasses = {
            'vermelho': 'bg-red-600',
            'verde': 'bg-green-600',
            'azul': 'bg-blue-600',
            'rosa claro': 'bg-pink-300',
            'preto': 'bg-gray-800'
        };

        // Dados dos Produtos com o mapa de cores (colorMap)
        // MANTIVE APENAS OS PRODUTOS VISÍVEIS (Pro, Classic, Kids) no Data
        const productsData = {
            'geosync-pro': {
                title: 'Geosync Safetrake',
                price: 'R$ 899',
                description: 'Modelo premium com inteligência artificial integrada, rastreamento de altíssima precisão e bateria de longa duração. Feita com material balístico ultra-resistente.',
                specs: [
                    'Localização: GPS Tri-Layer + LBS + A-GPS',
                    'Recurso: Inteligência Artificial Preditiva',
                    'Bateria: 7 dias de duração',
                    'Material: Polímero Balístico',
                    'Tamanho: 45 x 30 x 18 cm (Médio/Grande)'
                ],
                // Cor principal/padrão é o preto. Adicionei outras cores como exemplo.
                colorMap: {
                    'vermelho': './imagens/vermelho-1.jpeg',
                    'azul': './imagens/azul-1.jpeg',
                    'verde': './imagens/verde-1.jpeg',
                    'rosa claro': './imagens/rosa1.jpeg' // <-- Adicionado o Vermelho aqui!
                }
            },
            'geosync-classic': {
                title: 'Geosync Classic',
                price: 'R$ 599',
                description: 'Funcionalidades essenciais com excelente custo-benefício, confiável e durável. Ideal para o uso diário.',
                specs: [
                    'Localização: GPS + LBS',
                    'Recurso: Sensor de Abertura (Alerta imediato)',
                    'Bateria: 5 dias de duração',
                    'Material: Nylon Reforçado',
                    'Tamanho: 40 x 28 x 16 cm (Médio)'
                ],
                colorMap: {
                    'vermelho': './imagens/vermelho-2.jpeg',
                    'azul': './imagens/azul-2.jpeg',
                    'verde': './imagens/verde-2.jpeg',
                    'rosa claro': './imagens/rosa-2.jpeg'
                }
            },
            'geosync-kids': {
                title: 'Geosync Kids',
                price: 'R$ 449',
                description: 'Especialmente desenvolvida para crianças pequenas (3-8 anos), com materiais atóxicos e botão de emergência SOS de fácil acesso.',
                specs: [
                    'Localização: GPS Simples',
                    'Recurso: Botão SOS e Alerta de Área Segura',
                    'Bateria: 4 dias de duração',
                    'Material: Poliéster Atóxico',
                    'Tamanho: 30 x 20 x 12 cm (Pequeno)'
                ],
                colorMap: {
                    'vermelho': './imagens/vermelho-3.jpeg',
                    'azul': './imagens/azul-3.jpeg',
                    'verde': './imagens/verde-3.jpeg',
                    'rosa claro': './imagens/rosa-3.jpeg'
                }
            }
            // Os demais produtos removidos do data.
        };

        let currentProduct = null;
        let currentSelectedColor = null;

        function openModal(productId) {
            const product = productsData[productId];
            if (!product) return;

            currentProduct = product;
            const modal = document.getElementById('product-modal');
            const modalContent = document.getElementById('modal-content-area');
            const colorSelectorsContainer = document.getElementById('modal-color-selectors');
            const defaultColor = Object.keys(product.colorMap)[0];

            document.getElementById('modal-title').textContent = product.title;
            document.getElementById('modal-price').textContent = product.price;
            document.getElementById('modal-description').textContent = product.description;

            // Renderizar Especificações
            const specsList = document.getElementById('modal-specs');
            specsList.innerHTML = product.specs.map(spec =>
                `<p><i class="fas fa-check-circle mr-2 text-accent"></i>${spec}</p>`
            ).join('');

            // Renderizar Seletores de Cor
            colorSelectorsContainer.innerHTML = '';
            Object.entries(product.colorMap).forEach(([colorName, imageUrl]) => {
                const colorClass = colorClasses[colorName.toLowerCase()] || 'bg-gray-500'; // Fallback
                const isDefault = colorName === defaultColor;

                const selector = document.createElement('button');
                selector.className = `color-selector w-10 h-10 rounded-full border-2 border-transparent transition-all duration-300 transform hover:scale-110 shadow-lg ${colorClass} ${isDefault ? 'active' : ''}`;
                selector.style.cursor = 'pointer';
                selector.setAttribute('aria-label', `Selecionar cor ${colorName}`);
                selector.setAttribute('onclick', `selectColor('${colorName}', '${imageUrl}')`);
                colorSelectorsContainer.appendChild(selector);
            });

            // Selecionar a cor padrão e carregar a imagem principal
            selectColor(defaultColor, product.colorMap[defaultColor]);

            // Mostrar modal com animação
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('opacity-0', 'scale-95');
                modalContent.classList.add('opacity-100', 'scale-100');
            }, 10);
        }

        function closeModal() {
            const modal = document.getElementById('product-modal');
            const modalContent = document.getElementById('modal-content-area');

            // Esconder modal com animação
            modalContent.classList.remove('opacity-100', 'scale-100');
            modalContent.classList.add('opacity-0', 'scale-95');

            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300); // Tempo para a animação terminar
        }

        function selectColor(colorName, imageUrl) {
            currentSelectedColor = colorName;

            // Atualizar Imagem
            const mainImage = document.getElementById('modal-main-image');
            mainImage.style.opacity = '0';
            setTimeout(() => {
                mainImage.src = imageUrl;
                mainImage.alt = `${currentProduct.title} - Cor ${colorName}`;
                mainImage.style.opacity = '1';
            }, 150);

            // Atualizar Ativo
            document.querySelectorAll('.color-selector').forEach(btn => btn.classList.remove('active'));
            const colorClass = colorClasses[colorName.toLowerCase()] || 'bg-gray-500';
            // Encontra o botão pela classe de cor, não pelo nome, pois o nome é dinâmico
            const activeSelector = Array.from(document.querySelectorAll('.color-selector')).find(btn => btn.classList.contains(colorClass));
            if (activeSelector) {
                activeSelector.classList.add('active');
            }
        }
    </script>
</body>

</html>