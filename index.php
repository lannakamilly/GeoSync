<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZYRA Kids</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="shortcut icon" href="./imagens/GeoSync-bg.png" type="image/x-icon">
</head>

<body>
    <div class="container">
        <aside class="sidebar">
            <div class="logo">
                <img class="geosync-logo" src="./imagens/GeoSync-bg.png" alt="logo">
                <div>
                    <h2>ZYRA Kids</h2>
                    <p>Monitoramento Inteligente</p>
                </div>
            </div>
            <hr>
            <nav class="menu">
                <a href="#" class="active"><i class="fa-solid fa-house"></i> Dashboard</a>
                <a href="crianca.php"><i class="fa-solid fa-child"></i> Minha Criança</a>
                <a href="localizacao.php"><i class="fa-solid fa-location-dot"></i> Localização</a>
                <a href="config.php"><i class="fa-solid fa-gear"></i> Configurações</a>
            </nav>

            <div class="settings">
                <div class="user">
                    <div class="mode">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-moon-stars-fill" viewBox="0 0 16 16" style="
                            color: #5b5b5bf0;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            ">
                            <path
                                d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278" />
                            <path
                                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z" />
                        </svg>
                        <button class="modos">Modo escuro</button>
                    </div>
                </div>
                <div class="info">
                    <div class="logo-user">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                            class="icon-user" style="
            background-color: #ff1b54;
            color: #fff;
            border-radius: 30px;
            padding: 5px;" viewBox=" 0 0 16 16">
                            <path
                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                        </svg>
                        <div>
                            <h2>Usuário</h2>
                            <p>email@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="content">
            <div class="title">
                <h1>Dashboard de monitoramento</h1>
                <p>Acompanhe o status em tempo real da mochila</p>
            </div>
            <div class="warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                    <path
                        d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z" />
                    <path
                        d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z" />
                </svg>
                <h3>Nenhuma mochila encontrada. Certifique-se de que sua mochila está configurada.</h3>
            </div>
            <div class="status-cards">
                <div class="card">
                    <div class="card-header">
                        <span>Status da Mochila</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                            class="bi bi-shield-shaded" viewBox="0 0 16 16" style="color:#f7144d;">
                            <path fill-rule="evenodd"
                                d="M8 14.933a1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                        </svg>
                    </div>
                    <div class="card-body">
                        <span class="status-label desconectado">Desconectado</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>Nível da Bateria</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor"
                            class="bi bi-battery" viewBox="0 0 16 16">
                            <path
                                d="M0 6a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1zm14 3a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8" />
                        </svg>
                    </div>
                    <div class="card-body">
                        <span class="battery-level">0%</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>Conexão</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-wifi" viewBox="0 0 16 16">
  <path d="M15.384 6.115a.485.485 0 0 0-.047-.736A12.44 12.44 0 0 0 8 3C5.259 3 2.723 3.882.663 5.379a.485.485 0 0 0-.048.736.52.52 0 0 0 .668.05A11.45 11.45 0 0 1 8 4c2.507 0 4.827.802 6.716 2.164.205.148.49.13.668-.049"/>
  <path d="M13.229 8.271a.482.482 0 0 0-.063-.745A9.46 9.46 0 0 0 8 6c-1.905 0-3.68.56-5.166 1.526a.48.48 0 0 0-.063.745.525.525 0 0 0 .652.065A8.46 8.46 0 0 1 8 7a8.46 8.46 0 0 1 4.576 1.336c.206.132.48.108.653-.065m-2.183 2.183c.226-.226.185-.605-.1-.75A6.5 6.5 0 0 0 8 9c-1.06 0-2.062.254-2.946.704-.285.145-.326.524-.1.75l.015.015c.16.16.407.19.611.09A5.5 5.5 0 0 1 8 10c.868 0 1.69.201 2.42.56.203.1.45.07.61-.091zM9.06 12.44c.196-.196.198-.52-.04-.66A2 2 0 0 0 8 11.5a2 2 0 0 0-1.02.28c-.238.14-.236.464-.04.66l.706.706a.5.5 0 0 0 .707 0l.707-.707z"/>
</svg>
                    </div>
                    <div class="card-body">
                        <span class="status-label desconectado">Desconectado</span>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <span>Última Atualização</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
</svg>
                    </div>
                    <div class="card-body">
                        <span class="update-label">Sem dados</span>
                    </div>
                </div>
            </div>
            <div class="main-cards">
                <div class="card-localizacao">
                    <div class="card-header">
                        <span>Localização Atual</span>
                    </div>
                    <div class="card-map">
                        <i class="fa-solid fa-map-marker-alt" style="font-size:48px;color:#b0b4bb;"></i>
                        <div class="map-label">Localização não disponível</div>
                    </div>
                </div>
                <div class="card-crianca">
                    <div class="card-header">
                        <span>Informações da Criança</span>
                    </div>
                    <div class="card-body">
                        <div class="nome-crianca">Maria Silva Santos</div>
                        <div class="info-crianca">Nascimento: 14/03/2015</div>
                        <div class="info-crianca">Altura: 125cm</div>
                        <div class="info-crianca">Característica: <span style="color:#1b1b1b;font-weight:500;">Cabelos cacheados castanhos, sempre usa uma pulseira vermelha</span></div>
                        <div class="alergia-box">
                            <i class="fa-solid fa-triangle-exclamation" style="color:#000;"></i>
                            <span>Alergia a nozes e amendoim</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>