<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosync - Carrinho de Compras</title>
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
        
        .bg-primary { background-color: #192230; }
        .bg-secondary { background-color: #1e2936; }
        .bg-tertiary { background-color: #243142; }
        .bg-accent { background-color: #ff2178; }
        .text-accent { color: #ff2178; }
        .border-accent { border-color: #ff2178; }
        
        .gradient-primary { 
            background: linear-gradient(135deg, #192230 0%, #1e2936 50%, #243142 100%); 
        }
        
        .gradient-accent { 
            background: linear-gradient(135deg, #ff2178 0%, #e91e63 50%, #c2185b 100%); 
        }
        
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
        
        .pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes pulse-glow {
            from { box-shadow: 0 0 20px rgba(255, 33, 120, 0.3); }
            to { box-shadow: 0 0 40px rgba(255, 33, 120, 0.6); }
        }
        
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
        
        .step-indicator {
            position: relative;
        }
        
        .step-indicator::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -50%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, #ff2178, transparent);
            transform: translateY(-50%);
        }
        
        .step-indicator:last-child::after {
            display: none;
        }
        
        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body class="bg-primary text-white font-sans">
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
          <a href="../GeoSync/comoFunc.php" class="hover:text-accent transition-colors">Saiba Mais</a>
          <a href="./produtos.php" class="hover:text-accent transition-colors">Produtos</a>
          <a href="./compras.php" class="text-accent font-medium">Carrinho</a>
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


    <!-- Indicador de Progresso -->
    <section class="bg-secondary py-8 border-b border-gray-700/50">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-center space-x-8 max-w-2xl mx-auto">
                <div class="step-indicator flex items-center space-x-3">
                    <div class="w-12 h-12 bg-accent rounded-full flex items-center justify-center shadow-lg">
                        <i class="fas fa-shopping-cart text-white"></i>
                    </div>
                    <span class="font-bold text-accent">Carrinho</span>
                </div>
                <div class="step-indicator flex items-center space-x-3 opacity-50">
                    <div class="w-12 h-12 bg-gray-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-credit-card text-white"></i>
                    </div>
                    <span class="font-medium text-gray-400">Pagamento</span>
                </div>
                <div class="step-indicator flex items-center space-x-3 opacity-50">
                    <div class="w-12 h-12 bg-gray-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-white"></i>
                    </div>
                    <span class="font-medium text-gray-400">Confirmação</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Página do Carrinho -->
    <section id="cart-page" class="py-16 bg-primary">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                    Seu Carrinho de Compras
                </h2>
                <p class="text-gray-400 text-lg">Revise seus itens antes de finalizar a compra</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-12 max-w-7xl mx-auto">
                <!-- Lista de Produtos -->
                <div class="lg:col-span-2">
                    <div class="bg-secondary rounded-3xl p-8 border border-gray-700/50 card-hover">
                        <div class="flex items-center justify-between mb-8">
                            <h3 class="text-2xl font-bold flex items-center">
                                <i class="fas fa-shopping-bag mr-3 text-accent"></i>
                                Itens no Carrinho
                            </h3>
                            <span class="bg-accent/20 text-accent px-4 py-2 rounded-full text-sm font-bold">
                                <span id="cart-count">3</span> itens
                            </span>
                        </div>

                        <div id="cart-items" class="space-y-6">
                            <!-- Item 1 -->
                            <div class="cart-item bg-tertiary rounded-2xl p-6 border border-gray-600/30">
                                <div class="flex items-center space-x-6">
                                    <div class="w-24 h-24 bg-gradient-to-br from-gray-700 to-gray-800 rounded-xl flex items-center justify-center">
                                        <svg width="40" height="40" viewBox="0 0 60 60" class="text-gray-300">
                                            <path d="M15 10 L45 10 L45 50 L30 55 L15 50 Z" fill="currentColor"/>
                                            <circle cx="30" cy="20" r="4" fill="#ff2178"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-xl font-bold mb-2">Geosync Pro</h4>
                                        <p class="text-gray-400 mb-3">Modelo premium com IA integrada</p>
                                        <div class="flex items-center space-x-4">
                                            <span class="text-2xl font-bold text-accent">R$ 899</span>
                                            <span class="text-sm text-gray-500 line-through">R$ 1.299</span>
                                            <span class="bg-green-500/20 text-green-400 px-2 py-1 rounded text-xs font-bold">30% OFF</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center space-x-3 bg-primary rounded-xl p-2">
                                            <button class="quantity-btn w-8 h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center" onclick="updateQuantity(1, -1)">
                                                <i class="fas fa-minus text-sm"></i>
                                            </button>
                                            <span class="w-8 text-center font-bold" id="qty-1">1</span>
                                            <button class="quantity-btn w-8 h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center" onclick="updateQuantity(1, 1)">
                                                <i class="fas fa-plus text-sm"></i>
                                            </button>
                                        </div>
                                        <button class="w-10 h-10 bg-red-500/20 hover:bg-red-500 text-red-400 hover:text-white rounded-xl flex items-center justify-center transition-all duration-300" onclick="removeItem(1)">
                                            <i class="fas fa-trash text-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="cart-item bg-tertiary rounded-2xl p-6 border border-gray-600/30">
                                <div class="flex items-center space-x-6">
                                    <div class="w-24 h-24 bg-gradient-to-br from-gray-700 to-gray-800 rounded-xl flex items-center justify-center">
                                        <svg width="40" height="40" viewBox="0 0 60 60" class="text-gray-300">
                                            <path d="M15 10 L45 10 L45 50 L30 55 L15 50 Z" fill="currentColor"/>
                                            <circle cx="30" cy="20" r="3" fill="#ff2178"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-xl font-bold mb-2">Geosync Classic</h4>
                                        <p class="text-gray-400 mb-3">Funcionalidades essenciais</p>
                                        <div class="flex items-center space-x-4">
                                            <span class="text-2xl font-bold text-accent">R$ 599</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center space-x-3 bg-primary rounded-xl p-2">
                                            <button class="quantity-btn w-8 h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center" onclick="updateQuantity(2, -1)">
                                                <i class="fas fa-minus text-sm"></i>
                                            </button>
                                            <span class="w-8 text-center font-bold" id="qty-2">2</span>
                                            <button class="quantity-btn w-8 h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center" onclick="updateQuantity(2, 1)">
                                                <i class="fas fa-plus text-sm"></i>
                                            </button>
                                        </div>
                                        <button class="w-10 h-10 bg-red-500/20 hover:bg-red-500 text-red-400 hover:text-white rounded-xl flex items-center justify-center transition-all duration-300" onclick="removeItem(2)">
                                            <i class="fas fa-trash text-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="cart-item bg-tertiary rounded-2xl p-6 border border-gray-600/30">
                                <div class="flex items-center space-x-6">
                                    <div class="w-24 h-24 bg-gradient-to-br from-gray-700 to-gray-800 rounded-xl flex items-center justify-center">
                                        <svg width="40" height="40" viewBox="0 0 60 60" class="text-gray-300">
                                            <path d="M15 10 L45 10 L45 50 L30 55 L15 50 Z" fill="currentColor"/>
                                            <circle cx="30" cy="20" r="2.5" fill="#ff2178"/>
                                        </svg>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-xl font-bold mb-2">Geosync Kids</h4>
                                        <p class="text-gray-400 mb-3">Especial para crianças</p>
                                        <div class="flex items-center space-x-4">
                                            <span class="text-2xl font-bold text-accent">R$ 449</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center space-x-3 bg-primary rounded-xl p-2">
                                            <button class="quantity-btn w-8 h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center" onclick="updateQuantity(3, -1)">
                                                <i class="fas fa-minus text-sm"></i>
                                            </button>
                                            <span class="w-8 text-center font-bold" id="qty-3">1</span>
                                            <button class="quantity-btn w-8 h-8 bg-gray-600 hover:bg-accent rounded-lg flex items-center justify-center" onclick="updateQuantity(3, 1)">
                                                <i class="fas fa-plus text-sm"></i>
                                            </button>
                                        </div>
                                        <button class="w-10 h-10 bg-red-500/20 hover:bg-red-500 text-red-400 hover:text-white rounded-xl flex items-center justify-center transition-all duration-300" onclick="removeItem(3)">
                                            <i class="fas fa-trash text-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Continuar Comprando -->
                        <div class="mt-8 pt-6 border-t border-gray-600/30">
                            <button class="flex items-center text-accent hover:text-pink-300 transition-colors font-medium" onclick="continueShopping()">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Continuar Comprando
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Resumo do Pedido -->
                <div class="lg:col-span-1">
                    <div class="bg-secondary rounded-3xl p-8 border border-gray-700/50 card-hover sticky top-32">
                        <h3 class="text-2xl font-bold mb-8 flex items-center">
                            <i class="fas fa-receipt mr-3 text-accent"></i>
                            Resumo do Pedido
                        </h3>

                        <div class="space-y-4 mb-8">
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
                            <div class="flex justify-between items-center text-xl">
                                <span class="font-bold">Total:</span>
                                <span class="font-bold text-accent text-2xl" id="total">R$ 1.947</span>
                            </div>
                        </div>

                        <!-- Cupom de Desconto -->
                        <div class="mb-8">
                            <div class="flex space-x-2">
                                <input type="text" placeholder="Código do cupom" class="flex-1 bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:border-accent focus:outline-none transition-colors">
                                <button class="bg-accent hover:bg-pink-600 px-6 py-3 rounded-xl font-bold transition-colors">
                                    Aplicar
                                </button>
                            </div>
                        </div>

                        <!-- Garantias -->
                        <div class="bg-tertiary rounded-2xl p-6 mb-8">
                            <h4 class="font-bold mb-4 text-accent">Suas Garantias:</h4>
                            <div class="space-y-3 text-sm">
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

                        <!-- Botão Finalizar -->
                        <button class="w-full gradient-accent text-white py-4 rounded-2xl font-bold text-lg transition-all duration-300 shadow-2xl hover:shadow-accent/25 pulse-glow mb-4" onclick="goToPayment()">
                            <i class="fas fa-credit-card mr-2"></i>
                            Finalizar Compra
                        </button>

                        <div class="text-center text-sm text-gray-400">
                            <i class="fas fa-lock mr-1"></i>
                            Pagamento seguro e criptografado
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Página de Pagamento -->
    <section id="payment-page" class="py-16 bg-primary hidden">
        <div class="container mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold mb-4 bg-gradient-to-r from-white to-gray-300 bg-clip-text text-transparent">
                    Finalizar Pagamento
                </h2>
                <p class="text-gray-400 text-lg">Preencha seus dados para concluir a compra</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-12 max-w-7xl mx-auto">
                <!-- Formulário de Pagamento -->
                <div class="lg:col-span-2">
                    <div class="space-y-8">
                        <!-- Dados Pessoais -->
                        <div class="bg-secondary rounded-3xl p-8 border border-gray-700/50 card-hover">
                            <h3 class="text-2xl font-bold mb-8 flex items-center">
                                <i class="fas fa-user mr-3 text-accent"></i>
                                Dados Pessoais
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Nome Completo *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="Seu nome completo">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">E-mail *</label>
                                    <input type="email" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="seu@email.com">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Telefone *</label>
                                    <input type="tel" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="(11) 99999-9999">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">CPF *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="000.000.000-00">
                                </div>
                            </div>
                        </div>

                        <!-- Endereço de Entrega -->
                        <div class="bg-secondary rounded-3xl p-8 border border-gray-700/50 card-hover">
                            <h3 class="text-2xl font-bold mb-8 flex items-center">
                                <i class="fas fa-map-marker-alt mr-3 text-accent"></i>
                                Endereço de Entrega
                            </h3>
                            <div class="grid md:grid-cols-2 gap-6">
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium mb-2 text-gray-300">CEP *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="00000-000">
                                </div>
                                <div class="md:col-span-2">
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Endereço *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="Rua, Avenida, etc.">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Número *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="123">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Complemento</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="Apto, Bloco, etc.">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Bairro *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="Nome do bairro">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Cidade *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="Nome da cidade">
                                </div>
                            </div>
                        </div>

                        <!-- Forma de Pagamento -->
                        <div class="bg-secondary rounded-3xl p-8 border border-gray-700/50 card-hover">
                            <h3 class="text-2xl font-bold mb-8 flex items-center">
                                <i class="fas fa-credit-card mr-3 text-accent"></i>
                                Forma de Pagamento
                            </h3>
                            
                            <!-- Opções de Pagamento -->
                            <div class="grid md:grid-cols-3 gap-4 mb-8">
                                <div class="payment-option border-2 border-gray-600 rounded-2xl p-6 text-center selected" onclick="selectPayment('credit')">
                                    <div class="text-4xl mb-4">💳</div>
                                    <div class="font-bold mb-2">Cartão de Crédito</div>
                                    <div class="text-sm text-gray-400">Até 12x sem juros</div>
                                </div>
                                <div class="payment-option border-2 border-gray-600 rounded-2xl p-6 text-center" onclick="selectPayment('pix')">
                                    <div class="text-4xl mb-4">📱</div>
                                    <div class="font-bold mb-2">PIX</div>
                                    <div class="text-sm text-gray-400">5% de desconto</div>
                                </div>
                                <div class="payment-option border-2 border-gray-600 rounded-2xl p-6 text-center" onclick="selectPayment('boleto')">
                                    <div class="text-4xl mb-4">🏦</div>
                                    <div class="font-bold mb-2">Boleto</div>
                                    <div class="text-sm text-gray-400">3% de desconto</div>
                                </div>
                            </div>

                            <!-- Dados do Cartão -->
                            <div id="credit-form" class="space-y-6">
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Número do Cartão *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="0000 0000 0000 0000">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Nome no Cartão *</label>
                                    <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="Nome como está no cartão">
                                </div>
                                <div class="grid grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium mb-2 text-gray-300">Validade *</label>
                                        <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="MM/AA">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium mb-2 text-gray-300">CVV *</label>
                                        <input type="text" class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white placeholder-gray-500 focus:outline-none" placeholder="000">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-2 text-gray-300">Parcelas</label>
                                    <select class="form-input w-full bg-tertiary border border-gray-600 rounded-xl px-4 py-3 text-white focus:outline-none">
                                        <option>1x de R$ 1.947 sem juros</option>
                                        <option>2x de R$ 973,50 sem juros</option>
                                        <option>3x de R$ 649,00 sem juros</option>
                                        <option>6x de R$ 324,50 sem juros</option>
                                        <option>12x de R$ 162,25 sem juros</option>
                                    </select>
                                </div>
                            </div>

                            <!-- PIX -->
                            <div id="pix-form" class="hidden text-center">
                                <div class="bg-tertiary rounded-2xl p-8">
                                    <div class="text-6xl mb-4">📱</div>
                                    <h4 class="text-xl font-bold mb-4">Pagamento via PIX</h4>
                                    <p class="text-gray-400 mb-6">Após confirmar o pedido, você receberá o QR Code para pagamento</p>
                                    <div class="bg-green-500/20 text-green-400 px-4 py-2 rounded-xl inline-block">
                                        <i class="fas fa-percentage mr-2"></i>
                                        5% de desconto: R$ 1.849,65
                                    </div>
                                </div>
                            </div>

                            <!-- Boleto -->
                            <div id="boleto-form" class="hidden text-center">
                                <div class="bg-tertiary rounded-2xl p-8">
                                    <div class="text-6xl mb-4">🏦</div>
                                    <h4 class="text-xl font-bold mb-4">Pagamento via Boleto</h4>
                                    <p class="text-gray-400 mb-6">O boleto será enviado por e-mail após a confirmação</p>
                                    <div class="bg-blue-500/20 text-blue-400 px-4 py-2 rounded-xl inline-block">
                                        <i class="fas fa-percentage mr-2"></i>
                                        3% de desconto: R$ 1.888,59
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Resumo do Pedido -->
                <div class="lg:col-span-1">
                    <div class="bg-secondary rounded-3xl p-8 border border-gray-700/50 card-hover sticky top-32">
                        <h3 class="text-2xl font-bold mb-8 flex items-center">
                            <i class="fas fa-receipt mr-3 text-accent"></i>
                            Resumo Final
                        </h3>

                        <!-- Produtos -->
                        <div class="space-y-4 mb-8">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-400">Geosync Pro (1x)</span>
                                <span>R$ 899</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-400">Geosync Classic (2x)</span>
                                <span>R$ 1.198</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-400">Geosync Kids (1x)</span>
                                <span>R$ 449</span>
                            </div>
                            <hr class="border-gray-600/50">
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Subtotal:</span>
                                <span class="font-bold">R$ 2.546</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Desconto:</span>
                                <span class="font-bold text-green-400">-R$ 599</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="text-gray-400">Frete:</span>
                                <span class="font-bold text-green-400">GRÁTIS</span>
                            </div>
                            <hr class="border-gray-600/50">
                            <div class="flex justify-between items-center text-xl">
                                <span class="font-bold">Total:</span>
                                <span class="font-bold text-accent text-2xl">R$ 1.947</span>
                            </div>
                        </div>

                        <!-- Segurança -->
                        <div class="bg-tertiary rounded-2xl p-6 mb-8">
                            <h4 class="font-bold mb-4 text-accent flex items-center">
                                <i class="fas fa-shield-alt mr-2"></i>
                                Compra Segura
                            </h4>
                            <div class="space-y-3 text-sm">
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-lock text-green-400"></i>
                                    <span>SSL 256 bits</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-credit-card text-green-400"></i>
                                    <span>PCI Compliance</span>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <i class="fas fa-user-shield text-green-400"></i>
                                    <span>Dados protegidos</span>
                                </div>
                            </div>
                        </div>

                        <!-- Botões -->
                        <div class="space-y-4">
                            <button class="w-full gradient-accent text-white py-4 rounded-2xl font-bold text-lg transition-all duration-300 shadow-2xl hover:shadow-accent/25 pulse-glow" onclick="confirmPayment()">
                                <i class="fas fa-check mr-2"></i>
                                Confirmar Pagamento
                            </button>
                            <button class="w-full border-2 border-gray-600 hover:border-accent text-gray-300 hover:text-accent py-3 rounded-2xl font-bold transition-all duration-300" onclick="goBackToCart()">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Voltar ao Carrinho
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé Premium -->
    <footer class="bg-primary py-20 border-t border-accent/20">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-12 mb-16">
                <div>
                    <div class="flex items-center space-x-4 mb-8">
                        <div class="w-12 h-12 bg-accent rounded-2xl flex items-center justify-center pulse-glow">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-2xl font-bold">Geosync</h4>
                            <p class="text-xs text-accent font-semibold tracking-wider">SMART SECURITY</p>
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed mb-6">
                        Revolucionando a segurança infantil com tecnologia inteligente, inovação constante e qualidade premium.
                    </p>
                </div>
                
                <div>
                    <h5 class="font-bold mb-8 text-accent text-xl">Suporte</h5>
                    <ul class="space-y-4 text-gray-400">
                        <li><a href="#" class="hover:text-accent transition-colors flex items-center"><i class="fas fa-phone mr-2 text-xs"></i>(11) 9999-9999</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors flex items-center"><i class="fas fa-envelope mr-2 text-xs"></i>suporte@geosync.com</a></li>
                        <li><a href="#" class="hover:text-accent transition-colors flex items-center"><i class="fas fa-clock mr-2 text-xs"></i>24/7 Atendimento</a></li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-bold mb-8 text-accent text-xl">Segurança</h5>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-center"><i class="fas fa-shield-alt text-green-400 mr-2"></i>SSL Certificado</li>
                        <li class="flex items-center"><i class="fas fa-lock text-green-400 mr-2"></i>Dados Protegidos</li>
                        <li class="flex items-center"><i class="fas fa-credit-card text-green-400 mr-2"></i>PCI Compliance</li>
                    </ul>
                </div>
                
                <div>
                    <h5 class="font-bold mb-8 text-accent text-xl">Garantias</h5>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex items-center"><i class="fas fa-undo text-green-400 mr-2"></i>30 dias para troca</li>
                        <li class="flex items-center"><i class="fas fa-truck text-green-400 mr-2"></i>Frete grátis</li>
                        <li class="flex items-center"><i class="fas fa-tools text-green-400 mr-2"></i>2 anos garantia</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-accent/20 pt-10 text-center">
                <p class="text-gray-400">&copy; 2024 Geosync. Todos os direitos reservados. Compra 100% segura e protegida.</p>
            </div>
        </div>
    </footer>

    <script>
        // Dados do carrinho
        let cartData = {
            1: { name: 'Geosync Pro', price: 899, quantity: 1, originalPrice: 1299 },
            2: { name: 'Geosync Classic', price: 599, quantity: 2 },
            3: { name: 'Geosync Kids', price: 449, quantity: 1 }
        };

        // Atualizar quantidade
        function updateQuantity(itemId, change) {
            const qtyElement = document.getElementById(`qty-${itemId}`);
            let currentQty = parseInt(qtyElement.textContent);
            let newQty = currentQty + change;
            
            if (newQty < 1) newQty = 1;
            if (newQty > 10) newQty = 10;
            
            qtyElement.textContent = newQty;
            cartData[itemId].quantity = newQty;
            
            updateCartTotals();
        }

        // Remover item
        function removeItem(itemId) {
            const itemElement = document.querySelector(`#cart-items .cart-item:nth-child(${itemId})`);
            itemElement.classList.add('removing');
            
            setTimeout(() => {
                itemElement.remove();
                delete cartData[itemId];
                updateCartTotals();
                updateCartCount();
            }, 500);
        }

        // Atualizar totais
        function updateCartTotals() {
            let subtotal = 0;
            let discount = 0;
            
            Object.values(cartData).forEach(item => {
                subtotal += item.price * item.quantity;
                if (item.originalPrice) {
                    discount += (item.originalPrice - item.price) * item.quantity;
                }
            });
            
            const total = subtotal - discount;
            
            document.getElementById('subtotal').textContent = `R$ ${(subtotal + discount).toLocaleString('pt-BR')}`;
            document.getElementById('discount').textContent = `-R$ ${discount.toLocaleString('pt-BR')}`;
            document.getElementById('total').textContent = `R$ ${total.toLocaleString('pt-BR')}`;
        }

        // Atualizar contador
        function updateCartCount() {
            const count = Object.values(cartData).reduce((sum, item) => sum + item.quantity, 0);
            document.getElementById('cart-count').textContent = count;
        }

        // Continuar comprando
        function continueShopping() {
            alert('Redirecionando para a página de produtos...');
        }

        // Ir para pagamento
        function goToPayment() {
            document.getElementById('cart-page').classList.add('hidden');
            document.getElementById('payment-page').classList.remove('hidden');
            
            // Atualizar indicador de progresso
            document.querySelector('.step-indicator:nth-child(1)').classList.add('opacity-50');
            document.querySelector('.step-indicator:nth-child(1) .bg-accent').classList.remove('bg-accent');
            document.querySelector('.step-indicator:nth-child(1) .bg-accent').classList.add('bg-gray-600');
            
            document.querySelector('.step-indicator:nth-child(2)').classList.remove('opacity-50');
            document.querySelector('.step-indicator:nth-child(2) .bg-gray-600').classList.remove('bg-gray-600');
            document.querySelector('.step-indicator:nth-child(2) .bg-gray-600').classList.add('bg-accent');
            document.querySelector('.step-indicator:nth-child(2) .text-gray-400').classList.remove('text-gray-400');
            document.querySelector('.step-indicator:nth-child(2) .text-gray-400').classList.add('text-accent');
        }

        // Voltar ao carrinho
        function goBackToCart() {
            document.getElementById('payment-page').classList.add('hidden');
            document.getElementById('cart-page').classList.remove('hidden');
            
            // Restaurar indicador de progresso
            document.querySelector('.step-indicator:nth-child(1)').classList.remove('opacity-50');
            document.querySelector('.step-indicator:nth-child(1) .bg-gray-600').classList.remove('bg-gray-600');
            document.querySelector('.step-indicator:nth-child(1) .bg-gray-600').classList.add('bg-accent');
            
            document.querySelector('.step-indicator:nth-child(2)').classList.add('opacity-50');
            document.querySelector('.step-indicator:nth-child(2) .bg-accent').classList.remove('bg-accent');
            document.querySelector('.step-indicator:nth-child(2) .bg-accent').classList.add('bg-gray-600');
            document.querySelector('.step-indicator:nth-child(2) .text-accent').classList.remove('text-accent');
            document.querySelector('.step-indicator:nth-child(2) .text-accent').classList.add('text-gray-400');
        }

        // Selecionar forma de pagamento
        function selectPayment(type) {
            // Remover seleção anterior
            document.querySelectorAll('.payment-option').forEach(option => {
                option.classList.remove('selected');
            });
            
            // Adicionar seleção atual
            event.target.closest('.payment-option').classList.add('selected');
            
            // Mostrar/ocultar formulários
            document.getElementById('credit-form').classList.add('hidden');
            document.getElementById('pix-form').classList.add('hidden');
            document.getElementById('boleto-form').classList.add('hidden');
            
            if (type === 'credit') {
                document.getElementById('credit-form').classList.remove('hidden');
            } else if (type === 'pix') {
                document.getElementById('pix-form').classList.remove('hidden');
            } else if (type === 'boleto') {
                document.getElementById('boleto-form').classList.remove('hidden');
            }
        }

        // Confirmar pagamento
        function confirmPayment() {
            // Simular processamento
            const button = event.target;
            const originalText = button.innerHTML;
            
            button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Processando...';
            button.disabled = true;
            
            setTimeout(() => {
                alert('🎉 Pagamento confirmado com sucesso!\n\nVocê receberá um e-mail com os detalhes do pedido e o código de rastreamento em breve.\n\nObrigado por escolher a Geosync!');
                button.innerHTML = originalText;
                button.disabled = false;
            }, 3000);
        }

        // Inicializar página
        document.addEventListener('DOMContentLoaded', function() {
            updateCartTotals();
            updateCartCount();
        });
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97d8cea0566af1e6',t:'MTc1NzYxMDkyNi4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>
