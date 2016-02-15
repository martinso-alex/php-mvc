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
}

?>