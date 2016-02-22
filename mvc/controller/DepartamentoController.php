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
		$departamento->setInst_id($_POST['inst_id']);

		$criar = DepartamentoService::inserir($departamento);

		if($criar === 0){
			$departamentos = DepartamentoService::getDepartamentosInsts();
			$institutos = InstitutoService::getInstitutos();
			DepartamentoView::exibeDepartamentos($departamentos,$institutos);
		}else{
			echo 'nope';
		}

	break;

	case 'deletar':

		$departamento = new Departamento();
		$departamento->setId($_POST['id']);

		DepartamentoService::delete($departamento);
		$departamentos = DepartamentoService::getDepartamentosInsts();
		$institutos = InstitutoService::getInstitutos();
		DepartamentoView::exibeDepartamentos($departamentos,$institutos);

	break;

}

?>