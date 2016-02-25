<?php

class CursoView{
	public static function exibeCursos($cursos){
		$view = "";

		$view .= "<br>";
		$view .= "<h2>Adicionar Curso</h2>";
		$view .= "<br>";

		$view .= "<form class=\"form-inline\">";
		$view .= "<input id=\"criar-curs\" class=\"form-control\" type=\"text\" size=\"35\" maxlength=\"45\">";

		$view .= "<div id=\"add\"><i class=\"glyphicon glyphicon-plus\"></i></div>";
		$view .= "</form>";
		$view .= "<br>";

		$view .= "<div id=\"alert\"></div>";

		$view .= "<div id=\"alt-div\" style=\"display:none\">";

		$view .= "<h2>Alterar Curso</h2>";
		$view .= "<br>";

		$view .= "<form class=\"form-inline\">";
		$view .= "<input id=\"alterar-curs\" class=\"form-control\" type=\"text\" size=\"5\" maxlength=\"3\">";

		$view .= "<div id=\"alt\"><i class=\"glyphicon glyphicon-ok alt-ico\"></i></div>";
		$view .= "<div id=\"cancela\"><i class=\"glyphicon glyphicon-remove alt-ico\"></i></div>";
		$view .= "</form>";
		$view .= "<br>";

		$view .= "<div id=\"alert-alt\"></div>";

		$view .= "</div>";

		$view .= "<h2>Gerenciar Cursos</h2>";
		$view .= "<br>";

		$view .= "<div id=\"table\">";
		$view .= "<table class=\"table table-hover table-condensed\">";

		$view .= "<thead>";
		$view .= "<tr>";
		$view .= "<th>Nome</th>";
		$view .= "<th>Duração</th>";
		$view .= "<th>Créditos</th>";
		$view .= "<th>Departamento</th>";
		$view .= "<th>Excluir</th>";
		$view .= "<th>Atualizar</th>";
		$view .= "</tr>";
		$view .= "</thead>";
		$view .= "<tbody>";

		if($cursos != null){
			for($i=0;$i<sizeof($cursos);$i++){
				$view .= "<tr id='".$cursos[$i]->getId()."'>";
				
				$view .= "<td>";
				$view .= $cursos[$i]->getNome();
				$view .= "</td>";

				$view .= "<td>";
				$view .= $cursos[$i]->getDuracao();
				$view .= "</td>";

				$view .= "<td>";
				$view .= $cursos[$i]->getCred_form();
				$view .= "</td>";

				$view .= "<td>";
				$view .= $cursos[$i]->getDept_nome();
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
}

?>