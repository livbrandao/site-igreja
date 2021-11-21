<?php
session_start();//inicio da sessão 
//------------------------------------------------------

function  usuarioEstaLogado(){ //usei no cabeçalho e na index.
   return isset ($_SESSION["usuario_logado"]);//retorna true
}//-----------------------------------------------------

function  usuarioLogado(){ 
   return $_SESSION["usuario_logado"];//retorna true
}
//-------------------------------------------------------

function  logaUsuario($_login){   // chamei no login
   $_SESSION["usuario_logado"]=$_login;
}
//-------------------------------------------------------

function logout(){ //Destroí a sessão
   session_destroy(); 
}
?>