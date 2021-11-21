<!-- logout.php -->
<?php require_once "logica-usuario.php" ?><!--onde consta a sessão -->
<?php
logout();//chamou a função logout para destruir a sessão
header("Location:index.php?logout=true"); 
die(); 

?>