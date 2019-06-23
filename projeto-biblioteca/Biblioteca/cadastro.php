

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
                        <li><a href="area_acesso.php">Área de Acesso </a></li>
                        <li><a href="index.php">Voltar</a></li>
                    </ul>
                </div>

                <!--/.nav-collapse -->
            </div>
        </div>

        <div id="header">
            <div class="container">
                <div class="row">

                    <div id="principal2">
                        <div class="cadatro_estilo">
                            <h2>Cadastro de Alunos</h2>
                           
                            <form action="action/aluno.store.php" method="POST">
                                <div class="row" style="margin: 5px;">
                                    <div class="form-group col-md-4" >
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" id="nome"  name="nome" placeholder="Digite seu nome" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="sobrenome">Sobrenome</label>
                                        <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="Digite seu Sobrenome" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="matricula">Número de matricula</label>
                                        <input type="text" class="form-control" id="numero_matricula" name="numero_matricula" placeholder="Digite o número da Matricula" required>
                                    </div>
                                </div>

                                <div class="row" style="margin: 5px;">
                                    <div class="form-group col-md-4">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu E-mail" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="senha">Senha</label>
                                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha" required>
                                    </div>


                                </div>
                                <hr />

                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Enviar</button>
                                        <a href="index.php" class="btn btn-default">Cancelar</a>
                                    </div>
                                </div>

                            </form>
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


