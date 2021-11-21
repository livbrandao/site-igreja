<?php require_once "Conexao.php" ?>
<?php 
class  ClassMensagem{
// ------------------LISTAR----------------------------
	public function listar(){
		try{
			$pdo=Conexao::getInstance();	
			$sql="SELECT * from form_evento";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}//fim do catch
	}//fim listar

// -------------------DELETAR---------------------------
	public function excluir($novaMensagem){
		try{
			$pdo=Conexao::getInstance();	
			$sql="DELETE from form_evento where id=:id";
			$stmt=$pdo->prepare($sql);
			$stmt->bindValue(':id',$novaMensagem->getId());
			$stmt->execute();
			return TRUE;

		}catch(PDOException $erro){
			echo $erro->getMessage();
		}//fim do catch
	}//fim deletar
}//fim da classe
?>