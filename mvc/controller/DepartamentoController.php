<?php

require('../view/DepartamentoView.php');
require('../model/ConnectionUtil.php');
require('../model/classes/Departamento.php');
require('../model/dao/DepartamentoDao.php');
require('../model/service/DepartamentoService.php');
require('../model/classes/Instituto.php');
require('../model/dao/InstitutoDao.php');
require('../model/service/InstitutoService.php');

$func = $_POST['func'];

switch($func){

	case 'ler':

		$departamentos = DepartamentoService::getDepartamentosInsts();
		$institutos = InstitutoService::getInstitutos();
		DepartamentoView::exibeDepartamentos($departamentos,$institutos);

	break;

	case 'criar':

		$departamento = new Departamento();
		$departamento->setNome($_POST['departamento']);
		//adicionar o instituto e validar no service 

	break;

}

?>