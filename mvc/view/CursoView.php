<?php

class CursoView{
	public static function exibeCursos($cursos,$departamentos){
		$view = "";

		$view .= "<br>";
		$view .= "<h2>Adicionar Curso</h2>";
		$view .= "<br>";

		$view .= "<form class=\"form-inline\">";
		$view .= "<input id=\"criar-curs\" class=\"form-control\" type=\"text\" size=\"26\" maxlength=\"45\">";

		$view .= " <select id=\"criar-dura\" name=\"duracao\" class=\"form-control\">";
		$view .= "<option selected disabled style='display: none' value=''></option>";
		$view .= "<option value=\"4\">4</option>";
		$view .= "<option value=\"8\">8</option>";
		$view .= "<option value=\"10\">10</option>";
		$view .= "</select>";

		$view .= " <select id=\"criar-cred\" name=\"creditos\" class=\"form-control\">";
		$view .= "<option selected disabled style='display: none' value=''></option>";
		$view .= "<option value=\"168\">168</option>";
		$view .= "<option value=\"186\">186</option>";
		$view .= "<option value=\"200\">200</option>";
		$view .= "<option value=\"252\">252</option>";
		$view .= "</select>";

		$view .= CursoView::exibeDepartamentos($departamentos,'criar-curs-dept');
		$view .= "<div id=\"add\"><i class=\"glyphicon glyphicon-plus\"></i></div>";
		$view .= "</form>";
		$view .= "<br>";

		$view .= "<div id=\"alert\"></div>";

		$view .= "<div id=\"alt-div\" style=\"display:none\">";

		$view .= "<h2>Alterar Curso</h2>";
		$view .= "<br>";

		$view .= "<form class=\"form-inline\">";
		$view .= "<input id=\"alterar-curs\" class=\"form-control\" type=\"text\" size=\"26\" maxlength=\"45\">";

		$view .= " <select id=\"alterar-dura\" name=\"duracao\" class=\"form-control\">";
		$view .= "<option selected disabled style='display: none' value=''></option>";
		$view .= "<option value=\"4\">4</option>";
		$view .= "<option value=\"8\">8</option>";
		$view .= "<option value=\"10\">10</option>";
		$view .= "</select>";

		$view .= " <select id=\"alterar-cred\" name=\"creditos\" class=\"form-control\">";
		$view .= "<option selected disabled style='display: none' value=''></option>";
		$view .= "<option value=\"168\">168</option>";
		$view .= "<option value=\"186\">186</option>";
		$view .= "<option value=\"200\">200</option>";
		$view .= "<option value=\"252\">252</option>";
		$view .= "</select>";

		$view .= CursoView::exibeDepartamentos($departamentos,'alterar-curs-dept');
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
		$view .= "<br>";
		$view .= "</div>";

		echo $view;
	}

	public static function exibeDepartamentos($departamentos,$id){
		$view = " <select id=\"".$id."\" name=\"departamentos\" class=\"form-control\">";
		$view .= "<option selected disabled style='display: none' value=''></option>";
		if($departamentos != null){
			for($i=0;$i<sizeof($departamentos);$i++){
				$view .= "<option value=".$departamentos[$i]->getId().">";
				$view .= $departamentos[$i]->getNome();
				$view .= "</option>";
			}
		}
		$view .= "</select>";
		return $view;
	}

	public static function sucesso(){
		$view = "<div class=\"alert alert-info\">";
		$view .= "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
		$view .= "Curso adicionado com sucesso!";
		$view .= "</div>";
		echo $view;
	}

	public static function erro(){
		$view = "<div class=\"alert alert-danger\">";
		$view .= "<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>";
		$view .= "Já existe um curso com esse nome ou algum campo está vazio!";
		$view .= "</div>";
		echo $view;
	}
}

?>