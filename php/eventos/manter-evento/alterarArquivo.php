<!-- ALTERAR --------------- -->
<?php require_once "ClassEvento.php" ?>
<?php require_once "Evento.php" ?>

<?php 
  $nome=$_GET["nome"];
  $descricao=$_GET["descricao"];
  
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $novoEvento=new Evento(); 
    $novoEvento->setId($id);
    $novoEvento->setNome($nome);
    $novoEvento->setDescricao($descricao);

    $classEvento=new ClassEvento();
    $array=$classEvento->alterar($novoEvento);
    
      header("Location:listar.php");
  }else{
    echo "ERRO";
  }
  
?>