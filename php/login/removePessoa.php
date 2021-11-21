<!-- remove-pessoa.php -->
<?php require_once("conecta.php") ?>
<?php require_once("banco-usuario.php") ?>
<?php require_once("Pessoa.php") ?>

<?php
  $pessoa=new Pessoa;
  $pessoa->id=$_POST["id"];

  removePessoa($conexao,$pessoa);
  header("Location:formListar.php?removido=true");
?>