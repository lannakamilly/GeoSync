<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demonstração do Produto - Geosync</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        /* Variáveis de Cores */
        :root {
            --primary-bg: #192230;
            --secondary-bg: #1e2936;
            --tertiary-bg: #243142;
            --accent-color: #ff2178; /* Rosa vibrante */
            --text-light: #f4f4f9;
            --text-dark: #cbd5e1;
            --border-color: rgba(255, 255, 255, 0.1);
        }

        /* Reset e Estilos Básicos */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Fonte mais moderna */
            background-color: var(--primary-bg);
            color: var(--text-light);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow-x: hidden; /* Evita rolagem horizontal indesejada */
        }

        .container {
            background-color: var(--secondary-bg);
            padding: 30px;
            border-radius: 20px; /* Bordas mais suaves */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3); /* Sombra mais intensa */
            width: 100%;
            max-width: 900px; /* Aumenta um pouco a largura máxima */
            position: relative;
            border: 1px solid var(--border-color); /* Borda sutil */
            transition: all 0.3s ease-in-out; /* Transição para o hover */
            backdrop-filter: blur(5px); /* Efeito de vidro */
            margin: 20px; /* Margem para não colar nas bordas em mobile */
        }

        .container:hover {
            box-shadow: 0 15px 45px rgba(255, 33, 120, 0.15); /* Sombra rosa no hover */
            border-color: rgba(255, 33, 120, 0.3);
            transform: translateY(-2px); /* Pequeno lift */
        }

        h1 {
            text-align: center;
            font-size: 2.5rem; /* Título maior */
            font-weight: 700;
            margin-top: 0;
            margin-bottom: 30px;
            background: linear-gradient(90deg, #ffffff, #a0aec0); /* Gradiente para o título */
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .video-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* Proporção 16:9 */
            height: 0;
            overflow: hidden;
            border-radius: 15px; /* Bordas arredondadas para o vídeo */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            background-color: #000;
            border: 2px solid var(--accent-color); /* Borda rosa ao redor do vídeo */
        }

        .video-produto {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Garante que o vídeo preencha o container */
        }

        /* Estilo para o Botão de Voltar */
        .botao-voltar {
            display: inline-flex; /* Para alinhar o ícone e o texto */
            align-items: center;
            padding: 10px 20px;
            background-color: var(--tertiary-bg);
            color: var(--text-light);
            text-decoration: none;
            border-radius: 10px; /* Bordas mais arredondadas */
            transition: all 0.3s ease; /* Transição suave */
            font-weight: 600;
            margin-bottom: 25px;
            border: 1px solid var(--border-color);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
        }

        .botao-voltar i {
            margin-right: 8px; /* Espaçamento entre ícone e texto */
            font-size: 1.1em;
            color: var(--accent-color); /* Ícone rosa */
        }

        .botao-voltar:hover {
            background-color: var(--accent-color);
            color: white;
            border-color: var(--accent-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(255, 33, 120, 0.4);
        }

        .botao-voltar:hover i {
            color: white; /* Ícone branco no hover */
        }

        /* Responsividade para telas menores */
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
                margin-bottom: 20px;
            }
            .container {
                padding: 20px;
                border-radius: 15px;
            }
            .botao-voltar {
                padding: 8px 15px;
                font-size: 0.9rem;
                margin-bottom: 15px;
            }
            .botao-voltar i {
                font-size: 1em;
                margin-right: 5px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <a href="javascript:history.back()" class="botao-voltar">
            <i class="fas fa-arrow-left"></i> Voltar
        </a>

        <h1>Demonstração do Produto Geosync</h1>

        <div class="video-container">
            <video
                controls
                autoplay
                loop
                muted
                poster="./imagens/capa.jpeg"  class="video-produto"
            >
                <source src="./imagens/video.mp4" type="video/mp4">
                Seu navegador não suporta o elemento de vídeo.
            </video>
        </div>
        
        <p style="text-align: center; color: var(--text-dark); margin-top: 25px; font-size: 1.1rem;">
            Assista ao vídeo para ver o Geosync em ação e descobrir todas as suas funcionalidades inovadoras.
        </p>
    </div>

</body>
</html>