<?php 

class Curso{

	private $id;
	private $nome;
	private $duracao;
	private $cred_form;
	private $dept_id;
	private $dept_nome;

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

	public function getDuracao() {
		return $this->duracao;
	}

	public function setDuracao($duracao) {
		$this->duracao = $duracao;
	}

	public function getCred_form() {
		return $this->cred_form;
	}

	public function setCred_form($cred_form) {
		$this->cred_form = $cred_form;
	}

	public function getDept_id() {
		return $this->dept_id;
	}

	public function setDept_id($dept_id) {
		$this->dept_id = $dept_id;
	}

	public function getDept_nome() {
		return $this->dept_nome;
	}

	public function setDept_nome($dept_nome) {
		$this->dept_nome = $dept_nome;
	}

}

?>