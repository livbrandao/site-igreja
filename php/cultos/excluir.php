<!-- EXCLUIR --------------- -->
<?php require_once "ClassCulto.php" ?>
<?php require_once "Culto.php" ?>

<?php 
  $classCulto=new ClassCulto();
  $array = $classCulto->listar();

  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $novoCulto=new Culto(); 
    $novoCulto->setId($id);

    $classCulto=new ClassCulto();
    $classCulto->excluir($novoCulto);

    if($array==TRUE){
      header("Location:listar.php");
    }else{
      echo "ERRO";
    }

  }
  
?>