<?php require_once("logica-usuario.php") ?>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/normalize.css">
  <link rel="stylesheet" href="../../css/reset.css">
  <link rel="stylesheet" href="../../css/grid.css">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/contato.css">
  <link rel="stylesheet" href="../../css/login.css">
  <link rel="stylesheet" href="../../css/responsivo.css">

  <link rel="icon" href="../../img/icons/logo.jpeg" type="image/gif" sizes="16x16">

  <title>Comunidade Vida por Vidas</title>
</head>

<body>
  <!-- HEADER -->
  <header class="header">
    <div class="container">
      <a href="index.html" class="grid-4">
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
          <li><a href="index.php"><img src="../../img/icons/login.svg" alt="Comunidade Vida por Vidas" class="login-logo"></a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- validação da Sessão: -->
  <?php if (usuarioEstaLogado()){  ?>

  <!--Se o usuário estiver logado, aparecerá o seguinte menu:-->
  <!-- INTRODUÇÃO -->
  <section class="intro-interna">
    <div class="container">
      <h1>Administradores</h1>
      <p class="alert-success"> User:
        <?php echo usuarioLogado(); ?> </p>
      <a href="cabecalho.php"> Voltar </a>
    </div>
  </section>

  <!-- FORMULARIO -->
  <section class="contato">
    <div class="container dados-evento">
      <form action="validaCadastro.php" method="post" class="contato_form grid-9">
        <h3> Faça o seu cadastro: </h3>
        <input type="text" name="login" placeholder="Login" required> <br>

        <input type="password" name="senha" placeholder="Senha" required> <br>

        <button type="submit" class="btn">Cadastrar </button>
      </form>
      <?php  }   ?>
</body>

</html>