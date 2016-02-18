var criar = function(){
	$(document).on('click','#add', function(){
		var instituto = $('#criar-inst').val();
		
		$.ajax({
			type: "POST",
			url: '../mvc/controller/InstitutoController.php',
			data: {func:'criar',instituto:instituto},
			success: function(data){
				if(data != 'nope'){
					$('#inst-view').html(data);
					var alert = '<div class=\"alert alert-info\">';
					alert += '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
					alert += 'Instituto adicionado com sucesso!';
					alert += '</div>';
					$('#alert').html(alert);
				}else{
					var alert = '<div class=\"alert alert-danger\">';
					alert += '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
					alert += 'Já existe um instituto com esse nome ou o campo está vazio!';
					alert += '</div>';
					$('#alert').html(alert);
				}
			}
		});
	});
}

var ler = function(){
	$.ajax({
		type: "POST",
		url: '../mvc/controller/InstitutoController.php',
		data: {func:'ler'},
		success: function(data){
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

$(document).ready(criar);
$(document).ready(ler);
//$(document).ready(atualizar);
//$(document).ready(deletar);