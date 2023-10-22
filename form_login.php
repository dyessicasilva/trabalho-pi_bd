<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    
    <!-- links bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- link icone -->
    <link rel="icon" type="imagem/png" href="imagens/logoilv.png"/>

    <script>
        function mouseoverPass(obj) {
        var obj = document.getElementById('myPassword'); 
        obj.type = "text";
    }
        function mouseoutPass(obj) {
        var obj = document.getElementById('myPassword');
        obj.type = "password";
    }
</script>

    <style>
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
        .olho {
            cursor: pointer;
            left: 85%;
            position: absolute;
            width: 20px;
            margin-top: -28px;
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

<div class="card bg-light mb-3" style="max-width: 40rem; margin-left: 25%; margin-top: 2%">
  <!-- <div class="card-header">Cabeçalho</div> -->
  <div class="card-body">
    <form action="/trabalho pi_bd/autenticando_usuario.php" method="POST">
        <br>
        <div class="text-center">
            <h2>Entre na sua conta</h2>
            <h6> Não possui uma conta? <a href='/trabalho pi_bd/form_cadastro.php'> Faça seu cadastro</a></h6><hr><br>
        </div>

        <div class="form-group col-md-10" style="margin-left: 8%">
            <label for="pwd">User</label>
            <input type="user" class="form-control" name="user" placeholder="Informe seu user" required>
            <!-- <small class="form-text text-muted">Nunca vamos compartilhar seu email, com ninguém.</small> -->
        </div>

        <div class="form-group col-md-10" style="margin-left: 8%">
            <label for="pwd">Senha</label>
            <input type="password" class="form-control" name="senha" id="myPassword" placeholder="Informe sua senha" required>
            <img src="imagens/eye.svg" onclick="mouseoverPass();" onmouseout="mouseoutPass();" id="olho" class="olho"/>
        </div>
        <br>

        <div class="text-center">
            <input class='btn btn-lg btn btn-outline-dark' type="submit" value="Entrar">            
        </div>
    </form>
  </div>
</div>

</body>
</html>
