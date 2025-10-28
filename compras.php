<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosync</title>
     <link rel="shortcut icon" href="./imagens/GeoSync-bg.png" type="image/x-icon">
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
    <style>
        :root {
            --primary-bg: #192230;
            --accent-color: #ff2178;
        }
        
        /* Cores de Fundo Personalizadas */
        .bg-primary { background-color: #192230; }
        .bg-secondary { background-color: #1e2936; }
        .bg-tertiary { background-color: #243142; }
        .bg-accent { background-color: #ff2178; }
        .text-accent { color: #ff2178; }
        .border-accent { border-color: #ff2178; }
        
        /* Gradientes */
        .gradient-primary { 
            background: linear-gradient(135deg, #192230 0%, #1e2936 50%, #243142 100%); 
        }
        
        .gradient-accent { 
            background: linear-gradient(135deg, #ff2178 0%, #e91e63 50%, #c2185b 100%); 
        }
        
        /* Estilos de Cartão */
        .card-hover { 
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1); 
            border: 1px solid rgba(255, 33, 120, 0.1);
            backdrop-filter: blur(10px);
        }
        
        .card-hover:hover { 
            transform: translateY(-4px); 
            box-shadow: 0 20px 40px rgba(255, 33, 120, 0.15);
            border-color: rgba(255, 33, 120, 0.3);
        }
        
        /* Animações */
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes pulse-glow {
            from { box-shadow: 0 0 20px rgba(255, 33, 120, 0.3); }
            to { box-shadow: 0 0 40px rgba(255, 33, 120, 0.6); }
        }
        
        /* Efeitos de Botão e Item */
        .quantity-btn {
            transition: all 0.3s ease;
        }
        
        .quantity-btn:hover {
            transform: scale(1.1);
            background-color: #ff2178;
        }
        
        .cart-item {
            transition: all 0.5s ease;
        }
        
        .cart-item.removing {
            opacity: 0;
            transform: translateX(-100%);
        }
        
        .payment-option {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .payment-option:hover {
            border-color: #ff2178;
            background-color: rgba(255, 33, 120, 0.05);
        }
        
        .payment-option.selected {
            border-color: #ff2178;
            background-color: rgba(255, 33, 120, 0.1);
        }
        
        .form-input {
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            border-color: #ff2178;
            box-shadow: 0 0 0 3px rgba(255, 33, 120, 0.1);
        }
        
        /* Indicador de Etapa */
        .step-indicator {
            position: relative;
        }
        
        /* .step-indicator::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -50%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #ff2178, transparent);
            transform: translateY(-50%);
        } */
        
        .step-indicator:last-child::after {
            display: none;
        }
        
        /* Animação Flutuante */
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }

        /* Melhorando Responsividade dos Itens do Carrinho */
        @media (max-width: 767px) {
            .cart-item-content {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .cart-item-info {
                margin-top: 1rem;
            }
            .cart-item-actions {
                margin-top: 1rem;
                justify-content: center;
            }
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
                        <a href="../GeoSync/comoFunc.php" class="hover:text-accent transition-colors">Saiba Mais</a>
                        <a href="./produtos.php" class="hover:text-accent transition-colors">Produtos</a>
                        <a href="./compras.php" class="text-accent font-medium transition-colors border-b-2 border-accent pb-1">Carrinho</a>
                    </div>

                    <a href="./login.php" class="hidden md:block text-white hover:text-accent transition-colors" title="Login / Perfil">
                        <i class="fas fa-user-circle text-2xl"></i>
                    </a>

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
                <a href="./index.php" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Início</a>
                <a href="../GeoSync/comoFunc.php" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Saiba Mais</a>
                <a href="./produtos.php" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-700 hover:text-accent transition-colors">Produtos</a>
                <a href="./compras.php" class="block px-3 py-2 rounded-md text-base font-medium text-accent bg-gray-700 transition-colors">Carrinho</a>
                <a href="./login.php" class="block px-3 py-2 rounded-md text-base font-medium text-white bg-gray-800 hover:bg-gray-700 transition-colors">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login / Criar Conta
                </a>
            </div>
        </div>
    </nav>
    
    <section class="bg-secondary py-8 border-b border-gray-700/50">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-center space-x-4 sm:space-x-8 max-w-2xl mx-auto">
                <div class="step-indicator flex flex-col items-center space-y-2 sm:space-x-3 sm:flex-row">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-accent rounded-full flex items-center justify-center shadow-lg">
                        <i class="fas fa-shopping-cart text-white text-lg"></i>
                    </div>
                    <span class="font-bold text-accent text-sm sm:text-base">Carrinho</span>
                </div>
                <div class="step-indicator flex flex-col items-center space-y-2 sm:space-x-3 sm:flex-row opacity-50">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-credit-card text-white text-lg"></i>
                    </div>
                    <span class="font-medium text-gray-400 text-sm sm:text-base">Pagamento</span>
                </div>
                <div class="step-indicator flex flex-col items-center space-y-2 sm:space-x-3 sm:flex-row opacity-50">
                    <div class="w-10 h-10 sm:w-12 sm:h-12 bg-gray-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-white text-lg"></i>
                    </div>
                    <span class="font-medium text-gray-400 text-sm sm:text-base">Confirmação</span>
                </div>
            </div>
        </div>
    </section>

    <section id="cart-page" class="py-16 bg-primary">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                    Seu Carrinho de Compras
                </h2>
                <p class="text-gray-400 text-base sm:text-lg">Revise seus itens antes de finalizar a compra</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 md:gap-12 max-w-7xl mx-auto">
                <div class="lg:col-span-2">
                    <div class="bg-secondary rounded-3xl p-6 sm:p-8 border border-gray-700/50 card-hover">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-xl sm:text-2xl font-bold flex items-center">
                                <i class="fas fa-shopping-bag mr-3 text-accent"></i>
                                Itens no Carrinho
                            </h3>
                            <span class="bg-accent/20 text-accent px-3 sm:px-4 py-1 sm:py-2 rounded-full text-xs sm:text-sm font-bold">
                                <span id="cart-count">3</span> itens
                            </span>
                        </div>

                        <div id="cart-items" class="space-y-6">
                            
                            <div class="cart-item bg-tertiary rounded-2xl p-4 sm:p-6 border border-gray-600/30">
                                <div class="cart-item-content flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6">
                                    <div class="w-24 h-24 rounded-xl overflow-hidden shadow-lg">
                                        <img src="./imagens/vermelho-1.jpeg" alt="Imagem do Geosync Pro" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 cart-item-info text-center sm:text-left">
                                        <h4 class="text-lg sm:text-xl font-bold mb-1">Geosync Safetrake</h4>
                                        <p class="text-gray-400 mb-2 text-sm sm:text-base">Modelo premium com IA integrada</p>
                                        <div class="flex items-center space-x-3 justify-center sm:justify-start">
                                            <span class="text-xl sm:text-2xl font-bold text-accent">R$ 899</span>
                                            <span class="text-sm text-gray-500 line-through">R$ 1.299</span>
                                            <span class="bg-green-500/20 text-green-400 px-2 py-1 rounded text-xs font-bold">30% OFF</span>
                                        </div>
                                    </div>
                                    <div class="cart-item-actions flex items-center space-x-3 sm:space-x-4">
                                        <div class="flex items-center space-x-2 bg-primary rounded-xl p-1 sm:p-2">
                                            <button class="quantity-btn w-7 h-7 sm:w-8 sm:h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center text-sm" onclick="updateQuantity(1, -1)">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <span class="w-6 sm:w-8 text-center font-bold text-base" id="qty-1">1</span>
                                            <button class="quantity-btn w-7 h-7 sm:w-8 sm:h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center text-sm" onclick="updateQuantity(1, 1)">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <button class="w-9 h-9 sm:w-10 sm:h-10 bg-red-500/20 hover:bg-red-500 text-red-400 hover:text-white rounded-xl flex items-center justify-center transition-all duration-300 text-sm" onclick="removeItem(1)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item bg-tertiary rounded-2xl p-4 sm:p-6 border border-gray-600/30">
                                <div class="cart-item-content flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6">
                                    <div class="w-24 h-24 rounded-xl overflow-hidden shadow-lg">
                                        <img src="./imagens/vermelho-2.jpeg" alt="Imagem do Geosync Classic" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 cart-item-info text-center sm:text-left">
                                        <h4 class="text-lg sm:text-xl font-bold mb-1">Geosync Classic</h4>
                                        <p class="text-gray-400 mb-2 text-sm sm:text-base">Funcionalidades essenciais</p>
                                        <div class="flex items-center space-x-3 justify-center sm:justify-start">
                                            <span class="text-xl sm:text-2xl font-bold text-accent">R$ 599</span>
                                        </div>
                                    </div>
                                    <div class="cart-item-actions flex items-center space-x-3 sm:space-x-4">
                                        <div class="flex items-center space-x-2 bg-primary rounded-xl p-1 sm:p-2">
                                            <button class="quantity-btn w-7 h-7 sm:w-8 sm:h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center text-sm" onclick="updateQuantity(2, -1)">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <span class="w-6 sm:w-8 text-center font-bold text-base" id="qty-2">2</span>
                                            <button class="quantity-btn w-7 h-7 sm:w-8 sm:h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center text-sm" onclick="updateQuantity(2, 1)">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <button class="w-9 h-9 sm:w-10 sm:h-10 bg-red-500/20 hover:bg-red-500 text-red-400 hover:text-white rounded-xl flex items-center justify-center transition-all duration-300 text-sm" onclick="removeItem(2)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-item bg-tertiary rounded-2xl p-4 sm:p-6 border border-gray-600/30">
                                <div class="cart-item-content flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6">
                                    <div class="w-24 h-24 rounded-xl overflow-hidden shadow-lg">
                                        <img src="./imagens/vermelho-3.jpeg" alt="Imagem do Geosync Kids" class="w-full h-full object-cover">
                                    </div>
                                    <div class="flex-1 cart-item-info text-center sm:text-left">
                                        <h4 class="text-lg sm:text-xl font-bold mb-1">Geosync Kids</h4>
                                        <p class="text-gray-400 mb-2 text-sm sm:text-base">Especial para crianças</p>
                                        <div class="flex items-center space-x-3 justify-center sm:justify-start">
                                            <span class="text-xl sm:text-2xl font-bold text-accent">R$ 449</span>
                                        </div>
                                    </div>
                                    <div class="cart-item-actions flex items-center space-x-3 sm:space-x-4">
                                        <div class="flex items-center space-x-2 bg-primary rounded-xl p-1 sm:p-2">
                                            <button class="quantity-btn w-7 h-7 sm:w-8 sm:h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center text-sm" onclick="updateQuantity(3, -1)">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <span class="w-6 sm:w-8 text-center font-bold text-base" id="qty-3">1</span>
                                            <button class="quantity-btn w-7 h-7 sm:w-8 sm:h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center text-sm" onclick="updateQuantity(3, 1)">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                        <button class="w-9 h-9 sm:w-10 sm:h-10 bg-red-500/20 hover:bg-red-500 text-red-400 hover:text-white rounded-xl flex items-center justify-center transition-all duration-300 text-sm" onclick="removeItem(3)">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="mt-8 pt-6 border-t border-gray-600/30">
                            <button class="flex items-center text-accent hover:text-pink-300 transition-colors font-medium text-sm sm:text-base" onclick="continueShopping()">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Continuar Comprando
                            </button>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-secondary rounded-3xl p-6 sm:p-8 border border-gray-700/50 card-hover lg:sticky top-32">
                        <h3 class="text-xl sm:text-2xl font-bold mb-8 flex items-center">
                            <i class="fas fa-receipt mr-3 text-accent"></i>
                            Resumo do Pedido
                        </h3>

                        <div class="space-y-4 mb-8 text-sm sm:text-base">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Subtotal:</span>
                                <span class="font-bold" id="subtotal">R$ 2.347</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Desconto:</span>
                                <span class="font-bold text-green-400" id="discount">-R$ 400</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Frete:</span>
                                <span class="font-bold text-green-400" id="shipping">GRÁTIS</span>
                            </div>
                            <hr class="border-gray-600/50">
                            <div class="flex justify-between items-center text-lg sm:text-xl">
                                <span class="font-bold">Total:</span>
                                <span class="font-bold text-accent text-xl sm:text-2xl" id="total">R$ 1.947</span>
                            </div>
                        </div>

                        <div class="mb-8">
                            <div class="flex space-x-2">
                                <input type="text" placeholder="Código do cupom" class="flex-1 bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:border-accent focus:outline-none transition-colors text-sm">
                                <button class="bg-accent hover:bg-pink-600 px-4 sm:px-6 py-3 rounded-xl font-bold transition-colors text-sm">
                                    Aplicar
                                </button>
                            </div>
                        </div>

                        <div class="bg-tertiary rounded-2xl p-6 mb-8">
                            <h4 class="font-bold mb-4 text-accent text-base sm:text-lg">Suas Garantias:</h4>
                            <div class="space-y-3 text-xs sm:text-sm">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-shield-alt text-green-400"></i>
                                    <span>Garantia de 2 anos</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-truck text-green-400"></i>
                                    <span>Frete grátis para todo Brasil</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-undo text-green-400"></i>
                                    <span>Troca grátis em 30 dias</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-lock text-green-400"></i>
                                    <span>Compra 100% segura</span>
                                </div>
                            </div>
                        </div>

                        <button class="w-full gradient-accent text-white py-4 rounded-2xl font-bold text-base sm:text-lg transition-all duration-300 shadow-2xl hover:shadow-accent/25 pulse-glow mb-4" onclick="goToPayment()">
                            <i class="fas fa-credit-card mr-2"></i>
                            Finalizar Compra
                        </button>

                        <div class="text-center text-xs sm:text-sm text-gray-400">
                            <i class="fas fa-lock mr-1"></i>
                            Pagamento seguro e criptografado
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="payment-page" class="py-16 bg-primary hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold mb-4 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                    Finalizar Pagamento
                </h2>
                <p class="text-gray-400 text-base sm:text-lg">Preencha seus dados para concluir a compra</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 md:gap-12 max-w-7xl mx-auto">
                <div class="lg:col-span-2">
                    <div class="space-y-8">
                        
                        <div class="bg-secondary rounded-3xl p-6 sm:p-8 border border-gray-700/50 card-hover">
                            <h3 class="text-xl sm:text-2xl font-bold mb-8 flex items-center">
                                <i class="fas fa-user mr-3 text-accent"></i>
                                Dados Pessoais
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Nome Completo *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="Seu nome completo">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">E-mail *</label>
                                    <input type="email" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="seu@email.com">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Telefone *</label>
                                    <input type="tel" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="(11) 99999-9999">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">CPF *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="000.000.000-00">
                                </div>
                            </div>
                        </div>

                        <div class="bg-secondary rounded-3xl p-6 sm:p-8 border border-gray-700/50 card-hover">
                            <h3 class="text-xl sm:text-2xl font-bold mb-8 flex items-center">
                                <i class="fas fa-map-marker-alt mr-3 text-accent"></i>
                                Endereço de Entrega
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium mb-2 text-gray-300">CEP *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="00000-000">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Endereço *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="Rua, Avenida, etc.">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Número *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="123">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Complemento</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="Apto, Bloco, etc.">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Bairro *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="Nome do bairro">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Cidade *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="Nome da cidade">
                                </div>
                            </div>
                        </div>

                        <div class="bg-secondary rounded-3xl p-6 sm:p-8 border border-gray-700/50 card-hover">
                            <h3 class="text-xl sm:text-2xl font-bold mb-8 flex items-center">
                                <i class="fas fa-credit-card mr-3 text-accent"></i>
                                Forma de Pagamento
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                                <div class="payment-option border-2 border-gray-600 rounded-2xl p-4 sm:p-6 text-center selected" onclick="selectPayment('credit')">
                                    <div class="text-3xl sm:text-4xl mb-2 sm:mb-4"> <i class="fas fa-credit-card text-2xl" aria-hidden="true"></i></div>
                                    <div class="font-bold text-base mb-1">Cartão de Crédito</div>
                                    <div class="text-xs text-gray-400">Até 12x sem juros</div>
                                </div>
                                <div class="payment-option border-2 border-gray-600 rounded-2xl p-4 sm:p-6 text-center" onclick="selectPayment('pix')">
                                    <div class="text-3xl sm:text-4xl mb-2 sm:mb-4"><i class="fas fa-qrcode text-2xl" aria-hidden="true"></i></div>
                                    <div class="font-bold text-base mb-1">PIX</div>
                                    <div class="text-xs text-gray-400">5% de desconto</div>
                                </div>
                                <div class="payment-option border-2 border-gray-600 rounded-2xl p-4 sm:p-6 text-center" onclick="selectPayment('boleto')">
                                    <div class="text-3xl sm:text-4xl mb-2 sm:mb-4"><i class="fas fa-file-invoice text-2xl" aria-hidden="true"></i></div>
                                    <div class="font-bold text-base mb-1">Boleto</div>
                                    <div class="text-xs text-gray-400">3 dias para pagar</div>
                                </div>
                            </div>

                            <div id="payment-details-credit" class="space-y-6">
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Número do Cartão *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="0000 0000 0000 0000">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Nome no Cartão *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="Como está impresso no cartão">
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-2">
                                        <label class="block text-sm font-medium mb-2 text-gray-300">Validade *</label>
                                        <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="MM/AA">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-2 text-gray-300">CVV *</label>
                                        <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none text-sm" placeholder="123">
                                    </div>
                                </div>
                            </div>
                            <div id="payment-details-pix" class="space-y-4 hidden text-center bg-tertiary p-6 rounded-xl">
                                <h4 class="text-lg font-bold text-green-400">Pague com PIX e ganhe 5% de desconto!</h4>
                                <p class="text-gray-300">O código PIX será gerado após clicar em "Confirmar Pedido".</p>
                            </div>
                            <div id="payment-details-boleto" class="space-y-4 hidden text-center bg-tertiary p-6 rounded-xl">
                                <h4 class="text-lg font-bold text-gray-300">Pagamento via Boleto Bancário</h4>
                                <p class="text-gray-400">O boleto será gerado após clicar em "Confirmar Pedido". Vencimento em 3 dias úteis.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="bg-secondary rounded-3xl p-6 sm:p-8 border border-gray-700/50 card-hover lg:sticky top-32">
                        <h3 class="text-xl sm:text-2xl font-bold mb-8 flex items-center">
                            <i class="fas fa-money-bill-wave mr-3 text-accent"></i>
                            Revisão Final
                        </h3>
                        <div class="space-y-4 mb-8 text-sm sm:text-base">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Subtotal:</span>
                                <span class="font-bold">R$ 2.347</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Desconto:</span>
                                <span class="font-bold text-green-400">-R$ 400</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Frete:</span>
                                <span class="font-bold text-green-400">GRÁTIS</span>
                            </div>
                            <hr class="border-gray-600/50">
                            <div class="flex justify-between items-center text-lg sm:text-xl">
                                <span class="font-bold">Total a Pagar:</span>
                                <span class="font-bold text-accent text-xl sm:text-2xl">R$ 1.947</span>
                            </div>
                        </div>

                        <button class="w-full gradient-accent text-white py-4 rounded-2xl font-bold text-base sm:text-lg transition-all duration-300 shadow-2xl hover:shadow-accent/25 pulse-glow mb-4" onclick="completePurchase()">
                            <i class="fas fa-check-circle mr-2"></i>
                            Confirmar Pedido
                        </button>
                        
                        <button class="w-full bg-gray-600 hover:bg-gray-700 text-white py-3 rounded-2xl font-bold text-sm sm:text-base transition-colors" onclick="goToCart()">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Voltar ao Carrinho
                        </button>
                        
                        <div class="text-center text-xs sm:text-sm text-gray-400 mt-4">
                            <i class="fas fa-info-circle mr-1"></i>
                            Ao confirmar, você concorda com nossos termos.
                        </div>
                    </div>
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
                    <li><a href="./compras.php" class="text-gray-400 hover:text-white transition-colors">Carrinho</a></li>
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
        // Funções de manipulação do Menu Mobile
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const hamburger = document.getElementById('hamburger-icon');
            const close = document.getElementById('close-icon');
            menu.classList.toggle('hidden');
            hamburger.classList.toggle('hidden');
            close.classList.toggle('hidden');
        }

        // Funções de navegação entre etapas
        function goToPayment() {
            document.getElementById('cart-page').classList.add('hidden');
            document.getElementById('payment-page').classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });
            updateStepIndicator(1);
        }

        function goToCart() {
            document.getElementById('payment-page').classList.add('hidden');
            document.getElementById('cart-page').classList.remove('hidden');
            window.scrollTo({ top: 0, behavior: 'smooth' });
            updateStepIndicator(0);
        }

        function completePurchase() {
            alert('Compra Finalizada! (Simulação)');
            // Implementar lógica de redirecionamento/confirmação real
        }

        function continueShopping() {
             alert('Voltando para a página de produtos! (Simulação)');
             // window.location.href = './produtos.php'; 
        }

        // Função para atualizar o indicador de etapa (visual)
        function updateStepIndicator(step) {
            const steps = document.querySelectorAll('.step-indicator');
            steps.forEach((el, index) => {
                const circle = el.querySelector('div');
                const text = el.querySelector('span');
                
                el.classList.remove('opacity-100', 'opacity-50');
                circle.classList.remove('bg-accent', 'bg-gray-600', 'shadow-lg');
                text.classList.remove('text-accent', 'text-gray-400', 'font-bold', 'font-medium');

                if (index === step) {
                    el.classList.add('opacity-100');
                    circle.classList.add('bg-accent', 'shadow-lg');
                    text.classList.add('text-accent', 'font-bold');
                } else if (index < step) {
                    el.classList.add('opacity-50');
                    circle.classList.add('bg-accent');
                    text.classList.add('text-accent', 'font-medium');
                } else {
                    el.classList.add('opacity-50');
                    circle.classList.add('bg-gray-600');
                    text.classList.add('text-gray-400', 'font-medium');
                }
            });
        }
        
        // Função para selecionar a forma de pagamento
        function selectPayment(method) {
            document.querySelectorAll('.payment-option').forEach(el => el.classList.remove('selected'));
            document.querySelector(`.payment-option[onclick*='${method}']`).classList.add('selected');

            document.getElementById('payment-details-credit').classList.add('hidden');
            document.getElementById('payment-details-pix').classList.add('hidden');
            document.getElementById('payment-details-boleto').classList.add('hidden');
            
            document.getElementById(`payment-details-${method}`).classList.remove('hidden');
        }
        
        // Inicializa a seleção de pagamento no carregamento
        document.addEventListener('DOMContentLoaded', () => {
            selectPayment('credit'); 
            updateStepIndicator(0); 
            // Adicione aqui a lógica real de cálculo (updateTotals) se fosse um código real
        });

        // Simulação de alteração de quantidade (apenas visual)
        function updateQuantity(itemId, change) {
            const qtySpan = document.getElementById(`qty-${itemId}`);
            let currentQty = parseInt(qtySpan.textContent);
            let newQty = currentQty + change;

            if (newQty < 1) {
                newQty = 1; // Não permite quantidade menor que 1
                alert('Para remover o item, use o ícone de lixeira.');
            }

            qtySpan.textContent = newQty;
            // No código real: Chamar função para recalcular o total
        }

        // Simulação de remoção de item (apenas visual)
        function removeItem(itemId) {
            const itemElement = document.getElementById(`qty-${itemId}`).closest('.cart-item');
            if (itemElement) {
                if (confirm('Tem certeza que deseja remover este item?')) {
                    itemElement.classList.add('removing');
                    setTimeout(() => {
                        itemElement.remove();
                        // No código real: Chamar função para recalcular o total e atualizar contagem
                        const cartCount = document.getElementById('cart-count');
                        cartCount.textContent = parseInt(cartCount.textContent) - 1;
                    }, 500); // Espera a animação de remoção terminar
                }
            }
        }
    </script>
</body>
</html>