<?php require_once "Culto.php"?>
<!-- get/set -->
<?php require_once "ClassCulto.php"?>
<!-- métodos -->
<?php  
  $titulo=$_POST["titulo"];
  $data=$_POST["data"];
  $hora=$_POST["hora"];
  $descricao=$_POST["descricao"];
  
  $novoCulto=new Culto(); 
  $novoCulto->setTitulo($titulo);
  $novoCulto->setData($data);
  $novoCulto->setHora($hora);
  $novoCulto->setDescricao($descricao);
  
  $classCulto=new ClassCulto();//controler
  $classCulto->cadastrar($novoCulto);
?>