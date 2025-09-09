<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZYRA Kids</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                <a href="index.php"><i class="fa-solid fa-house"></i> Dashboard</a>
                <a href="#" class="active"><i class="fa-solid fa-child"></i> Minha Criança</a>
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
    </div>
    <main class="content">

    </main>
    <script src="script.js"></script>
</body>

</html>