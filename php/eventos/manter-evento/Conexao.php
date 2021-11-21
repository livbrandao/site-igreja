<!-- Conexao.php -->
<?php
  class Conexao{
		public static function getInstance(){
			try{
				$pdo=new PDO("mysql:host=localhost; dbname=bdigreja","root","");
				return $pdo;
			}catch(PDOException $erro){
				echo $erro->getMessage();
			}//fechar o catch
    }//fechar o método  
  }//fechando a classe
?>