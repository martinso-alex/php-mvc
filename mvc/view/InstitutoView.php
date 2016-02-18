<?php

class InstitutoView{
	public static function exibeInstitutos($institutos){
		$view = "";

		$view .= "<br>";
		$view .= "<h2>Adicionar Instituto</h2>";
		$view .= "<br>";

		$view .= "<form>";
		$view .= "<input id=\"criar-inst\" type=\"text\" size=\"35\">";
		$view .= "<div id=\"add\"><i class=\"glyphicon glyphicon-plus\"></i></div>";
		$view .= "<form>";
		$view .= "<br><br>";

		$view .= "<div id=\"alert\"></div>";

		$view .= "";
		$view .= "<h2>Gerenciar Institutos</h2>";
		$view .= "<br>";

		$view .= "<div id=\"table\">";
		$view .= "<table class=\"table table-hover\">";

		$view .= "<tr>";
		$view .= "<th>Nome</th>";
		$view .= "<th>Excluir</th>";
		$view .= "<th>Atualizar</th>";
		$view .= "</tr>";

		if($institutos != null){
			for($i=0;$i<sizeof($institutos);$i++){
				$view .= "<tr id='tr".$institutos[$i]->getId()."'>";
				
				$view .= "<td>";
				$view .= $institutos[$i]->getNome();
				$view .= "</td>";

				$view .= "<td>";
				$view .= "<i class=\"glyphicon glyphicon-remove\"></i>";
				$view .= "</td>";

				$view .= "<td>";
				$view .= "<i class=\"glyphicon glyphicon-pencil\"></i>";
				$view .= "</td>";

				$view .= "</tr>";
			}
		}

		$view .= "</table>";
		$view .= "</div>";

		echo $view;
	}

}

?>