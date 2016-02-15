var criar = function(){

}

var ler = function(){
	$.ajax({
		type: "POST",
		url: '../mvc/controller/InstitutoController.php',
		data: {func:'ler'},
		success: function(data){
			console.log(data);
			$('#inst-view').html(data);
		},
		error: function(jqXHR,textStatus,errorThrown){
			console.log(errorThrown);
		}
	});
}

var atualizar = function(){ 

}

var deletar = function(){

}

//$(document).ready(criar);
$(document).ready(ler);
//$(document).ready(atualizar);
//$(document).ready(deletar);