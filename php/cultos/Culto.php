<?php       
class Culto{
	private $id;
	private $titulo;
	private $data;
	private $hora;
	private $descricao;
	
	// GET
	function getId(){
		return $this->id;
	}
	function getTitulo(){
		return $this->titulo;
	}
	function getData(){
		return $this->data;
	}
	function getHora(){
		return $this->hora;
	}
	function getDescricao(){
		return $this->descricao;
	}

	// SET
	function setId($id){
		$this->id=$id;
	}
	function setTitulo($titulo){
		$this->titulo=$titulo;
	}
	function setData($data){
		$this->data=$data;
	}
	function setHora($hora){
		$this->hora=$hora;
	}
	function setDescricao($descricao){
		$this->descricao=$descricao;
	}
}
?>