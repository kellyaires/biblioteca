<?php

require_once('../class/bibliotecarioDAO.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$bibliotecario = new bibliotecarioDAO();


try {
    $nome = $bibliotecario->login($email, $senha);
    session_start();
    session_regenerate_id();

    $_SESSION['bibliotecario']['nome'] = $nome;
    $_SESSION['bibliotecario']['email'] = $email;

    header("location: ../index_bibliotecario.php?idbibliotecario=$nome");
} catch (Exception $e) {
    header('location: ../area_acesso.php?erroo');
}
?>