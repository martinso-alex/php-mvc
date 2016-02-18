<?php

require('../view/InstitutoView.php');
require('../model/ConnectionUtil.php');
require('../model/classes/Instituto.php');
require('../model/dao/InstitutoDao.php');
require('../model/service/InstitutoService.php');

$func = $_POST['func'];

switch($func){
	
	case 'ler':
		
		$institutos = InstitutoService::getInstitutos();
		InstitutoView::exibeInstitutos($institutos);

	break;

	case 'criar':
		
		$instituto = new Instituto();
		$instituto->setNome($_POST['instituto']);

		$criar = InstitutoService::inserir($instituto);

		if($criar === 0){
			$institutos = InstitutoService::getInstitutos();
			InstitutoView::exibeInstitutos($institutos);
		}else{
			echo 'nope';
		}

	break;

	case 'deletar':

		$instituto = new Instituto();
		$instituto->setId($_POST['id']);

		InstitutoService::delete($instituto);
		$institutos = InstitutoService::getInstitutos();
		InstitutoView::exibeInstitutos($institutos);

	break;

	case 'alterar':

		$instituto = new Instituto();
		$instituto->setId($_POST['id']);
		$instituto->setNome($_POST['nome']);

		$alterar = InstitutoService::alterar($instituto);

		if($alterar === 0){
			$institutos = InstitutoService::getInstitutos();
			InstitutoView::exibeInstitutos($institutos);
		}else{
			echo 'nope';
		}

	break;

}

?>