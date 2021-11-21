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
  <link rel="stylesheet" href="../../css/login.css">
  <link rel="stylesheet" href="../../css/responsivo.css">

  <link rel="icon" href="../../img/icons/logo.jpeg" type="image/gif" sizes="16x16">

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
          <li><a href="../../eventos.php">Eventos</a></li>
          <li><a href="../../cultos.php">Cultos</a></li>
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
      <a href="logout.php"> Deslogar </a>
    </div>
  </section>

  <section class="container">
    <nav class="menu grid-4">
      <ul>
        <!-- ADM -->
        <li>
          <a>Administradores</a>
          <ul>
            <li>
              <a href="cadastro.php">Cadastrar</a>
            </li>
            <li>
              <a href="formListar.php">Listar</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- EVENTOS -->
    <nav class="menu grid-4">
      <ul>
        <li>
          <a>Eventos</a>
          <ul>
            <li>
              <a href="../eventos/manter-evento/index.php">Cadastrar</a>
            </li>
            <li>
              <a href="../eventos/manter-evento/listar.php">Listar</a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

    <!-- CULTOS -->
    <nav class="menu grid-4">
      <ul>
        <li>
          <a>Cultos</a>
          <ul>
            <li>
              <a href="../cultos/index.php">Cadastrar</a>
            </li>
            <li>
              <a href="../cultos/listar.php">Listar</a>
            </li>
            <!-- <li>
              <a href="../cultos/localizar.php">Localizar</a>
            </li> -->
          </ul>
        </li>
      </ul>
    </nav>

    <!-- MENSAGENS -->
    <nav class="menu grid-4">
      <ul>
        <li>
          <a href="../mensagens/listar.php">Mensagens</a>
        </li>
      </ul>
    </nav>
  </section>


  <!--Fechando o if:-->
  <?php  }   ?>

</body>

</html>