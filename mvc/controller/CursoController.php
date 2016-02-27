<?php

require('../view/CursoView.php');
require('../model/ConnectionUtil.php');
require('../model/classes/Curso.php');
require('../model/dao/CursoDao.php');
require('../model/service/CursoService.php');
require('../model/classes/Departamento.php');
require('../model/dao/DepartamentoDao.php');
require('../model/service/DepartamentoService.php');

$func = $_POST['func'];

switch($func){

	case 'ler':

		$cursos = CursoService::getCursosDepts();
		$departamentos = DepartamentoService::getDepartamentos();
		CursoView::exibeCursos($cursos,$departamentos);

	break;

	case 'criar':

		$curso = new Curso();
		$curso->setNome($_POST['nome']);
		$curso->setDuracao($_POST['dura']);
		$curso->setCred_form($_POST['cred']);
		$curso->setDept_id($_POST['dept_id']);

		$criar = CursoService::inserir($curso);

		if($criar === 0){
			$cursos = CursoService::getCursosDepts();
			$departamentos = DepartamentoService::getDepartamentos();
			CursoView::exibeCursos($cursos,$departamentos);
		}else{
			echo 'nope';
		}

	break;

	case 'deletar':

		$curso = new Curso();
		$curso->setId($_POST['id']);

		CursoService::delete($curso);

		$cursos = CursoService::getCursosDepts();
		$departamentos = DepartamentoService::getDepartamentos();
		CursoView::exibeCursos($cursos,$departamentos);

	break;

	case 'alterar':

		$curso = new Curso();
		$curso->setId($_POST['id']);
		$curso->setNome($_POST['nome']);
		$curso->setDuracao($_POST['dura']);
		$curso->setCred_form($_POST['cred']);
		$curso->setDept_id($_POST['dept_id']);

		$alterar = CursoService::alterar($curso);

		if($alterar === 0){
			$cursos = CursoService::getCursosDepts();
			$departamentos = DepartamentoService::getDepartamentos();
			CursoView::exibeCursos($cursos,$departamentos);
		}else{
			echo 'nope';
		}

	break;

	case 'sucesso':

		CursoView::sucesso();

	break;

	case 'erro':

		CursoView::erro();

	break;

}


?>