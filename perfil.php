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


<link rel="icon" type="imagem/png" href="imagens/logoilv.png"/>


<style>
    body{
        background-color: black;
    }
    .navbar {
        background-color: black; 
    }
    .navbar-brand {
        font-size: 22px; 
    }
    .navbar-brand img {
        width: 120px; 
        height: auto;
        margin-right: 10px;
        margin-left: -40px;
        margin-top: -5px;
    }
    .navbar-nav {
        margin-left: auto; 
    }
    .nav-item {
        margin-right: 20px; 
    }
    .nav-item:last-child {
        margin-right: -40px; 
    }
    .titulo_carousel{
        text-align: center;
        color: white;
    }
    .profile-cover {
            height: 300px;
            background-color: #1DA1F2;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin-top: -2%;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 3px solid #fff;
            object-fit: cover;
            z-index: 1;
            position: relative;
            margin-top: 5%;
        }

        .profile-details {
            background-color: #f2f2f2;
            padding: 20px;
            height: 200px;
            position: relative;
            z-index: 0;
            text-align: center;
            margin-top: -150px;
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

    <div class="container mt-5">
        <div class="profile-cover mb-4">
            <img class="profile-picture" src="https://via.placeholder.com/150" alt="Imagem de Perfil">
        </div>
        
        <div class="profile-details">
          <br><br>
        <h4 class="nomes mt-3">Seu Nome</h4>
            <h6 class="nomes mt-3">user</h6>
     
        </div>
    </div>

    <div class="container">
    <nav class="navbar navbar-expand-xl navbar-light bg-light" style="height: 50px; margin-top: 1%">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav" style="margin-right: 73%;">
                <li class="nav-item">
                    <a class="nav-link" href="/infos">Suas Informações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre Mim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Listas</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="conteiner">
<div class="card mx-auto rounded-0" style="width: 70rem; height: 20rem; margin-top: 1%"> 
  <div class="card-body" >
    <h5 class="card-title">Título do card</h5>
    <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
  </div>
</div>
</div>


</body>
</html>


<!-- 
<?php
// session_start();

// Verificar se o usuário está logado
// if (!isset($_SESSION['id_usuario'])) {
//     header('Location: login.php'); // Redirecionar para a página de login se não estiver logado
//     exit();
// }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seus Dados</title>
    <!-- Seus outros cabeçalhos aqui -->
<!-- </head>
<body>
    <h4 class="nomes mt-3">Seu Nome: <?php ; ?></h4>
    <h6 class="nomes mt-3">Seu Email: <?php ; ?></h6>
    <h6 class="nomes mt-3">Seu Nome de Usuário: <?php ; ?></h6> -->
    <!-- Outras informações que você deseja mostrar -->

    <!-- Seus outros elementos HTML aqui -->
<!-- </body>
</html> --> -->
