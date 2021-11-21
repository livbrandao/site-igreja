<!-- ---------alterarForm.php  -->
<?php require_once("conecta.php") ?>
<?php require_once("banco-usuario.php") ?>
<?php require_once("Pessoa.php") ?>

<?php
  $pessoa=new Pessoa;
  $pessoa->id=$_GET["id"];
  $pessoa->login=$_GET["login"];
  
  alteraPessoa($conexao,$pessoa);
  
  header("Location:formListar.php?alterado=true");
  
?>