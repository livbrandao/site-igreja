<!-- --------------LISTAR------------------ -->
<?php require_once "ClassEvento.php" ?>
<?php require_once "Evento.php" ?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../css/normalize.css">
  <link rel="stylesheet" href="../../../css/reset.css">
  <link rel="stylesheet" href="../../../css/grid.css">
  <link rel="stylesheet" href="../../../css/style.css">
  <link rel="stylesheet" href="../../../css/login.css">
  <link rel="stylesheet" href="../../../css/cultos.css">
  <link rel="stylesheet" href="../../../css/responsivo.css">

  <link rel="icon" href="../../../img/icons/logo.jpeg" type="image/gif" sizes="16x16">

  <title>Comunidade Vida por Vidas</title>
</head>

<body>
  <!-- HEADER -->
  <header class="header">
    <div class="container">
      <a href="../../../index.html" class="grid-4">
        <img src="../../../img/logo.png" alt="Comunidade Vida por Vidas" style="margin-top: 2px;" width="150px">
      </a>

      <!-- MENU -->
      <nav class="grid-12 header_menu">
        <ul>
          <li><a href="../../../sobre.html">Sobre</a></li>
          <li><a href="../../../eventos.php">Eventos</a></li>
          <li><a href="../../../cultos.php">Cultos</a></li>
          <li><a href="../../../contato.html">Contato</a></li>
          <li><a href="../../../colabore.html">Colabore</a></li>
          <li><a href="index.php"><img src="../../../img/icons/login.svg" alt="Comunidade Vida por Vidas" class="login-logo"></a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- INTRODUÇÃO -->
  <section class="intro-interna">
    <div class="container">
      <h1>Eventos</h1>
      <p>lista de eventos cadastrados</p>
      <a href="../../login/cabecalho.php"> Voltar </a>
    </div>
  </section>

  <section class="container agenda">
    <?php 
      $classEvento=new ClassEvento();
      $array = $classEvento->listar();
      echo "<center>";
      
      // TITULO TABELA FIXO
      echo "<table border=2 width=80%>";
      echo "<tr><center>
                <th></th>
                <th>Nome</th>
                <th>Descrição</th>
                </center></tr>";

      // DADOS DA TABELA
      foreach ($array as $array) {
        echo "<tr>";
        echo "<td>" . $array["id"] . "</td>";
        echo "<td>" . $array["nome"] . "</td>";
        echo "<td>" . $array["descricao"] . "</td>";  

    // ---------------------- BOTAO EXCLUIR -------------->
        echo "<td><center>";
?>

    <form action="excluir.php" method="GET">
      <input type=hidden name="id" value=<?php echo $array["id"]; ?>>

      <button type="submit">
        <img src="img/excluir.png" alt="excluir" width="30px">
      </button>
    </form>

    <?php
  echo "</center></td>";

// ---------------------- BOTÃO ALTERAR ----------------->
  echo "<td><center>";
?>

    <form action="alterar.php" method="GET">
      <input type=hidden name="id" value=<?php echo $array["id"]; ?>>

      <input type=hidden name="nome" value=<?php echo $array["nome"]; ?>>

      <input type=hidden name="descricao" value=<?php echo $array["descricao"]; ?>>

      <button type="submit">
        <img src="img/alterar.png" alt="alterar" width="30px">
      </button>
    </form>


    <?php
  echo "</center></td> </tr>";
}//fim foreach
  echo "</table> </center>";
?>

  </section>
</body>

</html>