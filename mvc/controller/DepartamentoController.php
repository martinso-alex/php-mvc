<?php

require('../view/DepartamentoView.php');
require('../model/ConnectionUtil.php');
require('../model/classes/Departamento.php');
require('../model/dao/DepartamentoDao.php');
require('../model/service/DepartamentoService.php');

$func = $_POST['func'];

switch($func){

	case 'ler':

		$departamentos = DepartamentoService::getDepartamentosInsts();
		DepartamentoView::exibeDepartamentos($departamentos);

	break;

}

?>