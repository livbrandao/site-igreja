<?php require_once "Conexao.php" ?>
<?php 
class  ClassCulto{

// ---------------CADASTRAR-------------------
	public function cadastrar($novoCulto){
		try{
			$pdo=Conexao::getInstance();	
			$sql="INSERT INTO cultos(titulo,data,hora,descricao)VALUES(?,?,?,?)";
			$stmt=$pdo->prepare($sql);
			$stmt->bindValue(1,$novoCulto->getTitulo());
			$stmt->bindValue(2,$novoCulto->getData());
			$stmt->bindValue(3,$novoCulto->getHora());
			$stmt->bindValue(4,$novoCulto->getDescricao());
			$stmt->execute();
			header("Location:../login/cabecalho.php");
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
			$sql="SELECT * from cultos";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}//fim do catch
	}//fim listar

// -------------------DELETAR---------------------------
	public function excluir($novoCulto){
		try{
			$pdo=Conexao::getInstance();	
			$sql="DELETE from cultos where id=:id";
			$stmt=$pdo->prepare($sql);
			$stmt->bindValue(':id',$novoCulto->getId());
			$stmt->execute();
			return TRUE;

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}//fim do catch
	}//fim deletar
// -------------------ALTERAR---------------------------
	public function alterar($novoCulto){
		try{
			$pdo=Conexao::getInstance();	
			$sql="UPDATE cultos set titulo=?,data=?,hora=?,descricao=? WHERE id=?";
			$stmt=$pdo->prepare($sql);
			$stmt->bindValue(1,$novoCulto->getTitulo());
			$stmt->bindValue(2,$novoCulto->getData());
			$stmt->bindValue(3,$novoCulto->getHora());
			$stmt->bindValue(4,$novoCulto->getDescricao());
			$stmt->bindValue(5,$novoCulto->getId());
			$stmt->execute();
			return TRUE;

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}//fim do catch
	}//fim alterar
	


}//fim da classe
?>