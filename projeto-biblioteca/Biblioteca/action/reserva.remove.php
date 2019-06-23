<?php

require_once('../class/reservaDAO.php');

$idlivro = (int) $_GET['idlivro'];
$idaluno = (int) $_GET['idaluno'];


$livrodao = new reservaDAO();
$livrodao->remove($idlivro);



header('location: ../index_aluno.php?idaluno=' . $idaluno);
?>
