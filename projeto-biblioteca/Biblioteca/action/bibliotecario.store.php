<?php

require_once('../class/bibliotecarioDAO.php');

$bibliotecario= new bibliotecario();
$bibliotecario->nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
$bibliotecario->sobrenome = filter_var($_POST['sobrenome'], FILTER_SANITIZE_STRING);
$bibliotecario->senha = filter_var($_POST['senha'], FILTER_SANITIZE_STRING);
$bibliotecario->email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);


$bibliotecariodao = new bibliotecarioDAO();
$bibliotecariodao->store($bibliotecario);
//------------------------------


header('location: ../index.php');
?>