<?php
//session_start();
//if (isset($_SESSION['aluno'])):

   
      require_once('class/reservaDAO.php');
    ?><!DOCTYPE html>
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
                        <li><a href="cadastra_livro.php" ><button  type="button" class="btn btn-info ">Adicionar Livros</button></a></li>
                        <li><a href="livrosReserva.php" class="margin" ><button  type="button" class="btn btn-info ">Livros Reservados</button></a></li>
                        <li><a href="action/sair.php">Sair</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>

        <div id="header">
            <div class="container">
                <div class="row">

                    <div id="principal3">
                        <div class="cadatro_estilo2">

                               <table class="table table-bordered">
                                <thead>
                                    <tr>

                                        <th scope="col" class="ali">Nome do aluno</th>
                                        <th scope="col" class="ali">Nome do Livro Reservado</th>
                                        <th scope="col" class="ali">Autor</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $reservadao = new reservaDAO();
                                    $reservas = $reservadao->findAlll();


                                    foreach ($reservas as $reserva):
                                       
                                        ?>
                                    <tr class="ali">
                                        <td><b><?= $reserva->nome_aluno ?></b></td>
                                            <td><?= $reserva->nome_livro ?></td>
                                            <td><?= $reserva->autor ?></td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                            
                                  
                        </div>
                    </div>

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
