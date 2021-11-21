<?php

//Variáveis
$to = "comunidadevidaporvidas@gmail.com";
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$assunto = $_POST["assunto"];
$mensagem = $_POST["mensagem"];

$message = "
<h2>{$assunto}</h2><br>
<label>NOME: {$nome}</label><br>
<label>E-MAIL: {$email}</label><br>
<label>TELEFONE: {$telefone}</label><br>
<p>-------------------------------------</p>
<p>Mensagem:</p>
<label>{$mensagem}</label>";

$headers =  "Content-type: text/html; charset=utf-8;";

if(isset($nome) && isset($email) && isset($telefone) && isset($assunto)&& isset($mensagem)){
  if (mail($to, $assunto, $message, $headers)) {
  ?>

<!-- MENSAGEM DE SUCESSO -->
<html>

<head>
  <title>Formulario enviado</title>
  <meta http-equiv='refresh' content='10;URL="./"'>
</head>

<body>
  <div class="form-content" id="form-send">
    <h2>Enviado com sucesso!</h2>
    <p>Em breve entramos em contato.</p>
  </div>
</body>

</html>

<?php } } else { ?>

<!-- MENSAGEM DE ERRO -->
<html>

<head>
  <title>Erro</title>
  <meta http-equiv='refresh' content='10;URL="./"'>
</head>

<body>
  <div class="form-content" id="form-erro">
    <h2>Um erro ocorreu!</h2>
    <p>Tente novamente.</p>
  </div>
</body>

</html>

<?php } ?>