

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
                        <li><a href="cadastro.php">Cadastrar Aluno</a></li>
                        <li><a href="index.php">Voltar</a></li>
                    </ul>
                </div>

                <!--/.nav-collapse -->
            </div>
        </div>

        <div id="header">
            <div class="container">
                <div class="row">

                    <div id="principal">
                        <div class="login_estilo">
                            <img src="assets/imagens/man_e.jpg" alt="" style="margin-bottom: 8px;  -webkit-border-radius:58px;">
                            <h2>Bibliotecário</h2>
                            <form action="action/biblioterio.login.php" method="post">
                                <div>
                                    <input class="email1" type="text" name="email" id="email"
                                           placeholder="Digite seu e-mail">
                                </div>
                                <div>
                                    <input class="senha1" type="password" name="senha" id="senha"
                                           placeholder="Digite sua senha">
                                    <?php
                                        if (isset($_GET['erroo'])) {
                                            echo '<br><p style="color:tomato">Usuário ou senha inválidos.</p>';
                                        }
                                        ?>
                                </div>
                                <div>
                                    <input class="submit" type="submit" value="Entrar">
                                </div>
                            </form>

                            

                        </div>
                        <div class="login_estilo">
                            <img src="assets/imagens/man_i.jpg" alt="" style="margin-bottom: 8px;  -webkit-border-radius:58px;">
                            <h2>Aluno</h2>
                            <form action="action/aluno.login.php" method="post" >
                                <div>
                                    <input class="email1" type="text" name="email" id="email"
                                           placeholder="Digite seu e-mail">
                                </div>
                                <div>
                                    <input class="senha1" type="password" name="senha" id="senha"
                                           placeholder="Digite sua senha">
                                    <?php
                                        if (isset($_GET['erro'])) {
                                            echo '<br><p style="color:tomato">Usuário ou senha inválidos.</p>';
                                        }
                                        ?>
                                </div>
                                <div>
                                    <input class="submit" type="submit" value="Entrar">
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

