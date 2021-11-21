<!-- ControleUsuario.php   -->
<?php require_once "Mensagem.php"?>
<!-- get/set -->
<?php require_once "ClassMensagem.php"?>
<!-- métodos -->
<?php  
  $nome=$_POST["nome"];
  $email=$_POST["email"];
  $telefone=$_POST["telefone"];
  $evento=$_POST["evento"];
  $mensagem=$_POST["mensagem"];
  
  $novoEvento=new Evento(); 
  $novoEvento->setNome($nome);
  $novoEvento->setEmail($email);
  $novoEvento->setTelefone($telefone);
  $novoEvento->setEvento($evento);
  $novoEvento->setMensagem($mensagem);
  
  $classEvento=new ClassEvento();//controler
  $classEvento->cadastrar($novoEvento);
?>