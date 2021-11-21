<!-- ALTERAR --------------- -->
<?php require_once "ClassCulto.php" ?>
<?php require_once "Culto.php" ?>

<?php
  $titulo =$_GET['titulo'];
  $data =$_GET['data'];
  $hora =$_GET['hora'];
  $descricao=$_GET["descricao"];
  
  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $novoCulto=new Culto(); 
    $novoCulto->setId($id);
    $novoCulto->setTitulo($titulo);
    $novoCulto->setData($data);
    $novoCulto->setHora($hora);
    $novoCulto->setDescricao($descricao);

    $classCulto=new ClassCulto();
    $array = $classCulto->alterar($novoCulto);

      header("Location:listar.php");
    }else{
      echo "ERRO";
    }
  
?>