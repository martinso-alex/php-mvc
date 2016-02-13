<?php

class DepartamentoService {

	public static function getDepartamentos() {

		return DepartamentoDao::getDepartamentos();
	}

	public static function inserir($departamento) {
		$departamentoexiste = DepartamentoService::getByNome($departamento->getNome());
		if(is_null($departamentoexiste)){
			DepartamentoDao::inserir($departamento);
			return(0);
		}
		else{
			return NULL;
		}
	}

	public static function delete($departamento) {

		DepartamentoDao::delete($departamento);		
	}

	public static function getById($departamento){
		return DepartamentoDao::getById($departamento);
	}

	public static function alterar($departamento){
		DepartamentoDao::alterar($departamento);
	}

	public static function getByNome($departamento){
		return DepartamentoDao::getByNome($departamento);
	}
}
?>