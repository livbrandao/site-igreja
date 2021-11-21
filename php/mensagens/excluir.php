<!-- EXCLUIR --------------- -->
<?php require_once "ClassMensagem.php" ?>
<?php require_once "Mensagem.php" ?>

<?php 
  $classMensagem=new ClassMensagem();
  $array = $classMensagem->listar();

  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $novaMensagem=new Mensagem(); 
    $novaMensagem->setId($id);

    $classMensagem=new ClassMensagem();
    $classMensagem->excluir($novaMensagem);

    if($array==TRUE){
      header("Location:listar.php");
    }else{
      echo "ERRO";
    }

  }
  
?>