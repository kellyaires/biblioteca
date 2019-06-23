
<?php
session_start();
if (isset($_SESSION['bibliotecario'])):
require('class/livroDAO.php');
//require_once ('class/livro.php');
;
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="Kelly Aires Rodrigues" content="">

        <title>Biblioteca Virtual IFTO</title>
        <link rel="shortcut icon" href="assets/img/ifto.jpg" type="image/x-png">

        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.css" rel="stylesheet">
        <link href="assets/css/bootstrap-theme.css" rel="stylesheet">

        <!-- siimple style -->
        <link href="assets/css/style.css" rel="stylesheet">


    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">BIBLIOTECA IFTO</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">               
                        <li><a href="index_bibliotecario.php" class="margin" ><button  type="button" class="btn btn-info ">Listar Livros</button></a></li>
                        <li><a href="cadastra_livro.php" ><button  type="button" class="btn btn-info ">Cadastrar Livros</button></a></li>
                        <li><a href="livrosReserva.php" class="margin" ><button  type="button" class="btn btn-info ">Livros Reservados</button></a></li>
                        <li><a href="action/sair.php">Sair</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>

        <div id="header">
            <div id="principal2">
                <div class="cadatro_estilo">
                    <h2>Editar livro</h2>  
                    <?php
                    $idlivro = (int) $_GET['idlivro'];
                    $livrodao = new livroDAO();
                    $livro = $livrodao->mostralivro($idlivro);
                    ?> 

                    <form action="action/livro.update.php" method="POST">
                        
                         <input type="hidden" name="idlivro" value="<?= $idlivro ?>">
                         
                        <div class="row" style="margin: 5px;">
                            <br>
                            <div class="form-group col-md-4" >
                                <label for="name">Nome do livro</label>
                                <input type="text" class="form-control" id="nome"  name="nome" placeholder="Digite o nome do livro" value="<?= $livro->nome ?>" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="autor">Nome do autor</label>
                                <input type="text" class="form-control" id="autor" name="autor" placeholder="Digite o nome do autor" value="<?= $livro->autor ?>"  required>
                            </div> 
                            <div class="form-group col-md-4">
                                <label for="data">Ano do Livro</label>
                                <input class="form-control" id="data" type="date" name="data" value="<?= $livro->data ?>"  required>

                            </div> 
                        </div>

                        <hr />

                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Editar</button>
                                <a href="index_bibliotecario.php" class="btn btn-default">Voltar</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p class="copyright">&copy; Aluna do IFTO <i>Campus</i> Dianópolis - Kelly Aires</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

    </body>

</html>


  <?php
endif;
header('location: ../Biblioteca/area_acesso.php');
?>