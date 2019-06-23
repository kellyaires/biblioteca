<?php
session_start();
if (isset($_SESSION['aluno'])):

    require_once('class/livroDAO.php');
    require_once('class/livro.php');
    require_once('class/alunoDAO.php');
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
            <?php
                        $idaluno = (int) $_GET['idaluno'];
                        $alunodao = new alunoDAO();
                        $aluno = $alunodao->find($idaluno);
              ?>
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
                           
                            <li><a href="#" class="margin" ><button  type="button" class="btn btn-warning">Seja Bem-Vindo <b><p><?= $aluno->nome ?></p></b></button></a></li>
                            <li><a href="livroalunoReserva.php?idaluno=<?= $aluno->idaluno ?>" class="margin" ><button  type="button" class="btn btn-info ">Livros Reservados</button></a></li>
                            <li><a href="action/sair.php" class="margin" ><button  type="button" class="btn btn-info ">Sair</button></a></li>
                            
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

                                            <th scope="col" class="ali">Nome</th>
                                            <th scope="col" class="ali">Autor</th>
                                            <th scope="col" class="ali">Ano</th>
                                            <th scope="col" class="ali">Disponivel</th>
                                            <th scope="col" class="ali">Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php
                                          $livrodao = new livroDAO();
                                          $livros = $livrodao->findAlll();


                                          foreach ($livros as $livro):
                                          $data = new DateTime($livro->data);
                                          $livro->data = $data->format('d/m/Y');
                                     ?>
                                            <tr class="ali">
                                               
                                                <td><?= $livro->nome ?></td>
                                                <td><?= $livro->autor ?></td>
                                                <td><?= $livro->data ?></td>
                                                <td><b><?= $livro->livro_disponivel ?></b></td>

                                                <td>

                                                   
                                                   
                                                    <a href="action/reserva.store.php?idaluno=<?= $aluno->idaluno ?>&idlivro=<?= $livro->idlivro ?>&nome_aluno=<?= $aluno->nome ?>&nome_livro=<?= $livro->nome ?>&autor=<?= $livro->autor  ?>&livro_disponivel=nao" class="btn btn-success" title="clique aqui para Reservar">Reservar Livro</a>

                                                </td>
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

    <?php
endif;
header('location: ../Biblioteca/area_acesso.php');
?>