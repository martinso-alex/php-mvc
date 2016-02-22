<?php

class DepartamentoView{
	public static function exibeDepartamentos($departamentos,$institutos){
		$view = "";

		$view .= "<br>";
		$view .= "<h2>Adicionar Departamento</h2>";
		$view .= "<br>";

		$view .= "<form class=\"form-inline\">";
		$view .= "<input id=\"criar-dept\" class=\"form-control\" placeholder=\"Nome\" type=\"text\" size=\"5\" maxlength=\"3\">";
		$view .= DepartamentoView::exibeInstitutos($institutos);
		$view .= "<div id=\"add\"><i class=\"glyphicon glyphicon-plus\"></i></div>";
		$view .= "</form>";
		$view .= "<br>";

		$view .= "<div id=\"alert\"></div>";

		$view .= "<div id=\"alt-div\" style=\"display:none\">";

		$view .= "<h2>Alterar Departamento</h2>";
		$view .= "<br>";

		$view .= "<form class=\"form-inline\">";
		$view .= "<input id=\"alterar-inst\" class=\"form-control\" placeholder=\"Nome\" type=\"text\" size=\"5\" maxlength=\"3\">";
		$view .= DepartamentoView::exibeInstitutos($institutos);
		$view .= "<div id=\"alt\"><i class=\"glyphicon glyphicon-ok alt-ico\"></i></div>";
		$view .= "<div id=\"cancela\"><i class=\"glyphicon glyphicon-remove alt-ico\"></i></div>";
		$view .= "</form>";
		$view .= "<br>";

		$view .= "<div id=\"alert-alt\"></div>";

		$view .= "</div>";

		$view .= "<h2>Gerenciar Departamentos</h2>";
		$view .= "<br>";

		$view .= "<div id=\"table\">";
		$view .= "<table class=\"table table-hover table-condensed\">";

		$view .= "<thead>";
		$view .= "<tr>";
		$view .= "<th>Nome</th>";
		$view .= "<th>Instituto</th>";
		$view .= "<th>Excluir</th>";
		$view .= "<th>Atualizar</th>";
		$view .= "</tr>";
		$view .= "</thead>";
		$view .= "<tbody>";

		if($departamentos != null){
			for($i=0;$i<sizeof($departamentos);$i++){
				$view .= "<tr id='".$departamentos[$i]->getId()."'>";
				
				$view .= "<td>";
				$view .= $departamentos[$i]->getNome();
				$view .= "</td>";

				$view .= "<td>";
				$view .= $departamentos[$i]->getInst_nome();
				$view .= "</td>";

				$view .= "<td>";
				$view .= "<i class=\"glyphicon glyphicon-remove remove\"></i>";
				$view .= "</td>";

				$view .= "<td>";
				$view .= "<i class=\"glyphicon glyphicon-pencil pencil\"></i>";
				$view .= "</td>";

				$view .= "</tr>";
			}
		}

		$view .= "</tbody>";
		$view .= "</table>";
		$view .= "</div>";

		echo $view;
	}

	public static function exibeInstitutos($institutos){
		$view = " <select name=\"institutos\" class=\"form-control\">";
		$view .= "<option selected disabled style='display: none' value=''>Instituto</option>";
		if($institutos != null){
			for($i=0;$i<sizeof($institutos);$i++){
				$view .= "<option value=".$institutos[$i]->getId().">";
				$view .= $institutos[$i]->getNome();
				$view .= "</option>";
			}
		}
		$view .= "</select>";
		return $view;
	}
}

?>