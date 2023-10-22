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
        .titulo_carousel{
            text-align: center;
            color: white;
        }
    </style>
</head>
<body>

<?php
session_start();
if (isset($_SESSION['nm_usuario'])) {
    $nm_usuario = $_SESSION['nm_usuario'];
}
?>

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
                <?php if (isset($nm_usuario)) : ?>
                    <a class="nav-link dropdown-toggle" href="#" id="usuarioDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $nm_usuario; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="usuarioDropdown">
                        <a class="dropdown-item" href="teste.php">Perfil</a>
                        <a class="dropdown-item" href="form_logout.php">Sair</a>
                    </div>
                <?php else : ?>
                    <a class="nav-link dropdown-toggle" href="#" id="entrarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CONTA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="entrarDropdown">
                        <a class="dropdown-item" href="form_login.php">Login</a>
                        <a class="dropdown-item" href="form_cadastro.php">Cadastro</a>
                    </div>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>


<div class="card bg-dark text-white border-0">
  <img class="img-fluid" src="imagens/idoso3.jpg" alt="principal">
</div>


<div class="jumbotron jumbotron-fluid">
  <div class="container text-center" style="margin-top: -2.5%; margin-bottom: -2%;">
      <h1>Sobre a plataforma</h1><hr>
  <div class="row">

    <div class="col">
      <img src="tcc/memoriahome.png" class="img-fluid" alt="memorias">
<br>
      <h5> MEMÓRIAS </h5> 
        <p>Adicione recordações fotográficas</p>
    </div>

    <div class="col">
      <img src="tcc/metashome.png" class="img-fluid" alt="metas">
<br>
      <h5> METAS </h5>
          <p>Estabeleça metas que você pretenda realizar</p>
    </div>

    <div class="col">
      <img src="tcc/calendario.png" class="img-fluid" alt="calendario" style="margin-top: 2%;">
<br>
      <h5> PLANNER </h5>
          <p>Adicione seu planejamento</p>
    </div>
    </div>
    </div>
    </div>
    
    <div class="container mt-5">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicadores do Carousel -->
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
            </ol>

    <div class="titulo_carousel">
        <h2>Destaques da semana</h2>
        <h6>Fique sabendo das explorações e novidades dos últimos tempos!</h6><br>
    </div>

            <!-- Slides do Carousel -->
            <div class="carousel-inner text-center">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="card" style="width: 30rem;  height: 33rem; display: inline-block; background-color: #181C23;">
                        <div class="card-body">
                            <h5 class="card-title">Título do card 1</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card 1</h6>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card 1.</p>
                            <a href="#" class="card-link">Link do card 1</a>
                            <a href="#" class="card-link">Outro link 1</a>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="card" style="width: 30rem;  height: 33rem; display: inline-block;">
                        <div class="card-body">
                            <h5 class="card-title">Título do card 2</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card 2</h6>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card 2.</p>
                            <a href="#" class="card-link">Link do card 2</a>
                            <a href="#" class="card-link">Outro link 2</a>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 3 -->
                <div class="carousel-item">
                    <div class="card" style="width: 30rem;  height: 33rem; display: inline-block;">
                        <div class="card-body">
                            <h5 class="card-title">Título do card 3</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card 3</h6>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card 3.</p>
                            <a href="#" class="card-link">Link do card 3</a>
                            <a href="#" class="card-link">Outro link 3</a>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 4 -->
                <div class="carousel-item">
                    <div class="card" style="width: 30rem;  height: 33rem; display: inline-block;">
                        <div class="card-body">
                            <h5 class="card-title">Título do card 4</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card 4</h6>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card 4.</p>
                            <a href="#" class="card-link">Link do card 4</a>
                            <a href="#" class="card-link">Outro link 4</a>
                        </div>
                    </div>
                </div>
                
                <!-- Slide 5 -->
                <div class="carousel-item">
                    <div class="card" style="width: 30rem;  height: 33rem; display: inline-block;">
                        <div class="card-body">
                            <h5 class="card-title">Título do card 5</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Subtitulo do card 5</h6>
                            <p class="card-text">Um exemplo de texto rápido para construir o título do card e fazer preencher o conteúdo do card 5.</p>
                            <a href="#" class="card-link">Link do card 5</a>
                            <a href="#" class="card-link">Outro link 5</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Controles do Carousel -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
            </a>
        </div>
    </div>

<br><br><br><br>

    <div class="container text-center" style="margin-bottom: -2%;color: white;">
      <h1>Dicas de leitura</h1><br>
  <div class="row">

    <div class="col">
      <img src="tcc/memoriahome.png" class="img-fluid" alt="memorias">
<br>
      <h5> MEMÓRIAS </h5> 
        <p>Adicione recordações fotográficas</p>
    </div>

    <div class="col">
      <img src="tcc/metashome.png" class="img-fluid" alt="metas">
<br>
      <h5> METAS </h5>
          <p>Estabeleça metas que você pretenda realizar</p>
    </div>

    <div class="col">
      <img src="tcc/calendario.png" class="img-fluid" alt="calendario" style="margin-top: 2%;">
<br>
      <h5> PLANNER </h5>
          <p>Adicione seu planejamento</p>
    </div>
    </div>
    </div>

    <br><br><br>
    <footer style="text-align: center;">
    <hr>
    <ul style="list-style-type: none; display: flex; justify-content: space-between; padding: 0;">
        <li style="margin-right: auto;">seuemail@exemplo.com</li>
        <li style="margin-left: auto;">Todos os direitos reservados &copy; 2023</li>
    </ul>
</footer>



</body>
</html>
