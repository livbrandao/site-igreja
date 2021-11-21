<?php require_once "Conexao.php" ?>
<?php 
class  ClassEvento{

// ---------------CADASTRAR-------------------
	public function cadastrar($novoEvento){
		try{
			$pdo=Conexao::getInstance();	
			$sql="INSERT INTO evento(nome,descricao)VALUES(?,?)";
			$stmt=$pdo->prepare($sql);
			$stmt->bindValue(1,$novoEvento->getNome());
			$stmt->bindValue(2,$novoEvento->getDescricao());
			$stmt->execute();
			header("Location:../../login/cabecalho.php");
	?>

<?php
		}catch(PDOException $erro){
			echo $erro->getMessage();
		}//fim do catch
  }//fim do método cadastrar

// ------------------LISTAR----------------------------
	public function listar(){
		try{
			$pdo=Conexao::getInstance();	
			$sql="SELECT * from evento";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}//fim do catch
	}//fim listar

// -------------------DELETAR---------------------------
	public function excluir($novoEvento){
		try{
			$pdo=Conexao::getInstance();	
			$sql="DELETE from evento where id=:id";
			$stmt=$pdo->prepare($sql);
			$stmt->bindValue(':id',$novoEvento->getId());
			$stmt->execute();
			return TRUE;

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}//fim do catch
	}//fim deletar
// -------------------ALTERAR---------------------------
	public function alterar($novoEvento){
			try{
			$pdo=Conexao::getInstance();	
			$sql="UPDATE evento set nome=?, descricao=? WHERE id=?";
			$stmt=$pdo->prepare($sql);
			$stmt->bindValue(1,$novoEvento->getNome());
			$stmt->bindValue(2,$novoEvento->getDescricao());
			$stmt->bindValue(3,$novoEvento->getId());
			$stmt->execute();
			return TRUE;

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}//fim do catch
	}//fim alterar
	


}//fim da classe
?>