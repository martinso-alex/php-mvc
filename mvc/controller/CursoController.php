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
		CursoView::exibeCursos($cursos);

	break;

}


?>