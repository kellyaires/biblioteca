<?php

require_once('../class/livroDAO.php');

$_POST['data'] = str_replace("T", " ", $_POST['data']);

$livro= new livro();
$livro->nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
$livro->autor = filter_var($_POST['autor'], FILTER_SANITIZE_STRING);
$livro->data = filter_var($_POST['data'], FILTER_SANITIZE_STRING);


$livrodao = new livroDAO();
$livrodao->store($livro);



header('location: ../index_bibliotecario.php');
?>