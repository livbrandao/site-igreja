<?php       
class Mensagem{
	private $id;
	private $nome;
	private $email;
	private $telefone;
	private $evento;
	private $mensagem;
	
	// GET
	function getId(){
		return $this->id;
	}
	function getNome(){
		return $this->nome;
	}
	function getEmail(){
		return $this->email;
	}
	function getTelefone(){
		return $this->telefone;
	}
	function getEvento(){
		return $this->evento;
	}
	function getMensagem(){
		return $this->mensagem;
	}

	// SET
	function setId($id){
		$this->id=$id;
	}
	function setNome($nome){
		$this->nome=$nome;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setTelefone($telefone){
		$this->telefone=$telefone;
	}
	function setEvento($evento){
		$this->evento=$evento;
	}
	function setMensagem($mensagem){
		$this->mensagem=$mensagem;
	}
}
?>