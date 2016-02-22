<?php 

class Departamento{

	private $id;
	private $nome;
	private $inst_id;
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

	public function getInst_id() {
		return $this->inst_id;
	}

	public function setInst_id($inst_id) {
		$this->inst_id = $inst_id;
	}

	public function getInst_nome(){
		return $this->inst_nome;
	}

	public function setInst_nome($inst_nome){
		$this->inst_nome = $inst_nome;
	}

}

?>