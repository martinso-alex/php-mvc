<?php

class InstitutoView{
	public static function exibeInstitutos($institutos){
		$view = "";
		$view .= "<table>";

		$view .= "<tr>";
		$view .= "<th>Nome</th>";
		//$view .= "<th>Excluir</th>";
		//$view .= "<th>Atualizar</th>";
		$view .= "</tr>";

		if($institutos != null){
			for($i=0;$i<sizeof($institutos);$i++){
				$view .= "<tr id='tr".$institutos[$i]->getId()."'>";
				
				$view .= "<td>";
				$view .= $institutos[$i]->getNome();
				$view .= "</td>";

				$view .= "</tr>";
			}
		}

		$view .= "</table>";

		echo $view;
	}
}

?>