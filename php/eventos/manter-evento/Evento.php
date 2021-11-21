<?php       
class Evento{
	private $id;
	private $nome;
	private $descricao;
	
	// GET
	function getId(){
		return $this->id;
	}
	function getNome(){
		return $this->nome;
	}
	function getDescricao(){
		return $this->descricao;
	}

	// SET
	function setId($id){
		$this->id=$id;
	}
	function setNome($nome){
		$this->nome=$nome;
	}
	function setDescricao($descricao){
		$this->descricao=$descricao;
	}
}
?>