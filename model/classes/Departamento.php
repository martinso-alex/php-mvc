<?php 

class Departamento{

	private $id;
	private $nome;
	private $inst_id;

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
}

?>