<?php

include "conexao_banco.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $user = $_POST["user"];
    $senha = $_POST["senha"];


    $nome = filter_var($nome, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $user = filter_var($user, FILTER_SANITIZE_STRING);


    
    if (empty($nome) || empty($email) || empty($senha) || empty($user)) {
        echo "Por favor, preencha todos os campos.";
    } else {

        $verifica_email = "SELECT * FROM tb_usuario WHERE ds_email = $1";
        $stmt_verifica = pg_prepare($conn, "verifica_email", $verifica_email);
        $result_verifica = pg_execute($conn, "verifica_email", array($email));

        $verifica_user = "SELECT * FROM tb_usuario WHERE ds_user = $1";
        $stmt_verifica_user = pg_prepare($conn, "verifica_user", $verifica_user);
        $result_verifica_user = pg_execute($conn, "verifica_user", array($user));

        if (pg_num_rows($result_verifica) > 0) {
            echo "Este email já está em uso. Por favor, use um email diferente.";
        } else if (pg_num_rows($result_verifica_user) > 0) {
            echo "Este nome de usuário já está em uso. Por favor, escolha um nome de usuário diferente.";
        } else {
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

            
            $sql = "INSERT INTO tb_usuario (nm_usuario, ds_email, ds_user, ds_senha) VALUES ($1, $2, $3, $4) RETURNING id_usuario";
            $stmt = pg_prepare($conn, "minha_insercao", $sql);
            $result = pg_execute($conn, "minha_insercao", array($nome, $email, $user, $senhaHash));

            if ($result) {
            
                echo "Cadastro realizado com sucesso!";
                header('refresh:2;url=form_login.php');
            } else {
                echo "Erro ao cadastrar: " . pg_last_error($conn);
            }
        }
    }
    pg_close($conn);
}
?>
