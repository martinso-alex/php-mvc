<?php 

class Departamento{

	private $id;
	private $nome;
	private $inst_nome;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getInst_nome(){
		return $this->inst_nome;
	}

	public function setInst_nome($inst_nome){
		$this->inst_nome = $inst_nome;
	}

}

?>