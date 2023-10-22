<?php
session_start();

include "conexao_banco.php";

if (isset($_SESSION['id_usuario'])) {
    $id_usuario = $_SESSION['id_usuario'];
    $query = "SELECT * FROM tb_usuario WHERE id_usuario = $id_usuario";
    $result = pg_query($conn, $query);
    $perfil = pg_fetch_assoc($result);
} else {
    // Redirecionar para a página de login, se o usuário não estiver logado
    header("Location: form_login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário</title>
    <style>
        .profile {
            max-width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .profile h2 {
            text-align: center;
        }
        .profile p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="profile">
        <h2>Perfil do Usuário</h2>
        <p><strong>ID:</strong> <?php echo $perfil['id_usuario']; ?></p>
        <p><strong>Nome:</strong> <?php echo $perfil['nm_usuario']; ?></p>
        <p><strong>Email:</strong> <?php echo $perfil['ds_email']; ?></p>
        <!-- Adicione mais informações conforme necessário -->
    </div>
</body>
</html>
