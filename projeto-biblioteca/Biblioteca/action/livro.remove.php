<?php
    require_once('../class/livroDAO.php');

    $idlivro = (int) $_GET['idlivro'];
 
    
    
    $livrodao = new livroDAO();
    $livrodao->remove($idlivro);
   
    

    header('location: ../index_bibliotecario.php');
?>
