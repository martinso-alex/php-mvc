<?php

class InstitutoService {

	public static function getInstitutos() {

		return InstitutoDao::getInstitutos();
	}

	public static function inserir($instituto) {
		if(is_null(InstitutoService::getByNome($instituto->getNome())) && $instituto != ''){
			InstitutoDao::inserir($instituto);
			return 0;
		}
		else{
			return null;
		}
	}

	public static function delete($instituto) {

		InstitutoDao::delete($instituto);		
	}

	public static function getById($instituto){
		return InstitutoDao::getById($instituto);
	}

	public static function alterar($instituto){
		InstitutoDao::alterar($instituto);
	}

	public static function getByNome($instituto){
		return InstitutoDao::getByNome($instituto);
	}
}
?>