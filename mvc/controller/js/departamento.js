var ler = function(){
	$.ajax({
		type: "POST",
		url: '../mvc/controller/DepartamentoController.php',
		data: {func:'ler'},
		success: function(data){
			$('#inst-view').html(data);
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

$(document).ready(ler);
//$(document).ready(criar);
//$(document).ready(deletar);
//$(document).ready(alterar);