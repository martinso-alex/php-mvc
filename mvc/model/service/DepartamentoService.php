<?php

class DepartamentoService {

	public static function getDepartamentos() {

		return DepartamentoDao::getDepartamentos();

	}

	public static function getDepartamentosInsts() {

		return DepartamentoDao::getDepartamentosInsts();

	}

	public static function inserir($departamento) {

		$departamentoexiste = DepartamentoService::getByNome($departamento->getNome());
		if(is_null($departamentoexiste) && $departamento->getNome() != "" && $departamento->getInst_id() != ""){
			DepartamentoDao::inserir($departamento);
			return 0;
		}
		else{
			return null;
		}

	}

	public static function delete($departamento) {

		DepartamentoDao::delete($departamento);

	}

	public static function getById($departamento){

		return DepartamentoDao::getById($departamento);

	}

	public static function alterar($departamento){

		$departamentoexiste = DepartamentoService::getByNome($departamento->getNome());

		//if(is_null($departamentoexiste) && $departamento->getNome() != "" && $departamento->getInst_id() != null && DepartamentoService::getById($departamento->getId()) != null){
			DepartamentoDao::alterar($departamento);
			return 0;
		//}else{
		//	return null;
		//}

	}

	public static function getByNome($departamento){

		return DepartamentoDao::getByNome($departamento);

	}
}
?>