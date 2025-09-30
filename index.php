<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZYRA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="./imagens/GeoSync-bg.png" type="image/x-icon">
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
                    <a href="./index.php" class="text-accent font-medium">Início</a>
                    <a href="../GeoSync/comoFunc.php" class="hover:text-accent transition-colors">Saiba Mais</a>
                    <a href="./produtos.php" class="hover:text-accent transition-colors">Produtos</a>
                    <a href="./compras.php" class="hover:text-accent transition-colors">Carrinho</a>
                </div>

                <!-- Menu mobile -->
                <button class="md:hidden hover:text-accent transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <div class="content">
        <section class="py-16 px-6 max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <!-- Conteúdo à esquerda -->
                <div class="space-y-6">
                    <!-- Card de inovação -->
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

                    <!-- Título principal -->
                    <div class="space-y-2">
                        <h1 class="text-4xl lg:text-5xl font-bold text-white leading-tight">
                            Sua <span class="custom-pink">Tranquilidade</span>
                        </h1>
                        <h2 class="text-4xl lg:text-5xl font-bold text-white leading-tight">
                            Nossa <span class="custom-pink">Tecnologia</span>
                        </h2>
                    </div>

                    <!-- Descrição -->
                    <p class="text-lg text-gray-300 leading-relaxed max-w-lg">
                        A primeira mochila inteligente do Brasil que permite monitorar seus filhos em tempo real,
                        oferecendo segurança, praticidade e tranquilidade para toda a família.
                    </p>

                    <!-- Botão -->
                    <button
                        class="custom-btn-pink hover:custom-btn-pink text-white font-semibold px-5 py-3 rounded-lg transition-colors duration-300 shadow-lg hover:shadow-xl">
                        Quero conhecer
                    </button>
                </div>

                <!-- Imagem à direita -->
                <div class="relative">
                    <!-- Container principal com círculo de fundo -->
                    <div class="relative w-[500px] h-[500px] mx-auto">
                        <!-- Círculo de fundo com gradiente -->
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-pink-600 via-pink-500 to-red-500 rounded-full opacity-20 blur-xl">
                        </div>
                        <div
                            class="absolute inset-4 bg-gradient-to-br from-pink-800 via-pink-400 to-red-400 rounded-full opacity-30">
                        </div>

                        <!-- Container central da mochila -->
                        <div class="absolute inset-8 bg-white rounded-full shadow-2xl flex items-center justify-center">
                            <!-- Imagem da mochila -->
                            <img src="./imagens/geosync-bag.jpeg" alt="Mochila GeoSync"
                                class="w-full h-full object-cover rounded-full"
                                onerror="this.src=''; this.alt='Image failed to load'; this.style.display='none';" />

                        </div>

                        <!-- Ícone de escudo (canto superior direito) -->
                        <div
                            class="absolute top-8 right-8 bg-pink-600 rounded-full p-4 shadow-xl transform hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M10,17L6,13L7.41,11.59L10,14.17L16.59,7.58L18,9L10,17Z" />
                            </svg>
                        </div>

                        <!-- Ícone de localização (canto inferior esquerdo) -->
                        <div
                            class="absolute bottom-8 left-8 bg-pink-600 rounded-full p-4 shadow-xl transform hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                            </svg>
                        </div>

                        <!-- Partículas flutuantes -->
                        <div class="absolute top-16 left-16 w-3 h-3 bg-pink-700 rounded-full animate-bounce"
                            style="animation-delay: 0s;"></div>
                        <div class="absolute top-24 right-20 w-2 h-2 bg-pink-200 rounded-full animate-bounce"
                            style="animation-delay: 0.5s;"></div>
                        <div class="absolute bottom-20 left-20 w-2 h-2 bg-pink-300 rounded-full animate-bounce"
                            style="animation-delay: 1s;"></div>
                        <div class="absolute bottom-16 right-16 w-3 h-3 bg-pink-600 rounded-full animate-bounce"
                            style="animation-delay: 1.5s;"></div>

                        <!-- Ondas de sinal -->
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
    </div>
    </section>
    <script>(function () { function c() { var b = a.contentDocument || a.contentWindow.document; if (b) { var d = b.createElement('script'); d.innerHTML = "window.__CF$cv$params={r:'984cd0bd5674f191',t:'MTc1ODgyNzM2MS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);"; b.getElementsByTagName('head')[0].appendChild(d) } } if (document.body) { var a = document.createElement('iframe'); a.height = 1; a.width = 1; a.style.position = 'absolute'; a.style.top = 0; a.style.left = 0; a.style.border = 'none'; a.style.visibility = 'hidden'; document.body.appendChild(a); if ('loading' !== document.readyState) c(); else if (window.addEventListener) document.addEventListener('DOMContentLoaded', c); else { var e = document.onreadystatechange || function () { }; document.onreadystatechange = function (b) { e(b); 'loading' !== document.readyState && (document.onreadystatechange = e, c()) } } } })();</script>

    <section class="tech">
        <h2>
            Tecnologia que <span class="highlight-pink">Protege</span>
        </h2>
        <p>
            Descubra como nossa mochila inteligente revoluciona a segurança infantil com recursos inovadores
        </p>
        <div class="tech-cards">
            <div class="card">
                <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                <div class="card-text">
                    <h3>Rastreamento GPS em Tempo Real</h3>
                    <p>Localização precisa da mochila a qualquer momento, com atualizações em tempo real no seu
                        smartphone.</p>
                </div>
            </div>

            <div class="card">
                <div class="icon-box"><i class="fas fa-bell"></i></div>
                <div class="card-text">
                    <h3>Notificações Inteligentes</h3>
                    <p>Alertas automáticos quando a mochila é aberta fora do horário programado ou em locais não
                        autorizados.</p>
                </div>
            </div>

            <div class="card">
                <div class="icon-box"><i class="fas fa-history"></i></div>
                <div class="card-text">
                    <h3>Histórico Completo</h3>
                    <p>Acompanhe todo o trajeto percorrido com histórico detalhado de movimentação e paradas.
                    </p>
                </div>
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
    </div>
    <script src="script.js"></script>
</body>

</html>