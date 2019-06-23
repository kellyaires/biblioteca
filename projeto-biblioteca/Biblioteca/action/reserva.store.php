<?php

require_once('../class/reservaDAO.php');
require_once ('../class/livroDAO.php');






$reserva = new reserva();

$reserva->idaluno = filter_var($_GET['idaluno'], FILTER_SANITIZE_STRING);
$reserva->idlivro =  filter_var($_GET['idlivro'], FILTER_SANITIZE_STRING);
$reserva->nome_aluno =  filter_var($_GET['nome_aluno'], FILTER_SANITIZE_STRING);
$reserva->nome_livro =  filter_var($_GET['nome_livro'], FILTER_SANITIZE_STRING);
$reserva->autor =  filter_var($_GET['autor'], FILTER_SANITIZE_STRING);


$reservadao = new reservaDAO();
$reservadao->store($reserva);

$livro = new livro();

$livro->idlivro = filter_var($_GET['idlivro'], FILTER_SANITIZE_STRING);
$livro->livro_disponivel = filter_var($_GET['livro_disponivel'], FILTER_SANITIZE_STRING);




$livrodao = new livroDAO();
$livrodao->updatedi($livro);


header('location: ../index_aluno.php?idaluno='.$reserva->idaluno);
?>

