<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosync - Mochilas Inteligentes</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .bg-primary { background-color: #202937; }
        .bg-accent { background-color: #ff2178; }
        .text-accent { color: #ff2178; }
        .border-accent { border-color: #ff2178; }
        .hover-accent:hover { background-color: #ff2178; }
        .gradient-bg { background: linear-gradient(135deg, #202937 0%, #2a3441 100%); }
        .card-hover { 
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); 
            border: 1px solid rgba(255, 33, 120, 0.1);
        }
        .card-hover:hover { 
            transform: translateY(-12px); 
            box-shadow: 0 25px 50px rgba(255, 33, 120, 0.15);
            border-color: rgba(255, 33, 120, 0.3);
        }
        .modal-backdrop { backdrop-filter: blur(15px); }
        .promo-card {
            background: linear-gradient(135deg, #ff2178 0%, #e91e63 50%, #c2185b 100%);
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
        .feature-badge {
            background: rgba(255, 33, 120, 0.1);
            border: 1px solid rgba(255, 33, 120, 0.2);
        }
        .tech-pattern {
            background-image: 
                radial-gradient(circle at 25% 25%, rgba(255, 33, 120, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(255, 33, 120, 0.05) 0%, transparent 50%);
        }
    </style>

  <script src="https://cdn.tailwindcss.com"></script>
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

</body>
</html>


    <!-- Hero Section -->
    <section class="gradient-bg py-20 tech-pattern">
        <div class="container mx-auto px-6 text-center">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">
                    Mochilas <span class="text-accent">Inteligentes</span>
                </h2>
                <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Tecnologia avançada de rastreamento GPS e sensores inteligentes para máxima segurança infantil
                </p>
                <div class="flex flex-wrap justify-center gap-4 text-sm">
                    <span class="feature-badge px-4 py-2 rounded-full">GPS Ultra-Preciso</span>
                    <span class="feature-badge px-4 py-2 rounded-full">Sensores Inteligentes</span>
                    <span class="feature-badge px-4 py-2 rounded-full">App Integrado</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Cards de Promoção -->
    <section class="py-16 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Promoção Principal -->
                <div class="promo-card rounded-2xl p-8 text-white relative">
                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-4">
                            <span class="bg-white bg-opacity-20 px-3 py-1 rounded-full text-sm font-semibold">LANÇAMENTO</span>
                            <span class="text-3xl font-bold">30% OFF</span>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Geosync Pro com IA</h3>
                        <p class="mb-6 opacity-90">Nova geração com inteligência artificial integrada</p>
                        <button class="bg-white text-pink-600 px-6 py-3 rounded-xl font-bold hover:bg-gray-100 transition-colors">
                            Ver Oferta Especial
                        </button>
                    </div>
                </div>

                <!-- Promoção Secundária -->
                <div class="bg-gray-700 rounded-2xl p-8 border border-gray-600 hover:border-accent transition-colors">
                    <div class="flex items-center justify-between mb-4">
                        <span class="bg-accent bg-opacity-20 text-accent px-3 py-1 rounded-full text-sm font-semibold">COMBO</span>
                        <span class="text-2xl font-bold text-accent">2x</span>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Kit Família</h3>
                    <p class="text-gray-300 mb-6">Duas mochilas Geosync Classic com desconto especial</p>
                    <button class="border border-accent text-accent hover:bg-accent hover:text-white px-6 py-3 rounded-xl font-bold transition-colors">
                        Conhecer Kit
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Filtros -->
    <section class="py-8 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="flex flex-wrap gap-4 justify-center">
                <button onclick="filterProducts('all')" class="filter-btn bg-accent text-white px-8 py-3 rounded-full font-semibold transition-all shadow-lg">
                    Todos os Produtos
                </button>
                <button onclick="filterProducts('cores')" class="filter-btn bg-gray-700 hover:bg-accent text-white px-8 py-3 rounded-full font-semibold transition-all">
                    Por Cor
                </button>
                <button onclick="filterProducts('tamanhos')" class="filter-btn bg-gray-700 hover:bg-accent text-white px-8 py-3 rounded-full font-semibold transition-all">
                    Tamanhos
                </button>
                <button onclick="filterProducts('especiais')" class="filter-btn bg-gray-700 hover:bg-accent text-white px-8 py-3 rounded-full font-semibold transition-all">
                    Edições Especiais
                </button>
            </div>
        </div>
    </section>

    <!-- Grade de Produtos -->
    <section class="py-20 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="text-4xl font-bold mb-4">Nossa Linha de Produtos</h3>
                <p class="text-gray-400 text-lg">Tecnologia de ponta para cada necessidade</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="products-grid">
                <!-- Produto 1 -->
                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer" data-category="cores especiais" onclick="openModal('geosync-pro')">
                    <div class="h-64 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center relative">
                        <div class="absolute top-4 right-4">
                            <span class="bg-accent px-3 py-1 rounded-full text-xs font-bold">NOVO</span>
                        </div>
                        <svg width="120" height="120" viewBox="0 0 120 120" class="text-gray-300">
                            <path d="M30 20 L90 20 L90 100 L60 110 L30 100 Z" fill="currentColor" opacity="0.9"/>
                            <circle cx="60" cy="40" r="8" fill="#ff2178"/>
                            <rect x="45" y="55" width="30" height="4" rx="2" fill="#ff2178"/>
                            <rect x="45" y="65" width="20" height="4" rx="2" fill="#ff2178"/>
                            <circle cx="50" cy="75" r="2" fill="#ff2178"/>
                            <circle cx="70" cy="75" r="2" fill="#ff2178"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-xl font-bold">Geosync Pro</h4>
                            <span class="text-2xl font-bold text-accent">R$ 899</span>
                        </div>
                        <p class="text-gray-400 mb-4">Modelo premium com inteligência artificial integrada</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">IA Integrada</span>
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">GPS Ultra-Preciso</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-2 rounded-lg font-semibold transition-colors">
                            Ver Detalhes
                        </button>
                    </div>
                </div>

                <!-- Produto 2 -->
                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer" data-category="cores tamanhos" onclick="openModal('geosync-classic')">
                    <div class="h-64 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center relative">
                        <div class="absolute top-4 right-4">
                            <span class="bg-blue-500 px-3 py-1 rounded-full text-xs font-bold">POPULAR</span>
                        </div>
                        <svg width="120" height="120" viewBox="0 0 120 120" class="text-gray-300">
                            <path d="M30 20 L90 20 L90 100 L60 110 L30 100 Z" fill="currentColor" opacity="0.9"/>
                            <circle cx="60" cy="40" r="6" fill="#ff2178"/>
                            <rect x="45" y="55" width="30" height="3" rx="1.5" fill="#ff2178"/>
                            <rect x="45" y="65" width="25" height="3" rx="1.5" fill="#ff2178"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-xl font-bold">Geosync Classic</h4>
                            <span class="text-2xl font-bold text-accent">R$ 599</span>
                        </div>
                        <p class="text-gray-400 mb-4">Funcionalidades essenciais com excelente custo-benefício</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">GPS Preciso</span>
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Sensor Abertura</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-2 rounded-lg font-semibold transition-colors">
                            Ver Detalhes
                        </button>
                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer" data-category="especiais cores" onclick="openModal('geosync-kids')">
                    <div class="h-64 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center relative">
                        <div class="absolute top-4 right-4">
                            <span class="bg-green-500 px-3 py-1 rounded-full text-xs font-bold">KIDS</span>
                        </div>
                        <svg width="120" height="120" viewBox="0 0 120 120" class="text-gray-300">
                            <path d="M30 20 L90 20 L90 100 L60 110 L30 100 Z" fill="currentColor" opacity="0.9"/>
                            <circle cx="60" cy="40" r="5" fill="#ff2178"/>
                            <rect x="45" y="55" width="30" height="2" rx="1" fill="#ff2178"/>
                            <rect x="45" y="65" width="20" height="2" rx="1" fill="#ff2178"/>
                            <circle cx="45" cy="75" r="3" fill="#ffd700"/>
                            <circle cx="75" cy="75" r="3" fill="#ffd700"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-xl font-bold">Geosync Kids</h4>
                            <span class="text-2xl font-bold text-accent">R$ 449</span>
                        </div>
                        <p class="text-gray-400 mb-4">Especialmente desenvolvida para crianças pequenas</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Botão SOS</span>
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Design Infantil</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-2 rounded-lg font-semibold transition-colors">
                            Ver Detalhes
                        </button>
                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer" data-category="especiais tamanhos" onclick="openModal('geosync-sport')">
                    <div class="h-64 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center relative">
                        <div class="absolute top-4 right-4">
                            <span class="bg-orange-500 px-3 py-1 rounded-full text-xs font-bold">SPORT</span>
                        </div>
                        <svg width="120" height="120" viewBox="0 0 120 120" class="text-gray-300">
                            <path d="M30 20 L90 20 L90 100 L60 110 L30 100 Z" fill="currentColor" opacity="0.9"/>
                            <circle cx="60" cy="40" r="7" fill="#ff2178"/>
                            <rect x="45" y="55" width="30" height="3" rx="1.5" fill="#ff2178"/>
                            <rect x="45" y="65" width="25" height="3" rx="1.5" fill="#ff2178"/>
                            <path d="M50 75 L70 75 L65 85 L55 85 Z" fill="#ff2178"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-xl font-bold">Geosync Sport</h4>
                            <span class="text-2xl font-bold text-accent">R$ 749</span>
                        </div>
                        <p class="text-gray-400 mb-4">Ultra-resistente para atividades esportivas</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">IP67</span>
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Anti-Impacto</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-2 rounded-lg font-semibold transition-colors">
                            Ver Detalhes
                        </button>
                    </div>
                </div>

                <!-- Produto 5 -->
                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer" data-category="cores tamanhos" onclick="openModal('geosync-teen')">
                    <div class="h-64 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center relative">
                        <div class="absolute top-4 right-4">
                            <span class="bg-purple-500 px-3 py-1 rounded-full text-xs font-bold">TEEN</span>
                        </div>
                        <svg width="120" height="120" viewBox="0 0 120 120" class="text-gray-300">
                            <path d="M30 20 L90 20 L90 100 L60 110 L30 100 Z" fill="currentColor" opacity="0.9"/>
                            <circle cx="60" cy="40" r="6" fill="#ff2178"/>
                            <rect x="45" y="55" width="30" height="3" rx="1.5" fill="#ff2178"/>
                            <rect x="45" y="65" width="25" height="3" rx="1.5" fill="#ff2178"/>
                            <rect x="45" y="75" width="30" height="3" rx="1.5" fill="#ff2178"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-xl font-bold">Geosync Teen</h4>
                            <span class="text-2xl font-bold text-accent">R$ 679</span>
                        </div>
                        <p class="text-gray-400 mb-4">Design moderno e discreto para adolescentes</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">USB Integrado</span>
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Laptop 15.6"</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-2 rounded-lg font-semibold transition-colors">
                            Ver Detalhes
                        </button>
                    </div>
                </div>

                <!-- Produto 6 -->
                <div class="product-card bg-gray-900 rounded-2xl overflow-hidden card-hover cursor-pointer" data-category="especiais cores" onclick="openModal('geosync-limited')">
                    <div class="h-64 bg-gradient-to-br from-gray-700 to-gray-800 flex items-center justify-center relative">
                        <div class="absolute top-4 right-4">
                            <span class="bg-yellow-500 px-3 py-1 rounded-full text-xs font-bold">LIMITED</span>
                        </div>
                        <svg width="120" height="120" viewBox="0 0 120 120" class="text-gray-300">
                            <path d="M30 20 L90 20 L90 100 L60 110 L30 100 Z" fill="currentColor" opacity="0.9"/>
                            <circle cx="60" cy="40" r="8" fill="#ff2178"/>
                            <rect x="45" y="55" width="30" height="4" rx="2" fill="#ff2178"/>
                            <rect x="45" y="65" width="20" height="4" rx="2" fill="#ff2178"/>
                            <path d="M55 75 L65 75 L67 85 L53 85 Z" fill="#ff2178"/>
                            <circle cx="50" cy="30" r="2" fill="#ffd700"/>
                            <circle cx="70" cy="30" r="2" fill="#ffd700"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-3">
                            <h4 class="text-xl font-bold">Geosync Limited</h4>
                            <span class="text-2xl font-bold text-accent">R$ 1.299</span>
                        </div>
                        <p class="text-gray-400 mb-4">Edição limitada com acabamento premium</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Ouro 18k</span>
                            <span class="bg-gray-800 text-xs px-2 py-1 rounded">Numerada</span>
                        </div>
                        <button class="w-full bg-accent hover:bg-pink-600 text-white py-2 rounded-lg font-semibold transition-colors">
                            Ver Detalhes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal de Produto -->
    <div id="product-modal" class="fixed inset-0 bg-black bg-opacity-60 modal-backdrop hidden z-50 flex items-center justify-center p-4">
        <div class="bg-gray-900 rounded-2xl max-w-5xl w-full max-h-[90vh] overflow-y-auto border border-gray-700">
            <div class="p-8">
                <div class="flex justify-between items-center mb-8">
                    <div>
                        <h3 id="modal-title" class="text-3xl font-bold mb-2"></h3>
                        <div id="modal-price" class="text-3xl font-bold text-accent"></div>
                    </div>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-white text-2xl w-10 h-10 flex items-center justify-center rounded-full hover:bg-gray-800 transition-colors">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <div class="grid lg:grid-cols-2 gap-12">
                    <div>
                        <div id="modal-image" class="h-96 rounded-xl mb-6 flex items-center justify-center border border-gray-700">
                        </div>
                        
                        <!-- Especificações Técnicas -->
                        <div class="bg-gray-800 rounded-xl p-6">
                            <h4 class="text-lg font-bold mb-4 text-accent">Especificações Técnicas</h4>
                            <div id="modal-specs" class="space-y-3 text-sm">
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <div id="modal-description" class="text-gray-300 mb-8 space-y-6"></div>
                        
                        <!-- Recursos Principais -->
                        <div class="bg-gray-800 rounded-xl p-6 mb-8">
                            <h4 class="text-lg font-bold mb-4 text-accent">Recursos Principais</h4>
                            <div id="modal-features" class="space-y-3">
                            </div>
                        </div>
                        
                        <!-- Botões de Ação -->
                        <div class="space-y-4">
                            <button class="w-full bg-accent hover:bg-pink-600 text-white py-4 px-6 rounded-xl font-bold text-lg transition-colors shadow-lg">
                                <i class="fas fa-shopping-cart mr-3"></i>
                                Adicionar ao Carrinho
                            </button>
                            <div class="grid grid-cols-2 gap-4">
                                <button class="border border-accent text-accent hover:bg-accent hover:text-white py-3 px-6 rounded-xl font-semibold transition-colors">
                                    <i class="fas fa-heart mr-2"></i>
                                    Favoritar
                                </button>
                                <button class="border border-gray-600 text-gray-300 hover:border-accent hover:text-accent py-3 px-6 rounded-xl font-semibold transition-colors">
                                    <i class="fas fa-share mr-2"></i>
                                    Compartilhar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
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
                        <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-accent rounded-xl flex items-center justify-center transition-colors">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-accent rounded-xl flex items-center justify-center transition-colors">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-12 h-12 bg-gray-800 hover:bg-accent rounded-xl flex items-center justify-center transition-colors">
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
        // Dados dos produtos com informações mais organizadas
        const products = {
            'geosync-pro': {
                title: 'Geosync Pro',
                price: 'R$ 899',
                image: 'bg-gradient-to-br from-gray-700 to-gray-800',
                description: `
                    <div class="space-y-4">
                        <p class="text-lg leading-relaxed">A Geosync Pro representa o que há de mais avançado em tecnologia de segurança infantil, incorporando inteligência artificial para proteção preditiva.</p>
                        <p>Desenvolvida com materiais premium e tecnologia de ponta, oferece tranquilidade total para pais modernos que não abrem mão da segurança dos filhos.</p>
                    </div>
                `,
                features: [
                    'Rastreamento GPS com precisão de 1 metro',
                    'Inteligência Artificial preditiva integrada',
                    'Sensor de abertura com notificação instantânea',
                    'Histórico completo de 12 meses',
                    'Bateria de longa duração (7 dias)',
                    'App móvel e painel web completos'
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
                image: 'bg-gradient-to-br from-gray-700 to-gray-800',
                description: `
                    <div class="space-y-4">
                        <p class="text-lg leading-relaxed">A escolha perfeita para famílias que buscam segurança confiável com excelente custo-benefício, sem abrir mão da qualidade.</p>
                        <p>Combina todas as funcionalidades essenciais de rastreamento e monitoramento em um design elegante e durável.</p>
                    </div>
                `,
                features: [
                    'Rastreamento GPS em tempo real',
                    'Sensor de abertura inteligente',
                    'Histórico de trajeto (30 dias)',
                    'App móvel intuitivo',
                    'Bateria eficiente (5 dias)',
                    'Resistente à água IPX4'
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
                image: './imagens/GeoSync-bg.png',
                description: `
                    <div class="space-y-4">
                        <p class="text-lg leading-relaxed">Especialmente desenvolvida para crianças de 3 a 8 anos, com design ergonômico e funcionalidades adaptadas para os pequenos.</p>
                        <p>Materiais seguros, certificados e livres de substâncias tóxicas, com botão SOS para emergências.</p>
                    </div>
                `,
                features: [
                    'Design ergonômico para crianças pequenas',
                    'Botão SOS de emergência',
                    'Rastreamento GPS simplificado',
                    'Sensor de movimento inteligente',
                    'Materiais atóxicos certificados',
                    'Interface lúdica no aplicativo'
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
                image: 'bg-gradient-to-br from-gray-700 to-gray-800',
                description: `
                    <div class="space-y-4">
                        <p class="text-lg leading-relaxed">Desenvolvida para crianças ativas que praticam esportes ou atividades ao ar livre, com resistência extrema a impactos e intempéries.</p>
                        <p>Certificação IP67 garante proteção total contra água e poeira, ideal para aventuras e atividades esportivas.</p>
                    </div>
                `,
                features: [
                    'Resistência extrema IP67',
                    'Material balístico ultra-resistente',
                    'GPS com tracking esportivo',
                    'Sensor de impacto avançado',
                    'Compartimentos para equipamentos',
                    'Refletores de segurança noturna'
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
                image: 'bg-gradient-to-br from-gray-700 to-gray-800',
                description: `
                    <div class="space-y-4">
                        <p class="text-lg leading-relaxed">Design moderno e discreto para adolescentes que valorizam estilo e funcionalidade, com tecnologia integrada de forma elegante.</p>
                        <p>Inclui porta USB integrada e compartimento para laptop, perfeita para estudantes modernos.</p>
                    </div>
                `,
                features: [
                    'Design discreto e moderno',
                    'Porta USB integrada para carregamento',
                    'Compartimento para laptop 15.6"',
                    'Modo privacidade configurável',
                    'Múltiplas opções de cores',
                    'Organização inteligente interna'
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
                image: 'bg-gradient-to-br from-gray-700 to-gray-800',
                description: `
                    <div class="space-y-4">
                        <p class="text-lg leading-relaxed">Edição limitada numerada com acabamento premium em ouro 18k, representando o máximo em exclusividade e tecnologia.</p>
                        <p>Apenas 500 unidades produzidas mundialmente, cada uma com certificado de autenticidade e suporte VIP exclusivo.</p>
                    </div>
                `,
                features: [
                    'Acabamento premium com detalhes em ouro 18k',
                    'Numeração exclusiva (500 unidades)',
                    'Todas as funcionalidades da versão Pro',
                    'Certificado de autenticidade oficial',
                    'Suporte VIP prioritário 24/7',
                    'Embalagem premium de colecionador'
                ],
                specs: [
                    { label: 'Produção', value: '500 unidades' },
                    { label: 'Acabamento', value: 'Ouro 18k' },
                    { label: 'Certificado', value: 'Numerado' },
                    { label: 'Suporte', value: 'VIP 24/7' },
                    { label: 'Embalagem', value: 'Premium' },
                    { label: 'Garantia', value: '3 anos' }
                ]
            }
        };

        // Função para abrir modal
        function openModal(productId) {
            const product = products[productId];
            if (!product) return;

            document.getElementById('modal-title').textContent = product.title;
            document.getElementById('modal-price').textContent = product.price;
            document.getElementById('modal-description').innerHTML = product.description;
            
            // Renderizar features
            const featuresHtml = product.features.map(feature => 
                `<div class="flex items-center space-x-3">
                    <i class="fas fa-check-circle text-accent"></i>
                    <span>${feature}</span>
                </div>`
            ).join('');
            document.getElementById('modal-features').innerHTML = featuresHtml;
            
            // Renderizar specs
            const specsHtml = product.specs.map(spec => 
                `<div class="flex justify-between items-center">
                    <span class="text-gray-400">${spec.label}:</span>
                    <span class="font-semibold">${spec.value}</span>
                </div>`
            ).join('');
            document.getElementById('modal-specs').innerHTML = specsHtml;
            
            const modalImage = document.getElementById('modal-image');
            modalImage.className = `h-96 rounded-xl mb-6 flex items-center justify-center border border-gray-700 ${product.image}`;
            modalImage.innerHTML = `
                <svg width="180" height="180" viewBox="0 0 120 120" class="text-gray-300">
                    <path d="M30 20 L90 20 L90 100 L60 110 L30 100 Z" fill="currentColor" opacity="0.9"/>
                    <circle cx="60" cy="40" r="8" fill="#ff2178"/>
                    <rect x="45" y="55" width="30" height="4" rx="2" fill="#ff2178"/>
                    <rect x="45" y="65" width="20" height="4" rx="2" fill="#ff2178"/>
                </svg>
            `;

            document.getElementById('product-modal').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        // Função para fechar modal
        function closeModal() {
            document.getElementById('product-modal').classList.add('hidden');
            document.body.style.overflow = 'auto';
        }

        // Função para filtrar produtos
        function filterProducts(category) {
            const products = document.querySelectorAll('.product-card');
            const buttons = document.querySelectorAll('.filter-btn');
            
            // Atualizar botões
            buttons.forEach(btn => {
                btn.classList.remove('bg-accent');
                btn.classList.add('bg-gray-700');
            });
            event.target.classList.remove('bg-gray-700');
            event.target.classList.add('bg-accent');
            
            // Filtrar produtos
            products.forEach(product => {
                if (category === 'all') {
                    product.style.display = 'block';
                } else {
                    const productCategories = product.dataset.category;
                    if (productCategories.includes(category)) {
                        product.style.display = 'block';
                    } else {
                        product.style.display = 'none';
                    }
                }
            });
        }

        // Fechar modal ao clicar fora
        document.getElementById('product-modal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        // Fechar modal com ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeModal();
            }
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97d8b067b627a3f0',t:'MTc1NzYwOTY4OC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
