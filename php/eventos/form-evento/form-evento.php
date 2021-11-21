<?php 
  require_once "conecta.php" //Se estiver um erro finalizar a aplicação
?>

<?php
  $nome=$_POST['nome'];
  $email=$_POST['email'];
  $telefone=$_POST['telefone'];
  $evento=$_POST['evento'];
  $mensagem=$_POST['mensagem'];

  function insere($conexao,$nome,$email,$telefone,$evento,$mensagem){
    $sql="insert into form_evento (nome,email,telefone,evento,mensagem) values ('$nome','$email','$telefone','$evento','$mensagem')"; //inserir

    $resultado=mysqli_query($conexao,$sql); //verificar se ta certo na conexao e comando sql
    return $resultado;
  //fim function
  }

  if (insere($conexao,$nome,$email,$telefone,$evento,$mensagem)){
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

<?php } else { ?>

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