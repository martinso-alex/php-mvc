<?php

class InstitutoDao{
	
	public static function parse($record){

		if($record == null) return null;

		$instituto = new Instituto();
		$instituto->setId($record["idInstituto"]);
		$instituto->setNome($record["Nome"]);

		return $instituto;
	}

	public static function parseList($records){

		if ($records == null)
			return null;
		
		for ($i = 0; $i < sizeof($records); $i++){
			$array[$i] = InstitutoDao::parse($records[$i]);
		}
		
		return $array;
	}

	public function getInstitutos(){
		$sql = "SELECT * FROM Instituto ORDER BY Nome ASC";
		$resultset = ConnectionUtil::executarSelect($sql);

		return InstitutoDao::parseList($resultset);
	}

	public static function inserir($instituto) {

		$sql = "insert into Instituto (Nome) values ('".$instituto->getNome()."')";
		ConnectionUtil::executar($sql);
	}

	public static function delete($instituto) {

		$sql = "delete from Instituto where idInstituto = " . $instituto->getId();
		ConnectionUtil::executar($sql);
	}

	public static function getById($instituto){
		$sql = "select * from Instituto where idInstituto = " . $instituto;
		$resultset = ConnectionUtil::executarSelect($sql);
		return InstitutoDao::parse($resultset[0]);
	}

	public static function alterar($instituto) {
		$sql = "update Instituto set Nome = '".$instituto->getNome()."' where idInstituto = " . $instituto->getId();
		ConnectionUtil::executar($sql);
	}

	public static function getByNome($instituto){
		$sql = "select * from Instituto where Nome = '" .$instituto."'";
		$resultset = ConnectionUtil::executarSelect($sql);
		return InstitutoDao::parse($resultset[0]);
	}

}

?>