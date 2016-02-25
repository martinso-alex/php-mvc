var ler = function(){
	$.ajax({
		type: "POST",
		url: '../mvc/controller/CursoController.php',
		data: {func:'ler'},
		success: function(data){
			$('#curs-view').html(data);
		},
		error: function(jqXHR,textStatus,errorThrown){
			console.log(errorThrown);
		}
	});
}

var criar = function(){

}

var deletar = function(){

}

var alterar = function(){

}

var cancela_alteracao = function(){

}

var confirma_alteracao = function(){

}

$(document).ready(ler);
//$(document).ready(criar);
//$(document).ready(deletar);
//$(document).ready(alterar);
//$(document).ready(cancela_alteracao);
//$(document).ready(confirma_alteracao);