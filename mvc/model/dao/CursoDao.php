<?php

class CursoDao{

	public static function parse($record){

		if($record == null) return null;

		$curso = new Curso();
		$curso->setId($record["idCurso"]);
		$curso->setNome($record["Nome"]);

		return $curso;
	}

	public static function parseCursDept($record){

		if($record == null) return null;

		$curso = new Curso();
		$curso->setId($record["id"]);
		$curso->setNome($record["nome"]);
		$curso->setDuracao($record["duracao"]);
		$curso->setCred_form($record["cred"]);
		$curso->setDept_nome($record["nome_dept"]);

		return $curso;
	}

	public static function parseList($records){

		if ($records == null)
			return null;
		
		for ($i = 0; $i < sizeof($records); $i++){
			$array[$i] = CursoDao::parse($records[$i]);
		}
		
		return $array;
	}

	public static function parseListCursDept($records){

		if ($records == null)
			return null;
		
		for ($i = 0; $i < sizeof($records); $i++){
			$array[$i] = CursoDao::parseCursDept($records[$i]);
		}
		
		return $array;
	}

	public function getCursos(){
		$sql = "SELECT * FROM Curso ORDER BY Nome ASC";
		$resultset = ConnectionUtil::executarSelect($sql);

		return CursoDao::parseList($resultset);
	}

	public function getCursosDepts(){
		$sql = "SELECT Curso.idCurso AS id,
						Curso.Nome AS nome,
						Curso.Duracao AS duracao,
						Curso.CreditosForm AS cred,
						Departamento.Nome AS nome_dept  
				FROM Curso,Departamento 
				WHERE Curso.Departamento_idDepartamento = Departamento.idDepartamento 
				ORDER BY Curso.Nome ASC";
		$resultset = ConnectionUtil::executarSelect($sql);

		return CursoDao::parseListCursDept($resultset);
	}

	public static function inserir($curso) {

		$sql = "insert into Curso (Nome,Duracao,CreditosForm,Departamento_idDepartamento) values ('".$curso->getNome()."','".$curso->getDuracao()."','".$curso->getCred_form()."','".$curso->getDept_id()."')";
		ConnectionUtil::executar($sql);
	}

	public static function delete($curso) {

		$sql = "delete from Curso where idCurso = " . $curso->getId();
		ConnectionUtil::executar($sql);
	}

	public static function getById($curso){
		$sql = "select * from Curso where idCurso = " . $curso;
		$resultset = ConnectionUtil::executarSelect($sql);
		return CursoDao::parse($resultset[0]);
	}

	public static function alterar($curso) {
		$sql = "update Curso set Nome = '".$curso->getNome()."', Duracao = '".$curso->getDuracao()."', CreditosForm = '".$curso->getCred_form()."', Departamento_idDepartamento = '".$curso->getDept_id()."' where idCurso = " . $curso->getId();
		ConnectionUtil::executar($sql);
	}

	public static function getByNome($curso){
		$sql = "select * from Curso where Nome = '" .$curso."'";
		$resultset = ConnectionUtil::executarSelect($sql);
		return CursoDao::parse($resultset[0]);
	}

}

?>