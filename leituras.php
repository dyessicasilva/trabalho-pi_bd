<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>per oculos tuos</title>

    <!-- Links para o Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Link para o ícone -->
    <link rel="icon" type="imagem/png" href="imagens/logoilv.png"/>

    <!-- Estilos CSS personalizados -->
    <style>
        body{
            background-color: black;
        }
        .navbar {
            background-color: black; /* Cor de fundo do menu */
        }
        .navbar-brand {
            font-size: 22px; /* Tamanho da fonte do nome do site */
        }
        .navbar-brand img {
            width: 120px; /* Largura da logo */
            height: auto;
            margin-right: 10px; /* Espaçamento à direita da logo */
            margin-left: -40px;
            margin-top: -5px;
        }
        .navbar-nav {
            margin-left: auto; /* Alinhar os itens à direita */
        }
        .nav-item {
            margin-right: 20px; /* Espaçamento entre os itens de menu */
        }
        .nav-item:last-child {
            margin-right: -40px; /* Remover o espaçamento à direita do último item */
        }
        h3{
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-xl navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="imagens/logoilv.png" alt="logo">
            PER OCULOS TUOS
        </a>
    
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="home.php">PÁGINA INICIAL</a>
            </li>

            <li class="nav-item">  
                <a class="nav-link" href="leituras.php">LEITURAS</a>
            </li>

            <li class="nav-item">  
                <a class="nav-link" href="/menu">ANOTAÇÕES</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="maisDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    MAIS
                </a>
                <div class="dropdown-menu" aria-labelledby="maisDropdown">
                    <a class="dropdown-item" href="#">Item 1</a>
                    <a class="dropdown-item" href="#">Item 2</a>
                    <a class="dropdown-item" href="#">Item 3</a>
                </div>
            </li>

            <li class="nav-item dropdown">  
                <a class="nav-link dropdown-toggle" href="#" id="entrarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ENTRAR
                </a>
                <div class="dropdown-menu" aria-labelledby="entrarDropdown">
                <a class="dropdown-item" href="form_login.php">Login</a>
                    <a class="dropdown-item" href="form_cadastro.php">Cadastro</a>
                    <hr>
                    <a class="dropdown-item" href="#">Perfil</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

        <h3>LEITURAS EM PROGRESSO</h3>

        <h3>LEITURAS CONCLUÍDAS</h3>
    
        <h3>LEITURAS FUTURAS</h3>
</body>
</html>
