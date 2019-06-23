<?php

require_once('../class/alunoDAO.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$aluno = new alunoDAO();


try {
    $nome = $aluno->login($email, $senha);
    session_start();
    session_regenerate_id();

    $_SESSION['aluno']['nome'] = $nome;
    $_SESSION['aluno']['email'] = $email;

    header("location: ../index_aluno.php?idaluno=$nome");
} catch (Exception $e) {
    header('location: ../area_acesso.php?erro');
}
?>