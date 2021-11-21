<!-- --------------LISTAR------------------ -->
<?php require_once "ClassMensagem.php" ?>
<?php require_once "Mensagem.php" ?>
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
  <link rel="stylesheet" href="../../css/cultos.css">
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

  <!-- INTRODUÇÃO -->
  <section class="intro-interna">
    <div class="container">
      <h1>Mensagens</h1>
      <p>mensagens recebidas</p>
      <a href="../login/cabecalho.php"> Voltar </a>
    </div>
  </section>

  <section class="container agenda">
    <?php 
  $classMensagem=new ClassMensagem();
  $array = $classMensagem->listar();
  echo "<center>";
  
  // TITULO TABELA FIXO
  echo "<table border=2 width=80%>";
  echo "<tr><center>
              <th>Nome</th>
              <th>Email</th>
              <th>Telefone</th>
              <th>Evento</th>
              <th>Mensagem</th>
              <th></th>
            </center></tr>";

  // DADOS DA TABELA
  foreach ($array as $array) {
    echo "<tr>";
    echo "<td>" . $array["nome"] . "</td>";
    echo "<td>" . $array["email"] . "</td>";  
    echo "<td>" . $array["telefone"] . "</td>";  
    echo "<td>" . $array["evento"] . "</td>";  
    echo "<td>" . $array["mensagem"] . "</td>";  

// ---------------------- BOTAO EXCLUIR -------------->
    echo "<td> <center>";
?>

    <form action="excluir.php" method="GET">
      <input type=hidden name="id" value=<?php echo $array["id"]; ?>>

      <button type="submit">
        <img src="img/excluir.png" alt="excluir" width="30px">
      </button>
    </form>

    <?php
  echo "</td> </center>";
  echo "</tr>";
}//fim foreach
  echo "</table> </center>";
?>
  </section>
</body>

</html>