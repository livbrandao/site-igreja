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
  <link rel="stylesheet" href="../../css/cultos.css">
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
          <li><a href="../../cultos.php">Cultos</a></li>
          <li><a href="../../contato.html">Contato</a></li>
          <li><a href="../../colabore.html">Colabore</a></li>
          <li><a href="../../login.html" class="menu-ativo"><img src="../../img/icons/login.svg" alt="Comunidade Vida por Vidas" style="position: relative; justify-content: center; align-items: center;"></a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- INTRODUÇÃO -->
  <section class="intro-interna">
    <div class="container">
      <h1>Cultos</h1>
      <p class="alert-success"> cadastrar novos cultos </p>
      <a href="../login/cabecalho.php"> Voltar </a>
    </div>
  </section>

  <section class="formulario">
    <form method="POST" action="ControleCulto.php" class="form-evento grid-9">
      <label>Titulo:</label>
      <input type="text" name="titulo" required>

      <label>Data:</label>
      <input type="date" name="data" required>

      <label>Hora:</label>
      <input type="time" name="hora" required>

      <label>Descrição</label>
      <textarea name="descricao" cols="30" rows="10" required></textarea>

      <button type="submit" value="enviar" name="SendAddMsg" class="btn btn-black">Enviar</button>
    </form>
  </section>
</body>

</html>