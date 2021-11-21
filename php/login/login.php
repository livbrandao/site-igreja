<?php
require_once 'conecta.php'; 
require_once 'banco-usuario.php'; 
require_once "logica-usuario.php"; 

//Criar uma variável $usuario e atribuir a função buscaUsuario,
// passando a conexão, login e senha.

$usuario=buscaUsuario($conexao,$_POST["login"],$_POST["senha"]);

//Fazer um if para verificar se o usuário é valido. 
//Se válido chamar a função  logaUsuario
  if ($usuario == null) {
    header ("Location:index.php?login=0");
    echo "<script>

                alert('Login ou senha incorreto');

                window.location.href = 'exemplo.html';

            </script>";
  }else{
    logaUsuario($usuario["login"]);//chama a função logaUsuario.
    header ("Location:index.php?login=1");
  }

die();
?>