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
            <li><a href="cadastro.php">Cadastrar Aluno </a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>

  <div id="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h1>Biblioteca Virtual</h1>
          <h2 class=" subtitle"><b>Saiba quais livros estão disponiveis para leitura na biblioteca do Instituto Federal do Tocantins - IFTO <i>campus</i> Dianópolis</b></h2>
          <ul style="color:white;">
            <li>Cadastro de Alunos</li>
            <li>Livros disponiveis</li>
            <li>Reserva de Livros</li>
            <li>Cadastro de Livros</li>
          </ul>
        </div>
        <div class="col-lg-4 col-lg-offset-2">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img class="img-thumbnail"  src="assets/img/slide1.png" alt=""  width="360px" height="200px"/>
              </div>
              <div class="item">
                <img class="img-thumbnail" src="assets/img/slide2.png" alt=""   width="360px" height="200px"/>
              </div>
              <div class="item">
                <img class="img-thumbnail" src="assets/img/slide3.png" alt=""   width="360px" height="200px"/>
              </div>
            </div>
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

