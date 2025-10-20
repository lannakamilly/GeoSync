<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosync - Mochilas Inteligentes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Variáveis de Cores */
        :root {
            --color-primary: #202937;
            --color-accent: #ff2178;
        }

        /* Classes Customizadas */
        .bg-primary { background-color: var(--color-primary); }
        .bg-accent { background-color: var(--color-accent); }
        .text-accent { color: var(--color-accent); }
        .border-accent { border-color: var(--color-accent); }
        .hover-accent:hover { background-color: var(--color-accent); }
        .gradient-bg { background: linear-gradient(135deg, var(--color-primary) 0%, #2a3441 100%); }
        
        /* Efeito de Card Premium */
        .card-hover { 
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); 
            border: 1px solid rgba(255, 33, 120, 0.1);
        }
        .card-hover:hover { 
            transform: translateY(-12px); 
            box-shadow: 0 25px 50px rgba(255, 33, 120, 0.25); /* Sombra mais intensa */
            border-color: rgba(255, 33, 120, 0.5);
        }
        
        /* Fundo do Modal com Blur (Efeito Glassmorphism) */
        .modal-backdrop { backdrop-filter: blur(10px); }
        
        /* Estilo da Promo Card */
        .promo-card {
            background: linear-gradient(135deg, var(--color-accent) 0%, #e91e63 50%, #c2185b 100%);
            position: relative;
            overflow: hidden;
        }
        .promo-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.1) 50%, transparent 70%);
            transform: translateX(-100%);
            transition: transform 0.6s;
        }
        .promo-card:hover::before {
            transform: translateX(100%);
        }
        
        /* Badge de Recurso */
        .feature-badge {
            background: rgba(255, 33, 120, 0.1);
            border: 1px solid rgba(255, 33, 120, 0.2);
        }
        
        /* Padrão de Fundo Sutil */
        .tech-pattern {
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(255, 33, 120, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255, 33, 120, 0.05) 0%, transparent 50%);
        }

        /* Estilo para o botão de filtro ativo */
        .filter-btn.active {
            background-color: var(--color-accent);
            color: white;
            box-shadow: 0 10px 20px rgba(255, 33, 120, 0.3);
            transform: translateY(-2px);
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
                        sans: ['Poppins', 'sans-serif'] // Aplica a fonte Poppins
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
                <div class="hidden md:flex space-x-8">
                    <a href="./index.php" class="hover:text-accent transition-colors">Início</a>
                    <a href="../GeoSync/comoFunc.php" class="hover:text-accent transition-colors">Saiba Mais</a>
                    <a href="./produtos.php" class="text-accent font-medium">Produtos</a>
                    <a href="./compras.php" class="hover:text-accent transition-colors">Carrinho</a>
                </div>
                <button class="md:hidden hover:text-accent transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
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
                    <span class="feature-badge px-4 py-2 rounded-full font-medium shadow-md">GPS Ultra-Preciso <i class="fas fa-satellite-dish ml-2 text-accent"></i></span>
                    <span class="feature-badge px-4 py-2 rounded-full font-medium shadow-md">Sensores Inteligentes <i class="fas fa-brain ml-2 text-accent"></i></span>
                    <span class="feature-badge px-4 py-2 rounded-full font-medium shadow-md">App Integrado <i class="fas fa-mobile-alt ml-2 text-accent"></i></span>
                </div>
            </div>
        </div>
    </section>

   <style>
    /* Estilos customizados para o carrossel aprimorado */
    .carousel-item-modern {
        transition: opacity 0.8s ease-in-out, transform 0.8s ease-in-out;
        opacity: 0;
        transform: scale(0.95); /* Começa um pouco menor para um efeito de zoom */
        pointer-events: none; /* Impede interação com itens não ativos */
    }
    .carousel-item-modern.active {
        opacity: 1;
        transform: scale(1); /* Zoom para o tamanho normal quando ativo */
        pointer-events: auto; /* Permite interação com o item ativo */
    }
    
    .carousel-control-btn {
        background-color: rgba(255, 33, 120, 0.2); /* Cor accent com transparência */
        backdrop-filter: blur(8px); /* Efeito de vidro fosco */
        border: 1px solid rgba(255, 33, 120, 0.4);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); /* Transição suave */
    }
    .carousel-control-btn:hover {
        background-color: #ff2178; /* Cor accent sólida no hover */
        border-color: #ff2178;
        transform: scale(1.05);
        box-shadow: 0 0 15px rgba(255, 33, 120, 0.6);
    }

    .carousel-indicator-dot {
        background-color: rgba(255, 255, 255, 0.4); /* Pontos mais sutis */
        transition: all 0.3s ease;
    }
    .carousel-indicator-dot.active {
        background-color: #ff2178; /* Ponto ativo com cor accent */
        transform: scale(1.3); /* Ponto ativo um pouco maior */
    }

    /* Animação para o texto do banner (opcional, adicione se quiser) */
    .banner-text-fade-in {
        animation: fadeInText 1s ease-out forwards;
    }
    @keyframes fadeInText {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<section id="hero-carousel" class="relative w-full overflow-hidden bg-gradient-to-br from-primary to-gray-900 py-16">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative rounded-3xl overflow-hidden shadow-2xl border border-gray-700/50" style="height: 400px;"> 
            <div class="carousel-track absolute inset-0 flex transition-transform duration-700 ease-in-out">
                
                <div class="carousel-item-modern absolute inset-0 w-full h-full" data-index="0">
                    <img src="./imagens/banner-pro-ia.png" alt="Geosync Pro com IA" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-black/60 flex items-center justify-start text-white p-6 md:p-10 banner-text-fade-in">
                        <div class="max-w-md">
                            <span class="bg-accent text-white text-xs md:text-sm font-bold px-3 py-1 rounded-full mb-3 inline-block">LANÇAMENTO EXCLUSIVO | 30% OFF</span>
                            <h2 class="text-3xl font-extrabold leading-tight mb-3">Geosync Pro com IA</h2>
                            <p class="text-gray-200 text-base mb-4">Monitoramento preditivo e alertas antecipados para segurança inteligente.</p>
                            <a href="#" class="bg-accent hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-xl transition-colors inline-flex items-center text-sm">
                                Ver Oferta Especial <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item-modern absolute inset-0 w-full h-full" data-index="1">
                    <img src="./imagens/banner-combo-familia.png" alt="Kit Segurança Total Combo Família" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-primary/70 flex items-center justify-end text-white p-6 md:p-10 banner-text-fade-in">
                        <div class="max-w-md text-right">
                            <span class="bg-green-500 text-white text-xs md:text-sm font-bold px-3 py-1 rounded-full mb-3 inline-block">COMBO FAMÍLIA | MAIOR DESCONTO</span>
                            <h2 class="text-3xl font-extrabold leading-tight mb-3">Kit Segurança Total</h2>
                            <p class="text-gray-200 text-base mb-4">Duas mochilas Geosync Classic com o maior desconto do ano para a sua família.</p>
                            <a href="#" class="bg-accent hover:bg-pink-600 text-white font-bold py-2 px-6 rounded-xl transition-colors inline-flex items-center text-sm">
                                Conhecer Kit <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item-modern absolute inset-0 w-full h-full" data-index="2">
                    <img src="./imagens/banner-kids.png" alt="Geosync Kids" class="w-full h-full object-cover">
                     <div class="absolute inset-0 bg-indigo-900/50 flex items-center justify-center text-white p-6 md:p-10 banner-text-fade-in">
                        <div class="text-center max-w-md">
                            <span class="bg-yellow-500 text-primary text-xs md:text-sm font-bold px-3 py-1 rounded-full mb-3 inline-block">NOVO PRODUTO</span>
                            <h2 class="text-3xl font-extrabold leading-tight mb-3">Geosync Kids</h2>
                            <p class="text-gray-200 text-base mb-4">Design divertido e recursos seguros para os pequenos aventureiros.</p>
                            <a href="#" class="bg-yellow-500 hover:bg-yellow-400 text-primary font-bold py-2 px-6 rounded-xl transition-colors inline-flex items-center text-sm">
                                Comprar Agora <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item-modern absolute inset-0 w-full h-full" data-index="3">
                    <img src="./imagens/banner-tecnologia.png" alt="Tecnologia de Localização Avançada" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-primary/70 flex items-center justify-start text-white p-6 md:p-10 banner-text-fade-in">
                        <div class="max-w-md">
                            <span class="text-accent text-xs md:text-sm font-bold px-3 py-1 rounded-full border border-accent mb-3 inline-block">TECNOLOGIA AVANÇADA</span>
                            <h2 class="text-3xl font-extrabold leading-tight mb-3">GPS Tri-Layer e Criptografia</h2>
                            <p class="text-gray-200 text-base mb-4">Localização precisa e seus dados 100% seguros com nossa criptografia de ponta.</p>
                            <a href="#" class="border border-white hover:border-accent hover:text-accent text-white font-bold py-2 px-6 rounded-xl transition-colors inline-flex items-center text-sm">
                                Saiba Mais <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <button class="absolute top-1/2 left-4 z-20 transform -translate-y-1/2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl carousel-control-btn" onclick="prevSlide()">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="absolute top-1/2 right-4 z-20 transform -translate-y-1/2 w-10 h-10 rounded-full flex items-center justify-center text-white text-xl carousel-control-btn" onclick="nextSlide()">
                <i class="fas fa-chevron-right"></i>
            </button>

            <div id="carousel-indicators-modern" class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-20">
            </div>

        </div>
    </div>
</section>

<script>
    let currentSlide = 0;
    const items = document.querySelectorAll('.carousel-item-modern');
    const totalItems = items.length;
    const indicatorsContainer = document.getElementById('carousel-indicators-modern');
    let autoPlayInterval;

    function createIndicators() {
        indicatorsContainer.innerHTML = ''; // Limpa indicadores existentes
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
                item.style.zIndex = 2; // Garante que o ativo está por cima
            } else {
                item.classList.remove('active');
                item.style.zIndex = 1; // Itens inativos ficam por baixo
            }
        });

        const indicators = indicatorsContainer.querySelectorAll('.carousel-indicator-dot');
        indicators.forEach((indicator, index) => {
            if (index === currentSlide) {
                indicator.classList.add('active');
            } else {
                indicator.classList.remove('active');
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
</script>

    <section class="py-12 bg-gray-800 border-b border-gray-700">
        <div class="container mx-auto px-6">
            <h3 class="text-center text-2xl font-bold mb-6 text-gray-300">Explorar por Categoria</h3>
            <div class="flex flex-wrap gap-4 justify-center">
                <button onclick="filterProducts('all', this)" class="filter-btn active bg-accent text-white px-8 py-3 rounded-full font-semibold transition-all shadow-lg hover:shadow-xl">
                    <i class="fas fa-th-large mr-2"></i> Todos os Produtos
                </button>
                <button onclick="filterProducts('cores', this)" class="filter-btn bg-gray-700 hover:bg-accent hover:shadow-lg text-white px-8 py-3 rounded-full font-semibold transition-all">
                    <i class="fas fa-palette mr-2"></i> Por Cor
                </button>
                <button onclick="filterProducts('tamanhos', this)" class="filter-btn bg-gray-700 hover:bg-accent hover:shadow-lg text-white px-8 py-3 rounded-full font-semibold transition-all">
                    <i class="fas fa-ruler-combined mr-2"></i> Tamanhos
                </button>
                <button onclick="filterProducts('especiais', this)" class="filter-btn bg-gray-700 hover:bg-accent hover:shadow-lg text-white px-8 py-3 rounded-full font-semibold transition-all">
                    <i class="fas fa-star mr-2"></i> Edições Especiais
                </button>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="text-5xl font-extrabold mb-4">Nossa Linha de Produtos</h3>
                <p class="text-gray-400 text-xl max-w-2xl mx-auto">Segurança, estilo e tecnologia de ponta desenvolvida para cada fase da vida.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10" id="products-grid">

                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer shadow-2xl" 
     data-category="cores especiais" onclick="openModal('geosync-pro')">
                    <div class="h-64 relative bg-gray-800">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-accent px-3 py-1 rounded-full text-xs font-bold shadow-lg">NOVO - IA</span>
                        </div>
                        <img src="./imagens/product-pro.png" alt="Geosync Pro" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-2xl font-bold">Geosync Pro</h4>
                            <span class="text-3xl font-extrabold text-accent">R$ 899</span>
                        </div>
                        <p class="text-gray-400 mb-4 h-12 overflow-hidden">Modelo premium com inteligência artificial integrada e rastreamento de altíssima precisão.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-accent font-medium">IA</span>
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">GPS Ultra</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                            <i class="fas fa-eye mr-2"></i> Ver Detalhes
                        </button>
                    </div>
                </div>


                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer shadow-2xl" 
                        data-category="cores tamanhos" onclick="openModal('geosync-classic')">
                    <div class="h-64 relative bg-gray-800">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-blue-500 px-3 py-1 rounded-full text-xs font-bold shadow-lg">POPULAR</span>
                        </div>
                        <img src="./imagens/product-classic.png" alt="Geosync Classic" 
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-2xl font-bold">Geosync Classic</h4>
                            <span class="text-3xl font-extrabold text-accent">R$ 599</span>
                        </div>
                        <p class="text-gray-400 mb-4 h-12 overflow-hidden">Funcionalidades essenciais com excelente custo-benefício, confiável e durável.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">GPS</span>
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">Sensor Abertura</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                            <i class="fas fa-eye mr-2"></i> Ver Detalhes
                        </button>
                    </div>
                </div>


                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer shadow-2xl" 
     data-category="especiais cores" onclick="openModal('geosync-kids')">
                    <div class="h-64 relative bg-gray-800">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-green-500 px-3 py-1 rounded-full text-xs font-bold shadow-lg">KIDS</span>
                        </div>
                        <img src="./imagens/product-kids.png" alt="Geosync Kids" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-2xl font-bold">Geosync Kids</h4>
                            <span class="text-3xl font-extrabold text-accent">R$ 449</span>
                        </div>
                        <p class="text-gray-400 mb-4 h-12 overflow-hidden">Especialmente desenvolvida para crianças pequenas (3-8 anos), com materiais atóxicos.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-green-400 font-medium">SOS</span>
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">Infantil</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                            <i class="fas fa-eye mr-2"></i> Ver Detalhes
                        </button>
                    </div>
                </div>

                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer shadow-2xl" 
     data-category="especiais tamanhos" onclick="openModal('geosync-sport')">
                    <div class="h-64 relative bg-gray-800">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-orange-500 px-3 py-1 rounded-full text-xs font-bold shadow-lg">SPORT</span>
                        </div>
                        <img src="./imagens/product-sport.png" alt="Geosync Sport" 
                             class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-2xl font-bold">Geosync Sport</h4>
                            <span class="text-3xl font-extrabold text-accent">R$ 749</span>
                        </div>
                        <p class="text-gray-400 mb-4 h-12 overflow-hidden">Ultra-resistente, IP67, ideal para atividades esportivas e aventuras ao ar livre.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-orange-400 font-medium">IP67</span>
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">Anti-Impacto</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                            <i class="fas fa-eye mr-2"></i> Ver Detalhes
                        </button>
                    </div>
                </div>

                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer shadow-2xl" 
                        data-category="cores tamanhos" onclick="openModal('geosync-teen')">
                    <div class="h-64 relative bg-gray-800">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-purple-500 px-3 py-1 rounded-full text-xs font-bold shadow-lg">TEEN</span>
                        </div>
                        <img src="./imagens/product-teen.png" alt="Geosync Teen" 
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-2xl font-bold">Geosync Teen</h4>
                            <span class="text-3xl font-extrabold text-accent">R$ 679</span>
                        </div>
                        <p class="text-gray-400 mb-4 h-12 overflow-hidden">Design moderno e discreto, com porta USB e espaço para laptop de 15.6 polegadas.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-purple-400 font-medium">USB</span>
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">Laptop 15.6"</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                            <i class="fas fa-eye mr-2"></i> Ver Detalhes
                        </button>
                    </div>
                </div>

                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer shadow-2xl" 
                    data-category="especiais cores" onclick="openModal('geosync-limited')">
                    <div class="h-64 relative bg-gray-800">
                        <div class="absolute top-4 right-4 z-10">
                            <span class="bg-yellow-500 px-3 py-1 rounded-full text-xs font-bold shadow-lg">LIMITED</span>
                        </div>
                        <img src="./imagens/product-limited.png" alt="Geosync Limited" 
                            class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-2xl font-bold">Geosync Limited</h4>
                            <span class="text-3xl font-extrabold text-accent">R$ 1.299</span>
                        </div>
                        <p class="text-gray-400 mb-4 h-12 overflow-hidden">Edição limitada numerada com acabamento premium e detalhes em ouro 18k.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-yellow-400 font-medium">Ouro</span>
                            <span class="bg-gray-800 text-xs px-3 py-1 rounded-full text-gray-300 font-medium">Exclusiva</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-3 rounded-xl font-bold transition-all transform hover:scale-[1.02]">
                            <i class="fas fa-eye mr-2"></i> Ver Detalhes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="product-modal" class="fixed inset-0 bg-black bg-opacity-70 modal-backdrop hidden z-50 flex items-center justify-center p-4">
        <div class="bg-gray-900 rounded-2xl max-w-6xl w-full max-h-[95vh] overflow-y-auto border border-accent/30 shadow-2xl transform transition-all duration-300 scale-95 opacity-0" id="modal-content-area">
            <div class="p-8 md:p-12">
                <div class="flex justify-between items-start mb-8 border-b border-gray-700 pb-4">
                    <div>
                        <h3 id="modal-title" class="text-4xl font-extrabold mb-1"></h3>
                        <div id="modal-price" class="text-4xl font-extrabold text-accent"></div>
                    </div>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-white text-3xl w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-800 transition-colors ml-4">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="grid lg:grid-cols-2 gap-12">
                    <div>
                        <div id="modal-main-image-container" class="h-96 rounded-xl mb-4 overflow-hidden shadow-xl border border-gray-700 bg-gray-800 flex items-center justify-center">
                            <img id="modal-main-image" src="" alt="Imagem principal do produto" class="w-full h-full object-cover transition-opacity duration-500">
                        </div>
                        
                        <div id="modal-gallery" class="flex gap-3 overflow-x-auto pb-2">
                            </div>

                        <div class="bg-gray-800 rounded-xl p-6 mt-8 shadow-inner">
                            <h4 class="text-lg font-bold mb-4 text-accent border-b border-accent/50 pb-2">Especificações Técnicas</h4>
                            <div id="modal-specs" class="space-y-3 text-sm text-gray-300">
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div id="modal-description" class="text-gray-300 mb-8 space-y-6 leading-relaxed"></div>
                        
                        <div class="bg-gray-800 rounded-xl p-6 mb-8 shadow-inner">
                            <h4 class="text-lg font-bold mb-4 text-accent border-b border-accent/50 pb-2">Recursos Principais</h4>
                            <div id="modal-features" class="space-y-3">
                            </div>
                        </div>
                        
                        <div class="space-y-4">
                            <button class="w-full bg-accent hover:bg-pink-600 text-white py-4 px-6 rounded-xl font-bold text-lg transition-all shadow-xl transform hover:scale-[1.01]">
                                <i class="fas fa-shopping-cart mr-3"></i>
                                Adicionar ao Carrinho
                            </button>
                            <div class="grid grid-cols-2 gap-4">
                                <button class="border border-accent text-accent hover:bg-accent hover:text-white py-3 px-6 rounded-xl font-semibold transition-colors">
                                    <i class="fas fa-heart mr-2"></i>
                                    Favoritar
                                </button>
                                <button class="border border-gray-600 text-gray-300 hover:border-accent hover:text-accent py-3 px-6 rounded-xl font-semibold transition-colors">
                                    <i class="fas fa-share-alt mr-2"></i>
                                    Compartilhar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-gray-900 py-16 border-t border-gray-700">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-10 h-10 bg-accent rounded-xl flex items-center justify-center">
                            <i class="fas fa-shield-alt text-white"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-bold">Geosync</h4>
                            <p class="text-xs text-gray-400">Smart Security</p>
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed">Tecnologia inteligente para a segurança das crianças, com inovação e qualidade premium.</p>
                </div>
                
                <div>
                    <h5 class="font-bold mb-6 text-accent">Navegação</h5>
                    <ul class="space-y-3 text-gray-400">
                        <li><a href="#" class="hover:text-accent transition-colors">Página Inicial</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">Produtos</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">Tecnologia</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors">Suporte</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-bold mb-6 text-accent">Contato</h5>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-center">
                            <i class="fas fa-phone mr-3 text-accent w-4"></i> 
                            (11) 9999-9999
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-envelope mr-3 text-accent w-4"></i> 
                            contato@geosync.com
                        </li>
                        <li class="flex items-center">
                            <i class="fas fa-map-marker-alt mr-3 text-accent w-4"></i> 
                            São Paulo, SP
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-bold mb-6 text-accent">Redes Sociais</h5>
                    <div class="flex space-x-4 mb-6">
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-accent rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-accent rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-gray-800 hover:bg-accent rounded-full flex items-center justify-center transition-colors">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <p class="text-xs text-gray-500">Siga-nos para novidades e atualizações</p>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8 text-center text-gray-400">
                <p>&copy; 2024 Geosync. Todos os direitos reservados. | Tecnologia e Segurança</p>
            </div>
        </div>
    </footer>
    <script>
        // Dados dos produtos, agora com um campo para a galeria de imagens
        const products = {
            'geosync-pro': {
                title: 'Geosync Pro',
                price: 'R$ 899',
                // O caminho da imagem principal para o card e para a imagem grande do modal
                mainImage: './imagens/product-pro.png', 
                // NOVO: Array de caminhos para a galeria do modal
                imageGallery: [
                    './imagens/product-pro.png', 
                    './imagens/pro-detail-1.png', // Supondo que você tenha essas imagens na pasta 'imagens/'
                    './imagens/pro-detail-2.png',
                    './imagens/pro-detail-3.png'
                ],
                description: `
                    <p class="text-xl font-semibold text-accent mb-4">Avanço em Segurança: Inteligência Artificial no Rastreamento.</p>
                    <p class="text-lg leading-relaxed">A Geosync Pro representa o que há de mais avançado em tecnologia de segurança infantil, incorporando inteligência artificial para proteção preditiva.</p>
                    <p>Desenvolvida com materiais premium e tecnologia de ponta, oferece tranquilidade total para pais modernos que não abrem mão da segurança dos filhos.</p>
                `,
                features: [
                    { icon: 'fas fa-map-marker-alt', text: 'Rastreamento GPS com precisão de 1 metro' },
                    { icon: 'fas fa-microchip', text: 'Inteligência Artificial preditiva integrada' },
                    { icon: 'fas fa-door-open', text: 'Sensor de abertura com notificação instantânea' },
                    { icon: 'fas fa-history', text: 'Histórico completo de 12 meses' },
                    { icon: 'fas fa-battery-full', text: 'Bateria de longa duração (7 dias)' },
                    { icon: 'fas fa-mobile-alt', text: 'App móvel e painel web completos' }
                ],
                specs: [
                    { label: 'Precisão GPS', value: '1 metro' },
                    { label: 'Bateria', value: '7 dias de uso' },
                    { label: 'Conectividade', value: '4G/WiFi/Bluetooth' },
                    { label: 'Resistência', value: 'IPX4' },
                    { label: 'Garantia', value: '2 anos' },
                    { label: 'Suporte', value: '24/7' }
                ]
            },
            'geosync-classic': {
                title: 'Geosync Classic',
                price: 'R$ 599',
                mainImage: './imagens/product-classic.png',
                imageGallery: [
                    './imagens/product-classic.png', 
                    './imagens/classic-detail-1.png', 
                    './imagens/classic-detail-2.png'
                ],
                description: `
                    <p class="text-xl font-semibold text-accent mb-4">Segurança Essencial: Confiabilidade e Durabilidade.</p>
                    <p class="text-lg leading-relaxed">A escolha perfeita para famílias que buscam segurança confiável com excelente custo-benefício, sem abrir mão da qualidade.</p>
                    <p>Combina todas as funcionalidades essenciais de rastreamento e monitoramento em um design elegante e durável.</p>
                `,
                features: [
                    { icon: 'fas fa-location-arrow', text: 'Rastreamento GPS em tempo real' },
                    { icon: 'fas fa-lock-open', text: 'Sensor de abertura inteligente' },
                    { icon: 'fas fa-route', text: 'Histórico de trajeto (30 dias)' },
                    { icon: 'fas fa-tablet-alt', text: 'App móvel intuitivo' },
                    { icon: 'fas fa-battery-half', text: 'Bateria eficiente (5 dias)' },
                    { icon: 'fas fa-water', text: 'Resistente à água IPX4' }
                ],
                specs: [
                    { label: 'Precisão GPS', value: '3 metros' },
                    { label: 'Bateria', value: '5 dias de uso' },
                    { label: 'Conectividade', value: '4G/WiFi' },
                    { label: 'Resistência', value: 'IPX4' },
                    { label: 'Garantia', value: '1 ano' },
                    { label: 'Suporte', value: 'Horário comercial' }
                ]
            },
            'geosync-kids': {
                title: 'Geosync Kids',
                price: 'R$ 449',
                mainImage: './imagens/product-kids.png',
                imageGallery: [
                    './imagens/product-kids.png', 
                    './imagens/kids-detail-1.png', 
                    './imagens/kids-detail-2.png'
                ],
                description: `
                    <p class="text-xl font-semibold text-accent mb-4">Feita para os Pequenos: Segurança e Conforto.</p>
                    <p class="text-lg leading-relaxed">Especialmente desenvolvida para crianças de 3 a 8 anos, com design ergonômico e funcionalidades adaptadas para os pequenos.</p>
                    <p>Materiais seguros, certificados e livres de substâncias tóxicas, com botão SOS de fácil acesso para emergências.</p>
                `,
                features: [
                    { icon: 'fas fa-baby', text: 'Design ergonômico para crianças pequenas' },
                    { icon: 'fas fa-bell', text: 'Botão SOS de emergência' },
                    { icon: 'fas fa-search-location', text: 'Rastreamento GPS simplificado' },
                    { icon: 'fas fa-walking', text: 'Sensor de movimento inteligente' },
                    { icon: 'fas fa-leaf', text: 'Materiais atóxicos certificados' },
                    { icon: 'fas fa-gamepad', text: 'Interface lúdica no aplicativo' }
                ],
                specs: [
                    { label: 'Idade recomendada', value: '3-8 anos' },
                    { label: 'Peso', value: '300g' },
                    { label: 'Bateria', value: '4 dias de uso' },
                    { label: 'Certificação', value: 'INMETRO' },
                    { label: 'Material', value: 'Atóxico' },
                    { label: 'Garantia', value: '1 ano' }
                ]
            },
            'geosync-sport': {
                title: 'Geosync Sport',
                price: 'R$ 749',
                mainImage: './imagens/product-sport.png',
                imageGallery: [
                    './imagens/product-sport.png', 
                    './imagens/sport-detail-1.png', 
                    './imagens/sport-detail-2.png'
                ],
                description: `
                    <p class="text-xl font-semibold text-accent mb-4">Aventure-se sem Preocupações: Ultra-Resistência.</p>
                    <p class="text-lg leading-relaxed">Desenvolvida para crianças ativas que praticam esportes ou atividades ao ar livre, com resistência extrema a impactos e intempéries.</p>
                    <p>Certificação IP67 garante proteção total contra água e poeira, ideal para aventuras e esportes radicais.</p>
                `,
                features: [
                    { icon: 'fas fa-shield-alt', text: 'Resistência extrema IP67 (Água e Poeira)' },
                    { icon: 'fas fa-hard-hat', text: 'Material balístico ultra-resistente' },
                    { icon: 'fas fa-running', text: 'GPS com tracking esportivo' },
                    { icon: 'fas fa-exclamation-triangle', text: 'Sensor de impacto avançado' },
                    { icon: 'fas fa-basketball-ball', text: 'Compartimentos para equipamentos' },
                    { icon: 'fas fa-moon', text: 'Refletores de segurança noturna' }
                ],
                specs: [
                    { label: 'Resistência', value: 'IP67' },
                    { label: 'Material', value: 'Tecido balístico' },
                    { label: 'Bateria', value: '6 dias de uso' },
                    { label: 'Sensor impacto', value: 'Sim' },
                    { label: 'Refletores', value: '360°' },
                    { label: 'Garantia', value: '18 meses' }
                ]
            },
            'geosync-teen': {
                title: 'Geosync Teen',
                price: 'R$ 679',
                mainImage: './imagens/product-teen.png',
                imageGallery: [
                    './imagens/product-teen.png', 
                    './imagens/teen-detail-1.png', 
                    './imagens/teen-detail-2.png'
                ],
                description: `
                    <p class="text-xl font-semibold text-accent mb-4">Estilo e Conectividade: Para o Jovem Moderno.</p>
                    <p class="text-lg leading-relaxed">Design moderno e discreto para adolescentes que valorizam estilo e funcionalidade, com tecnologia integrada de forma elegante.</p>
                    <p>Inclui porta USB integrada e compartimento acolchoado para laptop, perfeita para estudantes modernos.</p>
                `,
                features: [
                    { icon: 'fas fa-laptop', text: 'Design discreto e moderno' },
                    { icon: 'fas fa-plug', text: 'Porta USB integrada para carregamento' },
                    { icon: 'fas fa-desktop', text: 'Compartimento para laptop 15.6"' },
                    { icon: 'fas fa-user-lock', text: 'Modo privacidade configurável' },
                    { icon: 'fas fa-fill-drip', text: 'Múltiplas opções de cores' },
                    { icon: 'fas fa-box', text: 'Organização inteligente interna' }
                ],
                specs: [
                    { label: 'Idade recomendada', value: '12+ anos' },
                    { label: 'Capacidade', value: '25 litros' },
                    { label: 'Laptop', value: 'Até 15.6"' },
                    { label: 'USB', value: 'Porta integrada' },
                    { label: 'Cores', value: '6 opções' },
                    { label: 'Garantia', value: '1 ano' }
                ]
            },
            'geosync-limited': {
                title: 'Geosync Limited',
                price: 'R$ 1.299',
                mainImage: './imagens/product-limited.png',
                imageGallery: [
                    './imagens/product-limited.png', 
                    './imagens/limited-detail-1.png', 
                    './imagens/limited-detail-2.png'
                ],
                description: `
                    <p class="text-xl font-semibold text-accent mb-4">Luxo e Tecnologia: Edição Exclusiva.</p>
                    <p class="text-lg leading-relaxed">Edição limitada numerada com acabamento premium e detalhes em ouro 18k, representando o máximo em exclusividade e tecnologia.</p>
                    <p>Apenas 500 unidades produzidas mundialmente, cada uma com certificado de autenticidade e suporte VIP exclusivo.</p>
                `,
                features: [
                    { icon: 'fas fa-gem', text: 'Acabamento premium com detalhes em ouro 18k' },
                    { icon: 'fas fa-fingerprint', text: 'Numeração exclusiva (500 unidades)' },
                    { icon: 'fas fa-star', text: 'Todas as funcionalidades da versão Pro' },
                    { icon: 'fas fa-headset', text: 'Suporte VIP exclusivo 24h' }
                ],
                specs: [
                    { label: 'Acabamento', value: 'Ouro 18k' },
                    { label: 'Quantidade', value: '500 unidades' },
                    { label: 'Bateria', value: '7 dias de uso' },
                    { label: 'Garantia', value: 'Vitalícia' },
                    { label: 'Exclusividade', value: 'Certificado de Autenticidade' }
                ]
            }
        };

        // Função para carregar a imagem principal do modal (chamada na galeria)
        function loadMainImage(src) {
            document.getElementById('modal-main-image').src = src;
            // Opcional: Adicionar um efeito de transição
            const mainImageElement = document.getElementById('modal-main-image');
            mainImageElement.style.opacity = 0;
            setTimeout(() => {
                mainImageElement.src = src;
                mainImageElement.style.opacity = 1;
            }, 50); // Tempo para o efeito
        }


        // Função para abrir o modal
        function openModal(productId) {
            const product = products[productId];
            const modal = document.getElementById('product-modal');
            const modalContentArea = document.getElementById('modal-content-area');

            if (!product) return;

            // 1. Atualiza o conteúdo textual
            document.getElementById('modal-title').innerText = product.title;
            document.getElementById('modal-price').innerText = product.price;
            document.getElementById('modal-description').innerHTML = product.description;

            // 2. Monta a lista de Recursos Principais
            const featuresHTML = product.features.map(f => `
                <div class="flex items-start">
                    <i class="${f.icon} mr-3 mt-1 text-accent flex-shrink-0"></i>
                    <span class="text-gray-300">${f.text}</span>
                </div>
            `).join('');
            document.getElementById('modal-features').innerHTML = featuresHTML;

            // 3. Monta a lista de Especificações Técnicas
            const specsHTML = product.specs.map(s => `
                <div class="flex justify-between border-b border-gray-700/50 pb-2">
                    <span class="font-medium text-gray-400">${s.label}:</span>
                    <span class="font-semibold text-white">${s.value}</span>
                </div>
            `).join('');
            document.getElementById('modal-specs').innerHTML = specsHTML;

            // 4. Carrega a Imagem Principal e Galeria (NOVO!)
            const mainImageElement = document.getElementById('modal-main-image');
            const galleryElement = document.getElementById('modal-gallery');
            
            // Define a imagem principal
            mainImageElement.src = product.mainImage;
            mainImageElement.style.opacity = 1; // Garante a visibilidade

            // Monta a galeria de thumbnails
            const galleryHTML = product.imageGallery.map((imgSrc, index) => `
                <img src="${imgSrc}" 
                     alt="Miniatura ${index + 1}" 
                     class="w-20 h-20 object-cover rounded-lg border-2 border-gray-700 cursor-pointer transition-all hover:border-accent ${index === 0 ? 'border-accent' : ''}"
                     onclick="loadMainImage('${imgSrc}')">
            `).join('');
            galleryElement.innerHTML = galleryHTML;


            // 5. Exibe o Modal com Transição
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContentArea.classList.remove('scale-95', 'opacity-0');
                modalContentArea.classList.add('scale-100', 'opacity-100');
            }, 50);
        }

        // Função para fechar o modal
        function closeModal() {
            const modal = document.getElementById('product-modal');
            const modalContentArea = document.getElementById('modal-content-area');
            
            // Fecha com Transição
            modalContentArea.classList.remove('scale-100', 'opacity-100');
            modalContentArea.classList.add('scale-95', 'opacity-0');
            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300); // Tempo igual à duração da transição no CSS
        }

        // Função para filtrar os produtos
        function filterProducts(category, button) {
            const allCards = document.querySelectorAll('.product-card');
            const filterButtons = document.querySelectorAll('.filter-btn');

            // Remove a classe 'active' de todos os botões
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Adiciona a classe 'active' ao botão clicado
            button.classList.add('active');

            // Filtra os cards
            allCards.forEach(card => {
                const categories = card.getAttribute('data-category').split(' ');
                
                if (category === 'all' || categories.includes(category)) {
                    card.classList.remove('hidden');
                    // Efeito de fade-in e escala sutil para o card que aparece
                    card.style.opacity = 0;
                    card.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        card.style.transition = 'opacity 0.5s ease-out, transform 0.5s ease-out';
                        card.style.opacity = 1;
                        card.style.transform = 'scale(1)';
                    }, 50);
                } else {
                    // Efeito de fade-out e escala sutil para o card que desaparece
                    card.style.transition = 'opacity 0.3s ease-in, transform 0.3s ease-in';
                    card.style.opacity = 0;
                    card.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        card.classList.add('hidden');
                    }, 300); // Tempo para garantir que a transição termine antes de esconder
                }
            });
        }
    </script>
</body>
</html>