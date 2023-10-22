<?php
session_start();


include "conexao_banco.php";

$user = $_POST['user'];
$senha = $_POST['senha'];

$query = "SELECT * FROM tb_usuario WHERE ds_user='$user'";

$result = pg_query($conn, $query);
$usuario = pg_fetch_assoc($result);

if ($usuario && password_verify($senha, $usuario['ds_senha'])) {
    $_SESSION['id_usuario'] = $usuario['id_usuario'];
    $_SESSION['nm_usuario'] = $usuario['nm_usuario'];
    header('Location: home.php'); // Redirecione para a página de painel
} else {

    echo "informações de login incorretas.";
}

pg_close($conn);
?>
