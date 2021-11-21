<?php require_once "php/cultos/Conexao.php" ?>
<?php require_once "php/cultos/ClassCulto.php" ?>
<?php require_once "php/cultos/Culto.php" ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/sobre.css">
  <link rel="stylesheet" href="css/cultos.css">
  <link rel="stylesheet" href="css/responsivo.css">
  <!-- Logo -->
  <link rel="icon" href="img/icons/logo.jpeg" type="image/gif" sizes="16x16">
  <!-- JS -->
  <script>
  document.documentElement.classList.add("js");
  </script>

  <title>Comunidade Vida por Vidas</title>
</head>

<body>
  <!-- HEADER -->
  <header class="header">
    <div class="container">
      <a href="index.html" class="grid-4">
        <img src="img/logo.png" alt="Comunidade Vida por Vidas" style="margin-top: 2px;" width="150px">
      </a>

      <!-- MENU -->
      <nav class="grid-12 header_menu">
        <ul>
          <li><a href="sobre.html">Sobre</a></li>
          <li><a href="eventos.php">Eventos</a></li>
          <li><a href="cultos.php" class="menu-ativo">Cultos</a></li>
          <li><a href="contato.html">Contato</a></li>
          <li><a href="colabore.html">Colabore</a></li>
          <li><a href="php/login/index.php"><img src="img/icons/login.svg" alt="Comunidade Vida por Vidas" class="login-logo"></a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- INTRODUÇÃO -->
  <section class="intro-interna">
    <div class="container">
      <h1 data-anime="500" class="fadeInDown">CULTOS</h1>
      <p data-anime="1000" class="fadeInDown">conheça mais detalhes da agenda semanal</p>
    </div>
  </section>

  <!-- AGENDA -->
  <section class="container agenda fadeInDown" data-slide="cultos" data-anime="500">
    <blockquote>
      <div class="grid-5">
        <p class="titulo"> Domingo</p>
        <p class="descricao">Culto de louvor e adoração <br>
          19:00h </p>
      </div>


      <div class="grid-5">
        <p class="titulo"> Quarta-Feira</p>
        <p class="descricao">Culto de louvor e adoração <br>
          20:00h </p>
      </div>

      <div class="grid-5">
        <p class="titulo"> Sexta-Feira</p>
        <p class="descricao">Estudo bíblico <br>
          20:00h </p>
      </div>
    </blockquote>

    <blockquote>
      <!-- VERIFICA SE TEM CADASTRO DE CULTOS NOVOS -->
      <?php 
        $classCulto=new ClassCulto();
        $array = $classCulto->listar();
      
        foreach ($array as $array) {
          echo "<div class='grid-5'>";
          echo "<p class='titulo'>" . $array["titulo"] . "</p>";
          echo "<p class='descricao'>" . $array["descricao"] . "</p>";
          $data = $array["data"];
          echo "<p class='descricao'>" . date('d/m/Y', strtotime($data)) . "</p>";
          $horario = $array["hora"];
          echo "<p class='descricao'>" . date('H:i', strtotime($horario)) . "h</p>";
          echo " </div>";    
    } ?>
    </blockquote>
  </section>

  <!-- CARROSSEL -->
  <section class="cultos">
    <div class="container fadeInUp" data-slide="fotos-culto" data-anime="500">
      <ul class="cultos_lista">
        <li class="grid-8"><img src="img/cultos/foto 1.png" alt="membros"></li>
        <li class="grid-8"><img src="img/cultos/foto 2.png" alt="membros" width="442px" height="280"></li>
        <li class="grid-8"><img src="img/cultos/foto 3.png" alt="membros"></li>
        <li class="grid-8"><img src="img/cultos/foto 4.png" alt="membros" width="442px" height="280"></li>
      </ul>

      <ul class="cultos_lista">
        <li class="grid-8"><img src="img/eventos/mulheres-2.png" alt="membros"></li>
        <li class="grid-8"><img src="img/eventos/casais-3.png" alt="membros"></li>
        <li class="grid-8"><img src="img/eventos/oasis-3.png" alt="membros"></li>
        <li class="grid-8"><img src="img/eventos/mulheres.jpg" alt="membros" width="442px" height="280"></li>
      </ul>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer">
      <div class="container">
        <div class="grid-6 footer_historia">
          <h3>Nossa história</h3>
          <p>Denominação cristã evangélica no Brasil, fundada em 2016 na cidade de Sobradinho II - DF pelos pastores Jonas e Márcia e grupo de irmãos.</p>
        </div>
        <div class="grid-4 footer_contato">
          <h3>CONTATO</h3>
          <ul>
            <li>
              <a href="https://api.whatsapp.com/send?phone=5561992728612&text=A%20paz%20do%20senhor%2C%20tudo%20bem%3F" target="_blank">
                <p> (61) 9999-9999</p>
              </a>
            </li>
            <li>
              <a href="mailto:comunidadevidaporvidas@gmail.com" target="_blank">
                <p>comunidadevidaporvidas@gmail.com</p>
              </a>
            </li>
            <li>
              <a href="https://goo.gl/maps/uDvhNoSc3Rt9zMxd6" target="_blank">
                <p>AR 22 conjunto 04 lote 01 - DF, 73080-000</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="grid-4 footer_redes">
          <h3>REDES SOCIAIS</h3>
          <ul>
            <li>
              <a href="https://www.facebook.com/ComunidadeVidaPorVidas" target="_blank"><img src="img/icons/facebook-icon.svg" alt="facebook"></a>
            </li>
            <li>
              <a href="https://www.instagram.com/comunidadevidaporvidas/" target="_blank"><img src="img/icons/instagram-icon.svg" alt="instagram"></a>
            </li>
            <li>
              <a href="https://www.youtube.com/channel/UCaAlepj6y4JUTZg0g1TtjOQ" target="_blank"><img src="img/icons/youtube-icon.svg" alt="youtube"></a>
            </li>
          </ul>
        </div>


      </div>
    </div>

    <section class="copy">
      <div class=" container">
        <p class="grid-14"> &copy; 2021 Comunidade Vida Por Vidas Todos os direitos reservados</p>
    </section>
  </footer>

  <script src="./js/simple-anime.js"></script>
  <script src="./js/simple-slide.js"></script>
  <script src="./js/script.js"></script>

</body>

</html>