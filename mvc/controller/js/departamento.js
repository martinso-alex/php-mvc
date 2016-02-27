var id_alt_global;

var ler = function(){
	$.ajax({
		type: "POST",
		url: '../mvc/controller/DepartamentoController.php',
		data: {func:'ler'},
		success: function(data){
			$('#dept-view').html(data);
		},
		error: function(jqXHR,textStatus,errorThrown){
			console.log(errorThrown);
		}
	});
}

var criar = function(){
	$(document).on('click','#add', function(){
		var departamento = $('#criar-dept').val();
		var inst_id = $('#criar-dept-inst').val();
		
		$.ajax({
			type: "POST",
			url: '../mvc/controller/DepartamentoController.php',
			data: {func:'criar',departamento:departamento,inst_id:inst_id},
			success: function(data){
				if(data != 'nope'){
					$('#dept-view').html(data);
					sucesso('#alert');
				}else{
					erro('#alert');
				}
			}
		});
	});
}

var deletar = function(){
	$(document).on('click','.remove', function(){
		var id = $(this).parent().parent().attr('id');
		
		if(confirm('Tem certeza que deseja deletar esse departamento?')){
			$.ajax({
				type: "POST",
				url: '../mvc/controller/DepartamentoController.php',
				data: {func:'deletar',id:id},
				success: function(data){
					$('#dept-view').html(data);
				}
			});
		}
	});
}

var alterar = function(){
	$(document).on('click','.pencil', function(){
		id_alt_global = $(this).parent().parent().attr('id');
		$('#alt-div').show();
		$('tr').removeClass('info');
		$('#'+id_alt_global).addClass('info');
	});
}

var cancela_alteracao = function(){
	$(document).on('click','#cancela', function(){
		$('#alt-div').hide();
		$('#alert-alt').html('');
		$('#'+id_alt_global).removeClass('info');
	});
}

var confirma_alteracao = function(){
	$(document).on('click','#alt', function(){
		var nome = $('#alterar-dept').val();
		var inst_id = $('#alterar-dept-inst').val();

		$.ajax({
			type: "POST",
			url: '../mvc/controller/DepartamentoController.php',
			data: {func:'alterar',id:id_alt_global,nome:nome,inst_id:inst_id},
			success: function(data){
				if(data != 'nope'){
					$('#dept-view').html(data);
				}else{
					erro('#alert-alt');
				}
			}
		});
	});
}

function sucesso(id){
	$.ajax({
		type: "POST",
		url: '../mvc/controller/DepartamentoController.php',
		data: {func:'sucesso'},
		success: function(data){
			$(id).html(data);
		}
	});
}

function erro(id){
	$.ajax({
		type: "POST",
		url: '../mvc/controller/DepartamentoController.php',
		data: {func:'erro'},
		success: function(data){
			$(id).html(data);
		}
	});
}

$(document).ready(ler);
$(document).ready(criar);
$(document).ready(deletar);
$(document).ready(alterar);
$(document).ready(cancela_alteracao);
$(document).ready(confirma_alteracao);