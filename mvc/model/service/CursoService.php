<?php

class CursoService {

	public static function getCursos() {

		return CursoDao::getCursos();
	}

	public static function getCursosDepts() {

		return CursoDao::getCursosDepts();
	}

	public static function inserir($curso) {
		if(is_null(CursoService::getByNome($curso->getNome())) &&
			$curso->getNome() != '' &&
			$curso->getDuracao() != null &&
			$curso->getCred_form() != '' &&
			$curso->getDept_id() != null)
		{
			CursoDao::inserir($curso);
			return 0;
		}
		else{
			return null;
		}
	}

	public static function delete($curso) {

		CursoDao::delete($curso);		
	}

	public static function getById($curso){
		return CursoDao::getById($curso);
	}

	public static function alterar($curso){

		$cursoexiste = CursoService::getByNome($curso->getNome());

		if((is_null($cursoexiste) || $cursoexiste->getId() == $curso->getId()) &&
			$curso->getNome() != '' &&
			$curso->getDuracao() != null &&
			$curso->getCred_form() != '' &&
			$curso->getDept_id() != null)
		{
			CursoDao::alterar($curso);
			return 0;
		}
		else{
			return null;
		}
	}

	public static function getByNome($curso){
		return CursoDao::getByNome($curso);
	}
}
?>