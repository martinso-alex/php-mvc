var id_alt_global;

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
	$(document).on('click','#add', function(){

		var nome = $('#criar-curs').val();
		var dura = $('#criar-dura').val();
		var cred = $('#criar-cred').val();
		var dept_id = $('#criar-curs-dept').val();
		
		$.ajax({
			type: "POST",
			url: '../mvc/controller/CursoController.php',
			data: {func:'criar',nome:nome,dura:dura,cred:cred,dept_id:dept_id},
			success: function(data){
				if(data != 'nope'){
					$('#curs-view').html(data);
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
		
		if(confirm('Tem certeza que deseja deletar esse curso?')){
			$.ajax({
				type: "POST",
				url: '../mvc/controller/CursoController.php',
				data: {func:'deletar',id:id},
				success: function(data){
					$('#curs-view').html(data);
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

		var nome = $('#alterar-curs').val();
		var dura = $('#alterar-dura').val();
		var cred = $('#alterar-cred').val();
		var dept_id = $('#alterar-curs-dept').val();

		$.ajax({
			type: "POST",
			url: '../mvc/controller/CursoController.php',
			data: {func:'alterar',id:id_alt_global,nome:nome,dura:dura,cred:cred,dept_id:dept_id},
			success: function(data){
				if(data != 'nope'){
					$('#curs-view').html(data);
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
		url: '../mvc/controller/CursoController.php',
		data: {func:'sucesso'},
		success: function(data){
			$(id).html(data);
		}
	});
}

function erro(id){
	$.ajax({
		type: "POST",
		url: '../mvc/controller/CursoController.php',
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