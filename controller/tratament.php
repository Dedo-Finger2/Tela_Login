<?php
// Inicinado seção
session_start();

// Carregando todas as classes
require_once("../autoload.php");

$conexao = new mysqli("localhost", "root", "", "user_list");

// Verifique se o formulário de login foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenha as credenciais do usuário do formulário
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = $conexao->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $sql->bind_param("ss", $email, $password);
    $sql->execute();

    $result = $sql->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['logged_in'] = true;
    } else {
        $_SESSION['logged_in'] = false;
        header('Location: ../index.php?erro=true');
        exit; // Encerra o script para evitar que o código abaixo seja executado
    }
}

$conexao->close();