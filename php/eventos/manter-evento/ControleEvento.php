<!-- ControleUsuario.php   -->
<?php require_once "Evento.php"?>
<!-- get/set -->
<?php require_once "ClassEvento.php"?>
<!-- métodos -->
<?php  
  $nome=$_POST["nome"];
  $descricao=$_POST["descricao"];
  
  $novoEvento=new Evento(); 
  $novoEvento->setNome($nome);
  $novoEvento->setDescricao($descricao);
  
  $classEvento=new ClassEvento();//controler
  $classEvento->cadastrar($novoEvento);
?>