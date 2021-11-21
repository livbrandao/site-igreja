<?php require_once "conecta.php";?>
<?php	
  $login =$_POST['login'];
  $senha=md5($_POST['senha']);//Recebe a senha e criptografa
  
	inserir($conexao,$login,$senha);//chama a função inserir a seguir

//------------- Função inserir ---------------------
	function inserir($conexao,$login,$senha){
		$sql="insert into admin (login,senha)values('$login','$senha')";	  
		if(mysqli_query ( $conexao, $sql)){
			header("Location:index.php");
		} else {
			$erro= mysqli_error($conexao);
			echo 'Não Adicionado'; 
			echo $erro; 
		}
	}
?>