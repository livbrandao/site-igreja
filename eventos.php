<?php require_once "php/eventos/manter-evento/Conexao.php" ?>
<?php require_once "php/eventos/manter-evento/ClassEvento.php" ?>
<?php require_once "php/eventos/manter-evento/Evento.php" ?>
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
  <link rel="stylesheet" href="css/cultos.css">
  <link rel="stylesheet" href="css/eventos.css">
  <link rel="stylesheet" href="css/responsivo.css">
  <!-- LOGO -->
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
          <li><a href="eventos.php" class="menu-ativo">Eventos</a></li>
          <li><a href="cultos.php">Cultos</a></li>
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
      <h1 data-anime="500" class="fadeInDown">Eventos</h1>
      <p data-anime="1000" class="fadeInDown">conheça mais sobre os eventos da comunidade</p>
    </div>
  </section>

  <!-- CARDS EVENTOS -->

  <section class='container eventos-item agenda novo fadeInDown' data-anime='500'>
    <blockquote data-slide='cultos'>
      <!-- VERIFICA SE TEM CADASTRO DE CULTOS NOVOS -->
      <?php 
        $classEvento=new ClassEvento();
        $array = $classEvento->listar();
      
        foreach ($array as $array) {
          echo "<div>";
          echo "<p class='titulo'  >" . $array["nome"] . "</p>";
          echo "<p class='descricao'  >" .$array["descricao"] . "</p>";
          echo "</div>";    
    } ?>
    </blockquote>
  </section>

  <!-- CARD 1 -->
  <section class="container eventos-item fadeInUp" data-anime="500">
    <div class="grid-11">
      <img src="img/eventos/mulheres-1.png" alt="mulheres">
      <h2>Princesas Adornadas</h2>
    </div>

    <div class="grid-5 foto-evento">
      <img src="img/eventos/mulheres-3.png" alt="mulheres">
    </div>

    <div class="grid-8 foto-evento-2">
      <img src="img/eventos/mulheres-2.png" alt="mulheres">
    </div>

    <div class="grid-8 evento-info">
      <p> O encontro de mulheres Princesas Adornadas acontece anualmente, geralmente em julho ou agosto, em hotel ou Resort em Caldas Novas - GO. Durante 3 dias com louvores, palestras com preletoras convidadas e atividades que compartilham o bem estar e renovo físico e espiritual de cada uma presente no evento.</p>
    </div>
  </section>

  <!-- CARD 2 -->
  <section class="container eventos-item">
    <div class="grid-11">
      <img src="img/eventos/oasis-1.png" alt="oasis">
      <h2>Oásis</h2>
    </div>

    <div class="grid-5 foto-evento">
      <img src="img/eventos/oasis-2.png" alt="oasis">
    </div>

    <div class="grid-8 foto-evento-3 evento-info">
      <p> É um ministério de jovens que celebra encontros bem animados, regados de muito louvor, estudo da palavra, gincanas bíblicas, retiros espirituais e muito mais. Todos voltados para jovens e adolescentes, mas é como já diz a bíblia né? “Morrer aos cem anos é morrer ainda jovem” (Isaías 65:20)</p>
    </div>

    <div class="grid-6 foto-evento-4">
      <img src="img/eventos/oasis-3.png" alt="oasis">
    </div>
  </section>

  <!-- CARD 3 -->
  <section class="container eventos-item">
    <div class="grid-11">
      <img src="img/eventos/casais-1.png" alt="casais">
      <h2>Encontro de casais</h2>
    </div>

    <div class="grid-5 foto-evento">
      <img src="img/eventos/casais-2.png" alt="casais">
    </div>

    <div class="grid-8 foto-evento-2">
      <img src="img/eventos/casais-3.png" alt="casais">
    </div>

    <div class="grid-8 evento-info">
      <p> O amor existe!</br> E nos encontros de casais é onde ele é renovado pelo Senhor. Acontece anualmente em um hotel no entorno de Brasília-DF,durante 3 dias marido e mulher têm a oportunidade de refletir sobre vários aspectos da vida conjugal. Palestras, depoimentos e dinâmica de grupos fazem parte do processo.</p>
    </div>
  </section>

  <!-- CARD 4 -->
  <section class="container eventos-item">
    <div class="grid-11">
      <img src="img/eventos/criancas-1.png" alt="criancas">
      <h2>Comunidade Kids</h2>
    </div>
    <div class="grid-5 foto-evento">
      <img src="img/eventos/criancas-2.png" alt="criancas">
    </div>

    <div class="grid-8 foto-evento-3 evento-info">
      <p> O projeto para as crianças acontece na sede da igreja, todo dia 12 de outubro, tem como objetivo proporcionar as crianças do bairro um dia de diversão, recheado de surpresas e ao final da festa presentear as crianças com brinquedos e os pais com cestas básicas.</p>
    </div>

    <div class="grid-7 foto-evento-4">
      <img src="img/eventos/criancas-3.png" alt="criancas">
    </div>
  </section>


  <!-- FORMULARIO -->
  <section class="formulario">
    <div class="container">
      <h2 class="subtitulo">Informações</h2>
      <form id="form-evento" name="add_msg" method="POST" action="php/eventos/form-evento/form-evento.php" class="form-evento grid-9 formphp">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" required>

        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" required>

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" required>

        <label for="evento">Evento</label>
        <input type="text" name="evento" id="evento" required>

        <label for="mensagem">Mensagem</label>
        <textarea name="mensagem" id="mensagem" cols="30" rows="10" required></textarea>

        <button type="submit" value="enviar" id="enviar" class="btn">Enviar</button>
      </form>

      <div class="dados-evento grid-6">
        <div>
          <h3>Dados</h3>

          <span>+55 61 9999-999</span>
          <span>comunidadevidaporvidas@gmail.com</span>
          <span>AR 22 conjunto 04 lote 01 - Sobradinho II - DF</span>
        </div>
        <div>
          <h3>Eventos</h3>
          <ul>
            <li>- Encontro Princesas Adornadas</li>
            <li>- Econtro de Casais</li>
            <li>- Dia das crianças</li>
            <li>- Retiro</li>
          </ul>
        </div>
      </div>
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
        <div class="grid-6 footer_contato">
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

    <div class="copy">
      <div class="container">
        <p class="grid-16"> &copy; 2021 Comunidade Vida Por Vidas Todos os direitos reservados</p>
      </div>
    </div>
  </footer>

  <script src="./js/simple-anime.js"></script>
  <script src="./js/simple-form.js"></script>
  <script src="./js/simple-slide.js"></script>
  <script src="./js/script.js"></script>

</body>

</html>