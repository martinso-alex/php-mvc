<?php

class DepartamentoDao{

	public static function parse($record){

		if($record == null) return null;

		$departamento = new Departamento();
		$departamento->setId($record["idDepartamento"]);
		$departamento->setNome($record["Nome"]);
		$departamento->setInst_id($record["Instituto_idInstituto"]);

		return $departamento;
	}

	public static function parseList($records){

		if ($records == null)
			return null;
		
		for ($i = 0; $i < sizeof($records); $i++){
			$array[$i] = DepartamentoDao::parse($records[$i]);
		}
		
		return $array;
	}

	public function getDepartamentos(){
		$sql = "SELECT * FROM Departamento ORDER BY Nome ASC";
		$resultset = ConnectionUtil::executarSelect($sql);

		return DepartamentoDao::parseList($resultset);
	}

	public static function inserir($departamento) {

		$sql = "insert into Departamento (Nome,Instituto_idInstituto) values ('".$departamento->getNome()."','".$departamento->getInst_id()."')";
		ConnectionUtil::executar($sql);
	}

	public static function delete($departamento) {

		$sql = "delete from Departamento where idDepartamento = " . $departamento->getId();
		ConnectionUtil::executar($sql);
	}

	public static function getById($departamento){
		$sql = "select * from Departamento where idDepartamento = " . $departamento;
		$resultset = ConnectionUtil::executarSelect($sql);
		return DepartamentoDao::parse($resultset[0]);
	}

	public static function alterar($departamento) {
		$sql = "update Departamento set Nome = '".$departamento->getNome()."', Instituto_idInstituto = '".$departamento->getInst_id()."' where idDepartamento = '" . $departamento->getId()."'";
		ConnectionUtil::executar($sql);
	}

	public static function getByNome($departamento){
		$sql = "select * from Departamento where Nome = '" .$departamento."'";
		$resultset = ConnectionUtil::executarSelect($sql);
		return DepartamentoDao::parse($resultset[0]);
	}

}

?>