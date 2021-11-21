<?php require_once "cabecalho.php" ; ?>

<!-- validação da Sessão: -->
<?php 
   if( usuarioEstaLogado()){  //chame a função usuarioEstaLogado()

  header ("Location:cabecalho.php");
  ?>

<?php  }else{   ?>

<!--Formulário de Login:-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="../../css/grid.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/eventos.css">
  <link rel="stylesheet" href="../../css/login.css">
  <link rel="stylesheet" href="../../css/responsivo.css">
  <!-- LOGO -->
  <link rel="icon" href="img/icons/logo.jpeg" type="image/gif" sizes="16x16">

  <title>Comunidade Vida por Vidas</title>
</head>

<body>
  <!-- HEADER -->
  <header class="header">
    <div class="container">
      <a href="../../index.html" class="grid-4">
        <img src="../../img/logo.png" alt="Comunidade Vida por Vidas" style="margin-top: 2px;" width="150px">
      </a>

      <!-- MENU -->
      <nav class="grid-12 header_menu">
        <ul>
          <li><a href="../../sobre.html">Sobre</a></li>
          <li><a href="../../eventos.html">Eventos</a></li>
          <li><a href="../../cultos.html">Cultos</a></li>
          <li><a href="../../contato.html">Contato</a></li>
          <li><a href="../../colabore.html">Colabore</a></li>
          <li><a href="php/login/index.php"><img src="../../img/icons/login.svg" alt="Comunidade Vida por Vidas" class="login-logo"></a></li>
        </ul>
      </nav>
    </div>
  </header>

  <section class="intro-interna">
    <div class="container">
      <h1>Login</h1>
      <p>somente para administradores</p>
    </div>
  </section>

  <!-- FORMULARIO -->

  <section class="container eventos-item">
    <div class="grid-10">
      <form action="login.php" method="post" class="form-evento">

        <input type="text" name="login" required>
        <input type="password" name="senha" required>

        <button type="submit" class="btn btn-black">Entrar </button> <br>
      </form>
    </div>
  </section>



  <!--Fechando o if da sessão:-->
  <?php  } ?>

</body>

</html>