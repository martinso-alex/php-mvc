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
	$(document).on('click','#add', function(){
		var departamento = $('#criar-dept').val();
		
		$.ajax({
			type: "POST",
			url: '../mvc/controller/DepartamentoController.php',
			data: {func:'criar',departamento:departamento},
			success: function(data){
				if(data != 'nope'){
					$('#dept-view').html(data);
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

var deletar = function(){

}

var alterar = function(){

}

$(document).ready(ler);
$(document).ready(criar);
//$(document).ready(deletar);
//$(document).ready(alterar);