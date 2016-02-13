<?php

class CursoService {

	public static function getCursos() {

		return CursoDao::getCursos();
	}

	public static function inserir($curso) {
		if(is_null(CursoService::getByNome($curso->getNome()))){
			CursoDao::inserir($curso);
			return(0);
		}
		else{
			return NULL;
		}
	}

	public static function delete($curso) {

		CursoDao::delete($curso);		
	}

	public static function getById($curso){
		return CursoDao::getById($curso);
	}

	public static function alterar($curso){
		CursoDao::alterar($curso);
	}

	public static function getByNome($curso){
		return CursoDao::getByNome($curso);
	}
}
?>