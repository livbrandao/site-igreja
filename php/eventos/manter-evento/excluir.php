<!-- EXCLUIR --------------- -->
<?php require_once "ClassEvento.php" ?>
<?php require_once "Evento.php" ?>

<?php 
  $classEvento=new ClassEvento();
  $array = $classEvento->listar();

  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $novoEvento=new Evento(); 
    $novoEvento->setId($id);

    $classEvento=new ClassEvento();
    $classEvento->excluir($novoEvento);

    if($array==TRUE){
      header("Location:listar.php");
    }else{
      echo "ERRO";
    }

  }
  
?>