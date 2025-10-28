<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geosync</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="./imagens/GeoSync-bg.png" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

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

        /* Estilos específicos para o Container de Política */
        .policy-section {
            border-left: 4px solid var(--color-accent);
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .policy-section:hover {
            border-left-color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
        }

        .list-style-accent li::before {
            content: "\f058";
            /* Check-circle icon from Font Awesome */
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            color: var(--color-accent);
            margin-right: 0.75rem;
            display: inline-block;
            width: 1.25rem;
            /* Ajuste para alinhamento */
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

        // Função para o menu mobile (adaptada da sua versão original)
        function toggleMobileMenu() {
            const mobileMenu = document.getElementById('mobile-menu');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            mobileMenu.classList.toggle('hidden');
            hamburgerIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }
    </script>
</head>

<body class="bg-primary text-white font-sans min-h-screen flex flex-col">

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
    <main class="flex-grow">
        <div class="gradient-bg py-16 border-b border-gray-700">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h1 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight tracking-tight">
                    Política de <span class="text-accent">Garantia</span> e Devolução
                </h1>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">Sua segurança é nossa prioridade. Conheça nossos
                    termos para trocas, devoluções e cobertura da garantia.</p>
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-6 py-16">

            <div class="mb-10">
                <a href="./produtos.php"
                    class="inline-flex items-center px-6 py-3 bg-gray-800 rounded-xl font-bold text-lg border border-gray-700 hover:bg-accent hover:border-accent transition-all duration-300 transform hover:scale-[1.02]">
                    <i class="fas fa-arrow-left mr-3 text-white"></i> Voltar à Loja
                </a>
            </div>

            <section class="policy-section bg-gray-900 p-8 rounded-xl mb-12">
                <h2 class="text-3xl font-bold mb-5 text-accent border-b border-gray-700 pb-3">1. Direito de
                    Arrependimento (Devolução)</h2>
                <p class="text-gray-300 mb-4 leading-relaxed">Conforme o Código de Defesa do Consumidor, você tem o
                    prazo de <strong class="text-accent">7 (sete) dias corridos</strong>, a partir do recebimento do
                    produto, para desistir da compra.</p>
                <ul class="list-style-accent ml-6 space-y-2 text-gray-300">
                    <li>A comunicação deve ser feita à nossa Central de Atendimento no prazo estipulado.</li>
                    <li>O produto deve ser devolvido na embalagem original, sem indícios de uso ou violação dos lacres.
                    </li>
                    <li>O frete de devolução, nesse caso, é por nossa conta.</li>
                </ul>
            </section>

            <section class="policy-section bg-gray-900 p-8 rounded-xl mb-12">
                <h2 class="text-3xl font-bold mb-5 text-accent border-b border-gray-700 pb-3">2. Garantia por Defeito de
                    Fabricação</h2>
                <p class="text-gray-300 mb-4 leading-relaxed">Todos os modelos de mochilas Geosync possuem uma garantia
                    total de <strong class="text-accent">12 (doze) meses</strong> contra defeitos de fabricação
                    (incluindo o módulo GPS/Tecnológico), contados a partir da data da Nota Fiscal.</p>
                <ul class="list-style-accent ml-6 space-y-2 text-gray-300">
                    <li>O prazo para acionar a garantia é de até 90 dias (CDC) e será estendido contratualmente pela
                        Geosync até 12 meses.</li>
                    <li>Em caso de defeito, faremos a reparação ou a troca do produto por um novo, sem custos
                        adicionais.</li>
                    <li>Danos causados por mau uso, quedas ou contato com água (se o modelo não for à prova d'água) não
                        são cobertos pela garantia.</li>
                </ul>
            </section>

            <section class="policy-section bg-gray-900 p-8 rounded-xl mb-12">
                <h2 class="text-3xl font-bold mb-5 text-accent border-b border-gray-700 pb-3">3. Condições e Restituição
                    de Valores</h2>
                <p class="text-gray-300 mb-4 leading-relaxed">Para iniciar qualquer processo de troca ou devolução, é
                    fundamental que o produto esteja acompanhado da <strong class="text-accent">Nota Fiscal</strong>.
                </p>
                <div class="bg-gray-800 p-6 rounded-lg">
                    <h4 class="text-xl font-semibold mb-3 text-white">Reembolso</h4>
                    <ul class="list-style-accent ml-6 space-y-2 text-gray-300">
                        <li><strong>Cartão de Crédito:</strong> O estorno será solicitado à administradora do cartão em
                            até 5 dias úteis após a análise do produto.</li>
                        <li><strong>PIX/Boleto:</strong> O reembolso será realizado via PIX ou transferência na conta do
                            titular da compra em até 3 dias úteis.</li>
                    </ul>
                </div>
            </section>

            <p class="text-center text-lg text-gray-500 mt-10">Para mais informações ou iniciar um processo, entre em
                contato através do nosso chat de suporte.</p>

        </div>
    </main>
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
</body>

</html>